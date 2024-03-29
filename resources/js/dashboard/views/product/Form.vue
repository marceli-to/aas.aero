<template>
<div>
  <loading-indicator v-if="isLoading"></loading-indicator>
  <form @submit.prevent="submit" class="half-width" v-if="isFetched">
    <header class="content-header">
      <h1>{{title}}</h1>
    </header>
    <tabs :tabs="tabs" :errors="errors"></tabs>
    <div v-show="tabs.data.active">
      <div>
        <div :class="[this.errors.title ? 'has-error' : '', 'form-row']">
          <label>Titel*</label>
          <input type="text" v-model="product.title.de">
          <label-required />
        </div>
        <div class="form-row">
          <label>Subtitel</label>
          <input type="text" v-model="product.subtitle.de">
        </div>
        <div class="form-row">
          <label>Beschreibung</label>
          <tinymce-editor
            :api-key="tinyApiKey"
            :init="tinyConfig"
            v-model="product.description.de"
          ></tinymce-editor>
        </div>
        <div :class="[this.errors.price ? 'has-error' : '', 'form-row is-small']">
          <label>Preis*</label>
          <input type="text" v-model="product.price" placeholder="z.B. 29.00">
          <label-required />
        </div>
        <div :class="[this.errors.stock ? 'has-error' : '', 'form-row is-small']">
          <label>Anzahl Verfügbar*</label>
          <input type="text" v-model="product.stock">
          <label-required />
        </div>
        <div class="form-row is-last">
          <radio-button 
            :label="'Publizieren?'"
            v-bind:publish.sync="product.publish"
            :model="product.publish"
            :name="'publish'">
          </radio-button>
        </div>
      </div>
    </div>
    <div v-show="tabs.translation.active">
      <div>
        <div class="form-row">
          <label>Titel</label>
          <input type="text" v-model="product.title.en">
        </div>
        <div class="form-row">
          <label>Subtitel</label>
          <input type="text" v-model="product.subtitle.en">
        </div>
        <div class="form-row">
          <label>Beschreibung</label>
          <tinymce-editor
            :api-key="tinyApiKey"
            :init="tinyConfig"
            v-model="product.description.en"
          ></tinymce-editor>
        </div>
      </div>
    </div>
    <div v-show="tabs.image.active">
      <div>
        <div class="form-row">
          <image-upload
            :restrictions="'jpg, png | max. 8 MB'"
            :maxFiles="99"
            :maxFilesize="8"
            :acceptedFiles="'.png,.jpg'"
          ></image-upload>
        </div>
        <div class="form-row">
          <image-edit 
            :images="product.images"
            :imagePreviewRoute="'cache'"
            :aspectRatioW="4"
            :aspectRatioH="3"
          ></image-edit>
        </div>
      </div>
    </div>
    <footer class="module-footer">
      <div>
        <button type="submit" class="btn-primary">Speichern</button>
        <router-link :to="{ name: 'products' }" class="btn-secondary">
          <span>Zurück</span>
        </router-link>
      </div>
    </footer>
  </form>
</div>
</template>
<script>

// Icons
import { ArrowLeftIcon } from 'vue-feather-icons';

// Mixins
import ErrorHandling from "@/mixins/ErrorHandling";

// TinyMCE
import tinyConfig from "@/config/tiny.js";
import TinymceEditor from "@tinymce/tinymce-vue";

// Components
import RadioButton from "@/components/ui/RadioButton.vue";
import LabelRequired from "@/components/ui/LabelRequired.vue";
import Tabs from "@/components/ui/Tabs.vue";
import ImageUpload from "@/components/images/Upload.vue";
import ImageEdit from "@/views/product/images/Edit.vue";

// Tabs config
import tabsConfig from "@/views/product/config/tabs.js";

export default {
  components: {
    ArrowLeftIcon,
    TinymceEditor,
    RadioButton,
    LabelRequired,
    ImageUpload,
    ImageEdit,
    Tabs
  },

  mixins: [ErrorHandling],

  props: {
    type: String
  },

  data() {
    return {
      
      // Model
      product: {
        title: {
          de: null,
          en: null,
        },
        subtitle: {
          de: null,
          en: null,
        },
        description: {
          de: null,
          en: null,
        },
        price: null,
        images: [],
        publish: 1,
      },

      // Validation
      errors: {
        title: false,
        description: false,
        price: false,
      },

      // Loading states
      isFetched: true,
      isLoading: false,

      // Tabs config
      tabs: tabsConfig,

      // TinyMCE
      tinyConfig: tinyConfig,
      tinyApiKey: 'vuaywur9klvlt3excnrd9xki1a5lj25v18b2j0d0nu5tbwro',
    };
  },

  created() {
    if (this.$props.type == "edit") {
      this.isFetched = false;
      let uri = `/api/product/${this.$route.params.id}`;
      this.axios.get(uri).then(response => {
        this.product = response.data;
        this.isFetched = true;
      });
    }
  },

  methods: {

    // Submit form
    submit() {
      if (this.$props.type == "edit") {
        this.update();
      }

      if (this.$props.type == "create") {
        this.store();
      }
    },

    store() {
      this.isLoading = true;
      this.axios.post('/api/product', this.product).then(response => {
        this.$router.push({ name: "products" });
        this.$notify({ type: "success", text: "Illustration erfasst!" });
        this.isLoading = false;
      });
    },

    update() {
      let uri = `/api/product/${this.$route.params.id}`;
      this.isLoading = true;
      this.axios.put(uri, this.product).then(response => {
        this.$router.push({ name: "products" });
        this.$notify({ type: "success", text: "Änderungen gespeichert!" });
        this.isLoading = false;
      });
    },

    // Store uploaded image
    storeImage(upload) {
      let image = {
        id: null,
        name: upload.name,
        caption: { de: null, en: null },
        coords_w: 0,
        coords_h: 0,
        coords_x: 0,
        coords_y: 0,
        orientation: upload.orientation,
        preview: 0,
        order: 0,
        publish: 1,
      }

      if (this.$props.type == "edit") {
        image.product_id = this.$route.params.id;
        this.axios.post('/api/product/image', image).then(response => {
          this.$notify({ type: "success", text: "Bild gespeichert!" });
          image.id = response.data.productImageId;
          this.product.images.push(image);
        });
      }
      else {
        this.product.images.push(image);
      }
    },

    // Delete by name
    destroyImage(image, event) {
      if (confirm("Bitte löschen bestätigen!")) {
        let uri = `/api/product/image/${image}`;
        this.isLoading = true;
        this.axios.delete(uri).then(response => {
          const index = this.product.images.findIndex(x => x.name === image);
          this.product.images.splice(index, 1);
          this.isLoading = false;
        });
      }
    },

    // Toggle image status
    toggleImage(image, event) {
      if (image.id === null) {
        const index = this.product.images.findIndex(x => x.name === image.name);
        this.product.images[index].publish = image.publish == 1 ? 0 : 1;
      } else {
        let uri = `/api/product/image/state/${image.id}`;
        this.isLoading = true;
        this.axios.get(uri).then(response => {
          const index = this.product.images.findIndex(x => x.id === image.id);
          this.product.images[index].publish = response.data;
          this.isLoading = false;
        });
      }
    },

    // Save coords
    saveImageCoords(image) {
      if (image.id === null) {
        const index = this.product.images.findIndex(x => x.name === image.name);
        this.product.images[index].coords = image.coords;
      } 
      else {
        let uri = `/api/product/image/${image.id}`;
        this.isLoading = true;
        this.axios.put(uri, image).then(response => {
          this.$notify({ type: "success", text: "Änderungen gespeichert!" });
          this.isLoading = false;
        });
      }
    },
  },

  computed: {
    title: function() {
      return this.$props.type == "edit" 
        ? "Produkt bearbeiten" 
        : "Produkt hinzufügen";
    }
  }
};
</script>
