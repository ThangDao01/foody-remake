/* eslint-disable */
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
              Hà Nội
            </button>
            <div class="dropdown-menu">
              <h1 class="dropdown-header"><i class="fa fa-globe" aria-hidden="true"></i>Tỉnh Thành</h1>
              <NuxtLink to="#"><a class="dropdown-item">TP HCM</a></NuxtLink>
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
            data-toggle="tooltip" data-placement="left" title="Về đầu trang">
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
      <div class="slick-auto-3">
        <div><img src="https://images.foody.vn/biz_banner/foody-675x355_foodyappbanner-636530746968443602.jpg" alt="">
          <div class="slick-slider"></div>
        </div>
        <div><img src="https://media.foody.vn/images/beauty-upload-api-che-co-linh-675-x-355-220425115812.jpg" alt="">
        </div>
        <div><img src="https://images.foody.vn/biz_banner/foody-675x355_foodyappbanner-636530746968443602.jpg" alt="">
        </div>
        <div><img src="https://media.foody.vn/images/beauty-upload-api-che-co-linh-675-x-355-220425115812.jpg" alt="">
        </div>
        <div><img src="https://images.foody.vn/biz_banner/foody-675x355_foodyappbanner-636530746968443602.jpg" alt="">
        </div>
        <div><img src="https://media.foody.vn/images/beauty-upload-api-che-co-linh-675-x-355-220425115812.jpg" alt="">
        </div>
      </div>
      <div class="col-5 m-auto" style="height: 75px;justify-items: center">
        <img class="slick-prev btn-slide1 float-left "
             src="https://www.foody.vn/asset/styles/images/icons/left.png"
             width="40px"
             alt="">
        <div class="slick-auto-detail" style="padding-top: 20px">
          <div class="col-12 text-white text-center">
            <div class="slick-title">Foody App trên Mobile</div>
            <p class="slick-desc">Khám phá, đặt bàn, giao tận nơi</p>
          </div>
          <div class="col-12 text-white text-center">
            <div class="slick-title">Chè Thái Cô linh</div>
            <p>Giảm 70k cho đơn tối thiểu 200k</p>
          </div>
          <div class="col-12 text-white text-center">
            <div class="slick-title">Foody App trên Mobile</div>
            <p class="slick-desc">Khám phá, đặt bàn, giao tận nơi</p>
          </div>
          <div class="col-12 text-white text-center">
            <div class="slick-title">Chè Thái Cô linh</div>
            <p class="slick-desc">Giảm 70k cho đơn tối thiểu 200k</p>
          </div>
          <div class="col-12 text-white text-center">
            <div class="slick-title">Foody App trên Mobile</div>
            <p class="slick-desc">Khám phá, đặt bàn, giao tận nơi</p>
          </div>
          <div class="col-12 text-white text-center">
            <div class="slick-title">Chè Thái Cô linh</div>
            <p class="slick-desc">Giảm 70k cho đơn tối thiểu 200k</p>
          </div>
        </div>
        <img class="slick-next btn-slide1 float-right "
             src="https://www.foody.vn/asset/styles/images/icons/right.png"
             width="40px"
             alt="">
      </div>
    </div>
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
          Công Ty Cổ Phần Foody, Lầu G, Tòa nhà Jabes 1, 244 đường Cống Quỳnh, phường Phạm Ngũ Lão, Quận 1, TP.HCM
        </div>
        <div>
          Điện thoại: 1900 2042 Email: info@foody.vn
        </div>
        <div>
          Giấy CN ĐKDN số 0311828036 do Sở Kế hoạch và Đầu tư TP.HCM cấp ngày 11/6/2012, sửa đổi lần thứ 23, ngày
          10/12/2020
        </div>
        <div>
          Giấy phép thiết lập MXH trên mạng số 363/GP-BTTTT do Bộ Thông tin và Truyền thông cấp ngày 30/6/2016 Người
          chịu
          trách nhiệm: Đặng Hoàng Minh.
        </div>
        <br>
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
        },{
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
        },{
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
      link: [
        {rel: 'stylesheet', href: '/css/style.css'},
        {rel: 'stylesheet', href: '/js/slick/slick.css'},
        {rel: 'stylesheet', href: '/js/slick/slick-theme.css'},
        {rel: 'stylesheet', href: '/css/bootstrap.min.css'},
        {rel: 'stylesheet', href: 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'},
      ],
      script: [
        {hid: 'stripe', src: '/js/jquery/3.6.0/jquery.min.js', defer: true},
        {hid: 'stripe', src: '/js/jquery/jquery.slim.min.js', defer: true},
        {hid: 'stripe', src: '/js/popper.min.js', defer: true},
        {hid: 'stripe', src: '/js/bootstrap.bundle.min.js', defer: true},
        {hid: 'stripe', src: '/js/slick/slick.min.js', defer: true}
      ]
    }
  },
  mounted() {
    this.slickBanner();
    window.addEventListener('scroll', this.scrollEvent);

  },
  methods: {
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
        $(".slick-auto-3").slick('slickPrev');
      });
      $('.slick-next').click(function () {
        $(".slick-auto-3").slick('slickNext');
      });
    },
    scrollEvent() {
      var toolHeader = document.getElementById("toolbarFixed");
      var sticky = toolHeader.offsetTop;
      var toolMenu = document.getElementById("menuFixed");
      var toolHMenu = document.getElementById("menu");
      var toolData = document.getElementById("dataScroll");
      var sticky2 = toolHMenu.offsetTop;
      var toolNav = document.getElementById("tool");
      var hDeal = deal.offsetHeight;
      if (window.pageYOffset > sticky) {
        toolHeader.classList.add("isScroll");
      } else {
        toolHeader.classList.remove("isScroll");
      }
      console.log("window:" + window.pageYOffset)
      console.log("sticky2:" + sticky2)
      console.log("screen.height:" + screen.height)
      console.log("toolMenu.offsetTop:" + toolHMenu.offsetTop)
      if (window.pageYOffset > sticky2) {
        toolMenu.classList.add("menuFixed");
        toolData.classList.add("menuFixed");
      } else {
        toolMenu.classList.remove("menuFixed");
        toolData.classList.remove("menuFixed");
      }

      if (window.pageYOffset > hDeal) {
        toolNav.style.display = "block";
      } else {
        toolNav.style.display = "none";
      }
    },
    setElement() {
      this.deal = 12
    },
    btnToTop() {
      document.body.scrollTop = 0;

      document.documentElement.scrollTop = 0;
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
