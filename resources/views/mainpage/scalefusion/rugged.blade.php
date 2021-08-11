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
    #rugged-8,
    #rugged-5,
    #rugged-6,
    #rugged-7,
    #rugged-4,
    #rugged-3,
    #rugged-2,
    #rugged-1{
        padding: 100px 0;
    }
    #rugged-1{
        background-image: url('/image/mainpage/scalefusion/win10/shutterstock_1711981051.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 485px;
        display: flex;
        align-items: center;
    }
    #rugged-1 .text h3,
    #rugged-1 .text h2,
    #rugged-1 .text p{
        color: #ffffff !important;
        width: 60%;
    }
    #rugged-2{
        background: #ffffff;
    }
    #rugged-2 .text{
        text-align: center;
    }
    #rugged-2 .text h2{
        width: 60%;
        margin: auto;
        margin-bottom: 25px;
    }
    #rugged-2 .text p{
        width: 60%;
        margin: auto;
        margin-top: 25px;
    }
    #rugged-2 .box-row-5{
        display: inline-flex;
        margin-top: 50px;
    }
    #rugged-2 .box-row-5 .img-responsive{
        display: block;
        max-width: 60%;
        height: auto;
        margin: auto;
    }
    #rugged-2 .box-row-5 p{
        text-align: center;
        margin-top: 15px;
    }
    #rugged-5 .text ul,
    #rugged-3 .text ul{
        margin-top: 50px;
    }
    #rugged-5 .text ul li,
    #rugged-3 .text ul li{
        width: 60%;
    }
    #rugged-3 .img-responsive{
        display: block;
        max-width: 70%;
        height: auto;
        margin: 100px auto;
    }
    #rugged-4 {
        background: #ffffff;
    }
    #rugged-4 .up .img-responsive{
        max-width: 95%;
        margin:auto;
    }
    #rugged-4 .down .img-responsive{
        max-width: 45%;
        margin:auto;
    }
    #rugged-4 .sub{
        margin-top: 50px;
    }
    #rugged-4 .sub .box{
        border: 1px solid #999999;
        box-sizing: border-box;
        border-radius: 25px;
        padding: 35px 50px;
    }
    #rugged-5{
        background-image: url('/image/mainpage/scalefusion/rugged/Group 430.png');
        background-repeat: no-repeat;
        background-size: cover;
    }
    #rugged-5 .box{
        background: #F8F8F8;
        border-radius: 25px;
        padding: 15px 20px;
    }
    #rugged-6 .box h3,
    #rugged-5 .box h3{
        color: #D45745;
    }
    #rugged-6 .img-responsive{
        max-width: 90%;
        margin: 100px auto;
    }
    #rugged-6{
        background: #ffffff;
    }
    #rugged-7 .box{
        background: #999999;
        border-radius: 25px;
        padding: 2% 5%;
        text-align: center;
        height: 110px;
        margin-bottom: 30px;
    }
    #rugged-7 .box h2{
        color: #ffffff;
    }
    #rugged-7 .box p{
        font-size: 1rem;
        color: #ffffff;
    }
    #rugged-7 .img-responsive{
        padding: 15%;
    }
    #rugged-7 .right-side{
        margin-top: 50px;
    }
    #rugged-8 .text{
        text-align: right;
    }
    #rugged-8 .img-responsive{
        padding: 0 10% 0% 10%;
        max-width: 60%;
        margin: auto;
    }
    #rugged-9{
        padding: 100px 0;
        background: #ffffff;
    }
    #rugged-9 .img-responsive{
        max-width: 20%;
        margin: auto;
    }
    #rugged-9 .text{
        text-align: center;
    }
    #rugged-9 .box{
        padding: 10%;
        text-align: center;
        border: 1px solid #B4B4B4;
        box-sizing: border-box;
        border-radius: 5px;
    }
    #rugged-9 .down-side{
        margin-top: 50px;
    }
    @media (max-width:1199.98px){

    }
    @media (max-width:991.98px){
        #rugged-1 .text{
            margin-left: 50px;
        }
        #rugged-2 .text h2 {
            width: 80%;
            margin: auto;
            margin-bottom: 10px;
        }
        #rugged-2 .text p {
            width: 80%;
            margin: auto;
            margin-top: 10px;
        }
        #rugged-4 .sub .box {
            margin-bottom: 30px;
        }
        #rugged-5 .col-md-6 .img-responsive{
            margin: auto;
        }
        #rugged-5 .box {
            margin-bottom: 30px;
        }
        #rugged-8 .text {
            text-align: center;
            margin-bottom: 50px;
        }
        #rugged-9 .box {
            width: 50%;
            margin: 30px auto;
        }

    }
    @media (max-width:600.98px){
        #rugged-1 .text h3, #rugged-1 .text h2, #rugged-1 .text p {
            color: #ffffff !important;
            width: 80%;
        }
    }
    @media (max-width:500.98px){
        #rugged-9 .box {
            width: 70%;
            margin: 30px auto;
        }
    }
</style>
@endsection


{{-- Body HTML --}}
@section('content')
    <section id="rugged-1">
        <div class="container">
            <div class="row">
                <div class="text">
                    <h2>
                        Effectively Manage Mission-Centric Rugged Devices & Handheld Computers
                    </h2>
                    <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                    <p>
                        Manage rugged tablets operating in harsh environments and scanners that set warehouses in motion. Implement policies and deliver apps that matter to your field technicians and warehouse employees.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="rugged-2">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="text">
                        <h2>
                            Unleash the Power of Android Rugged Devices Manage Diverse Endpoints With Ease
                        </h2>
                        <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                        <p>
                            Don’t limit the possibilities of mobility for modern businesses. Choose diverse devices and manage them via a single solution.
                        </p>
                    </div>
                    <div class="box-row-5">
                        <div class="grid-pic">
                            <img class="img-responsive" src="/image/mainpage/scalefusion/rugged/image 271.png" alt="">
                            <p>
                                Phone
                            </p>
                        </div>
                        <div class="grid-pic">
                            <img class="img-responsive" src="/image/mainpage/scalefusion/rugged/image 272.png" alt="">
                            <p>
                                Tablet
                            </p>
                        </div>
                        <div class="grid-pic">
                            <img class="img-responsive" src="/image/mainpage/scalefusion/rugged/image 273.png" alt="">
                            <p>
                                Handheld RFID Readers
                            </p>
                        </div>
                        <div class="grid-pic">
                            <img class="img-responsive" src="/image/mainpage/scalefusion/rugged/image 274.png" alt="">
                            <p>
                                Wearable Computers
                            </p>
                        </div>
                        <div class="grid-pic">
                            <img class="img-responsive" src="/image/mainpage/scalefusion/rugged/image 275.png" alt="">
                            <p>
                                Vehicle Mounted Computer
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="rugged-3">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="col-xs-12 col-md-6">
                        <div class="text">
                            <h2>
                                Put Your Business in the Spotlight. Turn Any Rugged Device Into a Kiosk
                            </h2>
                            <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                            <p>
                                Make your rugged devices and handheld computers business-ready with relevant apps and websites with Android Kiosk Mode.
                            </p>
                            <ul>
                                <li>
                                    Single App Mode: Lock the device to a single app. Configure hardware keys, control device navigation and leave no room for misuse.
                                </li>
                                <li>
                                    Multi App Mode: Configure the device to run multiple apps. Allow only select apps and block the rest.

                                </li>
                                <li>
                                    Agent Mode: Keep the device UI intact. Run Scalefusion in the background. Apply and control select policies.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <img class="img-responsive" src="/image/mainpage/scalefusion/rugged/image 276.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="rugged-4">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="col-xs-12 col-md-6">
                        <div class="text">
                            <h2>
                                Leverage Android Rugged Devices with OEMConfig for Zebra & Honeywell
                            </h2>
                            <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                            <p>
                                Get granular control on your purpose-built Zebra and Honeywell Rugged Devices with OEMConfig Apps that can be seamlessly configured & distributed using Scalefusion MDM.
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="col-xs-6 col-md-6 up">
                            <img class="img-responsive" src="/image/mainpage/scalefusion/rugged/brand/image 158.png" alt="">
                        </div>
                        <div class="col-xs-6 col-md-6 up">
                            <img class="img-responsive" src="/image/mainpage/scalefusion/rugged/brand/image 156.png" alt="">
                        </div>
                        <div class="col-xs-12 col-md-12 down">
                            <img class="img-responsive" src="/image/mainpage/scalefusion/rugged/brand/image 348.png" alt="">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12 sub">
                        <div class="col-xs-12 col-md-6">
                            <div class="box">
                                <div class="text">
                                    <h2>
                                        Zebra OEMConfig Features
                                    </h2>
                                    <p>
                                        Get more done on your Zebra Rugged devices by leveraging the OEM-specific security features and management capabilities. Use Scalefusion MDM to publish Zebra OEMConfig app on devices.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="box">
                                <div class="text">
                                    <h2>
                                        Honeywell OEMConfig Features
                                    </h2>
                                    <p>
                                        Add an extra layer of OEM-based management features and security settings on your Honeywell handheld devices. Use Scalefusion MDM to distribute Honeywell OEMConfig app on devices.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="rugged-5">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="col-xs-12 col-md-6">
                        <img class="img-responsive" src="/image/mainpage/scalefusion/rugged/image 276-1.png" alt="">
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="text">
                            <h2>
                                Deliver Business Apps To Your Rugged Device Fleet
                            </h2>
                            <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                            <p>
                                Do more with your rugged devices. Install the latest business apps on your Android rugged devices. Prevent unauthorized apps downloads, remove end-user dependency for app installation and updates.
                            </p>
                            <ul>
                                <li>
                                    Managed Play Store: Install business apps and PWAs from the Google Play Store.
                                </li>
                                <li>
                                    Scalefusion Enterprise Store: Push in-house apps by uploading Android APK on the Scalefusion dashboard.
                                </li>
                                <li>
                                    Silent App Installation: Silently install apps without any end-user intervention.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12">
                        <div class="col-xs-12 col-md-4">
                            <div class="box">
                                <h3>
                                    01
                                </h3>
                                <h2>
                                    Install
                                </h2>
                                <p>
                                    Remote app installation and configuration.
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="box">
                                <h3>
                                    02
                                </h3>
                                <h2>
                                    Update
                                </h2>
                                <p>
                                    Configure app updates. App versioning available for private apps.
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="box">
                                <h3>
                                    03
                                </h3>
                                <h2>
                                    App Config
                                </h2>
                                <p>
                                    Control and configure app settings for custom apps.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="rugged-6">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="col-xs-12 col-md-6">
                        <div class="text">
                            <h2>
                                Remote Troubleshooting for Devices in Action
                            </h2>
                            <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                            <p>
                                Your frontline and field employees depend heavily on device and app performance. Don’t let them down. Provide 100% remote support with Remote Cast and Control. Mirror device screens, take control of device navigation and rapidly resolve device issues.
                            </p>
                            <div class="box">
                                <h3>
                                    01
                                </h3>
                                <h2>
                                    VOIP Calling
                                </h2>
                                <p>
                                    Provide step-by-step instructions to resolve device issues.
                                </p>
                            </div>
                            <div class="box">
                                <h3>
                                    02
                                </h3>
                                <h2>
                                    File Sync
                                </h2>
                                <p>
                                    Sync files from the dashboard. Upload, download, delete files and run files.
                                </p>
                            </div>
                            <div class="box">
                                <h3>
                                    03
                                </h3>
                                <h2>
                                    Support Tickets
                                </h2>
                                <p>
                                    Create context-aware support tickets on integrated ITSM platforms.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <img class="img-responsive" src="/image/mainpage/scalefusion/rugged/image 277.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="rugged-7">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="text">
                        <h2>
                            Key Features
                        </h2>
                        <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                        <p>
                            Bringing powerful features of Android to your Rugged Device Management.
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-12">
                    <div class="col-xs-12 col-md-6">
                        <img class="img-responsive" src="/image/mainpage/scalefusion/rugged/image 278.png" alt="">
                    </div>
                    <div class="col-xs-12 col-md-6 right-side">
                        <div class="col-xs-12 col-md-6">
                            <div class="box">
                                <div class="text">
                                    <h2>
                                        Certificate Management
                                    </h2>
                                    <p>
                                        Push digital certificates to authenticate devices, users and networks.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="box">
                                <div class="text">
                                    <h2>
                                        Web Filtering
                                    </h2>
                                    <p>
                                        Cut down on employee distractions. Block non-business, entertainment and gaming websites.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="box">
                                <div class="text">
                                    <h2>
                                        Control Software Updates
                                    </h2>
                                    <p>
                                        Schedule, automate or delay software and OS updates.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="box">
                                <div class="text">
                                    <h2>
                                        Email & Exchange Settings
                                    </h2>
                                    <p>
                                        Make email available at the fingertips of your field force. Push corporate email and exchange settings.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="box">
                                <div class="text">
                                    <h2>
                                        Location Tracking
                                    </h2>
                                    <p>
                                        Track device location in real time. Set geofences and receive instant notifications when a device enters or exits a geofence.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="box">
                                <div class="text">
                                    <h2>
                                        Remote Lock
                                    </h2>
                                    <p>
                                        Remotely block device access in case of theft or loss. Wipe device content and maintain security.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="rugged-8">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="col-xs-12 col-md-6">
                        <div class="text">
                            <h2>
                                A Comprehensive, Contextual and Device-Wide Communication Suite
                            </h2>
                            <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                            <p>
                                Power your team communication with EVA Communication Suite. Get started with instant messaging, VoIP Calling, conference calling and file transfer to other devices in operation.
                                <br><br>
                                Make it exclusive to your business and save data and cellular costs. Leverage Eva Channels for seamless group chats, corporate and crisis communication.
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <img class="img-responsive" src="/image/mainpage/scalefusion/rugged/image 279.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="rugged-9">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="text">
                        <h2>
                            Helping Businesses Across Diverse Industries with Rugged Device Management
                        </h2>
                        <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                        <p>
                            Other Industries
                        </p>
                    </div>
                    <div class="col-xs-12 col-md-12 down-side">
                        <div class="col-xs-12 col-md-3">
                            <div class="box">
                                <img class="img-responsive" src="/image/mainpage/scalefusion/rugged/ic/image 284.png" alt="">
                                <h2>
                                    Logistics
                                </h2>
                                <p>
                                    Transform your business with vehicle-mounted devices and ELDs.
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <div class="box">
                                <img class="img-responsive" src="/image/mainpage/scalefusion/rugged/ic/image 285.png" alt="">
                                <h2>
                                    Warehouse
                                </h2>
                                <p>
                                    Take control of your manufacturing floor with hand-held scanners.
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <div class="box">
                                <img class="img-responsive" src="/image/mainpage/scalefusion/rugged/ic/image 286.png" alt="">
                                <h2>
                                    Retail
                                </h2>
                                <p>
                                    Enhance in-store shopping and billing experience for your customers and employees.
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <div class="box">
                                <img class="img-responsive" src="/image/mainpage/scalefusion/rugged/ic/image 287.png" alt="">
                                <h2>
                                    Construction
                                </h2>
                                <p>
                                    Accelerate operations with dust-proof devices configured for your business.
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
