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
    #mobile-device-management-8,
    #mobile-device-management-5,
    #mobile-device-management-6,
    #mobile-device-management-7,
    #mobile-device-management-4,
    #mobile-device-management-3,
    #mobile-device-management-2,
    #mobile-device-management-1{
        padding: 100px 0;
    }
    #mobile-device-management-1{
        margin-top: 73px;
    }
    #mobile-device-management-1 .text h2{
        width: 80%;
    }

    #mobile-device-management-3 .box .img-responsive,
    #mobile-device-management-2 .box .img-responsive{
        display: block;
        max-width: 15%;
        height: auto;
        margin: auto;
    }
    #mobile-device-management-6 .box .img-responsive{
        display: block;
        max-width: 15%;
        height: auto;
    }
    #mobile-device-management-2 .text{
        text-align: center;
    }
    #mobile-device-management-2{
        background: #999999;
    }
    #mobile-device-management-2 .text.main p{
        padding-bottom: 50px;
    }
    #mobile-device-management-2 .text.main p,
    #mobile-device-management-2 .text.main h2{
        color: #ffffff
    }
    #mobile-device-management-6 .box,
    #mobile-device-management-3 .box,
    #mobile-device-management-2 .box {
        background: #ffffff;
        border-radius: 25px;
        padding: 10%;
        margin-bottom: 30px;
    }
    #mobile-device-management-3{
        background-image: url('/image/mainpage/scalefusion/device-manage/Group 464.png');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    #mobile-device-management-3 .box{
        margin-top: 50px;
    }
    #mobile-device-management-3 .col-md-6 p{
        margin: 21px 0 0 50px;
        font-size: 1rem;
    }
    #mobile-device-management-4 .text.main{
        padding: 100px 0;
    }
    #mobile-device-management-5{
        background: #ffffff;
    }
    #mobile-device-management-5 .col-md-12{
        padding: 50px 0;
    }
    #mobile-device-management-6 .col-md-12 .text{
        margin-bottom: 50px;
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
        #mobile-device-management-1{
        margin-top: 0px;
    }
    }
    @media (max-width:600.98px){


    }
    @media (max-width:500.98px){

    }
</style>
@endsection


{{-- Body HTML --}}
@section('content')
    <section id="mobile-device-management-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="col-xs-12 col-md-6">
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
                    <div class="col-xs-12 col-md-6">
                        <img class="img-responsive" src="/image/mainpage/scalefusion/device-manage/image 216.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="mobile-device-management-2">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="text main">
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
                <div class="col-xs-12 col-md-12">
                    <div class="col-xs-12  col-sm-6 col-md-4">
                        <div class="box">
                            <div class="text">
                                <img class="img-responsive" src="/image/mainpage/scalefusion/device-manage/ic/image 353.png" alt="">
                                <h2>
                                    Lifecycle Managements
                                </h2>
                                <p>
                                    From device provisioning, monitoring, updates to retirement, one-stop solution for all MDM needs.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12  col-sm-6 col-md-4">
                        <div class="box">
                            <div class="text">
                                <img class="img-responsive" src="/image/mainpage/scalefusion/device-manage/ic/image 354.png" alt="">
                                <h2>
                                    Quick Enrollment
                                </h2>
                                <p>
                                    Cloud-based device provisioning and multiple enrollment types to get you started in less than 15 minutes.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12  col-sm-6 col-md-4">
                        <div class="box">
                            <div class="text">
                                <img class="img-responsive" src="/image/mainpage/scalefusion/device-manage/ic/image 355.png" alt="">
                                <h2>
                                    Remote Troubleshooting
                                </h2>
                                <p>
                                    Remote cast and control to resolve device issues quickly. Integrated ITSM tools to simplify ticketing.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12  col-sm-6 col-md-4">
                        <div class="box">
                            <div class="text">
                                <img class="img-responsive" src="/image/mainpage/scalefusion/device-manage/ic/image 356.png" alt="">
                                <h2>
                                    Task Scheduling
                                </h2>
                                <p>
                                    IT task scheduling to free up your IT time. Simplified scheduling without scripting or coding.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12  col-sm-6 col-md-4">
                        <div class="box">
                            <div class="text">
                                <img class="img-responsive" src="/image/mainpage/scalefusion/device-manage/ic/image 357.png" alt="">
                                <h2>
                                    Reports & Alerts
                                </h2>
                                <p>
                                    Optimized management with automated alerts, detailed device reports and audit logs.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12  col-sm-6 col-md-4">
                        <div class="box">
                            <div class="text">
                                <img class="img-responsive" src="/image/mainpage/scalefusion/device-manage/ic/image 358.png" alt="">
                                <h2>
                                    Enhanced Visibility
                                </h2>
                                <p>
                                    Better visibility into your endpoints through an intuitive dashboard.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="mobile-device-management-3">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="col-xs-12 col-md-6">
                        <h2>
                            Ready for Every Business Use Case
                        </h2>
                        <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <p>
                            Scalefusion MDM Software accommodates the dynamic needs of businesses and its heterogeneity of use cases. From devices deployed for knowledge workers to task workers, Scalefusion supports management of corporate-owned, BYO as well as kiosk and rugged devices.
                        </p>
                    </div>
                    <div class="col-xs-12 col-md-12">
                        <div class="col-xs-12 col-md-4">
                            <div class="box">
                                <div class="text">
                                    <img class="img-responsive" src="/image/mainpage/scalefusion/device-manage/ic/image 356.png" alt="">
                                    <h2>
                                        Task Scheduling
                                    </h2>
                                    <p>
                                        IT task scheduling to free up your IT time. Simplified scheduling without scripting or coding.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="box">
                                <div class="text">
                                    <img class="img-responsive" src="/image/mainpage/scalefusion/device-manage/ic/image 357.png" alt="">
                                    <h2>
                                        Reports & Alerts
                                    </h2>
                                    <p>
                                        Optimized management with automated alerts, detailed device reports and audit logs.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="box">
                                <div class="text">
                                    <img class="img-responsive" src="/image/mainpage/scalefusion/device-manage/ic/image 358.png" alt="">
                                    <h2>
                                        Enhanced Visibility
                                    </h2>
                                    <p>
                                        Better visibility into your endpoints through an intuitive dashboard.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mobile-device-management-4">
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

    <section id="mobile-device-management-5">
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
                <div class="col-xs-12 col-md-12">
                    <div class="col-xs-12 col-md-6 col-md-push-6">
                        <img class="img-responsive" src="/image/mainpage/scalefusion/device-manage/image 365.png" alt="">
                    </div>
                    <div class="col-xs-12 col-md-6 col-md-pull-6">
                        <div class="text">
                            <h2>
                                Get Deep Insights Into Your Device Inventory
                            </h2>
                            <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                            <p>
                                Our Unified Mobile Device Management dashboard is powerful, intuitive and insightful. It allows you to manage your devices, apps, and content from one place. Couple that with our data-driven mobile analytics feature DeepDive, you can get a 360-degree overview of the entire device inventory.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mobile-device-management-6">
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
