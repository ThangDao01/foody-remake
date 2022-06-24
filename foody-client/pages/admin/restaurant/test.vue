<template>
  <div>
      <div style="
      width: 100px;
      font-size: 20px;
    background: -webkit-linear-gradient(150deg, #09009E,#1ec5a9,#3e51bd,#e7660b,#9f0f0d 80%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
">
        say hello
      </div>
  </div>
</template>


<script>
export default {
  layout: 'admin-layout',
  data() {
    return {
      optionCate:'',
      cate_result:''
    }
  },
  head() {
    return {
      link: [
        {
          rel: 'stylesheet',
          href: '/css/bootstrap-tagsinput.css'
        },
        {
          rel: 'stylesheet',
          href: '/css/main-admin.css'
        },
        {
          rel: 'stylesheet',
          href: '/assets/app.css'
        },
      ],
      script: [
        {
          hid: 'stripe',
          src: 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js',
          defer: true
        },
        {
          hid: 'stripe',
          src: 'https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js',
          defer: true
        },
        {
          hid: 'stripe',
          src: '/js/bootstrap-tagsinput.min.js',
          defer: true
        },
        {
          hid: 'stripe',
          src: '/js/app.js',
          defer: true
        },
      ]
    }
  },
  mounted() {
    this.categoryOption();
  },
  methods: {
    async categoryOption() {
      var category = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.obj.whitespace('category_name'),
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        local: await this.$axios.$get('category-all')
      })
      category.initialize();

      $('input[name="category"]').tagsinput({
        typeaheadjs: {
          name: 'category',
          displayKey: 'category_name',
          valueKey: 'category_name',
          source: category.ttAdapter()
        }
      });
    },
    getCate(){
      this.cate_result = $('input[name="category"]').val();
      console.log($('input[name="category"]').val())
      console.log(this.cate_result)
    }
  }
}
</script>
