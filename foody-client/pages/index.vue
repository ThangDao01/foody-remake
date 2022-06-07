<template>
  <div>
    <div class="deal" style="padding-top: 20px">
      <div class="container border p-0">
        <nav class="bg-white navbar-expand justify-content-sm-start" style="line-height: 48px">
          <div class="container col-12 d-flex flex-wrap align-items-center" style="padding-left: 15px">
            <img src="https://www.foody.vn/asset/styles/images/icons/icon-delivery-60x60-3.png"
                 width="40px"
                 height="40px"
                 alt="">
            <div class="title" style="padding-left: 10px;margin-right: 10px">Giao tận nơi</div>
            <ul class="navbar-nav col-xl-8 col-sm-12 p-10 flex-wrap"
                style="height: 100%;align-items: center;font-size: 14px">
              <li class="nav-item active">
                <nuxt-link to=""><a class="nav-link-df">Deal hôm nay</a></nuxt-link>
              </li>
              <li class="nav-item">
                <nuxt-link to=""><a class="nav-link-df">Tất cả</a></nuxt-link>

              </li>
              <li class="nav-item">
                <nuxt-link to=""><a class="nav-link-df">Đồ ăn</a></nuxt-link>
              </li>
              <li class="nav-item">
                <nuxt-link to=""><a class="nav-link-df">Đồ uống</a></nuxt-link>
              </li>
              <li class="nav-item">
                <nuxt-link to=""><a class="nav-link-df">Đồ chay</a></nuxt-link>
              </li>
              <li class="nav-item">
                <nuxt-link to=""><a class="nav-link-df">Bánh kem</a></nuxt-link>
              </li>
              <li class="nav-item">
                <nuxt-link to=""><a class="nav-link-df">Tráng miệng</a></nuxt-link>
              </li>
              <li class="nav-item">
                <div class="dropdown">
                  <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                    Xem thêm
                  </button>
                  <div class="dropdown-menu">
                    <nuxt-link to=""><a class="dropdown-item">Homemade</a></nuxt-link>
                    <nuxt-link to=""><a class="dropdown-item">Vỉa hè</a></nuxt-link>
                    <nuxt-link to=""><a class="dropdown-item">Pizza/Burger</a></nuxt-link>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
        <div class="col-12 d-flex flex-wrap p-2" id="deal" style="padding:15px !important;">
          <div class="deal-xl col-md-4 col-lg-3 col-sm-6 p-1" v-if="ListRestaurantData!=null"
               v-for="restaurant in ListRestaurantDeal">
            <div class=" p-0 bg-white ">
              <img :src="restaurant.restaurant_thumbnail" width="100%" style="max-width: 226px" height="144">
              <div class="item-detail p-2" style="height:61px;">
                <div class="text-ellipsis" style="font-size:14px;font-weight: 700">
                  {{ restaurant.restaurant_name }}
                </div>
                <div class="text-ellipsis" style="color: #777;font-size: 12px;text-overflow: ellipsis;">
                  {{ restaurant.location_address }}
                </div>
              </div>
              <div class="p-2 border-top" style="height: 60px;">
                <i class="fa fa-tag" style="color: red"></i>
                Restaurant
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="menu p-2 col-12" id="menu">
      <div class="container d-flex flex-wrap p-0 justify-content-end">
        <div class="tollBar col-xl-2 d-xl-block d-sm-none bg-white p-0" id="menuFixed" style="max-height: 380px">
          <div class="title p-2 d-flex align-items-center">
            <div style="width: 24px;height: 24px;margin-right: 5px;background-color: red"
                 class="float-left d-flex align-items-center">
              <img src="https://www.foody.vn/asset/styles/images/icons/icon-foody-60x60.png"
                   style="margin: 5px"
                   width="14px"
                   height="14px"
                   alt="">
            </div>
            Khám phá
          </div>
          <div class="negative-menu active">
            Ở đâu <i class="fa fa-angle-right float-right"></i>
          </div>
          <div class="negative-menu">
            Giao hàng <i class="fa fa-angle-right float-right"></i>
          </div>
          <div class="negative-menu">
            Ăn gì <i class="fa fa-angle-right float-right"></i>
          </div>
          <div class="negative-menu">
            Sưu tập <i class="fa fa-angle-right float-right"></i>
          </div>
          <div class="negative-menu">
            TV<i class="fa fa-angle-right float-right"></i>
          </div>
          <div class="negative-menu">
            Bình luận<i class="fa fa-angle-right float-right"></i>
          </div>
          <div class="negative-menu">
            Blogs <i class="fa fa-angle-right float-right"></i>
          </div>
          <div class="negative-menu">
            Khuyến mãi <i class="fa fa-angle-right float-right"></i>
          </div>
        </div>
        <div class="col-xl-10 col-sm-12 p-2" style="padding-top: 0 !important;">
          <div class="col-12 d-flex flex-nowrap justify-content-between p-0"
               id="dataScroll"
               style="background-color: #ddd;height: 50px;">
            <ul class=" col-md-5 col-sm-12 d-flex flex-wrap p-0"
                style="list-style: none;height: 100%; align-items: center">
              <li class="nav-item col-3 active">
                <nuxt-link to=""><a class="nav-link-df">Mới nhẩt</a></nuxt-link>
              </li>
              <li class="nav-item col-3 ">
                <nuxt-link to=""><a class="nav-link-df">Gần tôi</a></nuxt-link>
              </li>
              <li class="nav-item col-3">
                <nuxt-link to=""><a class="nav-link-df">Đã lưu</a></nuxt-link>
              </li>
            </ul>
            <div class="col-7 d-none d-lg-block p-1">
              <div class="col-12 d-flex flex-wrap justify-content-end p-0">
                <select class="col-3 p-2 m-1" v-on:change="renderData()" v-model="filterResult.category">
                  <option value="" >- Danh mục -</option>
                  <option :value="category.id" v-for="category in listFilter.category">{{ category.category_name }}
                  </option>
                </select>
                <select class="col-3 p-2 m-1" v-on:change="renderData()" v-model="filterResult.subCategory">
                  <option value="" >- Ẩm thực -</option>
                  <option :value="subCategory.id" v-for="subCategory in listFilter.subCategory">
                    {{ subCategory.category_name }}
                  </option>

                </select>
                <select class="col-3 p-2 m-1" v-on:change="renderData()" v-model="filterResult.district">
                  <option value="" >- Quận/Huyện-</option>
                  <option :value="district.maqh" v-for="district in listFilter.district">{{ district.name }}</option>

                </select>
              </div>
            </div>
          </div>
          <div class="d-flex flex-wrap" id="menu" v-if="ListRestaurantData.length!==0">
            <div class="col-xl-3 col-sm-6 p-1"
                 v-for="(restaurant,index) in ListRestaurantData" :key="index">
              <div class=" p-0 bg-white">
                <div id="menu" style="position: relative;" v-on:mouseover="showById('menu'+index)"
                     v-on:mouseout="hideById('menu' + index)">
                  <img :src="restaurant.restaurant_thumbnail" width="100%" style="" height="150">
                  <div style="display: none" :id="'menu' + index">
                    <div
                      style="position: absolute;top:0;left:0;background-color: black;height: 100%;width: 100%;opacity: 0.5"></div>
                    <button class="menu-btn"><img
                      src="https://www.foody.vn/asset/styles/images/icons/22x22_icon-deli.png"
                      style="margin-right: 10px" width="22px" height="22px">Đặt giao hàng
                    </button>
                  </div>
                </div>
                <div class="item-detail border-bottom p-2" style="height:55px;width: 100%;">
                  <div class=" text-ellipsis" style="font-size:14px;font-weight: 700">{{
                      restaurant.restaurant_name
                    }}
                  </div>
                  <div class="p-1 text-ellipsis" style="color: #777;font-size: 12px;"> {{ restaurant.location_address }}
                  </div>
                </div>
                <div class="item-detail p-2" style="height:53px;width: 100%;">
                  <div class="col-2 p-0 float-left"><img
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/OOjs_UI_icon_userAvatar.svg/1200px-OOjs_UI_icon_userAvatar.svg.png"
                    alt="user" width="30px" height="30px"></div>
                  <div class="col-9 p-0 text-ellipsis" style="height: 50px;line-height: 25px">Mình ấn tượng với quán kể
                    từ ngày ăn ở đây vào lễ Tết. Trong khi các quán khác bán giá cao gấp rưỡi, thậm chí là gấp đôi khi
                    Tết đến.
                    Thì ở đây chỉ tăng thêm 5k/bát mà chất lượng vẫn OK. Quán ngon, mình vẫn thường xuyên ăn ở đây. Chỉ
                    có điều vợ chủ quán nhìn lạnh lùng, thiếu tinh thần phục vụ quá. À, và quán nên cất bớt đồ trên 2
                    bàn trong cùng đi để rộng hơn
                    , thiếu chỗ ngồi quá.
                  </div>
                </div>
                <div class="p-2 border-top">
                  <i class="fa fa-comment p-1" style="size: 12px;color: #777"></i>0
                  <i class="fa fa-camera p-1" style="size: 12px;color: #777"></i>0
                  <button class="border-0" style="padding: 2px 10px;float: right;">
                    <i class="fa fa-bookmark" style="size: 12px;color: #777"></i>
                    Lưu
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="d-flex flex-wrap justify-content-center" id="menu" style="min-height: 300px;padding-top: 20px"
               v-if="ListRestaurantData.length===0">
            <div class="">Chưa có dữ liệu</div>
          </div>
          <div class="col-12 "
               style="background-color: #049ec5;height: 40px;text-align: center;color: white;padding: 10px 0;font-size: 14px"
               v-if="ListRestaurantData!=null">
            Xem thêm
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: 'IndexPage',
  data() {
    return {
      maxDeal: 0,
      toolbarDisplay: '',
      listFilter: {
        category: {
          id: '',
          category_name: '',
        },
        subCategory: {
          id: '',
          category_name: '',
        },
        district: {
          maqh: '',
          name: '',
        },
      },
      filterResult: {
        category: '',
        subCategory: '',
        district: '',
      },
      ListRestaurantDeal: [
        {
          restaurant_name: '',
          restaurant_thumbnail: '',
          location_address: '',
        },
      ],
      ListRestaurantData: [
        {
          restaurant_name: '',
          restaurant_thumbnail: '',
          location_address: '',
        },
      ]
    }
  },
  head() {
    return {
      title: 'foody',
    }
  },
  mounted() {
    window.addEventListener('scroll', this.scrollMenuEvent);
    this.initData();
  },
  methods: {
    initData() {
      this.getDealToday();
      this.getRestaurantData();
      this.getFilterOption();
    },
    async renderData() {
      const uri = 'restaurant-filter'
      console.log(this.filterResult);
      this.ListRestaurantData = await this.$axios.$post(uri, this.filterResult);
      console.log(this.ListRestaurantData)
    },
    async getDealToday() {
      this.ListRestaurantDeal = await this.$axios.$get('deal-today');
    },
    async getRestaurantData() {
      this.ListRestaurantData = await this.$axios.$get('restaurant-home');
      console.log(await this.$axios.$get('restaurant-home'))
    },
    async getFilterOption() {
      this.listFilter = await this.$axios.$get('filter-option')
      console.log(this.listFilter)
    },
    scrollMenuEvent() {
      var toolMenu = document.getElementById('menuFixed');
      var toolHMenu = document.getElementById('menu');
      var toolData = document.getElementById('dataScroll');
      var sticky2 = toolHMenu.offsetTop;
      if (window.pageYOffset > sticky2) {
        toolMenu.classList.add('menuFixed');
        toolData.classList.add('menuFixed');
      } else {
        toolMenu.classList.remove('menuFixed');
        toolData.classList.remove('menuFixed');
      }
    },
    showById(id) {
      var item = document.getElementById(id)
      item.style.display = 'block'
    },
    hideById(id) {
      var item = document.getElementById(id)
      item.style.display = 'none'
    }
  }
}
</script>
