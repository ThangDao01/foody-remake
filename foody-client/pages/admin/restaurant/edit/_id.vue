<template>

</template>

<script>
export default {
  name: 'edit',
  layout: 'admin-layout',
  data() {
    return {
      restaurant: {
        restaurant_name :'',
        restaurant_title :'',
        restaurant_thumbnail :'',
        restaurant_phone :'',
        restaurant_discount :'',
        restaurant_coordinate :'',
        location_province :'',
        location_district :'',
        location_address :'',
        open_time :'',
        price_min :'',
        price_max :'',
        is_branch :'',
        main_branch_id :'',
        total_gallery :'',
        total_reviews :'',
        total_save :'',
        created_at :'',
        updated_at :'',
      },
    }
  },
  mounted() {
    this.getData()
  },
  methods: {
    async getData() {
      var uri = 'restaurant/id=' + this.$route.params.id
      this.restaurant =  await this.$axios.$get(uri);
    }
  },

}
</script>

<style scoped>

</style>
