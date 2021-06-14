@extends('layout/home-2')


{{-- Title Website --}}
@section('title', 'MOBIHUB | News Post')

{{-- Link CSS --}}
@section('link')
<link rel="stylesheet" href="/css/mainpage/news.css">


@endsection


{{-- Body HTML --}}
@section('content')

    <section class="panel-top-breadcrumb-news panel-top-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <h1>ข่าวสาร</h1>
                    <li><a href="/" class="active">Mobihub</a></li>
                    <li><a href="#" >ข่าวสาร</a></li>
                </div>
            </div>
        </div>
    </section>

    <section class="section-news">
        <div class="container latest-news-box">
            <div class="row">
                {{-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>

                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="col-xs-12 col-md-7">
                                <img class="d-block" src="{{ asset('image/mainpage/news/accessories.png') }}" alt="Latest News">
                            </div>
                            <div class="col-xs-12 col-md-5">
                                <h2>Treat Computer System If we start project</h2>
                                <div class="date-and-author">
                                    <ul>
                                        <li><i class="far fa-calendar-alt"></i> May 2020</li>
                                        <li><i class="fas fa-user"></i> Admin</li>
                                    </ul>
                                </div>
                                <p>
                                    It has survived not only five centuries, but also the leap into electronic. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an Lorem Ipsum is simply dummy…
                                </p>
                                <span class="label label-default news-tag">Tecnology</span>
                                <a href="#" class="btn btn-link read-more">อ่านเพิ่มเติม &rarr;</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-xs-12 col-md-7">
                                <img class="d-block" src="{{ asset('image/mainpage/news/Rectangle 191.png') }}" alt="Latest News">
                            </div>
                            <div class="col-xs-12 col-md-5">
                                <h2>Treat Computer System If we start project</h2>
                                <div class="date-and-author">
                                    <ul>
                                        <li><i class="far fa-calendar-alt"></i> May 2020</li>
                                        <li><i class="fas fa-user"></i> Admin</li>
                                    </ul>
                                </div>
                                <p>
                                    It has survived not only five centuries, but also the leap into electronic. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an Lorem Ipsum is simply dummy…
                                </p>
                                <span class="label label-default news-tag">Tecnology</span>
                                <a href="#" class="btn btn-link read-more">อ่านเพิ่มเติม &rarr;</a>
                            </div>
                        </div>


                    </div>

                    next and previous button
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div> --}}
                <!-- Swiper -->
                <div class="swiper-container mySwiper">
                    <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="main-news">
                            <div class="contianer">
                                <div class="row">
                                    <div class="col-xs-12 col-md-7">
                                        <img class="d-block" src="{{ asset('image/mainpage/news/Rectangle 191.png') }}" alt="Latest News">
                                    </div>
                                    <div class="col-xs-12 col-md-5">
                                        <h2>Treat Computer System If we start project</h2>
                                        <div class="date-and-author">
                                            <ul>
                                                <li><i class="far fa-calendar-alt"></i> May 2020</li>
                                                <li><i class="fas fa-user"></i> Admin</li>
                                            </ul>
                                        </div>
                                        <p>
                                            It has survived not only five centuries, but also the leap into electronic. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an Lorem Ipsum is simply dummy…
                                        </p>
                                        <span class="label label-default news-tag">Tecnology</span>
                                        <a href="#" class="btn btn-link read-more">อ่านเพิ่มเติม &rarr;</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="main-news">
                            <div class="contianer">
                                <div class="row">
                                    <div class="col-xs-12 col-md-7">
                                        <img class="d-block" src="{{ asset('image/mainpage/news/Rectangle 191.png') }}" alt="Latest News">
                                    </div>
                                    <div class="col-xs-12 col-md-5">
                                        <h2>Treat Computer System If we start project</h2>
                                        <div class="date-and-author">
                                            <ul>
                                                <li><i class="far fa-calendar-alt"></i> May 2020</li>
                                                <li><i class="fas fa-user"></i> Admin</li>
                                            </ul>
                                        </div>
                                        <p>
                                            It has survived not only five centuries, but also the leap into electronic. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an Lorem Ipsum is simply dummy…
                                        </p>
                                        <span class="label label-default news-tag">Tecnology</span>
                                        <a href="#" class="btn btn-link read-more">อ่านเพิ่มเติม &rarr;</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="main-news">
                            <div class="contianer">
                                <div class="row">
                                    <div class="col-xs-12 col-md-7">
                                        <img class="d-block" src="{{ asset('image/mainpage/news/Rectangle 191.png') }}" alt="Latest News">
                                    </div>
                                    <div class="col-xs-12 col-md-5">
                                        <h2>Treat Computer System If we start project</h2>
                                        <div class="date-and-author">
                                            <ul>
                                                <li><i class="far fa-calendar-alt"></i> May 2020</li>
                                                <li><i class="fas fa-user"></i> Admin</li>
                                            </ul>
                                        </div>
                                        <p>
                                            It has survived not only five centuries, but also the leap into electronic. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an Lorem Ipsum is simply dummy…
                                        </p>
                                        <span class="label label-default news-tag">Tecnology</span>
                                        <a href="#" class="btn btn-link read-more">อ่านเพิ่มเติม &rarr;</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="main-news">
                            <div class="contianer">
                                <div class="row">
                                    <div class="col-xs-12 col-md-7">
                                        <img class="d-block" src="{{ asset('image/mainpage/news/Rectangle 191.png') }}" alt="Latest News">
                                    </div>
                                    <div class="col-xs-12 col-md-5">
                                        <h2>Treat Computer System If we start project</h2>
                                        <div class="date-and-author">
                                            <ul>
                                                <li><i class="far fa-calendar-alt"></i> May 2020</li>
                                                <li><i class="fas fa-user"></i> Admin</li>
                                            </ul>
                                        </div>
                                        <p>
                                            It has survived not only five centuries, but also the leap into electronic. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an Lorem Ipsum is simply dummy…
                                        </p>
                                        <span class="label label-default news-tag">Tecnology</span>
                                        <a href="#" class="btn btn-link read-more">อ่านเพิ่มเติม &rarr;</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                 <!-- Initialize Swiper -->
                <script src="/js/swiper-bundle.min.js"></script>
                 <script>
                    var swiper = new Swiper(".swiper-container", {
                        pagination: {
                            el: ".swiper-pagination",
                            dynamicBullets: true,
                        },
                        autoplay: {
                            delay: 3500,
                            disableOnInteraction: false,
                            speed: 1,
                        },
                    });
                </script>
            </div>
        </div>
    </section>

{{-- Suggestion News --}}
    <section class="section-news-2">
        <div class="container">
            <div class="row suggestion-head">
                <div class="col-xs-12 col-md-6 suggestion-head-title">
                    <h4>ข่าวแนะนำ</h4>
                    <hr>
                </div>

                <div class="col-xs-12 col-md-6 news-pagination">

                    <a class="btn btn-link" onclick="plusDivs(-1)">&larr;</a>

                    <a class="btn demo" onclick="currentDiv(1)">1</a>
                    <a class="btn demo" onclick="currentDiv(2)">2</a>

                    <a class="btn btn-link" onclick="plusDivs(1)">&rarr;</a>
                </div>
            </div>



{{-- 1 --}}
            <div class="row suggestion-news mySlides">
                <div class="col-xs-12 col-md-4 news-box">
                    <div class="news-cover-image" style="background-image: url( '{{ asset('image/mainpage/news/gaming.png') }}' );">
                        <div class="news-content">
                            <h4><?=  mb_strimwidth('Treat Computer System If we start project', 0, 25, "...", "UTF-8"); ?></h4>
                            <p class="excerpt">It has survived not only five centuries, but also the leap into electronic.</p>
                        </div>
                    </div>
                    <div class="news-info">
                        <ul>
                            <li><i class="far fa-calendar-alt"></i> May 2020</li>
                            <li><i class="fas fa-user"></i> Admin</li>
                        </ul>
                    </div>
                    <div class="news-read-more">
                        <span class="label label-default news-tag">Tecnology</span>
                        <a href="#" class="btn btn-link read-more">อ่านเพิ่มเติม &rarr;</a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 news-box">
                    <div class="news-cover-image" style="background-image: url( '{{ asset('image/mainpage/news/gaming.png') }}' );">
                        <div class="news-content">
                            <h4><?=  mb_strimwidth('Treat Computer System If we start project', 0, 25, "...", "UTF-8"); ?></h4>
                            <p class="excerpt">It has survived not only five centuries, but also the leap into electronic.</p>
                        </div>
                    </div>
                    <div class="news-info">
                        <ul>
                            <li><i class="far fa-calendar-alt"></i> May 2020</li>
                            <li><i class="fas fa-user"></i> Admin</li>
                        </ul>
                    </div>
                    <div class="news-read-more">
                        <span class="label label-default news-tag">Tecnology</span>
                        <a href="#" class="btn btn-link read-more">อ่านเพิ่มเติม &rarr;</a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 news-box">
                    <div class="news-cover-image" style="background-image: url( '{{ asset('image/mainpage/news/gaming.png') }}' );">
                        <div class="news-content">
                            <h4><?=  mb_strimwidth('Treat Computer System If we start project', 0, 25, "...", "UTF-8"); ?></h4>
                            <p class="excerpt">It has survived not only five centuries, but also the leap into electronic.</p>
                        </div>
                    </div>
                    <div class="news-info">
                        <ul>
                            <li><i class="far fa-calendar-alt"></i> May 2020</li>
                            <li><i class="fas fa-user"></i> Admin</li>
                        </ul>
                    </div>
                    <div class="news-read-more">
                        <span class="label label-default news-tag">Tecnology</span>
                        <a href="#" class="btn btn-link read-more">อ่านเพิ่มเติม &rarr;</a>
                    </div>
                </div>
            </div>
{{-- 2 --}}
            <div class="row suggestion-news mySlides">
                <div class="col-xs-12 col-md-4 news-box">
                    <div class="news-cover-image" style="background-image: url( '{{ asset('image/mainpage/news/workplace-results.jpg') }}' );">
                        <div class="news-content">

                            <h4><?=  mb_strimwidth('Treat Computer System If we start project', 0, 25, "...", "UTF-8"); ?></h4>
                            <p class="excerpt">It has survived not only five centuries, but also the leap into electronic.</p>
                        </div>
                    </div>
                    <div class="news-info">
                        <ul>
                            <li><i class="far fa-calendar-alt"></i> May 2020</li>
                            <li><i class="fas fa-user"></i> Admin</li>
                        </ul>
                    </div>
                    <div class="news-read-more">
                        <span class="label label-default news-tag">Tecnology</span>
                        <a href="#" class="btn btn-link read-more">อ่านเพิ่มเติม &rarr;</a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 news-box">
                    <div class="news-cover-image" style="background-image: url( '{{ asset('image/mainpage/news/workplace-results.jpg') }}' );">
                        <div class="news-content">
                            <h4><?=  mb_strimwidth('Treat Computer System If we start project', 0, 25, "...", "UTF-8"); ?></h4>
                            <p class="excerpt">It has survived not only five centuries, but also the leap into electronic.</p>
                        </div>
                    </div>
                    <div class="news-info">
                        <ul>
                            <li><i class="far fa-calendar-alt"></i> May 2020</li>
                            <li><i class="fas fa-user"></i> Admin</li>
                        </ul>
                    </div>
                    <div class="news-read-more">
                        <span class="label label-default news-tag">Tecnology</span>
                        <a href="#" class="btn btn-link read-more">อ่านเพิ่มเติม &rarr;</a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 news-box">
                    <div class="news-cover-image" style="background-image: url( '{{ asset('image/mainpage/news/workplace-results.jpg') }}' );">
                        <div class="news-content">
                            <h4><?=  mb_strimwidth('Treat Computer System If we start project', 0, 25, "...", "UTF-8"); ?></h4>
                            <p class="excerpt">It has survived not only five centuries, but also the leap into electronic.</p>
                        </div>
                    </div>
                    <div class="news-info">
                        <ul>
                            <li><i class="far fa-calendar-alt"></i> May 2020</li>
                            <li><i class="fas fa-user"></i> Admin</li>
                        </ul>
                    </div>
                    <div class="news-read-more">
                        <span class="label label-default news-tag">Tecnology</span>
                        <a href="#" class="btn btn-link read-more">อ่านเพิ่มเติม &rarr;</a>
                    </div>
                </div>
            </div>


            {{-- Mobile
            <div class="row suggestion-news mySlidesMobile">
                <div class="col-xs-12 col-md-4 news-box">
                    <div class="news-cover-image" style="background-image: url( '{{ asset('image/mainpage/news/gaming.png') }}' );">
                        <div class="news-content">
                            <h4><?=  mb_strimwidth('Treat Computer System If we start project', 0, 25, "...", "UTF-8"); ?></h4>
                            <p class="excerpt">It has survived not only five centuries, but also the leap into electronic.</p>
                        </div>
                    </div>
                    <div class="news-info">
                        <ul>
                            <li><i class="far fa-calendar-alt"></i> May 2020</li>
                            <li><i class="fas fa-user"></i> Admin</li>
                        </ul>
                    </div>
                    <div class="news-read-more">
                        <span class="label label-default news-tag">Tecnology</span>
                        <a href="#" class="btn btn-link read-more">อ่านเพิ่มเติม &rarr;</a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 news-box">
                    <div class="news-cover-image" style="background-image: url( '{{ asset('image/mainpage/news/gaming.png') }}' );">
                        <div class="news-content">
                            <h4><?=  mb_strimwidth('Treat Computer System If we start project', 0, 25, "...", "UTF-8"); ?></h4>
                            <p class="excerpt">It has survived not only five centuries, but also the leap into electronic.</p>
                        </div>
                    </div>
                    <div class="news-info">
                        <ul>
                            <li><i class="far fa-calendar-alt"></i> May 2020</li>
                            <li><i class="fas fa-user"></i> Admin</li>
                        </ul>
                    </div>
                    <div class="news-read-more">
                        <span class="label label-default news-tag">Tecnology</span>
                        <a href="#" class="btn btn-link read-more">อ่านเพิ่มเติม &rarr;</a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 news-box">
                    <div class="news-cover-image" style="background-image: url( '{{ asset('image/mainpage/news/gaming.png') }}' );">
                        <div class="news-content">
                            <h4><?=  mb_strimwidth('Treat Computer System If we start project', 0, 25, "...", "UTF-8"); ?></h4>
                            <p class="excerpt">It has survived not only five centuries, but also the leap into electronic.</p>
                        </div>
                    </div>
                    <div class="news-info">
                        <ul>
                            <li><i class="far fa-calendar-alt"></i> May 2020</li>
                            <li><i class="fas fa-user"></i> Admin</li>
                        </ul>
                    </div>
                    <div class="news-read-more">
                        <span class="label label-default news-tag">Tecnology</span>
                        <a href="#" class="btn btn-link read-more">อ่านเพิ่มเติม &rarr;</a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 news-box">
                    <div class="news-cover-image" style="background-image: url( '{{ asset('image/mainpage/news/workplace-results.jpg') }}' );">
                        <div class="news-content">

                            <h4><?=  mb_strimwidth('Treat Computer System If we start project', 0, 25, "...", "UTF-8"); ?></h4>
                            <p class="excerpt">It has survived not only five centuries, but also the leap into electronic.</p>
                        </div>
                    </div>
                    <div class="news-info">
                        <ul>
                            <li><i class="far fa-calendar-alt"></i> May 2020</li>
                            <li><i class="fas fa-user"></i> Admin</li>
                        </ul>
                    </div>
                    <div class="news-read-more">
                        <span class="label label-default news-tag">Tecnology</span>
                        <a href="#" class="btn btn-link read-more">อ่านเพิ่มเติม &rarr;</a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 news-box">
                    <div class="news-cover-image" style="background-image: url( '{{ asset('image/mainpage/news/workplace-results.jpg') }}' );">
                        <div class="news-content">
                            <h4><?=  mb_strimwidth('Treat Computer System If we start project', 0, 25, "...", "UTF-8"); ?></h4>
                            <p class="excerpt">It has survived not only five centuries, but also the leap into electronic.</p>
                        </div>
                    </div>
                    <div class="news-info">
                        <ul>
                            <li><i class="far fa-calendar-alt"></i> May 2020</li>
                            <li><i class="fas fa-user"></i> Admin</li>
                        </ul>
                    </div>
                    <div class="news-read-more">
                        <span class="label label-default news-tag">Tecnology</span>
                        <a href="#" class="btn btn-link read-more">อ่านเพิ่มเติม &rarr;</a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 news-box">
                    <div class="news-cover-image" style="background-image: url( '{{ asset('image/mainpage/news/workplace-results.jpg') }}' );">
                        <div class="news-content">
                            <h4><?=  mb_strimwidth('Treat Computer System If we start project', 0, 25, "...", "UTF-8"); ?></h4>
                            <p class="excerpt">It has survived not only five centuries, but also the leap into electronic.</p>
                        </div>
                    </div>
                    <div class="news-info">
                        <ul>
                            <li><i class="far fa-calendar-alt"></i> May 2020</li>
                            <li><i class="fas fa-user"></i> Admin</li>
                        </ul>
                    </div>
                    <div class="news-read-more">
                        <span class="label label-default news-tag">Tecnology</span>
                        <a href="#" class="btn btn-link read-more">อ่านเพิ่มเติม &rarr;</a>
                    </div>
                </div>
                <div class="loadMore">
                    <a class="btn btn-primary" href="#" id="loadMore">Load More</a>
                </div>
            </div> --}}

        </div>
    </section>


    <section class="section-news-3">
        <div class="container">
            <div class="row suggestion-head">
                <div class="col-xs-12 col-md-3 suggestion-head-title">
                    <h4>ข่าวทั้งหมด</h4>
                    <hr>
                </div>
                <div class="col-xs-12 col-md-1">

                </div>
                <div class="col-xs-12 col-md-8 news-pagination">

                    <h4><a class="btn btn-link read-all-news">ดูทั้งหมด</a></h4>
                    <a class="btn btn-link" onclick="plusDivs2(-1)">&larr;</a>

                    <a class="btn demo2" onclick="currentDiv2(1)">1</a>
                    <a class="btn demo2" onclick="currentDiv2(2)">2</a>

                    <a class="btn btn-link" onclick="plusDivs2(1)">&rarr;</a>
                </div>
            </div>



{{-- 1 --}}
            <div class="row all-news mySlides2">
                <div class="col-xs-12 col-md-3 news-box">
                    <div class="news-cover-image">
                        <img src="{{ asset('image/mainpage/news/happy-diverse-people-using-digital-devices.jpg') }}" />
                    </div>
                    <div class="news-content">
                        <h4>Treat Computer System If we start project</h4>
                        <p class="excerpt">It has survived not only five centuries, but also the leap into electronic.</p>
                    </div>
                    <div class="news-read-more">
                        <a href="#" class="btn btn-link read-more">อ่านเพิ่มเติม &rarr;</a>
                    </div>
                </div>

                <div class="col-xs-12 col-md-3 news-box">
                    <div class="news-cover-image">
                        <img src="{{ asset('image/mainpage/news/happy-diverse-people-using-digital-devices.jpg') }}" />
                    </div>
                    <div class="news-content">
                        <h4>Treat Computer System If we start project</h4>
                        <p class="excerpt">It has survived not only five centuries, but also the leap into electronic.</p>
                    </div>
                    <div class="news-read-more">
                        <a href="#" class="btn btn-link read-more">อ่านเพิ่มเติม &rarr;</a>
                    </div>
                </div>

                <div class="col-xs-12 col-md-3 news-box">
                    <div class="news-cover-image">
                        <img src="{{ asset('image/mainpage/news/happy-diverse-people-using-digital-devices.jpg') }}" />
                    </div>
                    <div class="news-content">
                        <h4>Treat Computer System If we start project</h4>
                        <p class="excerpt">It has survived not only five centuries, but also the leap into electronic.</p>
                    </div>
                    <div class="news-read-more">
                        <a href="#" class="btn btn-link read-more">อ่านเพิ่มเติม &rarr;</a>
                    </div>
                </div>

                <div class="col-xs-12 col-md-3 news-box">
                    <div class="news-cover-image">
                        <img src="{{ asset('image/mainpage/news/happy-diverse-people-using-digital-devices.jpg') }}" />
                    </div>
                    <div class="news-content">
                        <h4>Treat Computer System If we start project</h4>
                        <p class="excerpt">It has survived not only five centuries, but also the leap into electronic.</p>
                    </div>
                    <div class="news-read-more">
                        <a href="#" class="btn btn-link read-more">อ่านเพิ่มเติม &rarr;</a>
                    </div>
                </div>
            </div>

{{-- 2 --}}
            <div class="row all-news mySlides2">
                <div class="col-xs-12 col-md-3 news-box">
                    <div class="news-cover-image">
                        <img src="{{ asset('image/mainpage/news/Rectangle 204.png') }}" />
                    </div>
                    <div class="news-content">
                        <h4>Treat Computer System If we start project</h4>
                        <p class="excerpt">It has survived not only five centuries, but also the leap into electronic.</p>
                    </div>
                    <div class="news-read-more">
                        <a href="#" class="btn btn-link read-more">อ่านเพิ่มเติม &rarr;</a>
                    </div>
                </div>

                <div class="col-xs-12 col-md-3 news-box">
                    <div class="news-cover-image">
                        <img src="{{ asset('image/mainpage/news/Rectangle 204.png') }}" />
                    </div>
                    <div class="news-content">
                        <h4>Treat Computer System If we start project</h4>
                        <p class="excerpt">It has survived not only five centuries, but also the leap into electronic.</p>
                    </div>
                    <div class="news-read-more">
                        <a href="#" class="btn btn-link read-more">อ่านเพิ่มเติม &rarr;</a>
                    </div>
                </div>

                <div class="col-xs-12 col-md-3 news-box">
                    <div class="news-cover-image">
                        <img src="{{ asset('image/mainpage/news/Rectangle 204.png') }}" />
                    </div>
                    <div class="news-content">
                        <h4>Treat Computer System If we start project</h4>
                        <p class="excerpt">It has survived not only five centuries, but also the leap into electronic.</p>
                    </div>
                    <div class="news-read-more">
                        <a href="#" class="btn btn-link read-more">อ่านเพิ่มเติม &rarr;</a>
                    </div>
                </div>

                <div class="col-xs-12 col-md-3 news-box">
                    <div class="news-cover-image">
                        <img src="{{ asset('image/mainpage/news/Rectangle 204.png') }}" />
                    </div>
                    <div class="news-content">
                        <h4>Treat Computer System If we start project</h4>
                        <p class="excerpt">It has survived not only five centuries, but also the leap into electronic.</p>
                    </div>
                    <div class="news-read-more">
                        <a href="#" class="btn btn-link read-more">อ่านเพิ่มเติม &rarr;</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
{{-- Body Script --}}
@section('script')

<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
    showDivs(slideIndex += n);
    }

    function currentDiv(n) {
    showDivs(slideIndex = n);
    }

    function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");

    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length}
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" current-news-page", "");
    }
    x[slideIndex-1].style.display = "flex";
    dots[slideIndex-1].className += " current-news-page";
    }


    var slideIndex2 = 1;
    showDivs2(slideIndex2);

    function plusDivs2(n) {
    showDivs2(slideIndex2 += n);
    }

    function currentDiv2(n) {
    showDivs2(slideIndex2 = n);
    }
    function showDivs2(n) {
    var i;
    var x = document.getElementsByClassName("mySlides2");
    var dots = document.getElementsByClassName("demo2");
    if (n > x.length) {slideIndex2 = 1}
    if (n < 1) {slideIndex2 = x.length}
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" current-news-page", "");
    }
    x[slideIndex2-1].style.display = "flex";
    dots[slideIndex2-1].className += " current-news-page";
    }

    // jQuery(function () {
    //     jQuery("div.news-box").slice(0, 3).show();
    //     jQuery("#loadMore").on('click', function (e) {
    //         e.preventDefault();
    //         jQuery("div.news-box:hidden").slice(0, 3).slideDown();
    //         if (jQuery("div.news-box:hidden").length == 0) {
    //             jQuery("#loadMore").fadeOut('slow');
    //         }
    //         jQuery('html,body').animate({
    //             scrollTop: jQuery(this).offset().top
    //         }, 1500);
    //     });
    // });

    // jQuery('a[href=#top]').click(function () {
    //     jQuery('body,html').animate({
    //         scrollTop: 0
    //     }, 600);
    //     return false;
    // });

    // jQuery(window).scroll(function () {
    //     if (jQuery(this).scrollTop() > 50) {
    //         jQuery('.totop a').fadeIn();
    //     } else {
    //         jQuery('.totop a').fadeOut();
    //     }
    // });
</script>

      <!--Script. Do not touch!-->

@endsection
