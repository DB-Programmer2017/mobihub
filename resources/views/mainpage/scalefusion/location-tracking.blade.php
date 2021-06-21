@extends('layout/home-2')


{{-- Title Website --}}
@section('title', 'Mobihub | Location Tracking')

{{-- Link CSS --}}
@section('link')
<style>
    body{
        background: #f5faff;
    }
    #location-tracking-2{
        padding-top: 90px;
        padding-bottom: 50px;
        background: transparent;
    }
    #location-tracking-2 h2{
        margin-bottom: 30px;
    }

    #location-tracking-2 li{
        list-style: none;
        line-height: 30px;
    }
    #location-tracking-3 li:before,
    #location-tracking-2 li:before {
        font-family: "Font Awesome 5 Free";
        font-weight: 800;
        font-size: 13px;
        content: "\f45c";
        margin-right: 10px;
        color:#eb6865;
    }

    #location-tracking-3{
        padding: 100px 0;
        background: #F4F4F4;
    }
    #location-tracking-3 h2{
        margin-bottom: 30px;
    }
    #location-tracking-3 img{
        width: 100%;
    }
    #location-tracking-3 li{
        list-style: none;
        line-height: 30px;
    }
    #remote-support-1 h4{
        color: #FFFFFF;
        font-weight: normal;
        font-size: 30px;
        line-height: 52px;
    }
    #remote-support-1{
        background-image: url('/image/mainpage/scalefusion/5172658.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 485px;
        display: flex;
        align-items: center;
    }
    #remote-support-1 h2 {
    width: 50%;
    color: #eb6864;
    font-size: 45px;
    font-weight: 500;
    line-height: 54px;
    margin-bottom: 46px;
    font-family: 'Prompt', sans-serif;
    }
    #remote-support-1 p {
        width: 50%;
        font-weight: 300;
        font-size: 16px;
        line-height: 30px;
        font-family: 'Prompt', sans-serif;
        color: #FFFFFF;
    }
    #location-tracking-3,
    #location-tracking-2{
        position: relative;
    }
    #location-tracking-3 .text .text-main,
    #location-tracking-2 .text .text-main{
        color: #eb6864;
        font-weight: 600;
        font-size: 50px;
        line-height: 91px;
    }
    #location-tracking-3 img,
    #location-tracking-2 img {
        width: 40%;
    }
    #location-tracking-2 .text h2{
        font-weight: 600;
        font-size: 30px;
        line-height: 45px;
    }
    #location-tracking-2 .text{
        position: absolute;
        top: 0;
        width: 45%;
        left: 280px;
    }

    #location-tracking-3 .col-md-7{
        text-align: end;
    }
    #location-tracking-3 .text{
        position: absolute;
        top: 0;
        width: 60%;
        left: 25px;
    }
    #location-tracking-4{
        padding: 50px 0;
    }
    #location-tracking-4 .text h2{
        font-size: 25px;
        font-weight: 600;
    }
    #location-tracking-4 .text img{
        width: 40%
    }
    #location-tracking-4 .box{
        background: #6C75BB1A;
        width: 150px;
        height: 150px;
        margin: 20px 0;
    }
    #location-tracking-4 .img-responsive {
        padding: 10px 55px;
    }
    #location-tracking-4 .box-content{
        height: 100%;
        display: inline-block;
        padding: 33px 0 33px 0;
        text-align: center;
    }

    @media  (min-width: 992px)  and (max-width: 1199.98px){
        #remote-support-1 h2 {
            width: 100%;
            margin-bottom: 10px;
            font-size: 31px;
            line-height: 40px;
        }
        #remote-support-1 h4 {
            font-size: 22px;
        }
        #remote-support-1 p {
            width: 100%;
        }
        #location-tracking-3 .text h2,
        #location-tracking-2 .text h2 {
            font-size: 20px;
            line-height: 33px;
        }
        #location-tracking-3 .text .text-main, #location-tracking-2 .text .text-main {
            font-size: 40px;
            line-height: 55px;
        }
        #location-tracking-2 .text {
            left: 203px;
        }
        #location-tracking-3 li,
        #location-tracking-2 li {
            list-style: none;
            line-height: 25px;
            font-size: 12px;
        }
        #location-tracking-3 p,
        #location-tracking-2 p{
            font-size: 13px;
        }
        #location-tracking-4 .box {
            width: 130px;
            height: 130px;
            margin: 20px 0;
        }
        #location-tracking-4 .box-content {
            padding: 25px 0 25px 0;
        }
        #location-tracking-4 .img-responsive {
            padding: 10px 50px;
        }
        #location-tracking-4 .text h2 {
            font-size: 20px;
        }
    }
    @media  (min-width: 320px)  and (max-width: 991.98px){
        #remote-support-1 .container{
            padding-left: 10%;
        }
        #remote-support-1 h4 {
            font-size: 22px;
            line-height: 10px;
        }
        #remote-support-1 h2 {
            width: 70%;
            font-size: 35px;
            font-weight: 600;
            line-height: 40px;
            margin-bottom: 25px;
        }
        #remote-support-1 p {
            width: 55%;
            line-height: 20px;
        }
        #location-tracking-2 .col-md-7{
            padding: 20px;
        }
        #location-tracking-2 .text h2 {
            font-size: 28px;
            line-height: 20px;
        }
        #location-tracking-2 .text {
            top: 20px;
            left: 269px;
        }
        #location-tracking-3 .text .text-main, #location-tracking-2 .text .text-main {
            font-size: 45px;
            line-height: 55px;
        }
        #location-tracking-3 .col-md-5,
        #location-tracking-2 .col-md-5{
            padding: 0 50px;
        }
        #location-tracking-4 .col-md-4{
            display: flex;
            justify-content: center;
        }
        #location-tracking-4 .box {
            width: 300px;
            height: 300px;
            margin: 30px 0;
        }
        #location-tracking-4 .box-content {
            padding: 75px 0 40px 0;
        }
        #location-tracking-4 .img-responsive {
            padding: 10px 100px;
        }
        #location-tracking-4 .text-box p{
            font-size: 17px;
        }
    }
    @media (max-width: 612px){
        #location-tracking-2 .text h2 {
            line-height: 28px;
        }
        #location-tracking-2 .text {
            top: 12px;
            left: 150px;
        }
        #location-tracking-3 .text .text-main, #location-tracking-2 .text .text-main {
            font-size: 19px;
            line-height: 34px;
        }
        #location-tracking-3 h2 {
            font-size: 16px;
            font-weight: 600;
        }
        #location-tracking-2 .text h2 {
            font-size: 16px;
            line-height: 20px;
        }
        #location-tracking-3 .text {
            top: -5px;
        }
        #location-tracking-3 li,
        #location-tracking-2 li {
            list-style: none;
            line-height: 26px;
            font-size: 10px;
        }
        #location-tracking-2 .col-md-5 p,
        #location-tracking-3 .col-md-5 p{
            font-size: 13px;
        }
        #location-tracking-3 .col-md-5, #location-tracking-2 .col-md-5{
            padding: 50px 50px;
        }
        #location-tracking-3 .text {
            position: absolute;
            top: 0;
            width: 60%;
            left: 9px;
        }
    }

</style>

@endsection
{{-- Body HTML --}}
@section('content')

<section id="remote-support-1">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <h4>Location Tracking </h4>
                <h2>Follow the Footprints of Your Enterprise Devices</h2>
            </div>

            <div class="col-xs-12 col-md-12">
                <p>
                    Keep a constant track of your mobile assets.
                    Track device location in real time and always
                    be on the top of your enterprise inventory.
                </p>
            </div>
        </div>
    </div>
</section>

<section id="location-tracking-2">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-7">
                <img src="/image/mainpage/scalefusion/image 13.png" class="img-reponsive">
                <div class="text">
                    <h2>
                        Monitor Movement of <br> <span class="text-main">Android</span> and <br> <span class="text-main" >iOS Devices</span>
                    </h2>
                </div>
            </div>
            <div class="col-xs-12 col-md-5">
                <p>
                    For remote and frontline employees,
                    device location tracking can be helpful in extending improved management,
                    streamlined troubleshooting and security.
                    Don’t let your enterprise devices be out of your sight.
                </p>
                <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                <li>Track date, time, latitude & longitude</li>
                <li>Get entire route history</li>
                <li>Track location in Balanced Mode and High Accuracy Mode</li>
                <li>Choose frequency of collecting location details</li>
                <li>Set the frequency of collecting location</li>
                <li>Enforce ‘GPS always ON’ on select devices</li>
                <li>Monitor multiple devices at a time</li>
                <li>Obtain detailed location reports</li>
            </div>
        </div>
    </div>
</section>

<section id="location-tracking-3">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-7 col-md-push-5">
                <img src="/image/mainpage/scalefusion/image 14.png" class="img-reponsive">
                <div class="text">
                    <h2>
                        Set Virtual Boundaries To <br> <span class="text-main">Physical Locations</span><br> with <span class="text-main" >Geofencing</span>
                    </h2>
                </div>
            </div>
            <div class="col-xs-12 col-md-5 col-md-pull-7">
                <p>
                    Create one or more geofences for enhanced device tracking and resource optimization.
                    Set radius of operation, track when the device moves in or
                    out to optimize frontline employee operations on the field.
                </p>
                <li>Set small radii geofence setting</li>
                <li>Get notifications about breach in geofence</li>
                <li>Automate alerts when device moves in or out of the geofence</li>
                <li>Automate policy switch based on geofence</li>
            </div>
        </div>
    </div>
</section>
<section id="location-tracking-4">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <div class="text">
                    <h2>
                        Tailor-Made for Diverse Industries and Use-Case
                    </h2>
                    <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                </div>
            </div>
            <div class="col-xs-12 col-md-6">
                <div class="col-xs-12 col-md-4">
                    <div class="box">
                        <div class="box-content" >
                            <img src="/image/mainpage/scalefusion/icon/image 341.png"class="img-responsive" alt="">
                            <div class="text-box">
                                <p>Logistics</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="box">
                        <div class="box-content" >
                            <img src="/image/mainpage/scalefusion/icon/image 342.png"class="img-responsive" alt="">
                            <div class="text-box">
                                <p>Logistics</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="box">
                        <div class="box-content">
                            <img src="/image/mainpage/scalefusion/icon/image 344.png"class="img-responsive" alt="">
                            <div class="text-box">
                                <p>Logistics</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="box">
                        <div class="box-content">
                            <img src="/image/mainpage/scalefusion/icon/image 343.png"class="img-responsive" alt="">
                            <div class="text-box">
                                <p>Logistics</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="box">
                        <div class="box-content">
                            <img src="/image/mainpage/scalefusion/icon/image 345.png"class="img-responsive" alt="">
                            <div class="text-box">
                                <p>Logistics</p>
                            </div>
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


@endsection
