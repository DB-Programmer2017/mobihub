@extends('layout/home-2')


{{-- Title Website --}}
@section('title', 'MOBIHUB | News Post Detail')

{{-- Link CSS --}}
@section('link')
<style>
    #news-detail-1 .box-sup,
    #news-detail-1 .box-main{
        border: 0.5px solid #bcbcbc;
        box-sizing: border-box;
        padding: 20px;
        margin-bottom: 50px;
        height: 900px;
        background-color: #fff;
    }
    #news-detail-1 .box-sup{

    }
    #news-detail-1 .breadcrumb {
        padding: 20px 15px;
        margin-bottom: 0px;
        list-style: none;
        background-color: #f5f5f5;
        border-radius: 4px;
    }
    #news-detail-1 .swiper-container {
        width: 100%;
        height: 810px;
    }
    #news-detail-1 .text-detail{
        text-align: start;
    }
    #news-detail-1 .text-detail h2{
        font-size: 14px;
        margin-top: 5px;
    }
    #news-detail-1 .text-detail h3{
        font-size: 12px;
        font-weight: 200;
        margin-top: 10px;
    }
    #news-detail-1 .text-detail p{
        font-size: 13px;
    }
    #news-detail-1 .text-detail ul{
        display: inline-flex;
        width: 100%;
        justify-content: flex-end;
        padding-top: 10px;
        position: absolute;
    }
    #news-detail-1 .text-detail ul li{
        display: inline-block;
        margin: 0 5px;
    }
    #news-detail-1 .text-detail ul img{
        width: 20px;
        height: 20px;
    }
</style>


@endsection


{{-- Body HTML --}}
@section('content')
    <section id="news-detail-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">News</a></li>
                        <li>Detail</li>
                    </ul>
                    <div class="col-xs-12 col-md-8">
                        <div class="box-main">
                            <img src="/image/mainpage/news/news-detail/new-main.jpg" class="img-responsive" alt="">
                            <div class="text">
                                <h2>
                                    Title
                                </h2>
                                <p>
                                    ในการพิมพ์และกราฟิกดีไซน์ ข้อความ ลอเร็มอิปซัม[1] (ละติน: lorem ipsum) เป็นข้อความแทนที่ (placeholder text) ที่ใช้สำหรับการแสดงลักษณะองค์ประกอบของกราฟิกหรือสื่อนำเสนอ เช่น ฟอนต์ การพิมพ์และการจัดหน้า และเพื่อลดความสนใจต่อข้อความที่นำมาแสดง ข้อความลอเร็มอิปซัมเป็นข้อความส่วนหนึ่งในภาษาละตินที่แต่งโดยซิเซโรโดยมีการตัดต่อคำให้ดูเหมือนเป็นข้อความที่ไม่มีความหมายและไม่ใช่ภาษาละตินที่ถูกต้อง[1]
                                </p>
                                <p>
                                    แม้ว่าข้อความลอเร็มอิปซัมจะก่อให้เกิดข้อสังเกตว่ามีลักษณะเหมือนภาษาละตินคลาสสิก แต่ข้อความดังกล่าวก็หามีเจตนาที่จะมีความหมายไม่ ในเอกสารต่าง ๆ ถ้าข้อความสามารถอ่านได้ บุคคลจะพุ่งความสนใจไปยังข้อความเสียจนไม่สนใจการจัดหน้าและรูปแบบ ดังนี้ผู้พิมพ์จึงใช้ข้อความลอเร็มอิปซัมเพื่อแสดงไทป์เฟซหรือลักษณะการออกแบบ เพื่อให้บุคคลพุ่งความสนใจไปที่รูปแบบการพิมพ์ มิใช่ข้อความ
                                </p>
                                <p>
                                    ในการพิมพ์และกราฟิกดีไซน์ ข้อความ ลอเร็มอิปซัม[1] (ละติน: lorem ipsum) เป็นข้อความแทนที่ (placeholder text) ที่ใช้สำหรับการแสดงลักษณะองค์ประกอบของกราฟิกหรือสื่อนำเสนอ เช่น ฟอนต์ การพิมพ์และการจัดหน้า และเพื่อลดความสนใจต่อข้อความที่นำมาแสดง ข้อความลอเร็มอิปซัมเป็นข้อความส่วนหนึ่งในภาษาละตินที่แต่งโดยซิเซโรโดยมีการตัดต่อคำให้ดูเหมือนเป็นข้อความที่ไม่มีความหมายและไม่ใช่ภาษาละตินที่ถูกต้อง[1]
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <div class="box-sup">
                            <p>Recent Posts</p>
                            <!-- Swiper -->
                            <div class="swiper-container mySwiper">
                                <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                   <div class="card">
                                       <img src="/image/mainpage/news/news-detail/image 48.jpg" class="img-responsive" alt="">
                                       <div class="text-detail">
                                           <ul>
                                               <li> <img src="/image/mainpage/news/news-detail/icon/facebook.png" alt=""> </li>
                                               <li><img src="/image/mainpage/news/news-detail/icon/instagram.png"  alt=""> </li>
                                           </ul>
                                           <h2>
                                                Title
                                           </h2>
                                           <h3>
                                                Posted: December 15, 2020
                                           </h3>
                                           <p>
                                               Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                           </p>
                                       </div>
                                   </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img src="/image/mainpage/news/news-detail/image 53.jpg" class="img-responsive" alt="">
                                        <div class="text-detail">
                                            <ul>
                                                <li> <img src="/image/mainpage/news/news-detail/icon/facebook.png" alt=""> </li>
                                                <li><img src="/image/mainpage/news/news-detail/icon/instagram.png"  alt=""> </li>
                                            </ul>
                                            <h2>
                                                 Title
                                            </h2>
                                            <h3>
                                                 Posted: December 15, 2020
                                            </h3>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img src="/image/mainpage/news/news-detail/image 55.jpg" class="img-responsive" alt="">
                                        <div class="text-detail">
                                            <ul>
                                                <li> <img src="/image/mainpage/news/news-detail/icon/facebook.png" alt=""> </li>
                                                <li><img src="/image/mainpage/news/news-detail/icon/instagram.png"  alt=""> </li>
                                            </ul>
                                            <h2>
                                                 Title
                                            </h2>
                                            <h3>
                                                 Posted: December 15, 2020
                                            </h3>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">Slide 4</div>
                                <div class="swiper-slide">Slide 5</div>
                                <div class="swiper-slide">Slide 6</div>
                                <div class="swiper-slide">Slide 7</div>
                                <div class="swiper-slide">Slide 8</div>
                                <div class="swiper-slide">Slide 9</div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
{{-- Body Script --}}
@section('script')
<script src="/js/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
      direction: "vertical",
      slidesPerView: 3,
        spaceBetween: 30,
        slidesPerGroup: 3,
        loop: true,
        loopFillGroupWithBlank: true,
      mousewheel: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script>

      <!--Script. Do not touch!-->

@endsection
