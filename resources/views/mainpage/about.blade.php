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
                    <h2>Mobihub Is Connected Mobility & Solutions Enable</h2>
                    <p>
                        Mobihub Company Limited เป็นหนึ่งในไม่กี่บริษัทที่เป็นตัวแทนจำหน่ายซอฟแวร์ทางด้าน Cloud Solution และ อุปกรณ์ด้าน
                        Mobile Device,
                        Accessories Mobility ที่ครบวงจ­รที่สุด เราเน้นขายสินค้าด้านความปลอดภัยในการใช้งานอุปกรณ์พกพาทุกรูปเเบบ
                        รวมถึง Software as a Service (SaaS)
                        ที่จะคอยปกป้องข้อมูลของคุณได้อย่างปลอดภัย เรามุ่งเน้นการบริการหลักการขายที่มีคุณภาพ
                        เพื่อสร้างความประทับใจและมอบประสบการณ์ที่ดีที่สุดให้กับลูกค้า
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="container about-service">
        <div class="row">
            <div class="col-xs-12 col-md-12 our-service">

                <div class="col-xs-12 col-sm-6 col-md-3 service-box">
                    <center><div class="icon"><img src="/image/mainpage/about/2. Data Protection.jpg"></div></center>
                    <h4>Data Protection</h4>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 service-box">
                    <center><div class="iconic"><img src="/image/mainpage/about/3. Device Protection.jpg"></div></center>
                    <h4>Device Protection</h4>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 service-box">
                    <center><div class="icon"><img src="/image/mainpage/about/4. Mobility.jpg"></div></center>
                    <h4>Mobility</h4>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 service-box">
                    <center><div class="iconic"><img src="/image/mainpage/about/5. Life Style.jpg"></div></center>
                    <h4>Life Style</h4>
                </div>
            </div>
        </div>
    </div>

    <section id="about-vision">
        <div class="text">
            <h2>
                Vision
            </h2>
            <h3>
                “เรายึดมั่นในการบริการหลังการขายเเละการนำเสนอ
                สินค้าที่ตอบโจทย์การใช้งานในทุกๆ ด้านของชีวิต”
            </h3>
        </div>
        <div class="text-2">
            <h2>
                Mission
            </h2>
            <ul>
                <li>
                    1. เรานำเสนอสินค้าทางด้าน it solution เน้นความปลอดภัยในการใช้งานทุกรูปเเบบ
                </li>
                <li>
                    2. เราจะพัฒนาองค์กรในทุกๆ ด้านเพื่อตอบสนองความต้องการของผู้คนโดยเฉพาะบริการหลังการขาย
                </li>
                <li>
                    3. เราเน้นการสร้างประสบการณ์ที่ดีที่สุด เพื่อให้ลูกค้าเกิดความพึงพอใจสูงสุด
                </li>
                <li>
                    4. เราค้นหาธุรกิจเเละสินค้าใหม่ๆ ที่จะมาตอบโจทย์ความต้องการของผู้คนเพื่อให้องค์กรเติบโตขึ้นอย่างทันสมัย
                </li>
            </ul>
        </div>
    </section>

    <div class="container about-service-2">
        <div class="row">
            <div class="col-xs-12 col-md-6 left-side">
                <div class="col-xs-12 col-md-12">
                    <h2>IT SOLUTION</h2>
                </div>
                <div class="col-xs-12 col-md-12">
                    <p class="title">
                        เราเน้นสินค้าที่ให้ความปลอดภัยเป็นหลัก รวมถึงการรับประกันเเละการให้บริการทางด้าน IT กับธุรกิจชั้นนำของประเทศมาเเล้ว 200 กว่าบริษัท
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

            </div>
        </div>
    </div>

    <section id="our-service">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="col-xs-12 col-md-12">
                        <h2>Our Service</h2>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <div class="service-box">
                            {{-- <div class="icon">
                                <img src="/image/mainpage/about/call-center.png">
                            </div> --}}
                            <h3>B2B & B2C </h3>
                            <p>
                                To. 099-287-4710 ถึง 4711 <br>
                                Email : sales@mobihub.co.th
                            </p>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="service-box">
                            {{-- <div class="icon">
                                <img src="/image/mainpage/about/online-chat.png" alt="">
                            </div> --}}
                            <h3>Consulting Service</h3>
                            <p>
                                To. (099) 287-4709, (099) 287-4733 <br>
                                Email : services@mobihub.co.th.

                            </p>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="service-box">
                            {{-- <div class="icon">
                                <img src="/image/mainpage/about/waranty.png">
                            </div> --}}
                            <h3>Solution</h3>
                            <p>
                                To. +66(0)2-102-2591 <br>
                                Facebook : MobihubThailand
                            </p>
                        </div>
                    </div>
                </>
            </div>
        </div>
    </section>

@endsection
{{-- Body Script --}}
@section('script')


@endsection
