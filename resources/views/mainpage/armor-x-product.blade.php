@extends('layout/home-2')

{{-- Title Website --}}
@section('title', 'MOBIHUB | Iphone 12 Pro Max')

{{-- Link CSS --}}
@section('link')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

<style>
.plugin {
  margin-right: 12px;
}
.plugin-a {
  right: 2px;
}

.wrapper {
  width: 100%;
  margin: 0 auto;
}
.gallery {
  width: 100%;
  overflow: hidden;
  position: relative;
  box-sizing: border-box;
}
.gallery__fake {
  display: inline-block;
  height: 100%;
  vertical-align: middle;
}
.gallery__fullscreen__wrap {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 9999;
  background: rgba(255, 255, 255, 0.98);
  opacity: 0;
  text-align: center;
  transition: All 0.5s ease;
  -webkit-transition: All 0.5s ease;
  -moz-transition: All 0.5s ease;
  -o-transition: All 0.5s ease;
}
.gallery__fullscreen__wrap.open {
  display: block;
  opacity: 1;
}
.gallery__fullscreen__bt {
  position: absolute;
  right: 15px;
  bottom: 15px;
  width: 30px;
  height: 30px;
  background-image: url('/image/fullscreen_black.png');
  background-repeat: no-repeat;
  background-size: 100%;
  z-index: 99;
  cursor: pointer;
}
.gallery__fullscreen__exit {
  position: absolute;
  top: 20px;
  right: 20px;
  width: 40px;
  height: 40px;
  background-image: url('/image/close_black_2x.png');
  background-repeat: no-repeat;
  background-size: 100%;
  cursor: pointer;
}
.gallery__fullscreen__img {
  max-width: 70%;
  display: inline-block;
  vertical-align: middle;
}
.gallery__fullscreen__controls {
  position: absolute;
  width: 100%;
  top: 50%;
  margin-top: -30px;
}
.gallery__fullscreen__controls .prev,
.gallery__fullscreen__controls .next {
  position: absolute;
  display: inline-block;
  width: 60px;
  height: 60px;
  cursor: pointer;
  vertical-align: middle;
  transition: All 0.3s ease;
  -webkit-transition: All 0.3s ease;
  -moz-transition: All 0.3s ease;
  -o-transition: All 0.3s ease;
  background-color: rgba(255, 255, 255, 0.8);
  background-repeat: no-repeat;
  border-radius: 0 20px 20px 0;
}
.gallery__fullscreen__controls .prev {
  left: 0;
  background-image: url('/image/left_black_2x.png');
  background-size: 100%;
  border-radius: 0 20px 20px 0;
  background-position: right;
}
.gallery__fullscreen__controls .next {
  right: 0;
  background-image: url('/image/right_black_2x.png');
  background-size: 100%;
  border-radius: 20px 0 0 20px;
  background-position: left;
}
.gallery__inner {
  font-size: 0;
  position: relative;
  left: 0;
  height: 100%;
}
.gallery__block {
  position: relative;
  overflow: hidden;
}
.gallery__block:hover .gallery__controls-buttons .prev {
  left: 0;
  background-position: center;
}
.gallery__block:hover .gallery__controls-buttons .next {
  right: 0;
  background-position: center;
}
.gallery__img-block {
  display: none;
  position: relative;
  text-align: center;
  height: 100%;
  vertical-align: middle;
}
.gallery__img-block.slide {
  display: none;
  position: relative;
  text-align: center;
  height: 100%;
  vertical-align: middle;
}
.gallery__img-block.crossfade {
  opacity: 0;
  position: absolute;
  top: 0;
  left: 0;
}
.gallery__img-block__img {
  max-width: 100%;
}
.gallery__img-block.load {
  background: url('/image/sunny.gif') center no-repeat;
  background-size: 40px;
}
.gallery__description-block {
  padding: 15px 0;
  width: 100%;
  margin: 0 auto;
  position: absolute;
  bottom: 0;
  background: rgba(255, 255, 255, 0.7);
}
.gallery__description-block__description {
  font-size: 20px;
  color: #222;
  display: none;
  margin-left: 15px;
}
.gallery__description-block__description.current {
  display: inline-block;
}
.gallery__img-block:first-child {
  display: inline-block;
}
.gallery__controls {
  z-index: 2;
  bottom: 0;
  width: 100%;
  text-align: center;
}
.gallery__controls.fullscreen {
  position: absolute;
  bottom: 0;
}
.gallery__controls__ul {
  display: inline-block;
  margin: 0;
  padding: 0;
  vertical-align: middle;
}
.gallery__controls__thumbnails-ul {
  display: inline-block;
  vertical-align: middle;
  width: 100%;
  text-align: left;
  overflow: hidden;
  padding: 10px 0;
}
.gallery__controls__inner {
  position: relative;
}
.gallery__controls__inner.go-back {
  transition: All 0.3s ease;
  -webkit-transition: All 0.3s ease;
  -moz-transition: All 0.3s ease;
  -o-transition: All 0.3s ease;
}
.gallery__controls__item {
  display: inline-block;
  width: 10px;
  height: 10px;
  background: grey;
  border: 2px solid white;
  margin: 0 10px;
  border-radius: 50%;
  cursor: pointer;
}
.gallery__controls__item.current {
  background: red;
}
.gallery__controls__item:hover {
  color: #fff;
  transform: rotate(90deg);
  -webkit-transform: rotate(90deg);
  -moz-transform: rotate(90deg);
  -o-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
}
.gallery__controls-buttons {
  position: absolute;
  top: 50%;
  width: 100%;
}
.gallery__controls-buttons .prev,
.gallery__controls-buttons .next {
  position: absolute;
  display: inline-block;
  width: 60px;
  height: 40px;
  cursor: pointer;
  vertical-align: middle;
  transition: All 0.3s ease;
  -webkit-transition: All 0.3s ease;
  -moz-transition: All 0.3s ease;
  -o-transition: All 0.3s ease;
  background-color: rgba(255, 255, 255, 0.3);
  background-repeat: no-repeat;
  border-radius: 0 20px 20px 0;
}
.gallery__controls-buttons .prev {
  left: -25px;
  background-image: url('/image/left_black.png');
  background-size: 30px;
  border-radius: 0 3px 3px 0;
  background-position: right;
}
.gallery__controls-buttons .next {
  right: -25px;
  background-image: url('/image/right_black.png');
  background-size: 30px;
  border-radius: 3px 0 0 3px;
  background-position: left;
}
.gallery__thumbnail {
  display: inline-block;
  vertical-align: top;
  border: 3px solid #fff;
  margin-right: 15px;
  position: relative;
}
.gallery__thumbnail img {
  opacity: 0.5;
}
.gallery__thumbnail i {
  content: "";
  display: block;
  position: absolute;
  bottom: -7px;
  left: 0;
  right: 0;
  width: 0;
  height: 3px;
  background-color: #757575;
}
.gallery__thumbnail.current{
    margin-bottom: 20px;
}
.gallery__thumbnail.current img {
  opacity: 1;
  border:1px solid #db4942;

}
.gallery__thumbnail.current i {
  display: none;
  background-color: #fff;
  width: 100%;
  margin: auto;
}
</style>
@endsection

{{-- Body HTML --}}
@section('content')

<ul class="breadcrumb">
  <li><a href="/armor-x">ARMOR-X</a></li>
  <li><a href="#">APPLE</a></li>
  <li><a href="#">IPHONE 12 PRO MAX</a></li>
</ul>

<section class="armor-x-panel-3" id="product-detail">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <div class="col-xs-12 col-md-6">
                    {{-- <img class="pic-1" src="/image/iphone 12 pro.png" class="img-responsive"> --}}
                    <div class="wrapper">
                        <div class="gallery">
                        @foreach ($gallery as $row)  
                            <div class="gallery__img-block">
                              <a data-fancybox="gallery" href="{{asset('storage/images/' . $row->img)}}" class="js-img-viwer">
                                <img src="{{asset('storage/images/' . $row->img)}}" thumb-url="{{asset('storage/images/' . $row->img)}}" class="">
                              </a>
                            </div>

                            {{-- <div class="gallery__img-block  ">
                                <img src="/image/iphone 12 pro-2.png" thumb-url="/image/iphone 12 pro-2.png" class="">
                            </div>

                            <div class="gallery__img-block  ">
                                <img src="/image/iphone 12 pro-3.png" thumb-url="/image/iphone 12 pro-3.png" class="">
                            </div> --}}
                        @endforeach
                            <div class="gallery__controls">
                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-md-6 product-content">
                    <h2>{{ $product->brand->name}}</h2>
                    <h4>{{ $product->name}}</h4>
                    <li>
                        เลือกสี : 
                        <div class="list">
                          <span class="label label-default">Pacific Blue</span>
                          <span class="label label-default active">Silver</span>
                          <span class="label label-default">Graphite</span>
                          <span class="label label-default">Gold</span>
                        </div>
                    </li>
                    <li>
                        เลือกความจุ : 
                        <div class="list">
                          <span class="label label-default active">128 GB</span>
                          <span class="label label-default">256 GB</span>
                          <span class="label label-default">512 GB</span>
                        </div>
                    </li>
                    <li>
                        จำนวน : 
                        <div class="list">
                          <div class="wan-spinner wan-spinner-1">
                            <a href="javascript:void(0)" class="minus">-</a>
                              <input type="text" id="number" value="1">
                            <a href="javascript:void(0)" class="plus">+</a>
                          </div>
                        </div>
                    </li>

                    {{-- <button type="button" class="btn btn-primary btn-block">ติดต่อผู้ขาย</button> --}}
                    <button type="button" class="btn btn-primary btn-block show-modal" data-toggle="modal" data-target="#myModal">
                      ติดต่อผู้ขาย
                    </button>

                    <ul class="shared">
                        แบ่งปันกันเพื่อน :
                    </ul>
                    <ul class="shared">
                        <li><i class="fab fa-facebook-f"></i></li>
                        <li><i class="fab fa-twitter"></i></li>
                        <li><i class="fab fa-google-plus-g"></i></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="product-detail-2">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <h3>คุณสมบัติ</h3>
            </div>
            <div class="col-xs-12 col-md-12">
                <p>
                  {{ $product->description}}
                    {{-- iPhone 12 Pro Max มาพร้อม 5G ที่ให้คุณดาวน์โหลดไฟล์ใหญ่ๆ ระหว่างเดินทาง รวมทั้งสตรีมวิดีโอ HDR,1 จอภาพ Super Retina XDR ขนาด 6.7 นิ้วที่ใหญ่ขึ้น,2 Ceramic Shield ที่ทนต่อการตกกระแทกได้ดีขึ้น 4 เท่า,3 การถ่ายภาพในสภาวะแสงน้อยที่สวยงามน่าทึ่งด้วยระบบกล้องระดับโปรที่ดีที่สุดบน iPhone พร้อมด้วยช่วงซูมแบบออฟติคอล 5 เท่า, การบันทึก ตัดต่อ และเล่นวิดีโอระดับภาพยนตร์ในแบบ Dolby Vision, ภาพถ่ายบุคคลในโหมดกลางคืนและอีกระดับของประสบการณ์ AR พร้อมด้วยสแกนเนอร์ LiDAR, ชิพ A14 Bionic อันทรงพลัง และอุปกรณ์เสริม MagSafe ใหม่ เพื่อการยึดติดที่ง่ายดายและการชาร์จแบบไร้สายที่เร็วขึ้น4 พร้อมค้นพบความเ็นไปได้ที่น่าประทับใจแบบไม่สิ้นสุด

                    <h4>หัวข้อย่อยของคุณสมบัติ</h4>

                    <li>จอภาพ Super Retina XDR ขนาด 6.7 นิ้ว<sup>2</sup></li>
                    <li>Ceramic Shield ซึ่งแข็งแกร่งกว่ากระจกไหนๆ บนสมาร์ทโฟน</li>
                    <li>5G เพื่อการดาวน์โหลดที่เร็วสุดแรงและการสตรีมคุณภาพสูง1</li>
                    <li>ชิพที่เร็วที่สุดเท่าที่เคยมีมาในสมาร์ทโฟนอย่างชิพ A14 Bionic</li>
                    <li>ระบบกล้องระดับโปรที่ประกอบด้วยกล้องอัลตร้าไวด์, ไวด์และเทเลโฟโต้ ความละเอียด 12MP พร้อมช่วงซูมแบบออฟติคอล 5 เท่า, พร้อมโหมดกลางคืน, Deep Fusion, HDR อัจฉริยะ 3, Apple ProRAW,5 และการบันทึก HDR ระดับ 4K ในแบบ Dolby Vision</li>
                    <li>สแกนเนอร์ LiDAR เพื่อประสบการณ์ AR ที่ดียิ่งขึ้น และภาพถ่ายบุคคลในโหมดกลางคืน</li>
                    <li>กล้องหน้า TrueDepth ความละเอียด 12MP พร้อมโหมดกลางคืน และการบันทึก HDR ระดับ 4K ในแบบ Dolby Vision</li>
                    <li>ความสามารถในการทนน้ำที่ระดับ IP68 ชั้นแนวหน้าของอุตสาหกรรม6</li>
                    <li>รองรับอุปกรณ์เสริม MagSafe เพื่อการยึดติดที่ง่ายดายและการชาร์จแบบไร้สายที่เร็วขึ้น4</li>
                    <li>iOS 14 พร้อมวิดเจ็ตที่ได้รับการออกแบบมาใหม่บนหน้าจอโฮม คลังแอพแบบใหม่หมด แอพคลิป และอีกมากมาย</li> --}}
                </p>
            </div>
        </div>
    </div>
</section>

<section class="related-product">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-12">
        <center><h4>Related Products</h4></center>

        <div class="swiper-container swiper-container-3 mySwiper">
          <div class="swiper-wrapper">
            @foreach ($product_relate as $row) 
              <div class="swiper-slide" onclick="window.location.assign('/armor-x-product/{{ $row->id }}')">
                  <div class="box">
                      <img class="img-responsive" src="{{asset('storage/images/' . $row->cover_img)}}" alt="{{ $row->name }}">
                      <div class="text-1">
                          <p class="title">
                            {{ mb_strimwidth($row->name, 0, 50, "...", "UTF-8") }}
                          </p>
                      </div>
                      <div class="flex-box">
                          {{-- <div class="text-2">
                              รหัสสินค้า : 77-65501
                          </div> --}}
                          <a class="add-to-cart" href="#">ติดต่อผู้ขาย</a>
                      </div>
                  </div>
              </div>
            @endforeach

          </div>
          {{-- <div class="swiper-pagination"></div> --}}
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>

      </div>
      </div>
    </div>
  </div>
</section>

<div class="container" id="modal-contact-sale">
  <div class="row">
      <div class="col-md-12">
          <div class="modal-box">
              <!-- Modal -->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                          <div class="modal-body">
                              {{-- <div class="icon">
                                <i class="far fa-envelope"></i>
                              </div> --}}
                              <h3 class="title">สินค้าที่สนใจ</h3>
                              <p class="description">
                                <center><img class="img-responsive" src="{{asset('storage/images/' . $product->cover_img)}}" alt=""></center>

                                <h3>{{ $product->brand->name}}</h3>
                                <h4>{{ $product->name}}</h4>

                                <p>สี : Silver</p>
                                <p>ความจุ : 125 GB</p>
                                <p>จำนวน : <span id="contact-amount">1</span></p>
                              </p>
                              <div class="form-group">
                                <hr>
                                <h4>ข้อมูลผู้ติดต่อ : </h4>
                                  <input class="form-control user" type="text" placeholder="ชื่อผู้ติดต่อ">
                                  <input class="form-control user" type="text" placeholder="เบอร์โทรศัพท์">
                                  <input class="form-control user" type="email" placeholder="อีเมล">
                                  <textarea class="form-control user" placeholder="ข้อความ" rows="5"></textarea>
                              </div>
                              <button class="subscribe"><i class="fa fa-paper-plane"></i>ส่งถึงผู้ขาย</button>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://www.jqueryscript.net/demo/Minimal-Number-Picker-Plugin-For-jQuery-Wan-Spinner/build/wan-spinner.js"></script>
<script src="/js/vit-gallery.js"></script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
{{-- <script src="https://www.jqueryscript.net/demo/Responsive-Photo-Gallery-Slider-Plugin-jQuery-vit-gallery/app/scripts/main.js"></script> --}}

<script>

    $("#accordion-3 li .sub-title").click(function(e) {
        var id =$(this).attr("data-id");
        $currItem = $('[data-id=ul-' + id + ']');

        $(this).parents().siblings().find('ul').removeClass('active');
        $currItem.addClass('active');

        e.preventDefault();
    });

    var $gallery = $('.gallery');

    $gallery.vitGallery({
        autoplay: true
    });

    $('.plus').unbind('click').bind('click', function () {
      var value = $('#number').val();
      value++;
      $('#number').val(value);
    });
    $('.minus').unbind('click').bind('click', function () {
      var value = $('#number').val();
      if(value == 1){
        value = 1;
      }else{
        value--;
      }
      $('#number').val(value);
    });

    var swiper = new Swiper(".swiper-container-3", {
        slidesPerView: 1,
        spaceBetween: 5,
        navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
        },
        autoplay: {
          delay: 5500,
          disableOnInteraction: false,
        },
            pagination: {
            // el: ".swiper-pagination",
            clickable: true,
            },
            breakpoints: {
            "@0.00": {
                slidesPerView: 1,
                spaceBetween: 5,
            },
            "@0.75": {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            "@1.00": {
                slidesPerView: 3,
                spaceBetween: 15,
            },
            "@1.50": {
                slidesPerView: 4,
                spaceBetween: 20,
            },
            },
    });

    $( ".show-modal" ).click(function() {
      var qty = $("#number").val();
      $("#contact-amount").html(qty);
    });

    
  </script>
@endsection