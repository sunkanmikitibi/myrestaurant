<template>
<div class="wrapper menu_container">
<div class="row">
  <div class="col-8">
    <card-component>
      <template slot="title"> Menu Items </template>
<template slot="body">
  <div class="section">
    <multiselect
    v-model="menu"
    :options="categories"
   ></multiselect>
    </div>

<hr>

<h2 class="text-danger">Items</h2>
    <menu-group :items="currentMenuItems"></menu-group>

    </template>
    </card-component>
  </div>
  <div class="col-4">
    <card-component>
      <template slot="title">
        Add Menu Item
      </template>
<template slot="body">
  Form will Come Here
</template>
    </card-component>

  </div>
</div>

</div>
</template>

<script>
import _ from 'lodash';
 import Multiselect from 'vue-multiselect';
 import MenuGroup from './MenuGroups.vue';

export default {
  props: ['items'],
  components: { Multiselect, MenuGroup },
  created(){
    _.forEach(this.items, (item, key)=>{
      this.categories.push(key)
    });
    this.menu = this.categories[0];
  },
  data() {
    return {
      menu: '',
      categories: []
    }
  },
  computed: {
    currentMenuItems() {
      return this.items[this.menu];
    }
  }
}
</script>
