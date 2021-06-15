@extends('layout/home-2')


{{-- Title Website --}}
@section('title', 'MOBIHUB | Home')

{{-- Link CSS --}}
@section('link')

{{-- bootstrap --}}
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> --}}
{{-- <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script> --}}
{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script> --}}
<link rel="stylesheet" href="/css/mainpage/about.css">
@endsection


{{-- Body HTML --}}
@section('content')

    <section class="panel-about">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <h4>About Mobihub</h4>
                </div>
                <div class="col-xs-12 col-md-12">
                    <h2>Mobihub Is Connected Mobility & Solutions Enable</h2>
                    <p>
                        ผู้จัดจำหน่ายธุรกิจแบบ Business-to-Business (B2B)
                        ที่ได้รับอนุญาติในเรื่องการบริการ สนับสนุนซ่อมแซมผลิตภัณฑ์ โซลูชัน และจำหน่ายสินค้าเทคโนโลยีแบรนด์ระดับโลก
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="container about-service">
        <div class="row">
            <div class="col-xs-12 col-md-12 our-service">

                <div class="col-xs-12 col-sm-6 col-md-3 service-box">
                    <center><div class="icon"><img src="/image/mainpage/about/call-center.png"></div></center>
                    <h4>Call Center</h4>
                    <p>
                        มีเจ้าหน้าที่คอยให้บริการความช่วยเหลือทางเทคนิค
                    </p>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 service-box">
                    <center><div class="iconic"><img src="/image/mainpage/about/help-desk.png"></div></center>
                    <h4>Services</h4>
                    <p>
                        การติดตามผลหลังการขาย และการให้บริการก่อนและหลังการขาย
                    </p>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 service-box">
                    <center><div class="icon"><img src="/image/mainpage/about/waranty.png"></div></center>
                    <h4>Warranty</h4>
                    <p>
                        นโยบายในการรับประกันสินค้า การเปลียนสินค้า และการคืนสินค้า
                    </p>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 service-box">
                    <center><div class="iconic"><img src="/image/mainpage/about/help-desk.png"></div></center>
                    <h4>Call Center</h4>
                    <p>
                        มีเจ้าหน้าที่คอยให้บริการความช่วยเหลือทางเทคนิค
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container about-service-2">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <div class="col-xs-12 col-md-12">
                    <h2>IT SOLUTION</h2>
                </div>
                <div class="col-xs-12 col-md-12">
                    <p class="title">
                        Lorem ipsum dolor sit amet, this is dream consectetuer adipiscing elit,
                        sed diam nonummy nibh euismod tincidunt consectetuer adipiscing elit,
                    </p>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="service-box">
                        <i class="fas fa-check-square"></i>
                        <p>Hardware</p>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="service-box">
                        <i class="fas fa-check-square"></i>
                        <p>Software</p>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="service-box">
                        <i class="fas fa-check-square"></i>
                        <p>Accessories</p>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="service-box">
                        <i class="fas fa-check-square"></i>
                        <p>Service</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6">
                <img src="/image/mainpage/about/handsome-freelancer-using-tablet-laptop-computer-check-his-business-cafe.jpg" class="img-responsive" alt="Random Image">
            </div>
        </div>
    </div>

    <section id="our-service">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-4 our-img">
                    <img src="/image/mainpage/about/Rectangle 224.png" class="img-responsive" alt="Random Image">
                </div>
                <div class="col-xs-12 col-md-8">
                    <div class="col-xs-12 col-md-12">
                        <h4>Our Service</h4>
                    </div>
                    <div class="col-xs-12 col-md-12">
                        <h3>Our strategy</h3>
                        <h2>Includes Consistently Evolving To Ensure Exceptional For Business</h2>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <div class="service-box">
                            <div class="icon">
                                <img src="/image/mainpage/about/call-center.png">
                            </div>
                            <h3>Call Center</h3>
                            <p>
                                Our expert staff is well experienced,
                                trained and IT industry certified.
                            </p>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="service-box">
                            <div class="icon">
                                <img src="/image/mainpage/about/online-chat.png" alt="">
                            </div>
                            <h3>Services</h3>
                            <p>
                                Our expert staff is well experienced,
                                trained and IT industry certified.
                            </p>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="service-box">
                            <div class="icon">
                                <img src="/image/mainpage/about/waranty.png">
                            </div>
                            <h3>Warranty</h3>
                            <p>
                                Our expert staff is well experienced,
                                trained and IT industry certified.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
{{-- Body Script --}}
@section('script')


@endsection
