@extends('layout/home-2')


{{-- Title Website --}}
@section('title', 'MOBIHUB | Enterprise Mobility Management (EMM) for Your Perimeter-Less Workforce')

{{-- Link CSS --}}
@section('link')
<style>
    main {
        margin-top: 76px;
    }
    h3,h4,h2,h1,p  {
        font-family: 'Prompt';
    }
    h3{
        font-size: 1.8rem;
        font-weight: 400;
        color: #505050;
    }
    h2{
        font-size: 2.5rem;
        font-weight: 400;
        color: #505050;
    }
    p{
        font-size: 1.5rem;
        color: #505050;
        font-weight: 300;
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
    #enterprise-11,
    #enterprise-10,
    #enterprise-9,
    #enterprise-8,
    #enterprise-5,
    #enterprise-6,
    #enterprise-7,
    #enterprise-4,
    #enterprise-3,
    #enterprise-2,
    #enterprise-1{
        padding: 100px 0;
    }
    .mobile{
        display: block;
    }
    #enterprise-1{
        background-image: url('/image/mainpage/scalefusion/win10/shutterstock_1711981051.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        display: flex;
        align-items: center;
    }
    #enterprise-1 .text h3,
    #enterprise-1 .text h2,
    #enterprise-1 .text p{
        color: #ffffff !important;
        width: 60%;
    }
    #enterprise-2 .box .img-responsive{
        width: 30px;
        height: 30px;
    }
    #enterprise-2{
        background-image: url('/image/mainpage/scalefusion/enterprise/Group 426.png');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        display: flex;
        align-items: center;
    }

    #enterprise-2 .box{
        background: #FFFFFF;
        border-radius: 5px;
        padding: 10%;
    }
    #enterprise-2 .text{
        text-align: center;
        width: 70%;
        margin: auto;
    }
    #enterprise-2 .box p{

    }
    #enterprise-2 .down-side{
        margin-top: 50px;
    }
    #enterprise-3 .box .img-responsive {
        width: 30px;
        height: 30px;
    }
    #enterprise-3 .down-side{
        margin-top: 50px;
    }
    #enterprise-3 .down-side .col-md-3{
        padding: 0 1%;
    }
    #enterprise-3 .box {
        display: inline-flex;
        background: #FFFFFF;
        border-radius: 5px;
        height: 50px;
        justify-content: space-around;
        align-items: center;
        width: 100%;
    }
    #enterprise-3 .box p{
        margin-bottom: 0;
    }
    #enterprise-4 .down-side{
        margin-top: 50px;
    }
    #enterprise-4 .box{
        padding: 10%;
        border: 1px solid #B4B4B4;
        box-sizing: border-box;
        border-radius: 5px;
    }
    #enterprise-4 .img-responsive{
        max-width: 20%;
    }
    #enterprise-4 .text-sub{
        width: 80%;
    }
    #enterprise-4 .text-sub h2{
        font-size: 1.7rem;
    }
    #enterprise-4 .text-sub p{
        font-size: 1rem;
    }
    #enterprise-5{
        background-image: url('/image/mainpage/scalefusion/enterprise/Group 430.png');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    #enterprise-5 .text{
        text-align: center;
    }
    #enterprise-5 .box .img-responsive{
        width: 30px;
        height: 30px;
        margin: auto;
    }
    #enterprise-5 .box{
        text-align: center;
        margin: 15px 0;
        background: #F4F4F4;
        border-radius: 5px;
        padding: 1% 5%;
        height: 130px;
    }
    #enterprise-6 .brand{
        display: inline-flex;
    }
    #enterprise-6 .brand .img-responsive{
        max-width: 13%;
        padding-right: 5%;
    }
    #enterprise-6 .col-md-6 p{
        padding-left: 5%;
    }
    #enterprise-7{
        background: #ffffff;
    }
    #enterprise-7 .up-side .top .img-responsive{
        max-width: 50%;
        height: auto;
        margin: auto;
    }
    #enterprise-7 .up-side .box{
        display: inline-flex;
        background: #FFFFFF;
        border: 1px solid #D45745;
        box-sizing: border-box;
        border-radius: 5px;
    }
    #enterprise-7 .up-side .box .img-responsive{
        width: 20%;
        padding: 5%;
    }
    #enterprise-7 .up-side .box p{
        display: flex;
        align-items: center;
    }
    #enterprise-7 .down-side .text{
        text-align: center;
        margin: 100px;
    }
    #enterprise-7 .down-side .box .img-responsive{
        width: 13%;
    }
    #enterprise-8{
        background: #ffffff;
    }
    #enterprise-8 .body{
        background: #F4F4F4;
        height: 500px;
        padding: 100px 0 0% 0;
        margin-bottom: 50%;
    }
    #enterprise-8 .up-side .box{
        padding: 5%;
        background: #999999;
        border-radius: 5px;
        margin-top: 50px;
        height: 370px;
    }
    #enterprise-8 .up-side .box .img-responsive{
        max-width:12% ;
    }
    #enterprise-8 .up-side .box h3,
    #enterprise-8 .up-side .box h2,
    #enterprise-8 .up-side .box p,
    #enterprise-8 .up-side .box li{
        color: #ffffff;
    }
    #enterprise-8 .down-side .text{
        margin: 100px 0;
        text-align: center;
    }
    #enterprise-8 .down-side .box{
        display: inline-flex;
        margin-bottom: 50px;
        height: 45px;
    }
    #enterprise-8 .down-side .box .img-responsive{
        padding: 2%;
        max-width: 40%;

    }
    #enterprise-8 .down-side .box p{
        display: flex;
        align-items: center;
        margin-bottom: 0;
    }
    #enterprise-8 .down-side{
        margin-bottom: 100px;
    }
    #enterprise-9{
        background-image: url('/image/mainpage/scalefusion/enterprise/modern-geometrical-wallpaper-with-round-lines 1.png');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    #enterprise-9 .box{
        background: #FFFFFF;
        border-radius: 5px;
        padding: 3%;
        height: 120px;
        margin-top: 50px;
    }
    #enterprise-10 {
        background: #ffffff;
    }
    #enterprise-10 .text{
        text-align: center;
    }
    #enterprise-10 .img-responsive{
        width: 80%;
        margin: auto;
    }
    #enterprise-11 .text{
        text-align: center;

    }
    #enterprise-11 .pic{

    }
    #enterprise-11 .pic .img-responsive{
        height: 101px;
        margin-bottom: 50px;
    }
    @media (min-width: 767px) and (max-width: 1023px){
        main {
            margin-top: -33px;
        }
    }
    @media (max-width:1199.98px){

    }
    @media (max-width:991.98px){
        #enterprise-1 .text{
            margin-left: 50px;
        }
        #enterprise-2 .box {
            background: #FFFFFF;
            border-radius: 5px;
            padding: 10%;
            width: 50%;
            margin: 15px auto;
            box-shadow: 10px 1px 10px #4d4d4d1f;
        }
        #enterprise-3 .down-side {
            margin: auto;
        }
        #enterprise-3 .col-md-3{
            text-align: center;
        }
        #enterprise-3 .box {
            display: inline-flex;
            background: #FFFFFF;
            border-radius: 5px;
            height: 50px;
            justify-content: space-around;
            align-items: center;
            width: 170px;
            padding: 0 3%;
            margin: 15px 0 ;
            box-shadow: 5px 5px 13px #4d4d4d42;
        }
        #enterprise-4 .box {
            padding: 10%;
            text-align: center;
            border: 1px solid #B4B4B4;
            box-sizing: border-box;
            border-radius: 5px;
            width: 60%;
            margin: 15px auto;
        }
        #enterprise-7 .down-side .box .img-responsive {
            width: 13%;
            margin: auto;
        }
        #enterprise-3 .col-md-6.top  .img-responsive {
            max-width: 70%;
            margin: 30px auto;
        }
        #enterprise-4 .img-responsive {
            max-width: 20%;
            margin: auto;
        }
        #enterprise-7 .up-side .col-md-6{
            text-align: center;
        }
        #enterprise-7 .up-side .box {
            display: inline-flex;
            background: #FFFFFF;
            border: 1px solid #D45745;
            box-sizing: border-box;
            border-radius: 5px;
            width: 50%;
        }
        #enterprise-7 .up-side .top .img-responsive {
            margin: 30px auto;
        }
        #enterprise-7 .down-side .box {
            text-align: center;
            margin: 20px 0;
        }
        #enterprise-7 .down-side .box{
            text-align: center;
        }
        .mobile{
            display: none;
        }
        #enterprise-8 .down-side .col-md-3 {
            text-align: center;
        }
        #enterprise-8 .down-side .box {
            display: inline-block;
            margin-bottom: 100px;
        }
        #enterprise-8 .down-side .box .img-responsive {
            padding: 2%;
            max-width: 20%;
            margin: auto;
        }
        #enterprise-8 .down-side .box p {
            display: block;
        }
    }
    @media (max-width:600.98px){


    }
    @media (max-width:500.98px){
        #enterprise-3 .text {
            text-align: center;
            width: 100%;
            margin: auto;
        }
        #enterprise-4 .box {
            padding: 10%;
            text-align: center;
            border: 1px solid #B4B4B4;
            box-sizing: border-box;
            border-radius: 5px;
            width: 70%;
            margin: 15px auto;
        }
        #enterprise-2 .box {
            background: #FFFFFF;
            border-radius: 5px;
            padding: 10%;
            width: 70%;
            margin: 15px auto;
            box-shadow: 10px 1px 10px #4d4d4d1f;
        }
        #enterprise-7 .up-side .box {
            display: inline-flex;
            background: #FFFFFF;
            border: 1px solid #D45745;
            box-sizing: border-box;
            border-radius: 5px;
            width: 75%;
        }
    }
</style>
@endsection


{{-- Body HTML --}}
@section('content')
    <section id="enterprise-1">
        <div class="container">
            <div class="row">
                <div class="text">
                    <h3>
                        EMM Software
                    </h3>
                    <h2>
                       Enterprise Mobility Management (EMM) for Your Perimeter-Less Workforce
                    </h2>
                    <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                    <p>
                        Scalefusion EMM Software is a trusted partner for driving Enterprise Mobility Management for organizations across the globe. Secure and manage company-owned as well as BYO devices with Scalefusion and augment employee productivity and efficiency.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="enterprise-2">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="text">
                        <h2>
                            What is Scalefusion EMM?
                        </h2>
                        <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                        <p>
                            Scalefusion EMM Software enables an organization to implement perimeter-less Mobility Strategy by providing one platform to manage and secure endpoints, enterprise communications suite and set of capabilities to streamline device management operations.
                        </p>
                    </div>
                    <div class="col-xs-12 col-md-12 down-side">
                        <div class="col-xs-12 col-md-3">
                            <div class="box">
                                <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/ic/agenda.png" alt="">
                                <h2>
                                    Device Management
                                </h2>
                                <p>
                                    Manage diverse mobile devices used in your organization irrespective of OS and ownership type.
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <div class="box">
                                <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/ic/bag (1) 1.png" alt="">
                                <h2>
                                    App Management
                                </h2>
                                <p>
                                    Deploy public and in-house apps for work. Configure, update and uninstall with ease.
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <div class="box">
                                <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/ic/speech-bubble.png" alt="">
                                <h2>
                                    Communication Suite
                                </h2>
                                <p>
                                    Bring your workforce together. Facilitate communication & collaboration.
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <div class="box">
                                <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/ic/fix (1) 1.png" alt="">
                                <h2>
                                    Remote Troubleshooting
                                </h2>
                                <p>
                                    Resolve device issues with Remote Cast. Integrate ITSM tools for ticketing.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="enterprise-3">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="col-xs-12 col-md-6 top">
                        <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/image 330.png" alt="">
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="text">
                            <h2>
                                What is Scalefusion EMM?
                            </h2>
                            <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                            <p>
                                Scalefusion EMM Software enables an organization to implement perimeter-less Mobility Strategy by providing one platform to manage and secure endpoints, enterprise communications suite and set of capabilities to streamline device management operations.
                            </p>
                        </div>
                        <div class="col-xs-12 col-md-12 down-side">
                            <div class="col-xs-12 col-md-3">
                                <div class="box">
                                    <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/ic/Vector.png" alt="">
                                    <p>
                                        Windows 10
                                    </p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <div class="box">
                                    <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/ic/Vector-2.png" alt="">
                                    <p>
                                        iOS
                                    </p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <div class="box">
                                    <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/ic/Vector-1.png" alt="">
                                    <p>
                                        android
                                    </p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <div class="box">
                                    <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/ic/Vector-2.png" alt="">
                                    <p>
                                        macOS
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="enterprise-4">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="text">
                        <h2>
                            Ready for Every Business Use Case
                        </h2>
                        <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                        <p>
                            Scalefusion EMM Software enables an organization to implement perimeter-less Mobility Strategy by providing one platform to manage and secure endpoints, enterprise communications suite and set of capabilities to streamline device management operations.
                        </p>
                    </div>
                    <div class="col-xs-12 col-md-12 down-side   ">
                        <div class="col-xs-12 col-md-4">
                            <div class="box">
                                <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/ic/mobile 1.png" alt="">
                                <h2>
                                    Corporate-Owned
                                </h2>
                                <p>
                                    Ideal for devices that need granular control, Scalefusion EMM enables IT admins to manage company-owned devices issued to the employees.
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="box">
                                <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/ic/bag (1) 1.png" alt="">
                                <h2>
                                    BYOD
                                </h2>
                                <p>
                                    Bring Your Own Device (BYOD) programs enable your employees to use personal devices for work and keep corporate & personal data separate.
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="box">
                                <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/ic/fix (1) 1.png" alt="">
                                <h2>
                                    Kiosk Lockdown
                                </h2>
                                <p>
                                    Facilitate front-line workers by enforcing restrictions and extending support to kiosks running single or multiple applications.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="enterprise-5">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="text">
                        <h2>
                            Secure Corporate Data With Robust Security Policies
                        </h2>
                        <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                        <p>
                            With our EMM solution, IT administrators can create strong policies and device settings to secure corporate data and impede data leakage.
                        </p>
                    </div>
                    <div class="col-xs-12 col-md-12">
                        <div class="col-xs-12 col-md-4">
                            <div class="box">
                                <h2>
                                    Lifecycle Management
                                </h2>
                                <p>
                                    From device provisioning, monitoring, updates to retirement, one-stop solution for all UEM needs.
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="box">
                                <h2>
                                    Quick Enrollment
                                </h2>
                                <p>
                                    Cloud-based device provisioning and multiple enrollment types to get you started in less than 15 minutes.
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="box">
                                <h2>
                                    Remote Troubleshooting
                                </h2>
                                <p>
                                    Remote cast and control to resolve device issues quickly. Integrated ITSM tools to simplify ticketing.
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="box">
                                <h2>
                                    Task Scheduling
                                </h2>
                                <p>
                                    IT task scheduling to free up your IT time. Simplified scheduling without scripting or coding.
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="box">
                                <h2>
                                    Reports & Alerts
                                </h2>
                                <p>
                                    Optimized management with automated alerts, detailed device reports and audit logs.
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="box">
                                <h2>
                                    Enhanced Visibility
                                </h2>
                                <p>
                                    Better visibility into your enterprises through an intuitive dashboard.
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="box">
                                <h2>
                                    Enhanced Visibility
                                </h2>
                                <p>
                                    Better visibility into your enterprises through an intuitive dashboard.
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="box">
                                <h2>
                                    Enhanced Visibility
                                </h2>
                                <p>
                                    Better visibility into your enterprises through an intuitive dashboard.
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="box">
                                <h2>
                                    Enhanced Visibility
                                </h2>
                                <p>
                                    Better visibility into your enterprises through an intuitive dashboard.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="enterprise-6">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="col-xs-12 col-md-6">
                        <div class="text">
                            <h2>
                                Seamless App Distribution
                                and Management
                            </h2>
                            <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                        </div>
                        <div class="brand">
                            <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/brand/Untitled-1-01.png" alt="">
                            <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/brand/Untitled-1-02.png" alt="">
                            <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/brand/Untitled-1-03.png" alt="">
                            <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/brand/Untitled-1-04.png" alt="">
                            <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/brand/Untitled-1-05.png" alt="">
                            <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/brand/Untitled-1-06.png" alt="">
                            <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/brand/Untitled-1-07.png" alt="">
                            <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/brand/Untitled-1-08.png" alt="">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <p>
                            Install apps relevant to your business. Distribute apps to your device fleet from App Store, Google Play Store, Windows Business Store via Scalefusion dashboard.
                            <br>
                            <br>
                            Push in-house app as APK files, IPA files, PList links, PKG files, UWP files or MSI files from the dashboard. Install apps silently on devices eliminating the need for device-user approval.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="enterprise-7">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12 up-side">
                    <div class="col-xs-12 col-md-6 top">
                        <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/Group 436.png" alt="">
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="text">
                            <h2>
                                Unified Communication & Call Management
                                for Enterprise
                            </h2>
                            <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                            <p>
                                An Effective Communication Solution for a Modern Workforce.
                            </p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="box">
                                <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/ic/Vector-5.png" alt="">
                                <p>
                                    Instant Messenger
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="box">
                                <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/ic/Vector-4.png" alt="">
                                <p>
                                    Alerts & Notifications
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="box">
                                <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/ic/Group.png" alt="">
                                <p>
                                    Contact Management
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="box">
                                <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/ic/Group 437.png" alt="">
                                <p>
                                    VoIP Calling
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-12 down-side">
                    <div class="text">
                        <h2>
                            Call Management with Eva Phone
                        </h2>
                        <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                        <p>
                            With Eva Phone, utilize VoIP calling across all devices along with two-way encrypted messaging. Suppress excess mobile charges by allowing incoming and outgoing calls only within a unified contact list created and published by the IT admins. With Eva conference Call, set up connections between multiple devices.
                        </p>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <div class="box">
                            <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/ic/agenda.png" alt="">
                            <h2>
                                Manage Contact Books
                            </h2>
                            <p>
                                Create and publish contact lists on devices.
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <div class="box">
                            <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/ic/phone-call.png" alt="">
                            <h2>
                                Allow only work calls
                            </h2>
                            <p>
                                Restrict incoming and outgoing calls to the contact list.
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <div class="box">
                            <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/ic/customer-service 1.png" alt="">
                            <h2>
                                Conference Call Support
                            </h2>
                            <p>
                                Conference call support for team
                                discussions & trainings over the air.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="enterprise-8">
        <div class="body">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-12 up-side">
                        <div class="col-xs-12 col-md-6">
                            <div class="text">
                                <h2>
                                    Call Management with Eva Phone
                                </h2>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="text">
                                <p>
                                    With Eva Phone, utilize VoIP calling across all devices along with two-way encrypted messaging. Suppress excess mobile charges by allowing incoming and outgoing calls only within a unified contact list created and published by the IT admins. With Eva conference Call, set up connections between multiple devices.
                                </p>
                                <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-12">
                            <div class="col-xs-12 col-md-4">
                                <div class="box">
                                    <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/ic/image 304.png" alt="">
                                    <div class="text-sub">
                                        <h2>
                                            Effortless Device
                                            Setup
                                        </h2>
                                        <p>
                                            Curate business-specific policies and restrictions. The policies will be applied on the devices on activation.
                                        </p>
                                        <li>
                                            Configure Wi-fi settings to secure sharing & connectivity
                                        </li>
                                        <li>
                                            Extend uninterrupted access to business emails with Exchange, POP and IMAP

                                        </li>
                                        <li>
                                            Automatically install required business apps on the devices
                                        </li>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="box">
                                    <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/ic/image 305.png" alt="">
                                    <div class="text-sub">
                                        <h2>
                                            Device Compliance &
                                            Policy Enforcement
                                        </h2>
                                        <p>
                                            Design policies pertinent for various ownership types or OS with essential restrictions, passcode settings and relevant apps.
                                        </p>
                                        <li>
                                            Configure device passcode policy
                                        </li>
                                        <li>
                                            Add bookmarks of frequently accessed websites
                                        </li>
                                        <li>
                                            Wipe-off business data on retired devices
                                        </li>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="box">
                                    <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/ic/image 303.png" alt="">
                                    <div class="text-sub">
                                        <h2>
                                            Dynamic Policies &
                                            Workflows
                                        </h2>
                                        <p>
                                            Using Scalefusion Workflows, assign dynamic policies and schedule recurring tasks to run on devices without any scripting or coding.
                                        </p>
                                        <li>
                                            Schedule dynamic policy application on managed devices
                                        </li>
                                        <li>
                                            Schedule time-based lock/unlock of Kiosk devices
                                        </li>
                                        <li>
                                            Schedule routine reboot of unattended kiosks
                                        </li>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12 down-side">
                        <div class="text">
                            <p>
                                Device Enrollment Methods supported in Enterprise Mobility Management
                            </p>
                            <h2>
                                Streamlined Device Onboarding To Manage Your Device Fleet
                            </h2>
                            <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <div class="box">
                                <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/ic/mail.png" alt="">
                                <p>
                                    Email based
                                    Enrollment
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <div class="box">
                                <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/ic/Group 448.png" alt="">
                                <p>
                                    Android Zero-touch
                                    Enrollment
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <div class="box">
                                <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/ic/microchip.png" alt="">
                                <p>
                                    ROM based Enrollment
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <div class="box">
                                <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/ic/qr-code (1) 1.png" alt="">
                                <p>
                                    QR Code/URL based
                                    Enrollment
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <div class="box">
                                <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/ic/Group 449.png" alt="">
                                <p>
                                    Apple DEP
                                        Enrollment
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <div class="box">
                                <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/ic/g.png" alt="">
                                <p>
                                    GSuite based
                                    Enrollment
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <div class="box">
                                <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/ic/charp.png" alt="">
                                <p>
                                    Google AfW based
                                    Enrollment
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <div class="box">
                                <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/ic/barcode.png" alt="">
                                <p>
                                    IMEI based
                                    Enrollment
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-3 mobile">
                            <div class="box">

                            </div>
                        </div>
                        <div class="col-xs-12 col-md-3 ">
                            <div class="box">
                                <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/ic/Vector 4.png" alt="">
                                <p>
                                    Office 365 based
                                    Enrollment
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <div class="box">
                                <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/ic/windows (1) 1.png" alt="">
                                <p>
                                    Windows Autopilot
                                    Enrollment
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-3 mobile">
                            <div class="box">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="enterprise-9">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12 main">
                    <div class="col-xs-12 col-md-6">
                        <div class="text">
                            <h2>
                                Enterprise Mobility Software with Device Troubleshooting
                            </h2>
                            <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                            <p>
                                Don’t lose business productivity caused by device errors. Remotely troubleshoot device issues and shorten device downtime for remote workforce and frontline employees. Mirror device screens on the dashboard and on select devices, take screen control.
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/image 316.png" alt="">
                    </div>
                    <div class="col-xs-12 col-md-12">
                        <div class="col-xs-12 col-md-4">
                            <div class="box">
                                <h2>
                                    VOIP Calling
                                </h2>
                                <p>
                                    Extend step-by-step guidelines to resolve device issues.
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="box">
                                <h2>
                                    File Sync
                                </h2>
                                <p>
                                    Sync device files, push or delete files and setup files.
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="box">
                                <h2>
                                    Support Tickets
                                </h2>
                                <p>
                                    Create context-aware support tickets on integrated ITSM tool.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="enterprise-10">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="text">
                        <h2>
                            Context-driven Information & Insights with DeepDive
                        </h2>
                        <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                        <p>
                            The Scalefusion dashboard is a solitary platform for gaining insights and context-driven device data. Monitor device health and keep a check on compliance violations with DeepDive.
                        </p>
                    </div>
                    <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/image 317.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="enterprise-11">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="text">
                        <h2>
                            OEM Partners
                        </h2>
                        <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                    </div>
                    <div class="pic">
                        <div class="col-xs-12 col-md-3">
                            <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/brand/image 329.png" alt="">
                            </div>
                        <div class="col-xs-12 col-md-3">
                            <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/brand/image 328.png" alt="">
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/brand/image 327.png" alt="">
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/brand/image 326.png" alt="">
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/brand/image 325.png" alt="">
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/brand/image 324.png" alt="">
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/brand/image 323.png" alt="">
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/brand/image 322.png" alt="">
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/brand/image 321.png" alt="">
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/brand/image 320.png" alt="">
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/brand/image 319.png" alt="">
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <img class="img-responsive" src="/image/mainpage/scalefusion/enterprise/brand/image 318.png" alt="">
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
    </section>

@endsection

{{-- js --}}
@section('script')

@endsection
