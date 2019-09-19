<template>
<div class="add_form__wrapper">
  <form v-on:submit.prevent="handleSubmit">
    <div class="form-group">
<label for="name">Food Item</label>
<input type="text" class="form-control" v-model="food.item" placeholder="Enter Food Item Here" id="">
    </div>
    <div class="form-group">
      <label for="">Select Category</label>
      <multiselect
      v-model="food.category" :options="categories"></multiselect>
    </div>
    <div class="form-group">
      <label for="price">Price:</label>
      <input type="number" v-model="food.price" class="form-control" placeholder="Enter food item price">
    </div>
    <div class="form-group">
      <input type="submit" class="btn btn-block btn-flat btn-danger" value="Save">
    </div>
  </form>
</div>
</template>

<script>
 import Multiselect from 'vue-multiselect';


export default {
  props: ['categories'],
  components: {
Multiselect
  },
  data() {
    return {
      food: {
        item: '',
        category: '',
        price: 100,
      }
    }
  },
methods:
{
  handleSubmit() {
    console.log('form data', this.food);
    let postData = this.food;
    postData.restoId = this.restoId;
    window.axios.post('api/item/save', postData).then(response => {
      console.log('response', response.data);
    }).catch(error => console.log('error', error.response));
  }
}
}
</script>
