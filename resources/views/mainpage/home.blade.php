@extends('layout/home-2')

{{-- Title Website --}}
@section('title', 'MOBIHUB | Home')

{{-- Link CSS --}}
@section('link')
<link rel="stylesheet" href="/css/mainpage/home.css">

@endsection

{{-- Body HTML --}}
@section('content')
     <!-- Swiper -->
    <div class="swiper-container swiper-container-0 mySwiper">
        <div class="swiper-wrapper">
            
            <div class="swiper-slide">
                <picture>
                    <source srcset="/image/home/Group 313.png" media="(min-width: 1200px)">
                    <source srcset="/image/home/otterbox-mobile.jpg" media="(min-width: 800px)">
                    <source srcset="/image/home/otterbox-s-mobile.jpg" media="(min-width: 200px)">
                    <img src="/image/home/Group 313.png" alt="MDN Web Docs">
                 </picture>
            </div>
            <div class="swiper-slide">
                <picture>
                    <source srcset="/image/home/Untitled-1.jpg" media="(min-width: 1200px)">
                    <source srcset="/image/home/armor-x-mobile.jpg" media="(min-width: 800px)">
                        <source srcset="/image/home/armor-x-s-mobile.jpg" media="(min-width: 200px)">
                    <img src="/image/home/Untitled-1.jpg" alt="MDN Web Docs">
                 </picture>
            </div>
            <div class="swiper-slide">
                <picture>
                    <source srcset="/image/home/Group321.jpg" media="(min-width: 1200px)">
                    <source srcset="/image/home/mobihub-mobile.jpg" media="(min-width: 800px)">
                        <source srcset="/image/home/mobihub-s-mobile.jpg" media="(min-width: 200px)">
                    <img src="/image/home/Group321.jpg" alt="MDN Web Docs">
                 </picture>
            </div>

        </div>
        <div class="swiper-pagination"></div>
    </div>

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
                <div class="col-xs-12 col-md-6">
                    <img src="/image/home/001.png" width="100%">
                </div>

                <div class="col-xs-12 col-md-6">
                    <a href="/armor-x"><img src="/image/home/002.png" width="100%"></a>
                </div>

                <div class="col-xs-12 col-12">
                   <img src="/image/home/003.png" width="100%">
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
                        <div class="swiper-slide">
                            <div class="box">
                                <img class="img-responsive" src="/image/home/product/product2.jpg" alt="">
                                <div class="text-1">
                                    <h3>
                                        IPHONE 12 PRO / 12 PRO MAX CASE
                                    </h3>
                                    <h2>
                                        SHOCKPROOF DROP PROOF RUGGED
                                        COVER W/ X-MOUNT & CARABINER
                                    </h2>
                                </div>
                                <div class="flex-box">
                                    <div class="text-2">
                                        รหัสสินค้า : 77-65501
                                    </div>
                                    <button class="btn btn-primary" type="button">ติดต่อผู้ขาย</button>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="box">
                                <img class="img-responsive" src="/image/home/product/product3.jpg" alt="">
                                <div class="text-1">
                                    <h3>
                                        Gaming
                                    </h3>
                                    <h2>
                                        RAM-B-149Z-UN7U
                                    </h2>
                                </div>
                                <div class="flex-box">
                                    <div class="text-2">
                                        รหัสสินค้า : 77-65501
                                    </div>
                                    <button class="btn btn-primary" type="button">ติดต่อผู้ขาย</button>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="box">
                                <img class="img-responsive" src="/image/home/product/product4.jpg" alt="">
                                <div class="text-1">
                                    <h3>
                                        AirPods
                                    </h3>
                                    <h2>
                                        Ispra Series Case
                                    </h2>
                                </div>
                                <div class="flex-box">
                                    <div class="text-2">
                                        รหัสสินค้า : 77-65501
                                    </div>
                                    <button class="btn btn-primary" type="button">ติดต่อผู้ขาย</button>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="box">
                                <img class="img-responsive" src="/image/home/product/product5.jpg" alt="">
                                <div class="text-1">
                                    <h3>
                                        มอเตอร์ไซต์
                                    </h3>
                                    <h2>
                                        RAM-B-149Z-UN7U
                                    </h2>
                                </div>
                                <div class="flex-box">
                                    <div class="text-2">
                                        รหัสสินค้า : 77-65501
                                    </div>
                                    <button class="btn btn-primary" type="button">ติดต่อผู้ขาย</button>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="box">
                                <img class="img-responsive" src="/image/home/product/product1.jpg" alt="">
                                <div class="text-1">
                                    <h3>
                                        Bag mounting
                                    </h3>
                                    <h2>
                                       Otter Box case
                                    </h2>
                                </div>
                                <div class="flex-box">
                                    <div class="text-2">
                                        รหัสสินค้า : 77-65501
                                    </div>
                                    <button class="btn btn-primary" type="button">ติดต่อผู้ขาย</button>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="box">
                                <img class="img-responsive" src="/image/home/product/product1.jpg" alt="">
                                <div class="text-1">
                                    <h3>
                                        IPHONE 12 PRO / 12 PRO MAX CASE
                                    </h3>
                                    <h2>
                                        SHOCKPROOF DROP PROOF RUGGED
                                        COVER W/ X-MOUNT & CARABINER
                                    </h2>
                                </div>
                                <div class="flex-box">
                                    <div class="text-2">
                                        รหัสสินค้า : 77-65501
                                    </div>
                                    <button class="btn btn-primary" type="button">ติดต่อผู้ขาย</button>
                                </div>
                            </div>
                        </div>
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
                            <div class="swiper-slide">
                                <div class="box-news">
                                    <div class="col-md-4">
                                        <img src="https://picsum.photos/450/450?grayscale?random=1">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="text-1">
                                            <h2>
                                                hello
                                            </h2>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, nobis dicta dignissimos fuga porro molestias consectetur officiis! Temporibus odit nulla excepturi voluptatem ea voluptas blanditiis? Animi eveniet enim repellendus ipsam!
                                            </p>
                                            <p>
                                                <i class="far fa-heart"></i> Love &nbsp; <i class="fas fa-share-alt"></i> Share &nbsp; <i class="fas fa-eye"></i> : 220
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-news">
                                    <div class="col-md-4">
                                        <img src="https://picsum.photos/450/450?grayscale?random=1">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="text-1">
                                            <h2>
                                                hello
                                            </h2>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, nobis dicta dignissimos fuga porro molestias consectetur officiis! Temporibus odit nulla excepturi voluptatem ea voluptas blanditiis? Animi eveniet enim repellendus ipsam!
                                            </p>
                                            <p>
                                                <i class="far fa-heart"></i> Love &nbsp; <i class="fas fa-share-alt"></i> Share &nbsp; <i class="fas fa-eye"></i> : 220
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-news">
                                    <div class="col-md-4">
                                        <img src="https://picsum.photos/450/450?grayscale?random=1">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="text-1">
                                            <h2>
                                                hello
                                            </h2>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, nobis dicta dignissimos fuga porro molestias consectetur officiis! Temporibus odit nulla excepturi voluptatem ea voluptas blanditiis? Animi eveniet enim repellendus ipsam!
                                            </p>
                                            <p>
                                                <i class="far fa-heart"></i> Love &nbsp; <i class="fas fa-share-alt"></i> Share &nbsp; <i class="fas fa-eye"></i> : 220
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-news">
                                    <div class="col-md-4">
                                        <img src="https://picsum.photos/450/450?grayscale?random=2">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="text-1">
                                            <h2>
                                                hello
                                            </h2>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, nobis dicta dignissimos fuga porro molestias consectetur officiis! Temporibus odit nulla excepturi voluptatem ea voluptas blanditiis? Animi eveniet enim repellendus ipsam!
                                            </p>
                                            <p>
                                                <i class="far fa-heart"></i> Love &nbsp; <i class="fas fa-share-alt"></i> Share &nbsp; <i class="fas fa-eye"></i> : 220
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-news">
                                    <div class="col-md-4">
                                        <img src="https://picsum.photos/450/450?grayscale?random=2">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="text-1">
                                            <h2>
                                                hello
                                            </h2>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, nobis dicta dignissimos fuga porro molestias consectetur officiis! Temporibus odit nulla excepturi voluptatem ea voluptas blanditiis? Animi eveniet enim repellendus ipsam!
                                            </p>
                                            <p>
                                                <i class="far fa-heart"></i> Love &nbsp; <i class="fas fa-share-alt"></i> Share &nbsp; <i class="fas fa-eye"></i> : 220
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-news">
                                    <div class="col-md-4">
                                        <img src="https://picsum.photos/450/450?grayscale?random=3">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="text-1">
                                            <h2>
                                                hello
                                            </h2>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, nobis dicta dignissimos fuga porro molestias consectetur officiis! Temporibus odit nulla excepturi voluptatem ea voluptas blanditiis? Animi eveniet enim repellendus ipsam!
                                            </p>
                                            <p>
                                                <i class="far fa-heart"></i> Love &nbsp; <i class="fas fa-share-alt"></i> Share &nbsp; <i class="fas fa-eye"></i> : 220
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-news">
                                    <div class="col-md-4">
                                        <img src="https://picsum.photos/450/450?grayscale?random=3">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="text-1">
                                            <h2>
                                                hello
                                            </h2>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, nobis dicta dignissimos fuga porro molestias consectetur officiis! Temporibus odit nulla excepturi voluptatem ea voluptas blanditiis? Animi eveniet enim repellendus ipsam!
                                            </p>
                                            <p>
                                                <i class="far fa-heart"></i> Love &nbsp; <i class="fas fa-share-alt"></i> Share &nbsp; <i class="fas fa-eye"></i> : 220
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-news">
                                    <div class="col-md-4">
                                        <img src="https://picsum.photos/450/450?grayscale?random=4">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="text-1">
                                            <h2>
                                                hello
                                            </h2>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, nobis dicta dignissimos fuga porro molestias consectetur officiis! Temporibus odit nulla excepturi voluptatem ea voluptas blanditiis? Animi eveniet enim repellendus ipsam!
                                            </p>
                                            <p>
                                                <i class="far fa-heart"></i> Love &nbsp; <i class="fas fa-share-alt"></i> Share &nbsp; <i class="fas fa-eye"></i> : 220
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-news">
                                    <div class="col-md-4">
                                        <img src="https://picsum.photos/450/450?grayscale?random=4">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="text-1">
                                            <h2>
                                                hello
                                            </h2>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, nobis dicta dignissimos fuga porro molestias consectetur officiis! Temporibus odit nulla excepturi voluptatem ea voluptas blanditiis? Animi eveniet enim repellendus ipsam!
                                            </p>
                                            <p>
                                                <i class="far fa-heart"></i> Love &nbsp; <i class="fas fa-share-alt"></i> Share &nbsp; <i class="fas fa-eye"></i> : 220
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-news">
                                    <div class="col-md-4">
                                        <img src="https://picsum.photos/450/450?grayscale?random=5">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="text-1">
                                            <h2>
                                                hello
                                            </h2>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, nobis dicta dignissimos fuga porro molestias consectetur officiis! Temporibus odit nulla excepturi voluptatem ea voluptas blanditiis? Animi eveniet enim repellendus ipsam!
                                            </p>
                                            <p>
                                                <i class="far fa-heart"></i> Love &nbsp; <i class="fas fa-share-alt"></i> Share &nbsp; <i class="fas fa-eye"></i> : 220
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-news">
                                    <div class="col-md-4">
                                        <img src="https://picsum.photos/450/450?grayscale?random=5">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="text-1">
                                            <h2>
                                                hello
                                            </h2>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, nobis dicta dignissimos fuga porro molestias consectetur officiis! Temporibus odit nulla excepturi voluptatem ea voluptas blanditiis? Animi eveniet enim repellendus ipsam!
                                            </p>
                                            <p>
                                                <i class="far fa-heart"></i> Love &nbsp; <i class="fas fa-share-alt"></i> Share &nbsp; <i class="fas fa-eye"></i> : 220
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-news">
                                    <div class="col-md-4">
                                        <img src="https://picsum.photos/450/450?grayscale?random=6">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="text-1">
                                            <h2>
                                                hello
                                            </h2>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, nobis dicta dignissimos fuga porro molestias consectetur officiis! Temporibus odit nulla excepturi voluptatem ea voluptas blanditiis? Animi eveniet enim repellendus ipsam!
                                            </p>
                                            <p>
                                                <i class="far fa-heart"></i> Love &nbsp; <i class="fas fa-share-alt"></i> Share &nbsp; <i class="fas fa-eye"></i> : 220
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-news">
                                    <div class="col-md-4">
                                        <img src="https://picsum.photos/450/450?grayscale?random=6">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="text-1">
                                            <h2>
                                                hello
                                            </h2>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, nobis dicta dignissimos fuga porro molestias consectetur officiis! Temporibus odit nulla excepturi voluptatem ea voluptas blanditiis? Animi eveniet enim repellendus ipsam!
                                            </p>
                                            <p>
                                                <i class="far fa-heart"></i> Love &nbsp; <i class="fas fa-share-alt"></i> Share &nbsp; <i class="fas fa-eye"></i> : 220
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-news">
                                    <div class="col-md-4">
                                        <img src="https://picsum.photos/450/450?grayscale?random=1">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="text-1">
                                            <h2>
                                                hello
                                            </h2>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, nobis dicta dignissimos fuga porro molestias consectetur officiis! Temporibus odit nulla excepturi voluptatem ea voluptas blanditiis? Animi eveniet enim repellendus ipsam!
                                            </p>
                                            <p>
                                                <i class="far fa-heart"></i> Love &nbsp; <i class="fas fa-share-alt"></i> Share &nbsp; <i class="fas fa-eye"></i> : 220
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-news">
                                    <div class="col-md-4">
                                        <img src="https://picsum.photos/450/450?grayscale?random=1">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="text-1">
                                            <h2>
                                                hello
                                            </h2>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, nobis dicta dignissimos fuga porro molestias consectetur officiis! Temporibus odit nulla excepturi voluptatem ea voluptas blanditiis? Animi eveniet enim repellendus ipsam!
                                            </p>
                                            <p>
                                                <i class="far fa-heart"></i> Love &nbsp; <i class="fas fa-share-alt"></i> Share &nbsp; <i class="fas fa-eye"></i> : 220
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-news">
                                    <div class="col-md-4">
                                        <img src="https://picsum.photos/450/450?grayscale?random=1">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="text-1">
                                            <h2>
                                                hello
                                            </h2>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, nobis dicta dignissimos fuga porro molestias consectetur officiis! Temporibus odit nulla excepturi voluptatem ea voluptas blanditiis? Animi eveniet enim repellendus ipsam!
                                            </p>
                                            <p>
                                                <i class="far fa-heart"></i> Love &nbsp; <i class="fas fa-share-alt"></i> Share &nbsp; <i class="fas fa-eye"></i> : 220
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-news">
                                    <div class="col-md-4">
                                        <img src="https://picsum.photos/450/450?grayscale?random=1">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="text-1">
                                            <h2>
                                                hello
                                            </h2>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, nobis dicta dignissimos fuga porro molestias consectetur officiis! Temporibus odit nulla excepturi voluptatem ea voluptas blanditiis? Animi eveniet enim repellendus ipsam!
                                            </p>
                                            <p>
                                                <i class="far fa-heart"></i> Love &nbsp; <i class="fas fa-share-alt"></i> Share &nbsp; <i class="fas fa-eye"></i> : 220
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-news">
                                    <div class="col-md-4">
                                        <img src="https://picsum.photos/450/450?grayscale?random=1">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="text-1">
                                            <h2>
                                                hello
                                            </h2>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, nobis dicta dignissimos fuga porro molestias consectetur officiis! Temporibus odit nulla excepturi voluptatem ea voluptas blanditiis? Animi eveniet enim repellendus ipsam!
                                            </p>
                                            <p>
                                                <i class="far fa-heart"></i> Love &nbsp; <i class="fas fa-share-alt"></i> Share &nbsp; <i class="fas fa-eye"></i> : 220
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-news">
                                    <div class="col-md-4">
                                        <img src="https://picsum.photos/450/450?grayscale?random=1">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="text-1">
                                            <h2>
                                                hello
                                            </h2>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, nobis dicta dignissimos fuga porro molestias consectetur officiis! Temporibus odit nulla excepturi voluptatem ea voluptas blanditiis? Animi eveniet enim repellendus ipsam!
                                            </p>
                                            <p>
                                                <i class="far fa-heart"></i> Love &nbsp; <i class="fas fa-share-alt"></i> Share &nbsp; <i class="fas fa-eye"></i> : 220
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
              slidesPerView: 1,
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


@endsection
