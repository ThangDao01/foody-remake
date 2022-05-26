<template>
  <div>
    <Nuxt/>
  </div>
</template>
<script>
export default {
  name: "default_layout",
  head() {
    return {
      title: 'foody',
      link: [
        {rel: 'stylesheet', href: '/css/bootstrap.min.css'},
        {rel: 'stylesheet', href: '/css/bootstrap.css'},
        {rel: 'stylesheet', href: '/css/font-awesome.css'},
        {rel: 'stylesheet', href: '/css/style.css'},
        {rel: 'stylesheet', href: '/js/slick/slick.css'},
        {rel: 'stylesheet', href: '/js/slick/slick-theme.css'},
      ],
      script: [
        {hid: 'stripe', src: '/js/slick/slick.min.js', defer: true},
        {hid: 'stripe', src: 'https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js', defer: true},
        {hid: 'stripe', src: 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', defer: true},
        {hid: 'stripe', src: 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js', defer: true},
      ]
    }
  },
}
</script>

