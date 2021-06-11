@extends('layout/home-2')

{{-- Title Website --}}
@section('title', 'MOBIHUB | Home')

{{-- Link CSS --}}
@section('link')
<link
rel="stylesheet"
href="https://unpkg.com/swiper/swiper-bundle.min.css"
/>
{{-- <link rel="stylesheet" href="/css/bootstrap.min.css"> --}}
{{-- <link rel="stylesheet" href="/css/bootstrap5.min.css">
<link href="http://fonts.cdnfonts.com/css/prompt" rel="stylesheet"> --}}

@endsection

{{-- Body HTML --}}
@section('content')
     <!-- Swiper -->
    <div class="swiper-container swiper-container-0 mySwiper">
        <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="/image/home/Group 313.png"></div>
        <div class="swiper-slide"><img src="https://picsum.photos/1080/450?random=1"></div>
        <div class="swiper-slide"><img src="https://picsum.photos/1080/450?random=2"></div>
        <div class="swiper-slide"><img src="https://picsum.photos/1080/450?random=3"></div>
        <div class="swiper-slide"><img src="https://picsum.photos/1080/450?random=4"></div>
        <div class="swiper-slide"><img src="https://picsum.photos/1080/450?random=5"></div>
        <div class="swiper-slide"><img src="https://picsum.photos/1080/450?random=6"></div>
        <div class="swiper-slide"><img src="https://picsum.photos/1080/450?random=7"></div>
        <div class="swiper-slide"><img src="https://picsum.photos/1080/450?random=8"></div>
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
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, quaerat reprehenderit nesciunt optio obcaecati a recusandae ipsum nihil officia accusamus esse? Sapiente rerum, delectus nulla eius illum sint inventore recusandae.
                                        </p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="text">
                                        <h3>
                                            Simplify Mobility Management and Gain Visibility Across All Devices
                                        </h3>

                                        <p>
                                            Device management can be complex and cumbersome. For businesses adopting diverse mobile devices with different operating systems and ownership models, it takes several IT hours for provisioning, management and maintaining security.

                                            Scalefusion helps in gaining visibility and streamlines IT controls across these devices.
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

                                            Provision the devices used by your field force with business apps and content. Empower your frontline workforce to get in touch, share files and operate within or outside the conventional office perimeter with ease.
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
                    <img src="/image/home/002.png" width="100%">
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
                    <div class="swiper-slide">Slide 1</div>
                    <div class="swiper-slide">Slide 2</div>
                    <div class="swiper-slide">Slide 3</div>
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
    </section>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

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
@endsection

@section('script')


@endsection
