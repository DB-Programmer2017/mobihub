@extends('layout/home-2')


{{-- Title Website --}}
@section('title', 'Mobihub | DeepDrive Analytics')

{{-- Link CSS --}}
@section('link')

<style>
    h3,h4,h2,h1,p  {
        font-family: 'Prompt';
    }
   #deepdrive-1{
        background-image: url('/image/mainpage/scalefusion/deepdrive/deepdrive_bg.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 485px;
        display: flex;
        align-items: center;
    }
    #deepdrive-1 .col-md-12{
        width: 60%;
    }
    #deepdrive-3 .text h2,
    #deepdrive-2 h2,
    #deepdrive-2 p,
    #deepdrive-1 h3,
    #deepdrive-1 h2,
    #deepdrive-1 p{
        font-weight: 200;
        color: #505050;
    }
    #deepdrive-2{
        margin: 50px 0;
    }
    #deepdrive-2 .text{
        height: 337px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    #deepdrive-3 .text h2,
    #deepdrive-2 h2{
        font-size: 24px;
    }
    #deepdrive-2 .text img{
        width: 28%;
        margin: 12px 0;
    }
    #deepdrive-3 {
        background: #F4F4F4;
        padding: 50px 0;
    }
    #deepdrive-3 .text{
        text-align: center;
    }
    #deepdrive-3 .text h2{
        font-weight: 200;
        color: #505050;
    }
    #deepdrive-3 .text p{
        font-weight: 200;
        color: #505050;
    }
    #deepdrive-3 .box{
        background: #fff;
        width: 250px;
        height: 250px;
        margin: 20px auto;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }
    #deepdrive-3 .box .img-responsive{
        width: 60px;
        height: 60px;
        margin: auto;
    }
    #deepdrive-3 .box .img-responsive1{
        width: 100%;
        height: auto;
        display: block;
        margin: 10px 0;
    }
    @media (max-width:1024.98px){
        #deepdrive-3 .box {
            width: 200px;
            height: 200px;
         }
         #deepdrive-3 .box .img-responsive1 {
            padding: 0 30px;
        }
    }
    @media (max-width:500.98px){
        #deepdrive-1 .col-md-12{
            width: 85%;
        }
        #deepdrive-3 .text h2,
        #deepdrive-2 h2,
        #deepdrive-1 h2{
            font-size: 20px
        }
        #deepdrive-2 h3,
        #deepdrive-1 h3{
            font-size: 18px
        }
        #deepdrive-3 .text p,
        #deepdrive-2 p,
        #deepdrive-1 p{
            font-size: 12px
        }
        #deepdrive-3 .box {
            width: 160px;
            height: 160px;
        }
        #deepdrive-2 .text {
            height: 200px;
        }
    }
</style>

@endsection


{{-- Body HTML --}}
@section('content')
    <section id="deepdrive-1" >
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                     <h3>
                        DeepDive
                     </h3>
                     <h2>
                        Get Quick and Deep Insights Into
                        Your Device Inventory
                     </h2>
                     <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                     <p>
                        Stay updated and informed with the help of DeepDive, and get a 360-degree overview of the entire device inventory. Leverage vital device-related intelligence and take quick and effective actions for enhanced device management.
                     </p>
                </div>
            </div>
    </section>
    <section id="deepdrive-2">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <img src="/image/mainpage/scalefusion/deepdrive/image 140.png" class="img-responsive" alt="">
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="text">
                        <h2>
                            We Believe Power Comes From Simplicity
                         </h2>
                         <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                         <p>
                            Get deep insights into your inventory. Gain platform-wide visibility, data usage details, and compliance-violation data, via a simple, clear and engaging interface using DeepDive.
                         </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="deepdrive-3">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="text">
                        <h2>
                            Get Real-Time Visibility of Your Devices
                         </h2>
                         <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                         <p>
                            Obtain a comprehensive and insightful summary of your device inventory along with real-time data about the device health, security, data usage, compliance, and other crucial information with DeepDive.
                         </p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-12">
                    <div class="col-xs-6 col-md-3">
                        <div class="box">
                            <div>
                                <img src="/image/mainpage/scalefusion/deepdrive/icon/diagram (1).png"class="img-responsive" alt="">
                                <img src="/image/mainpage/scalefusion/icon/redLine.png"class="img-responsive1" alt="">
                                <p>
                                    Platform
                                    Summary
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <div class="box">
                            <div>
                                <img src="/image/mainpage/scalefusion/deepdrive/icon/low-battery (1)(1).png"class="img-responsive" alt="">
                                <img src="/image/mainpage/scalefusion/icon/redLine.png"class="img-responsive1"alt="">
                                <p>
                                    Available
                                    Battery
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <div class="box">
                            <div>
                                <img src="/image/mainpage/scalefusion/deepdrive/icon/server (1).png"class="img-responsive" alt="">
                                <img src="/image/mainpage/scalefusion/icon/redLine.png"class="img-responsive1"alt="">
                                <p>
                                    Available
                                    Storage
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <div class="box">
                            <div>
                                <img src="/image/mainpage/scalefusion/deepdrive/icon/forbidden (1).png"class="img-responsive" alt="">
                                <img src="/image/mainpage/scalefusion/icon/redLine.png"class="img-responsive1"alt="">
                                <p>
                                    Compliance
                                    Violations
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <div class="box">
                            <div>
                                <img src="/image/mainpage/scalefusion/deepdrive/icon/bar-chart (1).png"class="img-responsive" alt="">
                                <img src="/image/mainpage/scalefusion/icon/redLine.png"class="img-responsive1"alt="">
                                <p>
                                    Data Usage
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <div class="box">
                            <div>
                                <img src="/image/mainpage/scalefusion/deepdrive/icon/view (1).png"class="img-responsive" alt="">
                                <img src="/image/mainpage/scalefusion/icon/redLine.png"class="img-responsive1" alt="">
                                <p>
                                    Last Connected
                                    Stats
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <div class="box">
                            <div>
                                <img src="/image/mainpage/scalefusion/deepdrive/icon/bag (1).png"class="img-responsive" alt="">
                                <img src="/image/mainpage/scalefusion/icon/redLine.png"class="img-responsive1"alt="">
                                <p>
                                    Enterprise
                                    App Space
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <div class="box">
                            <div>
                                <img src="/image/mainpage/scalefusion/deepdrive/icon/folder (1).png"class="img-responsive" alt="">
                                <img src="/image/mainpage/scalefusion/icon/redLine.png" class="img-responsive1"alt="">
                                <p>
                                    Content
                                    Management Space
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection

@section('script')

@endsection
