<template>
<div>
  <loading-indicator v-if="isLoading"></loading-indicator>
  <div :class="isFetched ? 'is-loaded' : 'is-loading'">
    <header class="content-header">
      <h1>Illustrationen</h1>
      <router-link :to="{ name: 'illustration-create' }" class="feather-icon feather-icon--prepend">
        <plus-icon size="16"></plus-icon>
        <span>Hinzufügen</span>
      </router-link>
    </header>
    <div class="listing" v-if="illustrations.length">
      <div
        :class="[i.publish == 0 ? 'is-disabled' : '', 'listing__item']"
        v-for="i in illustrations"
        :key="i.id"
      >
        <div class="listing__item-body">
          {{i.title.de }} <separator v-if="i.subtitle.de" />{{ i.subtitle.de }}
          <span v-if="!i.preview_image">
            <span class="bubble-warning">Vorschau fehlt</span>
          </span>
        </div>
        <list-actions 
          :id="i.id" 
          :record="i"
          :routes="{edit: 'illustration-edit'}">
        </list-actions>
      </div>
    </div>
    <div v-else>
      <p class="no-records">Es sind noch keine Illustrationen vorhanden...</p>
    </div>
  </div>
</div>
</template>
<script>

// Icons
import { PlusIcon } from 'vue-feather-icons';

// Components
import ListActions from "@/components/ui/ListActions.vue";

// Mixins
import ErrorHandling from "@/mixins/ErrorHandling";
import Helpers from "@/mixins/Helpers";

export default {

  components: {
    ListActions,
    PlusIcon,
  },

  mixins: [ErrorHandling, Helpers],

  data() {
    return {
      isLoading: false,
      isFetched: false,
      illustrations: []
    };
  },

  created() {
    this.fetch();
  },

  methods: {

    fetch() {
      this.axios.get(`/api/illustrations`).then(response => {
        this.illustrations = response.data.data;
        this.isFetched = true;
        console.log(this.illustrations);
      });
    },

    toggle(id,event) {
      let uri = `/api/illustration/state/${id}`;
      this.isLoading = true;
      this.axios.get(uri).then(response => {
        const index = this.illustrations.findIndex(x => x.id === id);
        this.illustrations[index].publish = response.data;
        this.$notify({ type: "success", text: "Status geändert" });
        this.isLoading = false;
      });
    },

    destroy(id, event) {
      if (confirm("Bitte löschen bestätigen!")) {
        let uri = `/api/illustration/${id}`;
        this.isLoading = true;
        this.axios.delete(uri).then(response => {
          this.fetch();
          this.isLoading = false;
        });
      }
    },
  }
}
</script>