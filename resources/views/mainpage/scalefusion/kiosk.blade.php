@extends('layout/home-2')


{{-- Title Website --}}
@section('title', 'MOBIHUB | Mobile Device Management Software for a Modern Workforce')

{{-- Link CSS --}}
@section('link')
<style>
    h3,h4,h2,h1,p  {
        font-family: 'Prompt';
    }
    h3{
        font-size: 1.8rem;
        font-weight: 200;
        color: #505050;
    }
    h2{
        font-size: 2.5rem;
        font-weight: 200;
        color: #505050;
    }
    p{
        font-size: 1.5rem;
        color: #505050;
        font-weight: 200;
    }
    li{
        margin-bottom: 30px;
        font-size: 1.2rem;
        color: #505050;
    }
    .box h2{
        font-size: 1.5rem;
    }
    .box p{
        font-size: 1.2rem;
    }
    .main-pic-brand img{
        max-width: 100%;
    }
    .main-pic-brand{
        background: #ffffff;
        padding: 100px 0;
    }
    .main-pic-brand p{
        font-size: 18px;
        margin: 20px 0;
    }
    .main-pic-brand .pic-brand p{
        text-align: center;

    }
    #kiosk-8,
    #kiosk-5,
    #kiosk-6,
    #kiosk-7,
    #kiosk-4,
    #kiosk-3,
    #kiosk-2,
    #kiosk-1{
        padding: 100px 0;
    }
    #kiosk-1{
        background: #ffffff;
        margin-top: 73px;
    }
    #kiosk-1 .text h2{
        width: 80%;
    }
    #kiosk-8 .box .img-responsive,
    #kiosk-3 .box .img-responsive,
    #kiosk-2 .box .img-responsive{
        display: block;
        max-width: 15%;
        height: auto;
        margin: auto;
    }
    #kiosk-6 .box .img-responsive{
        display: block;
        max-width: 15%;
        height: auto;
    }
    #kiosk-8 .text,
    #kiosk-2 .text{
        text-align: center;
    }
    #kiosk-2{
        background: #999999;
    }
    #kiosk-2 .text.main p{
        padding-bottom: 50px;
    }
    #kiosk-2 .text.main p,
    #kiosk-2 .text.main h2{
        color: #ffffff
    }
    #kiosk-6 .box,
    #kiosk-3 .box,
    #kiosk-2 .box {
        background: #ffffff;
        border-radius: 25px;
        padding: 10%;
        margin-bottom: 30px;
    }
    #kiosk-3{

    }
    #kiosk-8 .box,
    #kiosk-3 .box{
        margin-top: 50px;
    }
    #kiosk-3 .col-md-6 img,
    #kiosk-3 .col-md-6 p{
        margin: 21px 0 0 50px;
        font-size: 1rem;
    }
    #kiosk-4{
        background-image: url('/image/mainpage/scalefusion/kiosk/Group 430.png');
        background-position: center;
        background-size: cover;
        background-repeat:no-repeat;
    }
    #kiosk-4 .text h2{
        width: 40%;
    }
    #kiosk-4 .text.main{
        padding: 100px 0;
    }
    #kiosk-5 .text img{
        margin-bottom: 50px;
    }
    #kiosk-4 .box{
        background: #F4F4F4;
        border-radius: 15px;
    }
    #kiosk-4 .box p,
    #kiosk-4 .box li{
        width: 70%;
    }
    #kiosk-4 .text-1{
        padding: 10%;
        background-image: url('/image/mainpage/scalefusion/kiosk/image 255.png');
        background-position: right;
        background-size: contain;
        background-repeat:no-repeat;
    }
    #kiosk-4 .text-2{
        padding: 10%;
        background-image: url('/image/mainpage/scalefusion/kiosk/image 256.png');
        background-position: right;
        background-size: contain;
        background-repeat:no-repeat;
    }
    #kiosk-5{
        background: #ffffff;
    }
    #kiosk-5 .col-md-12{
        padding: 50px 0;
    }
    #kiosk-6 .col-md-12 .text{
        margin-bottom: 50px;
    }
    #kiosk-7{
        background: #ffffff;
    }
    #kiosk-7 .col-md-12{
        padding: 50px 0;
    }
    #kiosk-8 .box{
        background: #999999;
        border-radius: 5px;
        padding: 10%;
    }
    #kiosk-8 .box h2,
    #kiosk-8 .box p{
        color: #ffffff;
    }
    #kiosk-8 .pic{
        display: flex;
        padding: 10%;
    }
    #kiosk-8 .pic .img-responsive{
        max-width: 50%;
        height: 100px;
        padding-right: 30px;
    }
    #kiosk-8 .col-md-6.sub{
        margin-top: 100px;
    }
    /* #team-commu-6 */

    #team-commu-6 .text-team-6{
        text-align: center;
    }
    #team-commu-6 .text-team-6 h2{
        color: #D45745;
    }
    #team-commu-6 ul li img{
        max-width: 50%;
        height: auto;
        width: 150px;
    }
    #team-commu-6 ul{
        display: inline-flex;
        list-style: none;
        justify-content: center;
        align-items: center;
        width: 100%;
        padding-left: 20px;
    }

    @media (max-width:1199.98px){

    }
    @media (max-width:991.98px){
            #kiosk-1{
            margin-top: 0px;
        }
            #kiosk-4 .text h2 {
            width: 100%;
        }
        #kiosk-4 .text-1 {
            margin: 50px 0;
        }

    }
    @media (max-width:600.98px){


    }
    @media (max-width:500.98px){
        #kiosk-1 .text h2 {
            width: 100%;
        }
        #kiosk-8 .col-md-6.sub {
            margin-top: 0px;
        }
        #kiosk-8 .pic .img-responsive {
            max-width: 50%;
            height: 60px;
            padding-right: 30px;
        }
        #kiosk-3 .col-md-6 img,
        #kiosk-3 .col-md-6 p {
            margin: 21px 0 0 0px;
            font-size: 1rem;
        }
        #kiosk-4 .text-1 {
            background-position-y: 145px;
            background-position-x: 175px;
        }
        #kiosk-4 .text-2 {
            background-position-y: 145px;
            background-position-x: 175px;
        }
        #kiosk-4 .box li {
            font-size: 0.9rem;
            margin-bottom: 10px;
        }
    }
</style>
@endsection


{{-- Body HTML --}}
@section('content')
    <section id="kiosk-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="col-xs-12 col-md-6 ">
                        <img class="img-responsive" src="/image/mainpage/scalefusion/device-manage/image 216.png" alt="">
                    </div>
                    <div class="col-xs-12 col-md-6 ">
                        <div class="text">
                            <h2>
                                Mobile Device Management
                                Software for a Modern Workforce
                            </h2>
                            <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                            <p>
                                Scalefusion Mobile Device Management (MDM) Software gives your IT teams visibility and control required to secure, manage and monitor any corporate-owned or employee-owned devices that access corporate data.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="kiosk-3">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="col-xs-12 col-md-6">
                        <h2>
                            Best Multi-Platform Kiosk Solution in the Market
                        </h2>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <p>
                            Configure corporate-owned devices for business by locking them in single or multi-app kiosk mode. Disable non-business apps and websites to prevent employee distractions & device misuse.
                        </p>
                        <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                    </div>
                    <div class="col-xs-12 col-md-12">
                        <div class="col-xs-12 col-md-4">
                            <div class="box">
                                <div class="text">
                                    <img class="img-responsive" src="/image/mainpage/scalefusion/kiosk/brand/image 252.png" alt="">
                                    <h2>
                                        Kiosk Mode for Android
                                    </h2>
                                    <p>
                                        Lockdown any Android device restricting the user to a specific app(s) or website(s) and prevent the user from closing or switching between apps.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="box">
                                <div class="text">
                                    <img class="img-responsive" src="/image/mainpage/scalefusion/kiosk/brand/image 253.png" alt="">
                                    <h2>
                                        Kiosk Mode for iOS
                                    </h2>
                                    <p>
                                        Showcase your product on your interactive iPads & iPhones by transforming them in Kiosk Mode using our iOS Kiosk Software Solution.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="box">
                                <div class="text">
                                    <img class="img-responsive" src="/image/mainpage/scalefusion/kiosk/brand/image 254.png" alt="">
                                    <h2>
                                        Kiosk Mode for Windows
                                    </h2>
                                    <p>
                                        Set your Windows 10 desktops, laptops, and POS systems in Kiosk Mode to limit user experience and activities to a single business app.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="kiosk-4">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="text">
                        <h2>
                            Provision Devices in Single App and Multi-App Kiosk Mode
                        </h2>
                        <img src="/image/mainpage/scalefusion/icon/redLine.png">
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="box">
                        <div class="text-1">
                            <h2>
                                Multi-App Kiosk Mode
                            </h2>
                            <p>
                                Multi App Mode enables you to allow two or more apps on the Android device, blocking the rest.
                            </p>
                            <li>
                                Custom Branding
                            </li>
                            <li>
                                Factory Reset Protection
                            </li>
                            <li>
                                Hide the bottom navigation bar from screen
                            </li>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="box">
                        <div class="text-2">
                            <h2>
                                Single App Kiosk Mode
                            </h2>
                            <p>
                                Run any Application/Website in Single App Mode even when the device reboots (App Always Runs).
                            </p>
                            <li>
                                Block hardware keys
                            </li>
                            <li>
                                Set Delay to Launch the App
                            </li>
                            <li>
                                Set device screen in Full Screen mod
                            </li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="kiosk-5">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="text main">
                        <h2>
                            Seamless App Distribution and Management
                        </h2>
                        <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                        <p>
                            Push business apps with ease. Install applications from App Store, Google Play Store, Windows Business Store via the Scalefusion dashboard.
                            <br><br>
                            Install in-house apps by uploading APK files, IPA files, PList links, PKG files, UWP files or MSI files on the Scalefusion Enterprise Store. Publish, delete or update apps without any end-user intervention.
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <img class="img-responsive" src="/image/mainpage/scalefusion/device-manage/image 271.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="kiosk-7">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="col-xs-12 col-md-6">
                        <img class="img-responsive" src="/image/mainpage/scalefusion/device-manage/image 244.png" alt="">
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="text">
                            <h3>
                                MDM Software with Remote Control
                            </h3>
                            <h2>
                                Enable Remote Cast & Control To Troubleshoot Devices Easily
                            </h2>
                            <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                            <p>
                                Quickly resolve device issues and reduce device downtime with Remote Cast and Control. On select Android OEMs and Windows 10 devices, mirror and take control of the device screens, perform actions and resolve issues, faster. On iOS devices, mirror device screens and resolve device issues remotely.
                                <br>
                                <br>
                                Take screenshots, record screen sessions and create context-aware support tickets on integrated ITSM platforms.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="kiosk-6">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="text">
                        <h2>
                            Get Deep Insights Into Your Device Inventory
                        </h2>
                        <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                        <p>
                            Our Unified Mobile Device Management dashboard is powerful, intuitive and insightful. It allows you to manage your devices, apps, and content from one place. Couple that with our data-driven mobile analytics feature DeepDive, you can get a 360-degree overview of the entire device inventory.
                        </p>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <div class="box">
                            <div class="text">
                                <img class="img-responsive" src="/image/mainpage/scalefusion/device-manage/ic/image 249.png" alt="">
                                <h2>
                                    Save Cost, Increase
                                    Productivity
                                </h2>
                                <p>
                                    Upkeep device performance to improve productivity by troubleshooting device issues remotely.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <div class="box">
                            <div class="text">
                                <img class="img-responsive" src="/image/mainpage/scalefusion/device-manage/ic/image 250.png" alt="">
                                <h2>
                                    Reduced Manual
                                    IT Work
                                </h2>
                                <p>
                                    Provision devices in bulk, improve IT productivity by automating data-driven compliance checks & security alerts.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <div class="box">
                            <div class="text">
                                <img class="img-responsive" src="/image/mainpage/scalefusion/device-manage/ic/image 251.png" alt="">
                                <h2>
                                    Start Managing Devices in
                                    20 Minutes
                                </h2>
                                <p>
                                    Easy-to-use solution with a short learning
                                    curve, facilitated with an industry-leading
                                    support to ensure faster time-to-market.
                                </p>
                            </div>
                        </div>
                    </div>
                    <section id="team-commu-6">
                        <div class="text-team-6">
                            <h2>
                                6000+
                            </h2>
                            <h3>
                                Businesses Across the Globe Trust Scalefusion To Manage Their Mobility
                            </h3>
                        </div>
                        <ul >
                            <li>
                                <img src="/image/mainpage/scalefusion/team/image 124.png" alt="" class="img-responsive">
                            </li>
                            <li>
                                <img src="/image/mainpage/scalefusion/team/slice-logo@2x-2884391d0fffa0e37d94e557f2c98bd243d836d391a06d830df1f5d92ef84ee0.png" alt="" class="img-responsive">
                            </li>
                            <li>
                                <img src="/image/mainpage/scalefusion/team/radisson-logo@2x-bbe3b14bba89a541d80a035b208cd3d329801647af8ddb864e9040d245a7e5f1.png" alt="" class="img-responsive">
                            </li>
                            <li>
                                <img src="/image/mainpage/scalefusion/team/saintgobain-logo@2x-22ab799eae10e587d9c15c79b6cbe3080e6314b5fb392d377eccf63068102efb.png" alt="" class="img-responsive">
                            </li>
                            <li>
                                <img src="/image/mainpage/scalefusion/team/cottonon-logo@2x-8ac9345db465fdcd3bc9691ed62ab44b632d052c79404c23b0d133336c2a81af.png" alt="" class="img-responsive">
                            </li>
                            <li>
                                <img src="/image/mainpage/scalefusion/team/dnata-logo@2x-dcddda61cbc3956499986eca0d07c4fe8601d7fb48be7cfcf076b1049b44afdb.png" alt="" class="img-responsive">
                            </li>
                        </ul>
                    </section>
                </div>
            </div>
        </div>
    </section>

    <section id="kiosk-8">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="col-xs-12 col-md-6">
                        <h2>
                            A Kiosk Software for Myriad Industries
                        </h2>
                        <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                        <p>
                            Scalefusion Kiosk Software helps organizations across industries to stay ahead of the curve by enhancing their productivity & performance with the use of digital devices.
                        </p>
                    </div>
                    <div class="col-xs-12 col-md-12">
                        <div class="col-xs-12 col-md-4">
                            <div class="box">
                                <div class="text">
                                    <img class="img-responsive" src="/image/mainpage/scalefusion/kiosk/ic/image 266.png" alt="">
                                    <h2>
                                        Logistics
                                    </h2>
                                    <p>
                                        Restrict access to unwanted apps & videos streaming on company-owned devices using Kiosk Lockdown App, track the device location in real-time.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="box">
                                <div class="text">
                                    <img class="img-responsive" src="/image/mainpage/scalefusion/kiosk/ic/image 267.png" alt="">
                                    <h2>
                                        Retail
                                    </h2>
                                    <p>
                                        Manage your tablets, smartphones & point of sales (POS) devices with Scalefusion by giving control to the admin to remotely enable/disable the app on the device.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="box">
                                <div class="text">
                                    <img class="img-responsive" src="/image/mainpage/scalefusion/kiosk/ic/image 268.png" alt="">
                                    <h2>
                                        Education
                                    </h2>
                                    <p>
                                        Prevent students from playing games or watching videos on school-owned devices in the classroom to make the learning experience more exciting & engaging.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 sub">
                    <div class="pic">
                        <img class="img-responsive" src="/image/mainpage/scalefusion/kiosk/image 269.png" alt="">
                        <img class="img-responsive" src="/image/mainpage/scalefusion/kiosk/image 270.png" alt="">
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 sub">
                    <div class="text-2">
                        <h2>
                            SMBs, Mid-Market and Large Enterprises Find Value in Scalefusion
                        </h2>
                        <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                        <p>
                            Companies and organizations of all sizes use Scalefusion to manage their devices and endpoints in an easy way. Be it thousand, hundred thousand or a million devices, Scalefusion is robust enough to handle these device volumes and deployment complexities.
                        </p>
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
    </section>

@endsection

{{-- js --}}
@section('script')

@endsection
