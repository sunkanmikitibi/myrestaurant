<template>
<div class="wrapper menu_container">
<div class="row">
  <div class="col-8">
    <card-component>
      <template slot="title"> Menu Items </template>
<template slot="body">  Main Content Here </template>
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
export default {
  props: ['items']
}
</script>
