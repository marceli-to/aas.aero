<template>
  <div class="post__item-action">
    <div class="icons">
      <div v-if="hasToggle">
        <a
          href="javascript:;"
          @click.prevent="toggle(id,$event)"
        >
          <span v-if="record.publish" class="feather-icon">
            <eye-icon size="18"></eye-icon>
          </span>
          <span v-else>
            <eye-off-icon size="18" class="feather-icon"></eye-off-icon>
          </span>
        </a>
      </div>
      <div v-if="hasDestroy">
        <a
          href="javascript:;"
          class="feather-icon"
          @click.prevent="destroy(id,$event)"
        >
          <trash2-icon size="18"></trash2-icon>
        </a>
      </div>
    </div>
    <div v-if="hasSize" class="select-wrapper is-tiny">
      <select @change="update(id,$event)" v-model="record.size">
        <option value="sm">sm</option>
        <option value="md">md</option>
        <option value="lg">lg</option>
        <option value="xl">xl</option>
      </select>
    </div>
  </div>
</template>
<script>

// Icons
import { 
  EyeIcon,
  EyeOffIcon,
  EditIcon,
  Trash2Icon,
} from 'vue-feather-icons';

export default {

  components: {
    EyeIcon,
    EyeOffIcon,
    EditIcon,
    Trash2Icon,
  },

  props: {

    id: {
      type: Number,
      default: null
    },

    hasEdit: {
      type: Boolean,
      default: true
    },
    
    hasDestroy: {
      type: Boolean,
      default: true
    },
    
    hasToggle: {
      type: Boolean,
      default: true
    },

    hasSize: {
      type: Boolean,
      default: true
    },

    routes: Object,
    record: Object,
  },

  methods: {

    update(id,$event) {
      this.$parent.$parent.update(id,$event);
    },

    toggle(id,$event) {
      this.$parent.$parent.toggle(id,$event);
    },

    destroy(id,$event) {
      this.$parent.$parent.destroy(id,$event);
    },

  },
}
</script>

