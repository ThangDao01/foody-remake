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
               v-for="n in 10">
            <div class=" p-0 bg-white ">
              <img :src="ListRestaurantData[n].restaurant_thumbnail" width="100%" style="max-width: 226px" height="144">
              <div class="item-detail p-2" style="height:61px;">
                <div class="text-ellipsis" style="font-size:14px;font-weight: 700">
                  {{ ListRestaurantData[n].restaurant_name }}
                </div>
                <div class="text-ellipsis" style="color: #777;font-size: 12px;text-overflow: ellipsis;">
                  {{ ListRestaurantData[n].location_address }}
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
                <select class="col-3 p-2 m-1">
                  <option value="" selected="selected">- Danh mục -</option>
                  <option value="">Sang trọng</option>
                  <option value="">Buffet</option>
                  <option value="">Nhà hàng</option>
                  <option value="">Ăn chay</option>
                </select>
                <select class="col-3 p-2 m-1">
                  <option value="" selected="selected">- Ẩm thực -</option>
                  <option value="">Món Bắc</option>
                  <option value="">Trung Hoa</option>
                  <option value="">Ý</option>
                  <option value="">Pháp</option>
                </select>
                <select class="col-3 p-2 m-1">
                  <option value="" selected="selected">- Quận/Huyện-</option>
                  <option value="">Ba đình</option>
                  <option value="">Nam từ liên</option>
                  <option value="">Hà Đông</option>
                  <option value="">Ba vì</option>
                </select>
              </div>
            </div>
          </div>
          <div class="d-flex flex-wrap" id="menu">
            <div class="col-xl-3 col-sm-6 p-1" v-if="ListRestaurantData!=null"
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
          <div class="col-12 "
               style="background-color: #049ec5;height: 40px;text-align: center;color: white;padding: 10px 0;font-size: 14px">
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
      ListRestaurantData: [
        {
          restaurantName: "Gà Tươi Mạnh Hoạch - Trần Đại Nghĩa",
          restaurant_thumbnail: "https://images.foody.vn/res/g111/1109781/prof/s576x330/foody-upload-api-foody-mobile-an-2ead5e11-211008123324.jpeg",
          location_address: "171 Phố Trần Đại Nghĩa, P. Bách Khoa,  Quận Hai Bà Trưng, Hà Nội",
        },
        {
          restaurantName: "Marukame Udon - Udon & Tempura - Vincom Phạm Ngọc Thạch",
          restaurant_thumbnail: "https://images.foody.vn/res/g102/1012645/prof/s640x400/foody-upload-api-foody-mobile-18-200317120712.jpg",
          location_address: "Tầng 5, Tầng L5, Lô L5 - 05 - 06 Vincom Phạm Ngọc Thạch, 2 Phạm Ngọc Thạch, P. Trung Tự, Đống Đa, Hà Nội"
        },
        {
          restaurant_name: "KCC - Phở & Cơm Gà Xối Mắm - Kiều Mai\n",
          restaurant_thumbnail: "https://images.foody.vn/res/g30/296541/prof/s640x400/foody-upload-api-foody-mobile-pho-kcc-191029141346.jpg",
          location_address: "21 Kiều Mai, Bắc Từ Liêm, Hà Nội"
        },
        {
          restaurant_name: "CHAN CHAN - Đồ Ăn Hàn Quốc",
          restaurant_thumbnail: "https://images.foody.vn/res/g112/1111522/prof/s640x400/file_restaurant_photo_tkak_16414-17c51ed9-220106164959.jpg",
          location_address: "20D Trần Quý Cáp, P. Văn Miếu, Đống Đa, Hà Nội"
        },
        {
          restaurant_name: "Tiktak - Tiệm Gà Rán Hàn Quốc",
          restaurant_thumbnail: "https://images.foody.vn/res/g86/854724/prof/s640x400/foody-upload-api-foody-mobile-ga1-jpg-181129142814.jpg",
          location_address: "85 Láng Hạ, Đống Đa, Hà Nội"
        },
        {
          restaurant_name: "L'amour Steak - Pizza & Pasta - Văn Quán",
          restaurant_thumbnail: "https://images.foody.vn/res/g109/1083009/prof/s640x400/foody-upload-api-foody-mobile-im-9d946419-210617182849.jpeg",
          location_address: "Tầng 1, Tòa New Skyline, KĐT Văn Quán, Đường 19/5, Hà Đông, Hà Nội\n"
        },
        {
          restaurant_name: "Bánh Tráng Ăn Vặt Cô Béo",
          restaurant_thumbnail: "https://images.foody.vn/res/g112/1112277/prof/s640x400/file_restaurant_photo_dvax_16501-7bb4292d-220417131155.jpeg",
          location_address: "90 Kim Mã, Ba Đình, Hà Nội"
        },
        {
          restaurant_name: "Quán Kiến - Món Ăn Việt Nam Độc Đáo - Tuệ Tĩnh\n",
          restaurant_thumbnail: "https://images.foody.vn/res/g19/185755/prof/s640x400/foody-mobile-12196052_89005923109-757-635832838894777947.jpg",
          location_address: "100 Tuệ Tĩnh, Hai Bà Trưng, Hà Nội\n"
        },
        {
          restaurant_name: "Thỏ Quán - Bún Đậu Mẹt 39A\n",
          restaurant_thumbnail: "https://images.foody.vn/res/g98/974024/prof/s640x400/foody-upload-api-foody-mobile-foody-mobile-hmmmmmm-191029110726.jpg",
          location_address: "39A Ngõ 99 Cầu Diễn, Bắc Từ Liêm, Hà Nội\n"
        },
        {
          restaurant_name: "Simisi - Korean Foods - Lương Thế Vinh\n",
          restaurant_thumbnail: "https://images.foody.vn/res/g26/258433/prof/s640x400/image-6873dac3-200910115827.jpeg",
          location_address: "19/A8 Đại Học Hà Nội (Ngõ 165 Lương Thế Vinh), Thanh Xuân, Hà Nội\n"
        }, {
          restaurantName: "Gà Tươi Mạnh Hoạch - Trần Đại Nghĩa",
          restaurant_thumbnail: "https://images.foody.vn/res/g111/1109781/prof/s576x330/foody-upload-api-foody-mobile-an-2ead5e11-211008123324.jpeg",
          location_address: "171 Phố Trần Đại Nghĩa, P. Bách Khoa,  Quận Hai Bà Trưng, Hà Nội",
        },
        {
          restaurantName: "Marukame Udon - Udon & Tempura - Vincom Phạm Ngọc Thạch",
          restaurant_thumbnail: "https://images.foody.vn/res/g102/1012645/prof/s640x400/foody-upload-api-foody-mobile-18-200317120712.jpg",
          location_address: "Tầng 5, Tầng L5, Lô L5 - 05 - 06 Vincom Phạm Ngọc Thạch, 2 Phạm Ngọc Thạch, P. Trung Tự, Đống Đa, Hà Nội"
        },
        {
          restaurant_name: "KCC - Phở & Cơm Gà Xối Mắm - Kiều Mai\n",
          restaurant_thumbnail: "https://images.foody.vn/res/g30/296541/prof/s640x400/foody-upload-api-foody-mobile-pho-kcc-191029141346.jpg",
          location_address: "21 Kiều Mai, Bắc Từ Liêm, Hà Nội"
        },
        {
          restaurant_name: "CHAN CHAN - Đồ Ăn Hàn Quốc",
          restaurant_thumbnail: "https://images.foody.vn/res/g112/1111522/prof/s640x400/file_restaurant_photo_tkak_16414-17c51ed9-220106164959.jpg",
          location_address: "20D Trần Quý Cáp, P. Văn Miếu, Đống Đa, Hà Nội"
        },
        {
          restaurant_name: "Tiktak - Tiệm Gà Rán Hàn Quốc",
          restaurant_thumbnail: "https://images.foody.vn/res/g86/854724/prof/s640x400/foody-upload-api-foody-mobile-ga1-jpg-181129142814.jpg",
          location_address: "85 Láng Hạ, Đống Đa, Hà Nội"
        },
        {
          restaurant_name: "L'amour Steak - Pizza & Pasta - Văn Quán",
          restaurant_thumbnail: "https://images.foody.vn/res/g109/1083009/prof/s640x400/foody-upload-api-foody-mobile-im-9d946419-210617182849.jpeg",
          location_address: "Tầng 1, Tòa New Skyline, KĐT Văn Quán, Đường 19/5, Hà Đông, Hà Nội\n"
        },
        {
          restaurant_name: "Bánh Tráng Ăn Vặt Cô Béo",
          restaurant_thumbnail: "https://images.foody.vn/res/g112/1112277/prof/s640x400/file_restaurant_photo_dvax_16501-7bb4292d-220417131155.jpeg",
          location_address: "90 Kim Mã, Ba Đình, Hà Nội"
        },
        {
          restaurant_name: "Quán Kiến - Món Ăn Việt Nam Độc Đáo - Tuệ Tĩnh\n",
          restaurant_thumbnail: "https://images.foody.vn/res/g19/185755/prof/s640x400/foody-mobile-12196052_89005923109-757-635832838894777947.jpg",
          location_address: "100 Tuệ Tĩnh, Hai Bà Trưng, Hà Nội\n"
        },
        {
          restaurant_name: "Thỏ Quán - Bún Đậu Mẹt 39A\n",
          restaurant_thumbnail: "https://images.foody.vn/res/g98/974024/prof/s640x400/foody-upload-api-foody-mobile-foody-mobile-hmmmmmm-191029110726.jpg",
          location_address: "39A Ngõ 99 Cầu Diễn, Bắc Từ Liêm, Hà Nội\n"
        },
        {
          restaurant_name: "Simisi - Korean Foods - Lương Thế Vinh\n",
          restaurant_thumbnail: "https://images.foody.vn/res/g26/258433/prof/s640x400/image-6873dac3-200910115827.jpeg",
          location_address: "19/A8 Đại Học Hà Nội (Ngõ 165 Lương Thế Vinh), Thanh Xuân, Hà Nội\n"
        }, {
          restaurantName: "Gà Tươi Mạnh Hoạch - Trần Đại Nghĩa",
          restaurant_thumbnail: "https://images.foody.vn/res/g111/1109781/prof/s576x330/foody-upload-api-foody-mobile-an-2ead5e11-211008123324.jpeg",
          location_address: "171 Phố Trần Đại Nghĩa, P. Bách Khoa,  Quận Hai Bà Trưng, Hà Nội",
        },
        {
          restaurantName: "Marukame Udon - Udon & Tempura - Vincom Phạm Ngọc Thạch",
          restaurant_thumbnail: "https://images.foody.vn/res/g102/1012645/prof/s640x400/foody-upload-api-foody-mobile-18-200317120712.jpg",
          location_address: "Tầng 5, Tầng L5, Lô L5 - 05 - 06 Vincom Phạm Ngọc Thạch, 2 Phạm Ngọc Thạch, P. Trung Tự, Đống Đa, Hà Nội"
        },
        {
          restaurant_name: "KCC - Phở & Cơm Gà Xối Mắm - Kiều Mai\n",
          restaurant_thumbnail: "https://images.foody.vn/res/g30/296541/prof/s640x400/foody-upload-api-foody-mobile-pho-kcc-191029141346.jpg",
          location_address: "21 Kiều Mai, Bắc Từ Liêm, Hà Nội"
        },
        {
          restaurant_name: "CHAN CHAN - Đồ Ăn Hàn Quốc",
          restaurant_thumbnail: "https://images.foody.vn/res/g112/1111522/prof/s640x400/file_restaurant_photo_tkak_16414-17c51ed9-220106164959.jpg",
          location_address: "20D Trần Quý Cáp, P. Văn Miếu, Đống Đa, Hà Nội"
        },
        {
          restaurant_name: "Tiktak - Tiệm Gà Rán Hàn Quốc",
          restaurant_thumbnail: "https://images.foody.vn/res/g86/854724/prof/s640x400/foody-upload-api-foody-mobile-ga1-jpg-181129142814.jpg",
          location_address: "85 Láng Hạ, Đống Đa, Hà Nội"
        },
        {
          restaurant_name: "L'amour Steak - Pizza & Pasta - Văn Quán",
          restaurant_thumbnail: "https://images.foody.vn/res/g109/1083009/prof/s640x400/foody-upload-api-foody-mobile-im-9d946419-210617182849.jpeg",
          location_address: "Tầng 1, Tòa New Skyline, KĐT Văn Quán, Đường 19/5, Hà Đông, Hà Nội\n"
        },
        {
          restaurant_name: "Bánh Tráng Ăn Vặt Cô Béo",
          restaurant_thumbnail: "https://images.foody.vn/res/g112/1112277/prof/s640x400/file_restaurant_photo_dvax_16501-7bb4292d-220417131155.jpeg",
          location_address: "90 Kim Mã, Ba Đình, Hà Nội"
        },
        {
          restaurant_name: "Quán Kiến - Món Ăn Việt Nam Độc Đáo - Tuệ Tĩnh\n",
          restaurant_thumbnail: "https://images.foody.vn/res/g19/185755/prof/s640x400/foody-mobile-12196052_89005923109-757-635832838894777947.jpg",
          location_address: "100 Tuệ Tĩnh, Hai Bà Trưng, Hà Nội\n"
        },
        {
          restaurant_name: "Thỏ Quán - Bún Đậu Mẹt 39A\n",
          restaurant_thumbnail: "https://images.foody.vn/res/g98/974024/prof/s640x400/foody-upload-api-foody-mobile-foody-mobile-hmmmmmm-191029110726.jpg",
          location_address: "39A Ngõ 99 Cầu Diễn, Bắc Từ Liêm, Hà Nội\n"
        },
        {
          restaurant_name: "Simisi - Korean Foods - Lương Thế Vinh\n",
          restaurant_thumbnail: "https://images.foody.vn/res/g26/258433/prof/s640x400/image-6873dac3-200910115827.jpeg",
          location_address: "19/A8 Đại Học Hà Nội (Ngõ 165 Lương Thế Vinh), Thanh Xuân, Hà Nội\n"
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
  },
  methods: {
    scrollMenuEvent() {
      var toolMenu = document.getElementById("menuFixed");
      var toolHMenu = document.getElementById("menu");
      var toolData = document.getElementById("dataScroll");
      var sticky2 = toolHMenu.offsetTop;
      if (window.pageYOffset > sticky2) {
        toolMenu.classList.add("menuFixed");
        toolData.classList.add("menuFixed");
      } else {
        toolMenu.classList.remove("menuFixed");
        toolData.classList.remove("menuFixed");
      }
    },
    showById(id) {
      var item = document.getElementById(id)
      item.style.display = "block"
    },
    hideById(id) {
      var item = document.getElementById(id)
      item.style.display = "none"
    }
  }
}
</script>
