@extends('layout/home-2')


{{-- Title Website --}}
@section('title', 'MOBIHUB | Android obile device management')

{{-- Link CSS --}}
@section('link')


<style>
    h3,h4,h2,h1,p  {
        font-family: 'Prompt';
        color: #505050 !important;
    }
    .android-device-management{
        background-color:#f5f8fc ;
    }
    .android-device-management .col-box{
        height: 500px;
    }
    .android-device-management .col-md-6{
        height: 100%;
    }
    .android-device-management-6 img,
    .main-pic-brand img,
    .android-device-management-2 img,
    .android-device-management img{
        max-width: 100%;
    }
    .main-pic-brand{
        background: #ffffff;
        padding: 100px 0;
    }
    .android-device-management .d-flex{
        display: flex;
        justify-content: center;
        align-items: center ;
    }
    .android-device-management .pic-certi{
        margin-top: 50px;
    }
    .android-device-management-3 .text-head h3,
    .android-device-management h3{
        font-size: 18px;
        color: #256BFF;
        margin: 30px 0;

    }

    .android-device-management-3,
    .android-device-management-1,
    .android-device-management-2{
        padding: 150px 0;
    }
    .android-device-management-6 .text-head h1,
    .android-device-management-3 .text-head h1,
    .android-device-management-1 h1,
    .android-device-management h1{
        font-size: 40px;
        margin: 20px 0;
        font-weight: bold;

    }

    .main-pic-brand p{
        font-size: 18px;
        margin: 20px 0;
    }
    .main-pic-brand .pic-brand p{
        text-align: center;

    }
    .android-device-management-1 ul.feature li{
        display: flex;
    }
    .android-device-management-1 ul.feature {
        list-style-type: none;
        margin-top: 30px;
    }
    .android-device-management-1 ul.feature li:before {
        content: '\2014';
        margin-right: 10px;
        color: #256BFF;
        font-weight: 700;
    }
    .android-device-management-1 ul.feature .bold{
        font-size: 16px;
        font-weight: bold;
    }
    .android-device-management-6 .text-head p,
    .android-device-management-3 .text-head p,
    .android-device-management-1 p{
        font-size: 18px;
    }
    .android-device-management-1 .d-flex{
        flex-direction: column;
        align-items: center;
        display: flex;
    }
    .android-device-management-1 .box{
        display: flex;
        justify-content: center;
    }
    .android-device-management-1 ul.nav-tabs {
        background-color: #ffe3e2;
        border-radius: 60px;
        margin: 40px auto 0 auto;
        width: fit-content;
        border: none !important;
    }
    .android-device-management-1 ul#switch-tabs li.nav-item.active a {
        background-color: #EB6864;
        color: #ffffff;
        border: none;
    }
    .nav-tabs>li > a:hover{
        border-radius: 60px;
        background-color: rgba(37,107,255,0.1);
    }
    .nav-tabs>li.active>a,
    .nav-tabs>li.active>a:focus,
    .nav-tabs>li.active>a:hover {
        background-color: #EB6864;
        color: #ffffff;
        border: none;
        cursor: default;
        margin-right: 0;
        border-radius: 60px;
        transition: linear 0.2s;
        text-align: center;
    }

    .android-device-management-1 a, a:hover {
        color: #1A142C ;
    }
    .android-device-management-6 .text-head,
    .android-device-management-2 .text-head{
        text-align: center;
    }
    .android-device-management-2{
        background-color:#f5f8fc ;
    }
    /* .android-device-management-2 .box {
        margin-top: 50px;
        padding: 90px 15px 0px;
        width: 519px;
        border: none;
        background-color: #ffffff;
        -webkit-box-shadow: 0px 27px 136px rgb(129 137 190 / 9%), 0px 6.0308px 30.3774px rgb(129 137 190 / 5%), 0px 1.79553px 9.04414px rgb(129 137 190 / 4%);
        box-shadow: 0px 27px 136px rgb(129 137 190 / 9%), 0px 6.0308px 30.3774px rgb(129 137 190 / 5%), 0px 1.79553px 9.04414px rgb(129 137 190 / 4%);
    } */
    .android-device-management-2 .box {
        text-align: left;
    }
    .android-device-management-2 .box h4{
        font-weight: bold;
        padding-bottom: 20px;
    }
    .android-device-management-2 .text-head h1{
        font-size: 30px;
    }
    .android-device-management-2 .col-box{
        display: flex;
        flex-wrap: wrap;
        flex-direction: row;
        gap: 20px;
        width: 100%;
        justify-content: center;
    }
    .android-device-management-2 .p-b-50{
        padding-bottom: 50px;
    }
    .android-device-management-2 .main-box{
        border-radius: 8px;
        margin-top: 50px;
        padding: 90px 15px 0px;
        width: 519px;
        border: none;
        background-color: #ffffff;
        -webkit-box-shadow: 0px 27px 136px rgb(129 137 190 / 9%), 0px 6.0308px 30.3774px rgb(129 137 190 / 5%), 0px 1.79553px 9.04414px rgb(129 137 190 / 4%);
        box-shadow: 0px 27px 136px rgb(129 137 190 / 9%), 0px 6.0308px 30.3774px rgb(129 137 190 / 5%), 0px 1.79553px 9.04414px rgb(129 137 190 / 4%);
    }
    .android-device-management-2 .p-0{
        padding: 0;
    }
    .android-device-management-2 ul{
        padding-inline-start: 0;
    }
    .android-device-management-2 ul li{
        list-style: none;
        display: inline-flex;
    }
    .android-device-management-2 span{
        padding-right: 5px;
        color: #C5001A;
    }
    .android-device-management-2 .fa-check-circle{
        color: #C5001A  ;
    }

    .android-device-management-3 .text-head{
        text-align: center;
    }
    .android-device-management-3 .device{
        padding: 60px 60px;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }
    .android-device-management-3 .device-box{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-end;
    }
    .android-device-management-3 .device-box p{
        font-size: 14px;
        font-weight: bold;
        margin: 20px 0;
    }
    .android-device-management-4{
        background-image: url('/image/mainpage/solution/ios/white-geometrical-shapes-background.png');
        background-size: cover;
        background-repeat: no-repeat;
        height: auto;
        padding: 100px 0;
    }
    .android-device-management-4::before{

    }
    .android-device-management-4 .text-head{

        margin: 20px 0;
        border-bottom: 1px solid rgba(0,0,0,0.4);
    }
    .android-device-management-4 .text-head h5{
        font-size: 16px;
        font-weight: bold;
        color: #C5001A;
    }
    .android-device-management-4 .text-head p{
        margin-bottom: 30px;
    }
    .sf-ios-mdm .section-8,
    .sf-ios-mdm .section-7,
    .sf-ios-mdm .section-6,
    .sf-ios-mdm .section-5{
        padding: 100px 0;
    }
    .sf-ios-mdm .section-5 .v-center{
        text-align: center;
    }
    .sf-ios-mdm .section-6 .space-between{
        display: flex;
        justify-content: center;
    }
    .sf-ios-mdm .section-6 .box{
        background: #e8e8e891;
        border-radius: 25px;
        padding: 10px;
        margin: 0 15px;
    }
    .sf-ios-mdm .section-8 .three-col-features{
        display: flex;
        justify-content: space-between;
        margin-top: 50px;
    }
    .sf-ios-mdm .section-8 .three-col-features .p-l-0{
        padding: 20px;
        margin: 0 15px;
        background: #e8e8e891;
        border-radius: 25px;
    }
    .sf-ios-mdm .section-11{
        background: #e8e8e891;
        padding: 100px 0;
    }
    .sf-ios-mdm .section-11 .pic-11{
        text-align: center;
    }
    .sf-ios-mdm .section-11 .v-top{
        padding-top: 13%;
    }
    .sf-ios-mdm .section-12{
        padding: 100px 0;
    }
    .sf-ios-mdm .section-12 .sf-cards{
        display: inline-flex;
    }
    .sf-ios-mdm .section-12 .top-layer{
    }
    .sf-ios-mdm .section-12 .bg-img{
        width: 100%;
    }
    .sf-ios-mdm .section-12 .card-body{
        border: 0.5px solid #D4D4D4;
        box-sizing: border-box;
        border-radius: 25px;
        padding: 20px;
        margin: 0 10px;
        text-align: center;
    }
    .sf-ios-mdm .section-12 .card-body p{
        text-align: start;
    }
    @media (max-width:1199.98px){
        .nav-tabs>li>a,
        .nav-tabs>li>a:focus,
        .nav-tabs>li>a:hover{
            font-size: 1rem;
        }
        .android-device-management-6 .text-head h1, .android-device-management-3 .text-head h1, .android-device-management-1 h1, .android-device-management h1{
            font-size: 30px;
        }
        .android-device-management-6 .text-head p, .android-device-management-3 .text-head p, .android-device-management-1 p{
            font-size: 14px;
        }

    }
    @media  (min-width: 320px)  and (max-width: 991.98px){
        .android-device-management-4 .box{
            height: auto;
        }
        .android-device-management-5 .container {
            padding: 600px 0 100px 0;
            border-bottom: 1px solid #000;
        }
        .android-device-management-5 .img-bg {
            background-position-x: 50%;
        }
        .android-device-management-6 .text-head {
            padding: 100px 50px;
        }
        .android-device-management-3 .device-box {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0px 15px;
            justify-content: flex-end;
        }
        .android-device-management-3 .device-box p {
        text-align: center;
        }
        .android-device-management-3 .device {
            padding: 0px 0px;
            display: flex;
            justify-content: space-between;
            flex-wrap: nowrap;
        }

    }
    @media (max-width:767.98px){
        .android-device-management-4 .text-main{
            border-bottom: 0.5px solid rgb(125 0 0 / 61%);
        }
        .android-device-management-4 .text-main h5{
            font-weight: 600;
            font-size: 20px;
        }
        .android-device-management-4 .box{
            height: auto;
        }
        .android-device-management-4 .text-head {
            margin: 10px 0;
            border-bottom: 0px solid rgba(0,0,0,0.4);
        }
        .android-device-management-3, .android-device-management-1, .android-device-management-2 {
            padding: 150px 0;
        }
        .sf-ios-mdm .section-5 .v-center img{
            display: initial;
        }
        .sf-ios-mdm .section-6 .v-center img{
            display: initial;
        }
        .sf-ios-mdm .section-6 .v-center{
            text-align: center;
        }
        .sf-ios-mdm .section-8 .three-col-features{
            display: block;
        }
        .sf-ios-mdm .section-8 .three-col-features .p-l-0{
            margin: 15px 15px;
        }
        .sf-ios-mdm .section-6 .space-between{
            display: block;
            margin-top: 50px;
        }
        .sf-ios-mdm .section-6 .box{
            margin: 15px 15px;
        }
        .sf-ios-mdm .section-12 .sf-cards{
            display: block;
        }
        .sf-ios-mdm .section-12 .card-body{
            margin: 15px 10px;
        }
    }
    @media (max-width:600.98px){
        .android-device-management-3 .device {
            padding: 0px 0px;
            display: block;
        }
        .android-device-management-5 .space-between {
            display: block;
            margin-top: 100px;
            padding: 0 30px;
        }
        .android-device-management-5 .space-between .col-md-3 {
            margin: 15px 0;
            padding: 20px;
            border-radius: 25px;
            background: #f8f8f8;
        }
        .android-device-management-5 .container {
            padding: 0px 15px 100px 15px;
        }
        .android-device-management-6 .feature-columns {
            display: inline-flex;
            width: 100%;
        }
        .android-device-management-6 .feature-columns {
            display: block;
            width: 100%;
        }
    }
    @media (max-width:500.98px){
        .android-device-management-3, .android-device-management-1, .android-device-management-2 {
            padding: 350px 0;
        }
        .android-device-management-1 ul.nav-tabs {
            background-color: #ffe3e2;
            display: inline-grid;
            border-radius: 20px;
            margin: 40px auto 0 auto;
            width: 100%;
            text-align: center;
            border: none !important;
        }
        .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
            background-color: #EB6864;
            color: #ffffff;
            border: none;
            cursor: default;
            margin-right: 0;
            border-radius: 60px;
            transition: linear 0.2s;
            text-align: center;
        }
    }


</style>
@endsection


{{-- Body HTML --}}
@section('content')
    <section class="android-device-management">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-box">
                    <div class="col-xs-6 col-md-6">
                        <h3>
                            iOS MDM Software
                        </h3>
                        <h1>
                            Mobile Device Management (MDM) Solution for iOS
                        </h1>
                        <img src="/image/mainpage/solution/android/violet-line-ee0f59e2ae2ad49971475c62b0f04c816ebe9cddd13ed8886e2fd05dd1716da8.svg" alt="">
                        <p>
                            Quickly provision, secure and manage company-owned iOS devices including iPhone, iPad, and iPad Pro. Scalefusion MDM for iOS supports varying device use cases across small business, schools and growing enterprises.
                        </p>
                        <div class="pic-certi">
                            <img src="/image/mainpage/solution/android/g2crowd_logos-971dd0dde2a823023930d7db4c2d972bebc20481cb853dbaa2af73d25a8383d9.png" alt="">
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-6 d-flex">
                        <img src="/image/mainpage/solution/ios/ios-mdm-device-mockup-dc06e87e62db9191729ffc679d7d735dbafe7e2d8fb115db45b74e893e9fdd86.png" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>

    </section>
    <section class="android-device-management-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12 ">
                    <div class="col-xs-12 col-md-6 d-flex ">
                        <div class="tab" role="tabpanel">
                            <!-- Tab panes -->
                            <div class="tab-content tabs">
                                <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                                    <div class="box">
                                        <img src="/image/mainpage/solution/ios/ipad-kiosk-single-mode-9f802a139d77905ec6d139d8335321c9dd8d6ba9e6845eaf0ddc8abcc75f8f5d.png">
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="Section2">
                                    <div class="box">
                                        <img src="/image/mainpage/solution/ios/ios-tablet-3d74e61df6b818a08ac26affb733a391fb201ad056cbfefd40d8ca89bafdb9eb.png">
                                    </div>
                                </div>
                            </div>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">Single App </a>
                                </li>
                                <li role="presentation">
                                    <a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab">Multi App</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <h1>
                            With Supervised Mode Turn your iPad into Kiosk
                        </h1>
                        <img src="/image/mainpage/solution/android/violet-line-ee0f59e2ae2ad49971475c62b0f04c816ebe9cddd13ed8886e2fd05dd1716da8.svg" alt="">
                        <p>
                           Support diverse range of enterprise and educational use-cases. Scalefusion MDM for iPhone & iPad supports supervised mode, allowing you to have enhanced control over the device. Explore different capabilities of iOS MDM Solution.
                        </p>
                       <ul class="feature">
                           <li>
                            <p>
                                <span class="bold">Single App Mode:</span>
                                Lock the device operations to a single app. Prevent access to hardware keys, block navigation and turn the device into a business-only device.
                            </p>
                           </li>
                           <li>
                            <p>
                                <span class="bold"> Multi App Mode:</span>
                                Configure two or more apps or browsers to run on the device. Prevent access to any other apps.
                            </p>
                           </li>
                           <li>
                            <p>
                                <span class="bold"> Company Branding:</span>
                                Reflect your company branding on iPad kiosks. Customize home screen and lock screen wallpapers.
                            </p>
                           </li>
                       </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="android-device-management-2">
        <div class="container">
            <div class="row">
                <div class="text-head">
                    <h1>
                        Support Different Android Management Modes With Ease Using Scalefusion
                    </h1>
                    <img src="/image/mainpage/solution/android/violet-line-ee0f59e2ae2ad49971475c62b0f04c816ebe9cddd13ed8886e2fd05dd1716da8.svg" alt="">
                </div>
                <div class="col-xs-12 col-md-12 col-box">
                    <div class="main-box">
                        <div class="box">
                            <div class="col-lg-7 col-sm-7 col-xs-12 p-b-50">
                                <h4 class="header-font">
                                    Personally-Owned
                                </h4>
                                <p class="body-text">
                                    This is ideal when you allow employees to use their personal iPhones and iPads for work.
                                </p>
                                <ul class="pros-and-cons p-l-0">
                                        <li>
                                            <span><i class="fas fa-check-circle"></i></span>
                                            <p class="body-text body-text__medium body-text--grey m-t-0 m-b-15">

                                                Push business apps and content
                                            </p>
                                        </li>
                                        <li>
                                            <span><i class="fas fa-check-circle"></i></span>
                                            <p class="body-text body-text__medium body-text--grey m-t-0 m-b-15">
                                                Selectively wipe-off work apps
                                            </p>
                                        </li>
                                        <li>
                                            <span><i class="fas fa-check-circle"></i></span>
                                            <p class="body-text body-text__medium body-text--grey m-t-0 m-b-15">
                                                Prevent copy from work to personal apps
                                            </p>
                                        </li>
                                </ul>
                            </div>
                            <div class="col-lg-5 col-sm-5 col-xs-12 p-0">
                                <img src="/image/mainpage/solution/ios/device_one-294cf5f9a0699984e92861cce49734a46d877c9096bd4b9826e75d0d4d893e2d.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="main-box">
                        <div class="box">
                            <div class="col-lg-7 col-sm-7 col-xs-12">
                                <h4 >
                                    Company-Owned
                                </h4>
                                <p class="body-text body-text__medium body-text--grey">
                                    This is ideal when your company provides iPhones and iPads to your employees for work.
                                </p>
                                <ul class="pros-and-cons p-l-0">
                                        <li>
                                            <span><i class="fas fa-check-circle"></i></span>
                                            <p class="body-text body-text__medium body-text--grey m-t-0 m-b-15">
                                                Have full device control
                                            </p>
                                        </li>
                                        <li>
                                            <span><i class="fas fa-check-circle"></i></span>
                                            <p class="body-text body-text__medium body-text--grey m-t-0 m-b-15">
                                                Track device location
                                            </p>
                                        </li>
                                        <li>
                                            <span><i class="fas fa-check-circle"></i></span>
                                            <p class="body-text body-text__medium body-text--grey m-t-0 m-b-15">
                                                Equip with business apps, block the rest
                                            </p>
                                        </li>
                                </ul>
                            </div>
                            <div class="col-lg-5 col-sm-5 col-xs-12 flex h-bottom v-bottom xs-h-center p-0">
                                <img src="/image/mainpage/solution/ios/device_two-d2782de4ae14ee659f5b43fa4cb60d3896ea7cc09658e8e2d92a188b90f8f292.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="android-device-management-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="text-head">
                        <h2>
                            Key Features
                        </h2>
                    </div>
                    <div class="row text-head">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 p-l-0">
                            <div class="row box">
                                <div class="col-lg-12">
                                    <h5 >
                                        Location and Geofencing
                                    </h5>
                                    <p>
                                        Track location in real-time. Create geofences and get notifications whenever devices move within a geofence.
                                    </p>
                                </div>
                            </div>
                            <div class="row box">
                                <div class="col-lg-12">
                                    <h5 >
                                        Reports
                                    </h5>
                                    <p>
                                        Generate reports for device usage, performance and users activity. Take data-driven actions to upkeep device performance.
                                    </p>
                                </div>
                            </div>
                            <div class="row box">
                                <div class="col-lg-12">
                                    <h5 >
                                        Device Vital Monitoring
                                    </h5>
                                    <p>
                                        Monitor device vitals including battery, data and storage usage. Monitor security incidents and downtimes.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 p-l-0">
                            <div class="row box">
                                <div class="col-lg-12">
                                    <h5 >
                                        Location and Geofencing
                                    </h5>
                                    <p>
                                        Track location in real-time. Create geofences and get notifications whenever devices move within a geofence.
                                    </p>
                                </div>
                            </div>
                            <div class="row box">
                                <div class="col-lg-12">
                                    <h5 >
                                        Reports
                                    </h5>
                                    <p>
                                        Generate reports for device usage, performance and users activity. Take data-driven actions to upkeep device performance.
                                    </p>
                                </div>
                            </div>
                            <div class="row box">
                                <div class="col-lg-12">
                                    <h5 >
                                        Device Vital Monitoring
                                    </h5>
                                    <p>
                                        Monitor device vitals including battery, data and storage usage. Monitor security incidents and downtimes.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 p-l-0">
                            <div class="row box">
                                <div class="col-lg-12">
                                    <h5 >
                                        Location and Geofencing
                                    </h5>
                                    <p>
                                        Track location in real-time. Create geofences and get notifications whenever devices move within a geofence.
                                    </p>
                                </div>
                            </div>
                            <div class="row box">
                                <div class="col-lg-12">
                                    <h5 >
                                        Reports
                                    </h5>
                                    <p>
                                        Generate reports for device usage, performance and users activity. Take data-driven actions to upkeep device performance.
                                    </p>
                                </div>
                            </div>
                            <div class="row box">
                                <div class="col-lg-12">
                                    <h5 >
                                        Device Vital Monitoring
                                    </h5>
                                    <p>
                                        Monitor device vitals including battery, data and storage usage. Monitor security incidents and downtimes.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section class="sf-wrapper">
    <div class="sf-ios-mdm">
        <div class="section-5">
            <div class="bg-layer p-abs bg-color bg-color--dark">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5"></div>
                        <div class="col-lg-7 bg-animation-col">
                            <div class="ripple-animation">
                                <div class="circle outer-circle">
                                    <div class="circle inner-circle"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-layer">
                <div class="container">
                    <div class="row flex xs-col xs-col-swap">
                        <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12 xs-p-t-40">
                            <h2 class="header-font header-font--light">
                                Simplified Enrollment To Deploy Your iOS Devices at Scale
                            </h2>
                            <img src="/image/mainpage/solution/ios/white-line-9a8706f6858c4e4dd7c0d41bd908b653588c18accff616458827fb13b9e1d7cd.svg">
                            <p class="body-text body-text__medium body-text--light-blue">
                                Provision iPhones and iPads straight out of the box using Apple Business Manager (formerly Device Enrollment Program (DEP). Enable your employees to use their devices out of the box without intervention from the IT team.
                            </p>
                            <p class="body-text body-text__medium body-text--light-blue">
                                Import users from G Suite and Office 365 and quickly onboard devices on the Scalefusion platform. No deployment is too big – or small.
                            </p>
                        </div>
                        <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12 flex h-center v-center xs-p-t-40">
                            <img alt="iOS MDM Solution" class="img-responsive" data-rjs="/image/mainpage/solution/ios/ios-devices-b2e9e113913667697076fd9ea3225c09eef352edc9bb10503c2c00ce3e8749f6.png" src="/image/mainpage/solution/ios/ios-devices-b2e9e113913667697076fd9ea3225c09eef352edc9bb10503c2c00ce3e8749f6.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-6">
            <div class="bg-layer p-abs"></div>
            <div class="grid-container p-abs">
                <div class="grid">
                    <!-- left side stripes-->
                    <div class="grid-block grid-block__outline-pattern grid-block__outline-pattern--black"></div>
                </div>
            </div>
            <div class="top-layer p-t-80 p-b-50">
                <div class="container">
                    <div class="row flex xs-col m-0">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 flex v-center h-center">
                            <img class="img-responsive" alt="iOS app management" src="/image/mainpage/solution/ios/image 196-1.png">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <h5 class="header-font header-font--blue">
                                Application Distribution &amp; Management
                            </h5>
                            <h2 class="header-font header-font--dark">
                                Apps for Your Business, Delivered With Ease
                            </h2>
                            <p class="body-text body-text__large body-text--dark m-b-15">
                                Enable your workforce to do more with relevant business apps on iOS devices. Install, configure, or uninstall applications from the Scalefusion dashboard.
                            </p>
                            <ul class="features p-l-0">
                                    <li>
                                        <p class="body-text body-text__medium body-text--dark m-t-0 m-b-10">
                                            <span class="bold">Apple App Store:</span> Select, configure and push applications from the App Store.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="body-text body-text__medium body-text--dark m-t-0 m-b-10">
                                            <span class="bold">Volume Purchase Program:</span> Drive bulk app publishing using Apple VPP.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="body-text body-text__medium body-text--dark m-t-0 m-b-10">
                                            <span class="bold">Scalefusion Enterprise Store:</span> Install private apps by uploading PList link or IPA file.
                                        </p>
                                    </li>
                            </ul>

                        </div>
                    </div>
                    <div class="row m-0 flex space-between xs-col m-t-30">
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 box">
                                <div class="image-title-wrapper">

                                    <h4 class="header-font header-font--dark">
                                        App Configurations
                                    </h4>
                                </div>
                                <p class="body-text body-text__medium body-text--grey m-t-5">
                                    Select, configure and push applications from the App Store.
                                </p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 box">
                                <div class="image-title-wrapper">
                                    <h4 class="header-font header-font--dark">
                                        Installation Status
                                    </h4>
                                </div>
                                <p class="body-text body-text__medium body-text--grey m-t-5">
                                    Drive bulk app publishing using Apple Volume Purchase Program (VPP).
                                </p>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 box">
                                <div class="image-title-wrapper">
                                    <h4 class="header-font header-font--dark">
                                        Silent Installation
                                    </h4>
                                </div>
                                <p class="body-text body-text__medium body-text--grey m-t-5">
                                    Install private apps by uploading PList link or IPA file.
                                </p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-7">
            <div class="bg-layer bg-layer__gradiant-top p-abs"></div>
            <div class="grid-container p-abs">
                <div class="grid">
                    <!-- left side stripes-->
                    <div class="grid-block grid-block--yellow"></div>
                    <div class="grid-block grid-block--blue"></div>
                    <!-- right side stripes-->
                    <div class="grid-block grid-block--blue"></div>
                    <div class="grid-block grid-block__outline-pattern grid-block__outline-pattern--black"></div>
                </div>
            </div>
            <div class="top-layer p-b-0">
                <div class="container border-bottom p-b-80 xs-p-b-40">
                    <div class="row flex xs-col">
                        <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 flex v-center xs-m-b-40">
                            <img alt="iOS app blacklisting" class="img-responsive" src="/image/mainpage/solution/ios/image 197.png">
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 flex flex-col v-top">
                            <h2 class="header-font header-font--dark">
                                Application Blacklisting for Distraction-Free Work
                            </h2>
                            <p class="body-text body-text__large body-text--dark">
                                Restrict usage of non-business apps on the devices. Blacklist the apps that do not fit your enterprise security profile.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-8">
            <div class="top-layer">
                <div class="container">
                    <div class="row flex xs-col xs-col-swap">
                        <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                            <h5 class="header-font header-font--blue">
                                Remote Cast for iOS MDM
                            </h5>
                            <h2 class="header-font header-font--dark">
                                Never Let Device Downtime Come in the Way of Productivity
                            </h2>
                            <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                            <p class="body-text body-text__large body-text--dark m-b-15">
                                Don’t lose business productivity caused by device errors. Remotely troubleshoot device issues and shorten device downtime with Scalefusion Remote Cast. Seamlessly support remote working, learning and frontline workforce with ease.
                            </p>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 flex v-center xs-m-b-40">
                            <img alt="iOS app  Remote Cast" class="img-responsive" src="/image/mainpage/solution/ios/image 198.png">
                        </div>
                    </div>
                    <div class="row flex">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="three-col-features">
                                    <div class="col p-l-0">
                                        <div class="image-title-wrapper flex h-top">

                                            <h4 class="header-font header-font--dark">
                                                Faster Issue Resolution
                                            </h4>
                                        </div>
                                        <p class="body-text body-text__medium body-text--grey m-t-5">
                                            Quickly resolve device issues of remote iOS devices.
                                        </p>
                                    </div>
                                    <div class="col p-l-0">
                                        <div class="image-title-wrapper flex h-top">
                                            <h4 class="header-font header-font--dark">
                                                Take Screenshot
                                            </h4>
                                        </div>
                                        <p class="body-text body-text__medium body-text--grey m-t-5">
                                            Capture device screenshots when the device session is in-process.
                                        </p>
                                    </div>
                                    <div class="col p-l-0">
                                        <div class="image-title-wrapper flex h-top">

                                            <h4 class="header-font header-font--dark">
                                                Create Support Tickets
                                            </h4>
                                        </div>
                                        <p class="body-text body-text__medium body-text--grey m-t-5">
                                            Integrate ITSM platform to create context-aware support tickets.
                                        </p>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="section-11">
            <div class="bg-layer bg-layer__gradiant-top p-abs"></div>
            <div class="grid-container">
                <div class="grid">
                    <!-- left side stripes-->
                    <div class="grid-block grid-block--blue"></div>
                    <div class="grid-block grid-block__outline-pattern grid-block__outline-pattern--black"></div>
                    <!-- right side stripes-->
                    <div class="grid-block grid-block--blue"></div>
                    <div class="grid-block grid-block__outline-pattern grid-block__outline-pattern--black"></div>
                </div>
            </div>
            <div class="top-layer xs-p-t-80">
                <div class="container">
                    <div class="row flex xs-col">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 flex h-center pic-11">
                            <img alt="iOS Mobile Device Management" data-rjs="/image/mainpage/solution/ios/Group 509.png" src="/image/mainpage/solution/ios/Group 509.png" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 flex flex-col h-center v-top">
                            <h2 class="header-font header-font--dark">
                                Make Security Your #1 Priority
                            </h2>
                            <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                            <p class="body-text body-text__large body-text--dark">
                                When your iOS devices are helping out accomplish multiple tasks, don’t expose the corporate data lying to malware attacks and misuse. Apply strong security settings and access control policies policies. Protect corporate data on lost and stolen devices with remote wipes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-12">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-6 col-md-push-6">
                        <img class="bg-img hidden-sm hidden-xs" width="584px" alt="iPad MDM" data-rjs="/image/mainpage/solution/ios/sf-for-education-72c0c8b1666a10e9a653e427cd94efa41fcc1213451117dcb45211a5abd69dd9 (1).jpg" src="/image/mainpage/solution/ios/sf-for-education-72c0c8b1666a10e9a653e427cd94efa41fcc1213451117dcb45211a5abd69dd9 (1).jpg" />
                    </div>
                    <div class="top-layer col-xs-12 col-md-6  col-md-pull-6">
                        <div class="container">
                            <div class="row sm-p-t-30">
                                <div class="col-lg-6 col-md-5 col-sm-11 col-xs-12">
                                    <h2 class="header-font header-font--dark">
                                        Pave the Way for Digital Learning With Scalefusion MDM for Education
                                    </h2>
                                    <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                                    <p class="body-text body-text__large body-text--dark">
                                        Extend iPads for educational use. Provision educational apps, content and books for remote and classroom learning. Make the learning environment safe, protect student privacy and security. Block apps and websites that are not ideal for students and exercise parental controls without hampering the user experience.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-xs-12">
                        <h3 class="header-font header-font--dark p-t-80">
                            Other Industries
                        </h3>
                        <div class="sf-cards">
                            <div class="sf-card sf-card__three-card-layout sf-card--light">
                                <div class="card-body">
                                    <h4 class="header-font header-font--dark">
                                        Enterprises
                                    </h4>
                                    <p class="body-text body-text__medium body-text--grey">
                                        Deploy iOS devices for knowledge workers such as designers and developers within your enterprise.
                                    </p>
                                </div>
                            </div>
                            <div class="sf-card sf-card__three-card-layout sf-card--light">
                                <div class="feature-icon">
                                    <div id="retail-icon-animation"></div>
                                </div>
                                <div class="card-body">
                                    <h4 class="header-font header-font--dark">
                                        Retail
                                    </h4>
                                    <p class="body-text body-text__medium body-text--grey">
                                        Put your best foot forward. Extend iPad POS for retail for enhanced customer experience.
                                    </p>
                                </div>
                            </div>
                            <div class="sf-card sf-card__three-card-layout sf-card--light">
                                <div class="feature-icon">
                                    <div id="healthcare-icon-animation"></div>
                                </div>
                                <div class="card-body">
                                    <h4 class="header-font header-font--dark">
                                        Healthcare
                                    </h4>
                                    <p class="body-text body-text__medium body-text--grey">
                                        Power your frontline healthcare staff with iPhones and iPads equipped with healthcare apps.
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
<section class="main-pic-brand">
    <div class="container">
        <div class="row">
            <div class="pic-brand col-md-12">
                <p>Trusted by World’s Leading Companies</p>
                <img src="/image/mainpage/solution/android/brand.png" alt="">
            </div>
        </div>
    </div>

@endsection

{{-- js --}}
@section('script')

@endsection
