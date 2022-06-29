<template>
  <div>

  </div>
</template>

<script>
export default {
  name: 'detail',
  layout: 'admin-layout',
  mounted() {
    this.initDataForm();
  },
  methods: {
    async initDataForm() {
      var uri = '/restaurant/id=' + this.$route.params.id
      this.this.createResult = await this.$axios.$get(uri);
    },
  }
}
</script>

<style scoped>

</style>
