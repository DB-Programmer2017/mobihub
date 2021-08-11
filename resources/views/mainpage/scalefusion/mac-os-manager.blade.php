@extends('layout/home-2')


{{-- Title Website --}}
@section('title', 'Mobihub | Software_solution_macOS Management')

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
    #mac-os-8,
    #mac-os-5,
    #mac-os-6,
    #mac-os-7,
    #mac-os-4,
    #mac-os-3,
    #mac-os-2,
    #mac-os-1{
        padding: 100px 0;
    }
    #mac-os-1{
        background-image: url('/image/mainpage/scalefusion/win10/shutterstock_1711981051.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 485px;
        display: flex;
        align-items: center;
    }
    #mac-os-1 .text h3,
    #mac-os-1 .text h2,
    #mac-os-1 .text p{
        color: #ffffff !important;
    }
    #mac-os-1 .text{
        width: 60%;
    }
    #mac-os-2 .text{
        text-align: center;
    }
    #mac-os-2 .box-1{
        background-image: url('/image/mainpage/scalefusion/mac/image 210.png');
        background-position: left;
        background-repeat: no-repeat;
        background-size: contain;
        height: 250px;
    }
    #mac-os-2 .box-2{
        background-image: url('/image/mainpage/scalefusion/mac/image 211.png');
        background-position: left;
        background-repeat: no-repeat;
        background-size: contain;
        height: 250px;
    }
    #mac-os-2 .box{
        background: #f2f1f1;
        border-radius: 25px;
        margin-top: 50px;
    }
    #mac-os-2 .box .text{
        text-align: left;
        padding-left: 42%;
        padding-top: 10%;
    }
    #mac-os-2 .box .text h2{
        font-weight: 600;
    }
    #mac-os-3 .text{
        width: 80%;
    }
    #mac-os-3 .col-md-4 img{
        max-width: 50%;
    }
    #mac-os-3 .box{
        height: 150px;
        padding: 20px;
        background: #FFFFFF;
        border-radius: 25px;
        margin-bottom: 50px;
    }
    #mac-os-3 .body-card{
        margin-top: 50px;
    }
    #mac-os-4{
        background-image: url('/image/mainpage/scalefusion/mac/creative-background-with-white-lines 1.png');
        background-position: left;
        background-repeat: no-repeat;
        background-size: cover;
    }
    #mac-os-4 .col-md-push-6{
        display: flex;
        justify-content: center;

    }
    #mac-os-4 .col-md-push-6 img{
        width: 80%;
    }
    #mac-os-5{
        background: #ffff;
    }
    #mac-os-5 .img-responsive{
        width: 70%;
    }
    #mac-os-6 .col-md-12 center .img-responsive{
        max-width: 50%;
        margin: 50px 0;
    }
    #mac-os-6 .box {
    height: 150px;
    padding: 20px;
    background: #FFFFFF;
    border-radius: 25px;
    margin-bottom: 30px;
    }
    #mac-os-6 .col-down {
        display: flex;
        justify-content: center;
    }
    #mac-os-7{
        background: #999999;
    }
    #mac-os-7 .text{
        width: 60%;
    }
    #mac-os-7 .text h3,
    #mac-os-7 .text h2,
    #mac-os-7 .text p{
        color: #fff;
    }
    #mac-os-8{
        background: #ffffff;
    }
    #mac-os-8 .text p{
        padding-top: 5%;
    }
    #mac-os-8 .text{
        margin-bottom: 50px;
    }
    #mac-os-8 .box{
        width: 70%
    }
    #mac-os-8 .box .img-responsive{
        max-width: 35%;
    }
    @media (max-width:1199.98px){

    }
    @media (max-width:991.98px){
        #mac-os-8 .box {
            width: 70%;
            margin: auto;
            text-align: center;
        }
        #mac-os-8 .box .img-responsive {
            max-width: 35%;
            margin: auto;
        }
        #mac-os-5 .img-responsive {
            width: 70%;
            margin: auto;
        }
        #mac-os-3 .col-md-4 img {
            margin: auto;
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
    <section id="mac-os-1">
        <div class="container">
            <div class="row">
                <div class="text">
                    <h3>
                        macOS MDM Softwarex
                    </h3>
                    <h2>
                        Mac Device Management for a Modern Workforce
                    </h2>
                    <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                    <p>
                        Enable your IT teams to secure and manage Mac devices with easy enrollment, automated application installation, macOS specific restrictions and a wide range of security settings.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="mac-os-2">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="text">
                        <h2>
                            Every Business Use Case for macOS Devices Covered
                        </h2>
                        <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                        <p>
                            Dynamic businesses of today use a variety of device ownership models, from providing employees with company-owned macOS devices to allowing employees to use their personal devices (BYOD) at work. Leverage the flexibility to support every business use case and device ownership models.
                        </p>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="box">
                            <div class="box-1">
                                <div class="text">
                                    <h2>
                                        BYOD
                                    </h2>
                                    <p>
                                        Bring Your Own Device (BYOD) program allows your employees to use their personal MacBooks and MacBook Pro for work.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="box">
                            <div class="box-2">
                                <div class="text">
                                    <h2>
                                        Company-Owned
                                    </h2>
                                    <p>
                                        Corporate-owned deployments are ideal when you want to give macOS devices to your employees for work.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mac-os-3">
        <div class="container">
            <div class="row">
                <div class="col-xs-12-col-md-12">
                    <div class="col-xs-12 col-md-8">
                        <center><div class="text">
                            <h2>
                                Key Features
                            </h2>
                            <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                            <p>
                                Explore powerful features for effectively managing macOS devices used for work. Iron grip the device inventory, simplify macOS management and make way for employee productivity.
                            </p>
                        </div></center>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <img class="img-responsive" src="/image/mainpage/scalefusion/win10/image 202.png" alt="">
                    </div>
                </div>
                <div class="col-xs-12 col-md-12 body-card">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="box">
                            <h2>
                                Content Filtering
                            </h2>
                            <p>
                                Configure web-clips, enforce strict whitelisting, or use them as bookmarks.
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="box">
                            <h2>
                                Parental Controls
                            </h2>
                            <p>
                                Configure Curfews and set time-limits and prevent scheduled access to the managed Mac devices.
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="box">
                            <h2>
                                Configure Restrictions
                            </h2>
                            <p>
                                Gain granular control on the Mac usage and functionality. Restrict media sharing and connections to Apple watch and iTunes.
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="box">
                            <h2>
                                Hard Disk Media Access
                            </h2>
                            <p>
                                Configure settings for hard disk, external disks and DVD-RAM media access
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="box">
                            <h2>
                                Email & Exchange Settings
                            </h2>
                            <p>
                                Push email and exchange settings. Enable employees to quickly access work emails.
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="box">
                            <h2>
                                Network Settings
                            </h2>
                            <p>
                                Attest network security. Push trusted Wi-Fi network settings on managed devices.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mac-os-4">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 col-md-push-6">
                    <img class="img-responsive" src="/image/mainpage/scalefusion/mac/image 212.png" alt="">
                </div>
                <div class="col-xs-12 col-md-6 col-md-pull-6">
                    <div class="text">
                        <h2>
                            Bulk Enrollment, Simplified
                        </h2>
                        <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                        <p>
                            Make your Windows 10 devices business-ready with out of the box provisioning using Windows Autopilot. On the first power-up, the devices are auto-enrolled in corporate policy configurations.
                            <br>
                            Speed up the device enrollment process by initiation users-based device enrollment. Import data from Office 365 AD or G Suite and enable quick device provisioning.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mac-os-5">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <img class="img-responsive" src="/image/mainpage/scalefusion/mac/image 213.png" alt="">
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="text">
                        <h3>
                            Application Distribution & Management
                        </h3>
                        <h2>
                            Apps for Your Business, Delivered With Ease
                        </h2>
                        <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                        <p>
                            Do more with your Mac machines. Commission work apps and accelerate your workforce productivity instantly. Experience seamless application management on managed macOS devices on the Scalefusion dashboard.
                            <br>
                            <li>
                                Apple App Store: Search and distribute macOS applications from the Apple App Store to the managed macOS devices.
                            </li>
                            <li>
                                Volume Purchase Program: Deploy apps in bulk using the Apple Volume Purchase Program.

                            </li>
                            <li>
                                PKG File Support: Push in-house apps by uploading PKG files to Scalefusion enterprise store.
                            </li>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <section id="mac-os-6">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                       <center><div class="text">
                            <h3>
                                Secure Windows Management Solution
                            </h3>
                            <h2>
                                Advanced Security Options for your Windows 10 Deployment
                            </h2>
                            <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                            <p>
                                Secure Windows 10 devices deployed for work. Enforce security policies and access control to protect corporate data on company-owned and employee-owned devices. Extend effortless checks and alerts for security and compliance.
                            </p>
                        </div></center>
                        <center>
                            <img class="img-responsive" src="/image/mainpage/scalefusion/win10/Group 504.png" alt="">
                        </center>
                        <div class="col-xs-12 col-sm-6  col-md-4">
                            <div class="box">
                                <h2>
                                    Enforce Passwords
                                </h2>
                                <p>
                                    Set password complexity and type to ensure access control. Select an idle timeout to auto-lock the screen when unattended.
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6  col-md-4">
                            <div class="box">
                                <h2>
                                    BitLocker Encryption
                                </h2>
                                <p>
                                    Encrypt device hard disks to protect data from theft or exposure on lost, stolen, or retired computers.
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6  col-md-4">
                            <div class="box">
                                <h2>
                                    Windows Information Protection (WIP)
                                </h2>
                                <p>
                                    Leverage Windows Information Protection to encrypt and secure corporate data on BYO PCs.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="mac-os-7">
            <center><div class="text">
                <h2>
                    Enable Immersive Learning Experience With Mac MDM
                </h2>
                <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                <p>
                    Provision devices used in the classroom and for remote learning. Help students access educational resources and apps without worrying about distractions and security. Power student macBooks to make learning engaging and hurdle-free.
                </p>
            </div></center>
        </section>

        <section id="mac-os-8">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <div class="col-xs-12 col-md-6">
                            <div class="text">
                                <h2>
                                    Scalefusion Supports the Entire macos Lifecycle
                                </h2>
                                <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="text">
                                <p>
                                    Manage a diverse device inventory from a single console. Pick and provision devices your business needs, and your employees love.
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-12">
                            <div class="col-xs-12 col-md-3">
                                <div class="box">
                                    <img class="img-responsive" src="/image/mainpage/scalefusion/mac/ic/Screen Shot 2564-06-15 at 13.41 1.png" alt="">
                                    <h2>
                                        Enrollment and Configuration
                                    </h2>
                                    <p>
                                        Apple Business Manager
                                        DEP Enrollment
                                        Email Based Enrollment
                                        Azure AD User Enrollment
                                    </p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <div class="box">
                                    <img class="img-responsive" src="/image/mainpage/scalefusion/mac/ic/Screen Shot 2564-06-15 at 13.41 2.png" alt="">
                                    <h2>
                                        Security and Control
                                    </h2>
                                    <p>
                                        Password Policies
                                        Gatekeeper Settings
                                        FileVault Settings
                                        Wi-Fi & Certificates
                                        Restrictions & OS Update
                                    </p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <div class="box">
                                    <img class="img-responsive" src="/image/mainpage/scalefusion/mac/ic/Screen Shot 2564-06-15 at 13.41 3.png" alt="">
                                    <h2>
                                        Application Management
                                    </h2>
                                    <p>
                                        Mac App Store
                                        VPP Apps
                                        PKG App Deployment
                                        In-house App Deplyment
                                    </p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <div class="box">
                                    <img class="img-responsive" src="/image/mainpage/scalefusion/mac/ic/Screen Shot 2564-06-15 at 13.41 4.png" alt="">
                                    <h2>
                                        End of life/Retire Devices
                                    </h2>
                                    <p>
                                        Remove Enrollment
                                        Wipe Device
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

@section('script')

@endsection
