@extends('layout/home-2')

{{-- Title Website --}}
@section('title', 'MOBIHUB | Home')

{{-- Link CSS --}}
@section('link')
<link rel="stylesheet" href="/css/mainpage/home.css">
<style>
     h3,h4,h2,h1,p  {
        font-family: 'Prompt';
    }

    .glyphicon-chevron-left:before{
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        content:"\f053";
    }
    .glyphicon-chevron-right:before{
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        content:"\f054";
    }
    
    .carousel-fade .carousel-inner .item {
        opacity: 0;
        transition-property: opacity;
    }

    .carousel-fade .carousel-inner .active {
        opacity: 1;
    }

.carousel-fade .carousel-inner .active.left,
.carousel-fade .carousel-inner .active.right {
  left: 0;
  opacity: 0;
  z-index: 1;
}

.carousel-fade .carousel-inner .next.left,
.carousel-fade .carousel-inner .prev.right {
  opacity: 1;
}

.carousel-fade .carousel-control {
  z-index: 2;
}

@media all and (transform-3d), (-webkit-transform-3d) {
    .carousel-fade .carousel-inner > .item.next,
    .carousel-fade .carousel-inner > .item.active.right {
      opacity: 0;
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.prev,
    .carousel-fade .carousel-inner > .item.active.left {
      opacity: 0;
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.next.left,
    .carousel-fade .carousel-inner > .item.prev.right,
    .carousel-fade .carousel-inner > .item.active {
      opacity: 1;
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
    }
}
</style>
@endsection

{{-- Body HTML --}}
@section('content')
    <section id="banner-section">
        <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-touch="true" data-interval="4000">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            {{-- <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li> --}}
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            {{-- <div class="item active">
              <img src="la.jpg" alt="Los Angeles" style="width:100%;">
            </div>

            <div class="item">
              <img src="chicago.jpg" alt="Chicago" style="width:100%;">
            </div>

            <div class="item">
              <img src="ny.jpg" alt="New york" style="width:100%;">
            </div> --}}
          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            {{-- <span class="glyphicon"><i class="fas fa-chevron-right"></i></span> --}}
            <span class="sr-only">Next</span>
          </a>
        </div>
    </section>

    <section class="swipper-sf">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="swiper-container swiper-container-1 mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="/image/home/picture_section_2.png"></div>
                            <div class="swiper-slide"><img src="https://picsum.photos/1080/450?grayscale?random=2"></div>
                            <div class="swiper-slide"><img src="https://picsum.photos/1080/450?grayscale?random=3"></div>
                            <div class="swiper-slide"><img src="https://picsum.photos/1080/450?grayscale?random=4"></div>
                            <div class="swiper-slide"><img src="https://picsum.photos/1080/450?grayscale?random=5"></div>
                            <div class="swiper-slide"><img src="https://picsum.photos/1080/450?grayscale?random=6"></div>
                            <div class="swiper-slide"><img src="https://picsum.photos/1080/450?grayscale?random=7"></div>
                            <div class="swiper-slide"><img src="https://picsum.photos/1080/450?grayscale?random=8"></div>
                            <div class="swiper-slide"><img src="https://picsum.photos/1080/450?grayscale?random=9"></div>
                        </div>
                        <div class="swiper-pagination"></div>
                        </div>
                </div>
                <div class="col-xs-12 col-md-6">
                        <div class="swiper-container swiper-container-2 mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="text">
                                        <h3>
                                            Effortless, Intuitive,
                                        </h3>
                                        <h2>
                                            Heading
                                        </h2>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, quaerat reprehenderit nesciunt optio rerum, delectus nulla eius illum sint inventore recusandae.
                                        </p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="text">
                                        <h3>
                                            Simplify Mobility Management and Gain Visibility Across All Devices
                                        </h3>

                                        <p>
                                            Device management can be complex and cumbersome. For businesses adopting diverse mobile s, it takes several IT hours for provisioning, management and maintaining security.
                                            visibility and streamlines IT controls across these devices.
                                        </p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="text">
                                        <h3>
                                            Bring Your Frontline Employees Into Spotlight
                                        </h3>
                                        <p>
                                            Empower your frontline workers with mobile devices and help them work with more efficiency and fewer distractions. Support them in offering the best service to your customers.
                                            within or outside the conventional office perimeter with ease.
                                        </p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="text">
                                        <h3>
                                            An Infrastructure That Enables You To Achieve Quick Global Rollout
                                        </h3>
                                        <p>
                                            For ambitious companies around the world with a fast-growing device count, Scalefusion makes Device Management simple and effortless. We are an ISO/IEC 27001:2013 certified company and GDPR compliant product that enables you to roll out MDM solution across your operations, locations and teams without hassle.

                                            Couple that with our acclaimed support and you are set. Be it a single-country deployment or a global rollout across geographies, we've got you covered.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="col-brands">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 box-1">
                    <a href="/otterbox"><img src="/image/home/001.png" width="100%"></a>
                </div>

                <div class="col-xs-12 col-md-6 box-2">
                    <a href="/armor-x"><img src="/image/home/002.png" width="100%"></a>
                </div>

                <div class="col-xs-12 col-12 box-3">
                    <a href="/rammounts"><img src="/image/home/003.png" width="100%"></a>
                </div>
            </div>
        </div>
    </section>

    <section class="col-product">
        <div class="container">
            <div class="row">
                <div class="text">
                    <h2>
                        สินค้าแนะนำ
                    </h2>
                </div>
                <!-- Swiper -->
                <div class="swiper-container swiper-container-3 mySwiper">
                    <div class="swiper-wrapper">
                        @foreach ($recommend as $row)
                            <div class="swiper-slide"
                            onclick="window.open('/{{Illuminate\Support\Str::lower($row->dealer->name) }}-product/{{ $row->slug }}')">
                                <div class="box">
                                    <img class="img-responsive" src="{{asset('storage/images/' . $row->cover_img)}}" alt="">
                                    <div class="text-1">
                                        <h3>
                                            {{ $row->product_tag }}
                                        </h3>
                                        <h2>
                                            {{ mb_strimwidth($row->name, 0, 20, "...", "UTF-8") }}
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                                
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="col-news">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <img src="/image/home/shutterstock_1712203645-news2.jpg" class="pic-news" width="100%" alt="">
                </div>
                <div class="box">
                    <h2>
                        Symmetry Series Clear Case
                    </h2>
                    <h3>
                        It has survived not only five centuries, but also the leap into electronic..
                    </h3>
                    <p>
                        <i class="far fa-heart"></i> Love &nbsp; <i class="fas fa-share-alt"></i> Share &nbsp; <i class="fas fa-eye"></i> : 220
                    </p>
                </div>
                <div class="col-xs-12 col-md-6 text-news">
                    <p>
                        ข่าวสาร
                    </p>
                    <div class="swiper-container swiper-container-4 mySwiper">
                        <div class="swiper-wrapper">
                        @foreach ($news as $row)
                            <div class="swiper-slide">
                                <div class="box-news" onclick="window.location.assign('news-detail/{{$row->id}}')">
                                    <div class="col-md-4">
                                        <img src="{{asset('storage/images/' . $row->cover_img)}}">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="text-1">
                                            <h2>
                                                {{ $row->name }}
                                            </h2>
                                            <p>
                                                {{ $row->title }}
                                            </p>
                                            <p>
                                                <i class="far fa-heart"></i> like &nbsp; <i class="fas fa-share-alt"></i> Share &nbsp; <i class="fas fa-eye"></i> : 220
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
  
                        </div>
                        <div class="swiper-pagination"></div>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Swiper JS -->
    <script src="/js/swiper-bundle.min.js"></script>

     <!-- Initialize Swiper -->
     <script>
        var swiper = new Swiper(".swiper-container-0", {
            pagination: {
                el: ".swiper-pagination",
                dynamicBullets: true,
            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
                speed: 1,
            },
        });
        </script>
        <script>
        var swiper = new Swiper(".swiper-container-1", {
            direction: "vertical",
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                dynamicBullets: true,
            },
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            });
        </script>
        <script>
        var swiper = new Swiper(".swiper-container-2", {
            effect: "fade",
            pagination: {
                el: ".swiper-pagination",
                dynamicBullets: true,
            },
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            });
        </script>
        <script>
        var swiper = new Swiper(".swiper-container-3", {
            slidesPerView: 1,
            spaceBetween: 5,
            pagination: {
            el: ".swiper-pagination",
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
        </script>
         <script>
            var swiper = new Swiper(".swiper-container-4", {
              direction: "vertical",
              slidesPerView: 3,
              spaceBetween: 30,
              mousewheel: true,
              pagination: {
                el: ".swiper-pagination",
                clickable: true,
                dynamicBullets: true,
            },
            });
          </script>
@endsection

@section('script')

{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> --}}
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}

<script>
    //$(document).ready(function($){
        var screenWidth = screen.width;
        var screenHeight = screen.height;

        // $('#device').html(screenWidth);

        $.get('/homepage/' + screenWidth +'/ajax_slide', function (data) {
            //alert();

            if(data.length>0) {
                for(i=0;i<data.length;i++) {
                    // alert(data[i]['id']);
                    if(i == 0){
                        var active = 'active';
                    }else{
                        var active = '';
                    }

                   // $('#banner-section .swiper-wrapper').append('<div class="swiper-slide"><picture><img src="{{url('storage/images/')}}/'+data[i]['cover_img'] +'" ></picture></div>');

                    $('.carousel-indicators').append('<li data-target="#myCarousel" data-slide-to="'+i+'" class="'+active+'"></li>');
                    $('.carousel-inner').append('<div class="item '+active+'"><img src="{{url('storage/images/')}}/'+data[i]['cover_img'] +'" alt="Los Angeles" style="width:100%;"></div>');

                }
            }
        });

    //});
</script>

@endsection
