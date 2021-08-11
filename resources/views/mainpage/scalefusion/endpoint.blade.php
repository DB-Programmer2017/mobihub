@extends('layout/home-2')


{{-- Title Website --}}
@section('title', 'MOBIHUB | Unified Endpoint Management (UEM) for a Modern Workplace')

{{-- Link CSS --}}
@section('link')
<style>
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
    #endpoint-8,
    #endpoint-5,
    #endpoint-6,
    #endpoint-7,
    #endpoint-4,
    #endpoint-3,
    #endpoint-2,
    #endpoint-1{
        padding: 100px 0;
    }
    #endpoint-1{
        background-image: url('/image/mainpage/scalefusion/win10/shutterstock_1711981051.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 485px;
        display: flex;
        align-items: center;
    }
    #endpoint-1 .text h3,
    #endpoint-1 .text h2,
    #endpoint-1 .text p{
        color: #ffffff !important;
        width: 60%;
    }
    #endpoint-2 .box .img-responsive{
        width: 30px;
        height: 30px;
    }
    #endpoint-2 .box{
        display: inline-flex;
        background: #FFFFFF;
        border-radius: 5px;
        height: 50px;
        justify-content: space-around;
        align-items: center;
        width: 100%;
        padding: 0 20%;
    }
    #endpoint-2 .text{
        text-align: center;
        width: 70%;
        margin: auto;
    }
    #endpoint-2 .box p{
        margin-bottom: 0;
        color: #D45745;
        font-weight: 600;
    }
    #endpoint-2 .down-side{
        margin-top: 50px;
    }
    #endpoint-3 .img-responsive{
        max-width: 20%;
        margin: auto;
    }
    #endpoint-3 .down-side{
        margin-top: 50px;
    }
    #endpoint-3 .box{
        padding: 10%;
        text-align: center;
        border: 1px solid #B4B4B4;
        box-sizing: border-box;
        border-radius: 5px;
    }
    #endpoint-4 .down-side{
        margin-top: 50px;
    }
    #endpoint-4 .img-responsive{
        width: 50%;
        margin: auto;
    }
    #endpoint-4 .text-sub{
        width: 80%;
    }
    #endpoint-4 .text-sub h2{
        font-size: 1.7rem;
    }
    #endpoint-4 .text-sub p{
        font-size: 1rem;
    }
    #endpoint-5{
        background-image: url('/image/mainpage/scalefusion/endpoint/Group 464.png');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    #endpoint-5 .box .img-responsive{
        width: 30px;
        height: 30px;
        margin: auto;
    }
    #endpoint-5 .box{
        background: #FFFFFF;
        border-radius: 5px;
        text-align: center;
        padding: 10%;
        margin: 15px 0;
    }

    @media (max-width:1199.98px){

    }
    @media (max-width:991.98px){
        #endpoint-1 .text{
            margin-left: 50px;
        }
        #endpoint-2 .down-side {
            margin: auto;
        }
        #endpoint-2 .col-md-3{
            text-align: center;
        }
        #endpoint-2 .box {
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
        #endpoint-3 .box{
            padding: 10%;
            text-align: center;
            border: 1px solid #B4B4B4;
            box-sizing: border-box;
            border-radius: 5px;
            width: 60%;
            margin: 15px auto;
        }
        #endpoint-4 .img-responsive {
            width: 60%;
            margin: 50px auto;
        }
    }
    @media (max-width:600.98px){
        #endpoint-1 .text h3, #endpoint-1 .text h2, #endpoint-1 .text p {
            color: #ffffff !important;
            width: 80%;
        }
        #endpoint-3 .box {
            padding: 10%;
            text-align: center;
            border: 1px solid #B4B4B4;
            box-sizing: border-box;
            border-radius: 5px;
            width: 80%;
            margin: 15px auto;
        }

        #endpoint-5 .box {
            background: #FFFFFF;
            border-radius: 5px;
            text-align: center;
            padding: 10%;
            margin: 15px auto;
            width: 75%;
        }
    }
    @media (max-width:500.98px){
        #endpoint-2 .text {
            text-align: center;
            width: 100%;
            margin: auto;
        }
        #endpoint-5 .box {
            background: #FFFFFF;
            border-radius: 5px;
            text-align: center;
            padding: 10%;
            margin: 15px auto;
            width: 85%;
        }

    }
</style>
@endsection


{{-- Body HTML --}}
@section('content')
    <section id="endpoint-1">
        <div class="container">
            <div class="row">
                <div class="text">
                    <h3>
                        UEM Software
                    </h3>
                    <h2>
                        Unified Endpoint Management (UEM) for a Modern Workplace
                    </h2>
                    <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                    <p>
                        Flexibility and ease to manage diverse endpoints is now here. Manage any endpoint, from anywhere, anytime.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="endpoint-2">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="text">
                        <h2>
                            What is Unified Endpoint Management?
                        </h2>
                        <p>
                            Unified Endpoint Management or UEM brings into focus the IT pain points of managing modern enterprises’ diverse mobile devices and endpoints. Unified Endpoint Management solution encompasses the device fragmentation in an organization and offers quick solutions for provisioning, deployment, tracking, updates and security.
                        </p>
                    </div>
                    <div class="col-xs-12 col-md-12 down-side">
                        <div class="col-xs-12 col-md-3">
                            <div class="box">
                                <img class="img-responsive" src="/image/mainpage/scalefusion/endpoint/ic/Vector.png" alt="">
                                <p>
                                    Windows 10
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <div class="box">
                                <img class="img-responsive" src="/image/mainpage/scalefusion/endpoint/ic/Vector-2.png" alt="">
                                <p>
                                    iOS
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <div class="box">
                                <img class="img-responsive" src="/image/mainpage/scalefusion/endpoint/ic/Vector-1.png" alt="">
                                <p>
                                    android
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <div class="box">
                                <img class="img-responsive" src="/image/mainpage/scalefusion/endpoint/ic/Vector-2.png" alt="">
                                <p>
                                    macOS
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="endpoint-3">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="text">
                        <h2>
                            Do More With Scalefusion <br> Unified Endpoint Management
                        </h2>
                        <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                    </div>
                    <div class="col-xs-12 col-md-12 down-side">
                        <div class="col-xs-12 col-md-4">
                            <div class="box">
                                <img class="img-responsive" src="/image/mainpage/scalefusion/endpoint/ic/image 294.png" alt="">
                                <h2>
                                    Mobile Device Management
                                </h2>
                                <p>
                                    Bring together all your mobile devices- Android, iOS, custom devices under one management platform.
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="box">
                                <img class="img-responsive" src="/image/mainpage/scalefusion/endpoint/ic/image 295.png" alt="">
                                <h2>
                                    Enterprise Mobility Management
                                </h2>
                                <p>
                                    Extend device management and security for mobile devices, laptops and desktops to protect corporate data.
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="box">
                                <img class="img-responsive" src="/image/mainpage/scalefusion/endpoint/ic/image 296.png" alt="">
                                <h2>
                                    Bring Your Own Device Management
                                </h2>
                                <p>
                                    Enable your teams to be productive with their favourite devices. Selectively secure corporate data on employee devices.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="endpoint-4">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="col-xs-12 col-md-6">
                        <img class="img-responsive" src="/image/mainpage/scalefusion/rugged/image 278.png" alt="">
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="text">
                            <h2>
                                Comprehensive Features for Your Endpoint Management
                            </h2>
                            <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                            <p>
                                Empower your workforce- from remote teams to frontline employees to connect, collaborate and perform with modern tech. Enable your IT teams to seamlessly implement device policies without impacting the end-user experience.
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12 down-side">
                        <div class="col-xs-12 col-md-4">
                            <div class="text-sub">
                                <h2>
                                    Application Management
                                </h2>
                                <p>
                                    Make way for productivity with business apps. Install the latest public and in-house apps on endpoints from the dashboard.
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="text-sub">
                                <h2>
                                    OS Updates Management
                                </h2>
                                <p>
                                    Control OS updates for your device inventory. Automate, delay and schedule updates.
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="text-sub">
                                <h2>
                                    Certificate Management
                                </h2>
                                <p>
                                    Enable authentication with digital certificates. Verify digital identities on the endpoint without end-user intervention.
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="text-sub">
                                <h2>
                                    Content Management
                                </h2>
                                <p>
                                    Extend quick access to business resources and files. Push documents, presentations and configure digital signages with ease.
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="text-sub">
                                <h2>
                                    Network Settings
                                </h2>
                                <p>
                                    Push trusted Wi-Fi network settings on your endpoints. Enforce VPN for maintaining security outside the corporate network.
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="text-sub">
                                <h2>
                                    Device Monitoring
                                </h2>
                                <p>
                                    Keep a close eye on your entire device inventory. Track location, set geofences and receive alerts on device movement.
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="text-sub">
                                <h2>
                                    Task Automation
                                </h2>
                                <p>
                                    Automate recurring IT tasks. Schedule IT tasks, set regular security alerts and compliance checks for enhanced security.
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="text-sub">
                                <h2>
                                    User Data Privacy
                                </h2>
                                <p>
                                    On BYO devices, effectively separate work and personal data and apps. Selectively apply policies and access control for the work container.
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="text-sub">
                                <h2>
                                    Integrations
                                </h2>
                                <p>
                                    Integrate your critical business tools with Scalefusion UEM. Leverage Scalefusion API for a customized management experience.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="endpoint-5">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="text">
                        <h2>
                            Scalefusion UEM Benefits
                        </h2>
                        <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                        <p>
                            Gain total control over your endpoints without spending several productive hours in device management. Say no to complexity without losing ground.
                        </p>
                    </div>
                    <div class="col-xs-12 col-md-12">
                        <div class="col-xs-12 col-md-4">
                            <div class="box">
                                <img class="img-responsive" src="/image/mainpage/scalefusion/endpoint/ic/image 288.png" alt="">
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
                                <img class="img-responsive" src="/image/mainpage/scalefusion/endpoint/ic/image 289.png" alt="">
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
                                <img class="img-responsive" src="/image/mainpage/scalefusion/endpoint/ic/image 290.png" alt="">
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
                                <img class="img-responsive" src="/image/mainpage/scalefusion/endpoint/ic/image 291.png" alt="">
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
                                <img class="img-responsive" src="/image/mainpage/scalefusion/endpoint/ic/image 292.png" alt="">
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
                                <img class="img-responsive" src="/image/mainpage/scalefusion/endpoint/ic/image 293.png" alt="">
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
