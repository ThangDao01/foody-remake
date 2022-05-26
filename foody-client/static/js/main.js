  window.onscroll = function () {
  myFunction()
};
  var btnTop = document.getElementById(`btn-back-to-top`);
  var toolHeader = document.getElementById("toolbarFixed");
  var sticky = toolHeader.offsetTop;
  var toolMenu = document.getElementById("menuFixed");
  var toolData = document.getElementById("dataScroll");
  var sticky2 = toolMenu.offsetTop + screen.height;
  var deal = document.getElementById("dataScroll");
  var toolNav = document.getElementById("tool");
  var hDeal = deal.offsetHeight;
    var itemSlick;


  btnTop.onclick = function () {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
  var listData = [
  {
    food: "Gà Tươi Mạnh Hoạch - Trần Đại Nghĩa",
    image: "https://images.foody.vn/res/g111/1109781/prof/s576x330/foody-upload-api-foody-mobile-an-2ead5e11-211008123324.jpeg",
    location: "171 Phố Trần Đại Nghĩa, P. Bách Khoa,  Quận Hai Bà Trưng, Hà Nội"
  },
  {
    food: "Marukame Udon - Udon & Tempura - Vincom Phạm Ngọc Thạch",
    image: "https://images.foody.vn/res/g102/1012645/prof/s640x400/foody-upload-api-foody-mobile-18-200317120712.jpg",
    location: "Tầng 5, Tầng L5, Lô L5 - 05 - 06 Vincom Phạm Ngọc Thạch, 2 Phạm Ngọc Thạch, P. Trung Tự, Đống Đa, Hà Nội"
  },
  {
    food: "KCC - Phở & Cơm Gà Xối Mắm - Kiều Mai\n",
    image: "https://images.foody.vn/res/g30/296541/prof/s640x400/foody-upload-api-foody-mobile-pho-kcc-191029141346.jpg",
    location: "21 Kiều Mai, Bắc Từ Liêm, Hà Nội"
  },
  {
    food: "CHAN CHAN - Đồ Ăn Hàn Quốc",
    image: "https://images.foody.vn/res/g112/1111522/prof/s640x400/file_restaurant_photo_tkak_16414-17c51ed9-220106164959.jpg",
    location: "20D Trần Quý Cáp, P. Văn Miếu, Đống Đa, Hà Nội"
  },
  {
    food: "Tiktak - Tiệm Gà Rán Hàn Quốc",
    image: "https://images.foody.vn/res/g86/854724/prof/s640x400/foody-upload-api-foody-mobile-ga1-jpg-181129142814.jpg",
    location: "85 Láng Hạ, Đống Đa, Hà Nội"
  },
  {
    food: "L'amour Steak - Pizza & Pasta - Văn Quán",
    image: "https://images.foody.vn/res/g109/1083009/prof/s640x400/foody-upload-api-foody-mobile-im-9d946419-210617182849.jpeg",
    location: "Tầng 1, Tòa New Skyline, KĐT Văn Quán, Đường 19/5, Hà Đông, Hà Nội\n"
  },
  {
    food: "Bánh Tráng Ăn Vặt Cô Béo",
    image: "https://images.foody.vn/res/g112/1112277/prof/s640x400/file_restaurant_photo_dvax_16501-7bb4292d-220417131155.jpeg",
    location: "90 Kim Mã, Ba Đình, Hà Nội"
  },
  {
    food: "Quán Kiến - Món Ăn Việt Nam Độc Đáo - Tuệ Tĩnh\n",
    image: "https://images.foody.vn/res/g19/185755/prof/s640x400/foody-mobile-12196052_89005923109-757-635832838894777947.jpg",
    location: "100 Tuệ Tĩnh, Hai Bà Trưng, Hà Nội\n"
  },
  {
    food: "Thỏ Quán - Bún Đậu Mẹt 39A\n",
    image: "https://images.foody.vn/res/g98/974024/prof/s640x400/foody-upload-api-foody-mobile-foody-mobile-hmmmmmm-191029110726.jpg",
    location: "39A Ngõ 99 Cầu Diễn, Bắc Từ Liêm, Hà Nội\n"
  },
  {
    food: "Simisi - Korean Foods - Lương Thế Vinh\n",
    image: "https://images.foody.vn/res/g26/258433/prof/s640x400/image-6873dac3-200910115827.jpeg",
    location: "19/A8 Đại Học Hà Nội (Ngõ 165 Lương Thế Vinh), Thanh Xuân, Hà Nội\n"
  },
  ]
  if (screen.width < 577) {
  itemSlick = 1
} else {
  itemSlick = 3
}
//Done
  function myFunction() {
  if (window.pageYOffset > sticky) {
  toolHeader.classList.add("isScroll");
} else {
  toolHeader.classList.remove("isScroll");
}
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
}
//
  $(document).ready(function () {
  setDataDeal()
  setDataMenu()
});

  function setDataDeal() {
  for (var i = 0; i < listData.length; i++) {
  document.getElementById('deal').innerHTML +=
  `<div class="deal-xl col-md-4 col-lg-3 col-sm-6 p-1">
            <div class=" p-0 bg-white ">
              <img src="` + listData[i].image + `" width="100%" style="max-width: 226" height="144">
                <div class="item-detail p-2" style="height:61px;">
                  <div class="text-ellipsis" style="font-size:14px;font-weight: 700">` + listData[i].food + `</div>
                  <div class="text-ellipsis" style="color: #777;font-size: 12px;text-overflow: ellipsis;">` + listData[i].location + `
                  </div>
                </div>
                <div class="p-2 border-top" style="height: 60px;">
                  <i class="fa fa-tag" style="color: red"></i>
                  Restaurant
                </div>
            </div>
          </div>`
}

}

  function setDataMenu() {
  var count =0;
  for (var a = 0; a < 4; a++) {
  for (var i = 0; i < listData.length; i++) {
  count++;
  document.getElementById('menu').innerHTML +=
  `<div class="col-xl-3 col-sm-6 p-1">
         <div class=" p-0 bg-white">
           <div id="menu" style="position: relative;" onmouseover="showById('menu`+count+`')" onmouseout="hideById('menu`+count+`')">
           <img src="` + listData[i].image + `" width="100%" style="" height="150">
           <div style="display: none" id="menu`+count+`">
           <div style="position: absolute;top:0;left:0;background-color: black;height: 100%;width: 100%;opacity: 0.5"></div>
           <button class="menu-btn"><img src="https://www.foody.vn/asset/styles/images/icons/22x22_icon-deli.png" style="margin-right: 10px" width="22px" height="22px">Đặt giao hàng</button>
           </div>
           </div>
           <div class="item-detail border-bottom p-2" style="height:55px;width: 100%;">
             <div class=" text-ellipsis" style="font-size:14px;font-weight: 700">` + listData[i].food + `</div>
             <div class="p-1 text-ellipsis" style="color: #777;font-size: 12px;"> ` + listData[i].location + `
             </div>
           </div>
           <div class="item-detail p-2" style="height:53px;width: 100%;">
              <div class="col-2 p-0 float-left"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/OOjs_UI_icon_userAvatar.svg/1200px-OOjs_UI_icon_userAvatar.svg.png" alt="user" width="30px" height="30px"></div>
              <div class="col-9 p-0 text-ellipsis" style="height: 50px;line-height: 25px">Mình ấn tượng với quán kể từ ngày ăn ở đây vào lễ Tết. Trong khi các quán khác bán giá cao gấp rưỡi, thậm chí là gấp đôi khi Tết đến.
               Thì ở đây chỉ tăng thêm 5k/bát mà chất lượng vẫn OK. Quán ngon, mình vẫn thường xuyên ăn ở đây. Chỉ có điều vợ chủ quán nhìn lạnh lùng, thiếu tinh thần phục vụ quá. À, và quán nên cất bớt đồ trên 2 bàn trong cùng đi để rộng hơn
               , thiếu chỗ ngồi quá.</div>
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
       </div>`
}
}
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
  asNavFor: '.slick-auto-3',
  autoplaySpeed: 2000,
});
  $('.slick-prev').click(function () {
  $(".slick-auto-3").slick('slickPrev');
});
  $('.slick-next').click(function () {
  $(".slick-auto-3").slick('slickNext');
});
  function showById(id){
  var item = document.getElementById(id)
  item.style.display="block"
}
  function hideById(id){
  var item = document.getElementById(id)
  item.style.display="none"
}
  $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

