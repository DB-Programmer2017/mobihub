@extends('layout/home-2')


{{-- Title Website --}}
@section('title', 'Mobihub | Windows 10 Device Management Software for a Modern Workforce')

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
    #window-5,
    #window-6,
    #window-7,
    #window-4,
    #window-3,
    #window-2,
    #window-1{
        padding: 100px 0;
    }
    #window-1{
        background-image: url('/image/mainpage/scalefusion/win10/shutterstock_1711981051.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 485px;
        display: flex;
        align-items: center;
    }
    #window-1 .text{
        width: 60%;

    }
    #window-1 .text h3,
    #window-1 .text h2,
    #window-1 .text p{
        color: #ffffff !important;
    }
    #window-1 .text h3{
        font-size: 1.5rem;
        font-weight: 200;
    }
    #window-1 .text h2{
        font-size: 2.5rem;
        font-weight: 200;

    }
    #window-2 .text{
        width: 70%;
        margin-bottom: 50px;
    }
    #window-2  ul{
        margin-top: 10%;
    }
    #window-3 .text{
        width: 80%;
    }
    #window-3 .col-md-4 img{
        max-width: 50%;
    }
    #window-3 .box{
        height: 150px;
        padding: 20px;
        background: #FFFFFF;
        border-radius: 25px;
        margin-bottom: 50px;
    }
    #window-3 .body-card{
        margin-top: 50px;
    }
    #window-4 .col-md-push-6{
        display: flex;
        justify-content: center;

    }
    #window-4 .col-md-push-6 img{
        width: 80%;
    }
    #window-5 .img-responsive{
        width: 70%;
    }
    #window-5 .box {
    height: 150px;
    padding: 20px;
    background: #FFFFFF;
    border-radius: 25px;
    }
    #window-6 .col-md-12{
        margin-bottom: 100px;
    }
    #window-6 .pic img{
        max-width: 80%;
    }
    #window-7 .col-md-12 center .img-responsive{
        max-width: 50%;
        margin: 50px 0;
    }
    #window-7 .box {
    height: 150px;
    padding: 20px;
    background: #FFFFFF;
    border-radius: 25px;
    margin-bottom: 30px;
    }
    #window-7 .col-down {
        display: flex;
        justify-content: center;
    }
    #window-8{
        padding-top: 100px;
        background: #FFFFFF;

    }
    #window-8 .col-md-pull-6,
    #window-8 .col-md-push-6{
        padding-bottom: 100px;
    }
    @media (max-width:1199.98px){

    }
    @media (max-width:991.98px){
        #window-3 .col-md-4 img{
            margin: 50px auto;
        }
        #window-5 .img-responsive {
            margin: 50px auto;
        }
        #window-1 .text {
            width: 65%;
            padding-left: 10%;
        }
    }
    @media (max-width:600.98px){
        #window-1 .text {
            width: 70%;
            padding-left: 10%;
        }

    }
    @media (max-width:500.98px){
        #window-7 .col-down {
        display: block;
        justify-content: center;
        }
    #window-1 .text {
            width: 80%;
            padding-left: 10%;
        }
    }
</style>
@endsection


{{-- Body HTML --}}
@section('content')
    <section id="window-1">
        <div class="container">
            <div class="row">
                <div class="text">
                    <h3>
                        Windows MDM Software
                    </h3>
                    <h2>
                        Windows 10 Device Management Software for a Modern Workforce
                    </h2>
                    <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                    <p>
                        Experience Windows Modern Management powered with simplicity. Everything you need to provision, secure and monitor your Windows 10 devices delivered to your fingertips.
                    </p>
                </div>
            </div>
        </div>

    </section>
    <section id="window-2">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <center><div class="text">
                        <h2>
                            Experience Flexible Windows Device Management for Modern Businesses
                        </h2>
                        <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                        <p>
                            Take device management to the next level by gaining granular control with diverse management modes. Set Windows 10 devices in motion without hampering the user experience.
                        </p>
                    </div></center>
                    <div class="col-xs-12 col-md-6 ">
                        <img class="img-responsive" src="/image/mainpage/scalefusion/win10/image 201.png" alt="">
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <ul>
                            <li>
                                Single App Mode: Lock the Windows 10 devices to a single application, block the rest. Ideal for frontline, POS and digital signage use-cases.


                            </li>
                            <li>
                                Multi App Mode: Enable only select apps on the device. Ensure security and avoid misuse of devices for non-business purposes.


                            </li>
                            <li>
                                Custom Management: Extend fully-equipped devices to your employees. Exercise limited control over app downloads and usage.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="window-3">
        <div class="container">
            <div class="row">
                <div class="col-xs-12-col-md-12">
                    <div class="col-xs-12 col-md-8">
                        <center><div class="text">
                            <h2>
                                Key Features of Scalefusion Windows 10 MDM
                            </h2>
                            <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                            <p>
                                Leverage a wide range of features for robust Windows 10 device management. Protect corporate data and prevent device misuse.
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
                                Custom Branding
                            </h2>
                            <p>
                                Reflect your company’s brand on the corporate-owned Windows 10 devices. Upload home screen and lock screen wallpaper.
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="box">
                            <h2>
                                Certificate Management
                            </h2>
                            <p>
                                Push digital certificates for authentication and provision digital identities onto devices without end-user interaction.
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="box">
                            <h2>
                                Email & Exchange Settings
                            </h2>
                            <p>
                                Enable employees to quickly access work emails. Push Email and Exchange configuration on Windows 10 devices.
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="box">
                            <h2>
                                Network Settings (WiFi)
                            </h2>
                            <p>
                                Provision Wi-Fi connectivity and VPN settings. Allow or block devices from connecting to a Wi-Fi network.
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="box">
                            <h2>
                                Custom Payload
                            </h2>
                            <p>
                                Control device policies with Custom Settings. Use an XML editor of your choice and push a CSP directly to the devices.
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="box">
                            <h2>
                                Windows Updates Management
                            </h2>
                            <p>
                                Control auto-updates in Windows 10. Schedule OS updates, auto-install and restart from the dashboard.
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="box">
                            <h2>
                                Monitor device analytics
                            </h2>
                            <p>
                                Gain bird’s eye view of all your managed Windows 10 devices from a centralized dashboard.
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="box">
                            <h2>
                                VPN Configuration
                            </h2>
                            <p>
                                Secure access to corporate data and networks. Push VPN configuration and authenticate using digital certificates.
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="box">
                            <h2>
                                Task Automation
                            </h2>
                            <p>
                                Automate recurring IT tasks. Schedule security and compliance checks with Scalefusion Workflows.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="window-4">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 col-md-push-6">
                    <img class="img-responsive" src="/image/mainpage/scalefusion/win10/image 203.png" alt="">
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
    <section id="window-5">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <img class="img-responsive" src="/image/mainpage/scalefusion/win10/image 271.png" alt="">
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="text">
                        <h3>
                            Application Distribution & Management
                        </h3>
                        <h2>
                            Deliver Business Apps For Windows 10
                        </h2>
                        <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                        <p>
                            Make your Windows 10 devices business-ready with out of the box provisioning using Windows Autopilot. On the first power-up, the devices are auto-enrolled in corporate policy configurations.
                            <br>
                            Speed up the device enrollment process by initiation users-based device enrollment. Import data from Office 365 AD or G Suite and enable quick device provisioning.
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-12">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="box">
                            <h2>
                                Network Settings (WiFi)
                            </h2>
                            <p>
                                Provision Wi-Fi connectivity and VPN settings. Allow or block devices from connecting to a Wi-Fi network.
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="box">
                            <h2>
                                Custom Payload
                            </h2>
                            <p>
                                Control device policies with Custom Settings. Use an XML editor of your choice and push a CSP directly to the devices.
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="box">
                            <h2>
                                Windows Updates Management
                            </h2>
                            <p>
                                Control auto-updates in Windows 10. Schedule OS updates, auto-install and restart from the dashboard.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="window-6">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="col-xs-12 col-md-6 col-md-push-6">
                        <img class="img-responsive" src="/image/mainpage/scalefusion/win10/image 204.png" alt="">
                    </div>
                    <div class="col-xs-12 col-md-6 col-md-pull-6">
                        <div class="text">
                            <h2>
                                Application Blacklisting for Distraction-Free Work
                            </h2>
                            <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                            <p>
                                Restrict usage of non-business apps on the devices. Blacklist the apps that do not fit your enterprise security profile.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-12">
                    <div class="col-xs-12 col-md-6 pic">
                        <img class="img-responsive" src="/image/mainpage/scalefusion/win10/image 205.png" alt="">
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="text">
                            <h2>
                                Say No to Device Downtime With Scalefusion Remote Support
                            </h2>
                            <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                            <p>
                                Reduce device downtime, improve employee productivity. Mirror remote Windows 10 devices screens and take control to resolve device issues. Extend rapid fixes and create support tickets on integrated ITSM platforms.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="window-7">
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
                    <div class="col-xs-12 col-md-12 col-down" style="">
                        <div class="col-xs-12 col-sm-6  col-md-4">
                            <div class="box">
                                <h2>
                                    Conditional Access
                                </h2>
                                <p>
                                    Protect user information on BYO PCs. Define apps and cloud data that can be accessed from the device.
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6  col-md-4">
                            <div class="box">
                                <h2>
                                    Restrict Peripheral Usage
                                </h2>
                                <p>
                                    Allow or disallow users from using peripherals like USB ports, Bluetooth devices, etc.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="window-8">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 col-md-push-6">
                    <img class="img-responsive" src="/image/mainpage/scalefusion/win10/image 207.png" alt="">
                </div>
                <div class="col-xs-12 col-md-6 col-md-pull-6">
                    <div class="text">
                        <h2>
                            Fine-Tune a Secure Browsing Experience on Your Windows 10 Devices
                        </h2>
                        <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                        <p>
                            Apply and control browser-level security settings and policies for Edge and Chrome browser. Whitelist websites necessary for work. Block entertainment websites to prevent distractions.
                            <br>
                            Extend a secure browsing experience by configuring proxy settings, defining a cookie policy and browser extensions.
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-12">
                    <center><div class="text">
                         <h2>
                            Get Quick and Deep Insights Into Your Device Inventory
                         </h2>
                         <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                         <p>
                            Replace your cumbersome Windows MDM solution with Scalefusion. Our clutter-free dashboard makes it extremely easy to manage your Windows devices and endpoints and to perform day to day operations.
                         </p>
                     </div></center>
                     <center>
                         <img class="img-responsive" src="/image/mainpage/scalefusion/win10/image 208.png" alt="">
                     </center>
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
