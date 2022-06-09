<template>
  <div class="body">
    <header class="header">
      <div class="align-content-center">
        <nav class="navbar-dark bg-black navbar-expand justify-content-sm-start">
          <div class="container">
            <ul class="navbar-nav" style="height: 32px;align-items: center;">
              <li class="">
                <nuxt-link to=""><a class="nav-link p-3 active">Khám phá</a></nuxt-link>
              </li>
              <li class="">
                <nuxt-link to=""><a class="nav-link p-3">Đặt Giao Hàng</a></nuxt-link>
              </li>
              <li class="">
                <nuxt-link to=""><a class="nav-link p-3">Đi Chợ</a></nuxt-link>
              </li>
              <li class="">
                <nuxt-link to=""><a class="nav-link p-3">NowPOS</a></nuxt-link>
              </li>
              <li class="">
                <nuxt-link to=""><a class="nav-link p-3">Giảm Giá</a></nuxt-link>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <div id="toolbarFixed" class="header-toolbar" style="padding: 10px">
        <div class="container d-flex justify-content-start p-0" style="align-items: center;height: 32px;">
          <div style="display: inline-block;overflow: hidden;min-width:85px;margin-right: 14px">
            <img src="https://www.foody.vn/style/images/logo/foody-vn.png" alt="" width="85px">
          </div>
          <div class="dropdown border d-none d-md-block" style="color: #777">
            <button
              type="button"
              class="btn dropdown-toggle text-placeholder"
              data-toggle="dropdown"
              style="color: #999;">
              {{provinces.name}}
            </button>
            <div class="dropdown-menu">
              <h1 class="dropdown-header"><i class="fa fa-globe" aria-hidden="true"></i>Tỉnh Thành</h1>
<!--              <select v-on:change="setProvinces()"></select>-->
              <a class="dropdown-item" v-on:click="setProvinces('01','Hà Nội')">Hà Nội</a>
              <a class="dropdown-item" v-on:click="setProvinces('79','TP HCM')">TP HCM</a>
            </div>
          </div>
          <div class="dropdown border d-none d-md-block" style="color: #777">
            <button type="button"
                    class="btn dropdown-toggle text-placeholder"
                    data-toggle="dropdown"
                    style="color: #999;">
              Ăn uống
            </button>
            <div class="dropdown-menu">
              <h1 class="dropdown-header"><i class="fa fa-bars" aria-hidden="true"></i>Select Category</h1>
              <nuxt-link to=""><a class="dropdown-item">Ăn uống</a></nuxt-link>
            </div>
          </div>
          <div class="input-group col-md-4 col-sm-12 m-0 p-0">
            <div class="input-search form-inline col-12 p-0  flex-nowrap">
              <input id="form1"
                     type="text"
                     class="form-control rounded-0 col-9 col-sm-9 col-lg-11"
                     placeholder="Địa điểm, món ăn, loại hình ..."/>
              <nuxt-link to=""><a type="button"
                                  class="btn rounded-0 col-1"
                                  style="background-color: #ddd;padding: 6px 0;min-width: 25px;">
                <i class="fa fa-search"></i>
              </a></nuxt-link>
            </div>
          </div>
          <nuxt-link to=""><a type="button" class="btn rounded-0 border d-none d-md-block" style="margin-left: 12px">
            <i class="fa fa-bars"></i>
          </a></nuxt-link>
          <nuxt-link to=""><a type="button" class="btn rounded-0 border d-none d-md-block m-1">
            <i class="fa fa-mobile"></i>
            App
          </a></nuxt-link>
          <div class="col-2 d-none d-xl-block  ml-auto p-0">
            <div class="d-flex ml-auto flex-nowrap align-items-center">
              <div class="col-5 p-0">Đăng nhập</div>
              <div class="col-7 p-0">
                <nuxt-link to=""><a type="button" class="btn bg-df rounded-circle"
                                    style="width: 30px;height: 30px;padding: 4px">
                  <i class="fa fa-bell color-df"></i></a></nuxt-link>
                <nuxt-link to=""><a type="button" class="btn bg-df rounded-circle"
                                    style="width: 30px;height: 30px;padding: 4px">
                  <i class="fa fa-plus color-df"></i></a></nuxt-link>
                <nuxt-link to=""><a type="button"
                                    class="btn bg-df rounded-0 p-0"
                                    style="width: 30px;height: 30px;"
                                    onclick="onHoverShow('fa-plus')">
                  <img src="https://www.foody.vn/style/images/icons/lang/vn.png" width="20px" alt=""></a></nuxt-link>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="tool p-0" id="tool" style="display: none">
      <ul class="p-0 m-0">
        <li id="btn-back-to-top" v-on:click="btnToTop()" class="tool-item"
            data-toggle="tooltip" data-placement="left" title="Về đầutrang">
          <nuxt-link to=""><a><i class="fa fa-angle-up"></i></a></nuxt-link>
        </li>
        <li class="tool-item" data-toggle="tooltip" data-placement="left" title="Tải ứng dụng">
          <nuxt-link to=""><a><i class="fa fa-apple"></i></a></nuxt-link>
        </li>
        <li class="tool-item" data-toggle="tooltip" data-placement="left" title="Tải ứng dụng">
          <nuxt-link to=""><a><i class="fa fa-android"></i></a></nuxt-link>
        </li>
      </ul>
    </div>
    <div class="slide">
      <!--    <div class="slick-auto-1">-->
      <!--      <div><img src="https://images.foody.vn/biz_banner/foody-675x355_foodyappbanner-636530746968443602.jpg" alt=""></div>-->
      <!--      <div><img src="https://media.foody.vn/images/beauty-upload-api-che-co-linh-675-x-355-220425115812.jpg" alt=""></div>-->
      <!--      <div><img src="https://images.foody.vn/biz_banner/foody-675x355_foodyappbanner-636530746968443602.jpg" alt=""></div>-->
      <!--      <div><img src="https://media.foody.vn/images/beauty-upload-api-che-co-linh-675-x-355-220425115812.jpg" alt=""></div>-->
      <!--      <div><img src="https://images.foody.vn/biz_banner/foody-675x355_foodyappbanner-636530746968443602.jpg" alt=""></div>-->
      <!--      <div><img src="https://media.foody.vn/images/beauty-upload-api-che-co-linh-675-x-355-220425115812.jpg" alt=""></div>-->
      <!--    </div>-->
      <!--      <div class="slick-auto-3">-->
      <!--        <div><img src="https://images.foody.vn/biz_banner/foody-675x355_foodyappbanner-636530746968443602.jpg" alt="">-->
      <!--          <div class="slick-slider"></div>-->
      <!--        </div>-->
      <!--        <div><img src="https://media.foody.vn/images/beauty-upload-api-che-co-linh-675-x-355-220425115812.jpg" alt="">-->
      <!--        </div>-->
      <!--        <div><img src="https://images.foody.vn/biz_banner/foody-675x355_foodyappbanner-636530746968443602.jpg" alt="">-->
      <!--        </div>-->
      <!--        <div><img src="https://media.foody.vn/images/beauty-upload-api-che-co-linh-675-x-355-220425115812.jpg" alt="">-->
      <!--        </div>-->
      <!--        <div><img src="https://images.foody.vn/biz_banner/foody-675x355_foodyappbanner-636530746968443602.jpg" alt="">-->
      <!--        </div>-->
      <!--        <div><img src="https://media.foody.vn/images/beauty-upload-api-che-co-linh-675-x-355-220425115812.jpg" alt="">-->
      <!--        </div>-->
      <!--      </div>-->
      <div  class="slick-auto-3" >
        <div v-for="caption in captionBanner" >
          <img :src="caption.caption_image" alt="">
        </div>
        <div v-for="caption in captionBanner" >
          <img :src="caption.caption_image" alt="">
        </div>
        <div v-for="caption in captionBanner" >
          <img :src="caption.caption_image" alt="">
        </div>
      </div>
      <div class="col-5 m-auto" style="height: 75px;justify-items: center">
        <img class="slick-prev btn-slide1 float-left "
             src="https://www.foody.vn/asset/styles/images/icons/left.png"
             width="40px"
             alt="">
        <div class="slick-auto-detail" style="padding-top: 20px">
          <div class="col-12 text-white text-center" v-for="caption in captionBanner" >
            <div class="slick-title">{{ caption.caption_title }}</div>
            <p class="slick-desc">{{ caption.caption_desc }}</p>
          </div>
          <div class="col-12 text-white text-center" v-for="caption in captionBanner">
            <div class="slick-title">{{ caption.caption_title }}</div>
            <p class="slick-desc">{{ caption.caption_desc }}</p>
          </div>
          <div class="col-12 text-white text-center" v-for="caption in captionBanner" >
            <div class="slick-title">{{ caption.caption_title }}</div>
            <p class="slick-desc">{{ caption.caption_desc }}</p>
          </div>
        </div>
        <img class="slick-next btn-slide1 float-right "
             src="https://www.foody.vn/asset/styles/images/icons/right.png"
             width="40px"
             alt="">
      </div>
    </div>
    <Nuxt/>
    <div class="footer" style="padding-top: 30px">
      <div class="topM bg-white d-flex align-items-center" style="padding:0 10px;">
        <div class="container p-0">
          <div class="title text-left" style="color: #c00;font-size: 16px">Top Thành viên</div>
        </div>
      </div>
      <div class="statistic">
        <div class="container p-0">
          <div class="title text-center p-4">Tìm địa điểm trên đường đi? Tải app Foody!</div>
          <div class="d-flex col-12 align-content-start p-0" style="padding-top: 30px !important;">
            <div class="col-md-4 col-sm-5 p-0">
              <div class="btn bg-white w-50 text-center rounded-0"
                   style="height: 40px;border:#ddd 1px solid;margin-bottom: 55px">
                Thống kê
              </div>
              <ul class="p-0">
                <li class="border-bottom">
                  <span class="footer-title">334,384 địa điểm</span>
                  <p class="" style="color: #aaa">toàn quốc</p>
                </li>
                <li class="border-bottom">
              <span class="footer-title">38,630,265 người sử dụng
              </span>
                  <p class="" style="color: #aaa">trong & ngoài nước
                  </p>
                </li>
                <li class="border-bottom">
              <span class="footer-title">1,481,841 bình luận
              </span>
                  <p class="" style="color: #aaa">đã chia sẻ
                  </p>
                </li>
                <li class="border-bottom">
              <span class="footer-title">608,066 check-in
              </span>
                  <p class="" style="color: #aaa">đã thực hiện
                  </p>
                </li>
                <li class="border-bottom">
              <span class="footer-title">10,232,333 hình ảnh
              </span>
                  <p class="" style="color: #aaa">được tải lên
                  </p>
                </li>
                <li class="border-bottom">
              <span class="footer-title">24,623,376 bộ sưu tập
              </span>
                  <div class="" style="color: #aaa">bộ sưu tập được tạo
                  </div>
                </li>
              </ul>
            </div>
            <div class="col-md-8 d-none d-lg-block">
              <div class="d-flex col-12 align-content-start p-0">
                <div class="col-md-4 d-flex flex-wrap justify-content-center">
                  <div
                    class="btn bg-white w-75 text-center rounded-0"
                    style="height: 40px;border:#ddd 1px solid;margin-bottom: 55px">
                    iOS App
                  </div>
                  <img src="https://www.foody.vn/style/images/icons/ios-footer.png" width="350px" alt="">
                </div>
                <div class="col-md-4 d-flex flex-wrap justify-content-center">
                  <div
                    class="btn bg-white w-75 text-center rounded-0"
                    style="height: 40px;border:#ddd 1px solid; margin-bottom: 55px"
                  >
                    AndroidApp
                  </div>
                  <img src="https://www.foody.vn/style/images/icons/android-footer.png" width="350px" alt="">
                </div>
                <div class="col-md-4 d-flex flex-wrap justify-content-center">
                  <div class="btn bg-white w-75 text-center rounded-0" style="height: 40px;border:#ddd 1px solid; ">
                    Windows App
                  </div>
                  <img src="https://www.foody.vn/style/images/icons/windows-footer.png" width="350px" alt="">
                </div>
              </div>
            </div>
            <div class="col-sm-7 d-block d-lg-none">
              <div class="col-12">
                <div class="justify-content-center">
                  <div id="accordion">
                    <div class="card">
                      <div class="card-header"
                           id="iosBtn">
                        <h5 class="mb-0">
                          <button
                            class="btn btn-link"
                            data-toggle="collapse"
                            data-target="#iosApp"
                            aria-expanded="true"
                            aria-controls="iosApp"
                          >
                            iOS App
                          </button>
                        </h5>
                      </div>
                      <div id="iosApp" class="collapse show" aria-labelledby="iosBtn" data-parent="#accordion">
                        <div class="card-body">
                          <img src="https://www.foody.vn/style/images/icons/ios-footer.png" width="100%" alt="">
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div id="adrBtn" class="card-header">
                        <h5 class="mb-0">
                          <button class="btn btn-link"
                                  data-toggle="collapse"
                                  data-target="#adrApp"
                                  aria-expanded="true"
                                  aria-controls="adrApp">
                            Android App
                          </button>
                        </h5>
                      </div>
                      <div id="adrApp" class="collapse" aria-labelledby="adrBtn" data-parent="#accordion">
                        <div class="card-body">
                          <img src="https://www.foody.vn/style/images/icons/android-footer.png" width="100%" alt="">
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div id="winBtn" class="card-header">
                        <h5 class="mb-0">
                          <button
                            class="btn btn-link"
                            data-toggle="collapse"
                            data-target="#winApp"
                            aria-expanded="true"
                            aria-controls="winApp"
                          >
                            Window App
                          </button>
                        </h5>
                      </div>
                      <div id="winApp" class="collapse" aria-labelledby="winBtn" data-parent="#accordion">
                        <div class="card-body">
                          <img src="https://www.foody.vn/style/images/icons/windows-footer.png" width="100%" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="config bg-white d-flex align-items-center">
        <div class="container" style="padding-top: 30px">
          <div class="row">
            <div class="col-12 col-ssm-6 col-lg-3 ">
              <p class="border-bottom" style="color: #aaa">Khám phá</p>
              <ul class="p-0">
                <li>
                  <nuxt-link to=""><a>Ứng dụng Mobile</a></nuxt-link>
                </li>
                <li>
                  <nuxt-link to=""><a>Viết bình luận
                  </a></nuxt-link>
                </li>
                <li>
                  <nuxt-link to=""><a>Tạo bộ sưu tập
                  </a></nuxt-link>
                </li>
                <li>
                  <nuxt-link to=""><a>Phần thưởng
                  </a></nuxt-link>
                </li>
                <li>
                  <nuxt-link to=""><a>Bảo mật thông tin
                  </a></nuxt-link>
                </li>
                <li>
                  <nuxt-link to=""><a>Quy định
                  </a></nuxt-link>
                </li>
              </ul>
            </div>
            <div class="col-12 col-ssm-6 col-lg-3 ">
              <p class="border-bottom" style="color: #aaa">Công ty
              </p>
              <ul class="p-0">
                <li>
                  <nuxt-link to=""><a>Giới thiệu
                  </a></nuxt-link>
                </li>
                <li>
                  <nuxt-link to=""><a>Trợ giúp
                  </a></nuxt-link>
                </li>
                <li>
                  <nuxt-link to=""><a>Việc làm
                  </a></nuxt-link>
                </li>
                <li>
                  <nuxt-link to=""><a>Nhà đầu tư
                  </a></nuxt-link>
                </li>
                <li>
                  <nuxt-link to=""><a>Góp ý
                  </a></nuxt-link>
                </li>
                <li>
                  <nuxt-link to=""><a>Quy chế
                  </a></nuxt-link>
                </li>
                <li>
                  <nuxt-link to=""><a>Thỏa thuận sử dụng dịch vụ
                  </a></nuxt-link>
                </li>
                <li>
                  <nuxt-link to=""><a>Liên hệ
                  </a></nuxt-link>
                </li>
              </ul>
            </div>
            <div class="col-12 col-ssm-6 col-lg-3 ">
              <p class="border-bottom" style="color: #aaa">Tham gia trên
              </p>
              <ul class="p-0">
                <li>
                  <nuxt-link to=""><a>Facebook</a></nuxt-link>
                </li>
                <li>
                  <nuxt-link to=""><a>Instagram</a></nuxt-link>
                </li>
                <li>
                  <nuxt-link to=""><a>Youtube
                  </a></nuxt-link>
                </li>
                <li>
                  <nuxt-link to=""><a>Google
                  </a></nuxt-link>
                </li>
                <li>
                  <nuxt-link to=""><a>ShopeeFood.vn </a></nuxt-link>
                </li>
                <li>
                  <nuxt-link to=""><a>NowPOS </a></nuxt-link>
                </li>
              </ul>
            </div>
            <div class="col-12 col-ssm-6 col-lg-3 ">
              <p class="border-bottom" style="color: #aaa">Giấy phép
              </p>
              <ul class="p-0">
                <li>
                  <nuxt-link to=""><a>MXH 363/GP-BTTTT
                  </a></nuxt-link>
                </li>
                <li>
                  <img
                    src="https://www.foody.vn/style/images/gov_seals.jpg"
                    style="min-width: 75px;max-width: 160px"
                    width="100%"
                    alt=""
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="container text-center" style="padding-top: 50px;color: #999">
        <div>
          {{ config.company_location }}
        </div>
        <div>
          Điện thoại: {{ config.company_phone }} Email: {{ config.company_email }}
        </div>
        <div v-for="(policy,index) in config.company_policy" :key="index">
          {{ policy }}
        </div>
        <div v-if="config.more_information!= null" v-for="(information,index) in config.more_information" :key="index">
          {{ information.name }} : {{ information.data }}
        </div>
        <br>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: 'default_layout',
  data() {
    return {
      provinces:{
        name:'',
        id:'',
      },
      captionBanner: [
        {
          caption_image: 'https://images.foody.vn/biz_banner/foody-675x355_foodyappbanner-636530746968443602.jpg',
          caption_title: 'Foody App trên Mobile',
          caption_desc: 'Khám phá, đặt bàn, giao tận nơi',
          status: '1',
          link_action: 'https://www.foody.vn/ung-dung-mobile',
        },
        {
          caption_image: 'https://media.foody.vn/images/beauty-upload-api-che-co-linh-675-x-355-220425115812.jpg',
          caption_title: 'Chè Thái Cô linh',
          caption_desc: 'Giảm 70k cho đơn tối thiểu 200k',
          status: '1',
          link_action: 'https://www.foody.vn',
        },
       ],
      config: {
        company_phone: '',
        company_policy: '',
        company_location: '',
        company_email: '',
        more_information: '',
        link_page: '',
        link_download: '',
      },
    }
  },
  head() {
    return {
      title: 'foody',
      link: [
        {
          rel: 'stylesheet',
          href: '/css/style.css'
        },
        {
          rel: 'stylesheet',
          href: '/js/slick/slick.css'
        },
        {
          rel: 'stylesheet',
          href: '/js/slick/slick-theme.css'
        },
        {
          rel: 'stylesheet',
          href: '/css/bootstrap.min.css'
        },
        {
          rel: 'stylesheet',
          href: 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'
        },
      ],
      script: [
        {
          hid: 'stripe',
          src: '/js/jquery/3.6.0/jquery.min.js',
          defer: true
        },
        {
          hid: 'stripe',
          src: '/js/jquery/jquery.slim.min.js',
          defer: true
        },
        {
          hid: 'stripe',
          src: '/js/popper.min.js',
          defer: true
        },
        {
          hid: 'stripe',
          src: '/js/bootstrap.bundle.min.js',
          defer: true
        },
        {
          hid: 'stripe',
          src: '/js/slick/slick.min.js',
          defer: true
        }
      ]
    }
  },
  mounted() {
    window.addEventListener('scroll', this.scrollEvent);
    this.initData();
    this.setEvent();

  },
  methods: {
    initData() {
      this.getConfig();
      this.getCaptionBanner();
      this.getProvinces();

      // this.setEvent();
    },

    async getCaptionBanner() {
      this.captionBanner = await this.$axios.$get('caption-banner');
      // this.captionBanner = await this.$axios.$get('caption-banner');
      // console.log(this.captionBanner)
      // console.log(await this.$axios.$get('caption-banner'))
    },
    async getConfig() {
      this.config = await this.$axios.$get('config')
      this.config.company_policy = JSON.parse(this.config.company_policy)
    },
    setEvent() {
      this.slickBanner();
      $('[data-toggle="tooltip"]').tooltip();
    },
    slickBanner() {
      var itemSlick;
      if (screen.width < 577) {
        itemSlick = 1
      } else {
        itemSlick = 3
      }
      $('.slick-auto-3').slick({
        variableWidth: true,
        slidesToShow: itemSlick,
        slidesToScroll: 1,
        infinite: true,
        autoplay: true,
        asNavFor: '.slick-auto-detail',
        centerMode: true,
        autoplaySpeed: 2000,
      });
      $('.slick-auto-detail').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        fade: true,
        asNavFor: '.slick-auto-3',
        autoplaySpeed: 2000,
      });
      $('.slick-prev').click(function () {
        $('.slick-auto-3').slick('slickPrev');
      });
      $('.slick-next').click(function () {
        $('.slick-auto-3').slick('slickNext');
      });
    },
    scrollEvent() {
      var toolHeader = document.getElementById('toolbarFixed');
      var sticky = toolHeader.offsetTop;
      var toolMenu = document.getElementById('menuFixed');
      var toolHMenu = document.getElementById('menu');
      var toolData = document.getElementById('dataScroll');
      var sticky2 = toolHMenu.offsetTop;
      var toolNav = document.getElementById('tool');
      if (window.pageYOffset > sticky) {
        toolHeader.classList.add('isScroll');
      } else {
        toolHeader.classList.remove('isScroll');
      }
      if (window.pageYOffset > sticky2) {
        toolMenu.classList.add('menuFixed');
        toolData.classList.add('menuFixed');
      } else {
        toolMenu.classList.remove('menuFixed');
        toolData.classList.remove('menuFixed');
      }

      if (window.pageYOffset > screen.height) {
        toolNav.style.display = 'block';
      } else {
        toolNav.style.display = 'none';
      }
    },
    async getProvinces() {
      if (!localStorage.provinces_id || !localStorage.provinces_name){
        localStorage.provinces_name = 'Hà Nội';
        localStorage.provinces_id = '01';
      }
      this.provinces={
        name:localStorage.provinces_name,
        id:localStorage.provinces_id,
      }
    },
    async setProvinces(id,name) {
      const uri = 'current-province'
      this.provinces.name = name;
      this.provinces.id = await this.$axios.$post(uri, {
        provinces:id
      });
      localStorage.provinces_id = this.provinces.id
      localStorage.provinces_name = this.provinces.name
      location.reload();
    },
    btnToTop() {
      document.body.scrollTop = 0;

      document.documentElement.scrollTop = 0;
    },
  }
}
</script>
