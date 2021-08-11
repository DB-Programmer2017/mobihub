@extends('layout/home-2')


{{-- Title Website --}}
@section('title', 'MOBIHUB | Bring Your Own Device (BYOD) Management for a Modern Workforce')

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
    #byod-11,
    #byod-10,
    #byod-9,
    #byod-8,
    #byod-5,
    #byod-6,
    #byod-7,
    #byod-4,
    #byod-3,
    #byod-2,
    #byod-1{
        padding: 100px 0;
    }
    #byod-1{
        background-image: url('/image/mainpage/scalefusion/win10/shutterstock_1711981051.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 485px;
        display: flex;
        align-items: center;
    }
    #byod-1 .text h3,
    #byod-1 .text h2,
    #byod-1 .text p{
        color: #ffffff !important;
        width: 60%;
    }
    #byod-2 .box .img-responsive{
        width: 30px;
        height: 30px;
    }


    #byod-2 .box{
        background: #FFFFFF;
        border-radius: 5px;
        padding: 10%;
    }
    #byod-2 .text{
        width: 70%;
    }
    #byod-2 .text .red{
        color:#D45745;
    }
    #byod-2 .box p{

    }
    #byod-2 .down-side{
        margin-top: 50px;
    }
    #byod-3 .box .img-responsive {
        width: 30px;
        height: 30px;
    }
    #byod-3 .down-side{
        margin-top: 50px;
    }
    #byod-3 .down-side .col-md-3{
        padding: 0 1%;
    }
    #byod-3 .box {
        display: inline-flex;
        background: #FFFFFF;
        border-radius: 5px;
        height: 50px;
        justify-content: space-around;
        align-items: center;
        width: 100%;
    }
    #byod-3 .box p{
        margin-bottom: 0;
    }
    #byod-4 .text{
        text-align: center;
    }
    #byod-4 .down-side{
        margin-top: 50px;
    }
    #byod-4 .box{
        padding: 10%;
        border: 1px solid #B4B4B4;
        box-sizing: border-box;
        border-radius: 5px;
        text-align: center;
    }
    #byod-4 .img-responsive{
        max-width: 15%;
        margin: auto;
    }
    #byod-4 .text-sub{
        width: 80%;
    }
    #byod-4 .text-sub h2{
        font-size: 1.7rem;
    }
    #byod-4 .text-sub p{
        font-size: 1rem;
    }
    #byod-5{
        background-image: url('/image/mainpage/scalefusion/byod/Group 407.png');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    #byod-5 .text{
        text-align: center;
    }
    #byod-5 .box .img-responsive{
        width: 30px;
        height: 30px;
        margin: auto;
    }
    #byod-5 .box{
        text-align: center;
        margin: 15px 0;
        background: #F4F4F4;
        border-radius: 5px;
        padding: 1% 5%;
        height: 160px;
    }
    #byod-5 .box h2{
        display: inline-flex;
        align-items: center;
        font-weight: 600;
    }
    #byod-5 .box h2 span{
        padding: 0 5px;
    }
    #byod-5 .box p{
        text-align: start;
        padding: 0 10%;
    }

    #byod-8{
        background: #F4F4F4;
    }
    #byod-8 .body{
    }
    #byod-8 .up-side .text{
        text-align: center;
    }
    #byod-8 .up-side .box{
        padding: 5%;
        background: #999999;
        border-radius: 5px;
        margin-top: 50px;
        height: 640px;
    }
    #byod-8 .up-side .box .img-responsive{
        max-width:12% ;
    }
    #byod-8 .up-side .box h3,
    #byod-8 .up-side .box h2,
    #byod-8 .up-side .box p,
    #byod-8 .up-side .box li{
        color: #ffffff;
    }
    #byod-8 .up-side .box h2{
        font-size: 2rem;
        font-weight: 600;
        border-bottom: 1px solid;
        width: fit-content;
    }

    #byod-9 .img-responsive{
        max-width: 60%;
        margin: auto;
    }
    @media (max-width:1199.98px){

    }
    @media (max-width:991.98px){
        #byod-2 .box {
            background: #FFFFFF;
            border-radius: 5px;
            padding: 10%;
            margin-top: 30px;
        }
        #byod-3 .top .img-responsive{
            max-width: 70%;
            margin: auto;
            margin-bottom: 50px;
        }
        #byod-3 .box {
            display: inline-flex;
            background: #FFFFFF;
            border-radius: 5px;
            height: 50px;
            justify-content: space-around;
            align-items: center;
            width: 170px;
            padding: 0 3%;
            margin: 15px 0;
            box-shadow: 5px 5px 13px #4d4d4d42;
        }
        #byod-3 .down-side .col-md-3{
            text-align: center;
        }
        #byod-4 .box {
            padding: 10%;
            text-align: center;
            border: 1px solid #B4B4B4;
            box-sizing: border-box;
            border-radius: 5px;
            width: 60%;
            margin: 15px auto;
        }

    }
    @media (max-width:600.98px){


    }
    @media (max-width:500.98px){
        #byod-4 .box {
            width: 70%;
        }
    }
</style>
@endsection


{{-- Body HTML --}}
@section('content')
    <section id="byod-1">
        <div class="container">
            <div class="row">
                <div class="text">
                    <h3>
                        BYOD Management Solution
                    </h3>
                    <h2>
                        Bring Your Own Device (BYOD) Management for a Modern Workforce
                    </h2>
                    <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                    <p>
                        Empower your employees to work from anywhere. Extend seamless access to business resources and apps. Protect corporate data on employee-owned devices without compromising on employee-data privacy with Bring Your Own Device (BYOD) solutions.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="byod-2">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="text">
                        <h2>
                            Why Scalefusion for
                            <span class="red">BYOD</span> Management?
                        </h2>
                        <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                        <p>
                            Along with thorough corporate data security and proprietary user management feature, Scalefusion BYOD solutions offer an integrated communication suite that enables employees to securely access corporate resources with seamless communication.
                        </p>
                    </div>
                    <div class="col-xs-12 col-md-12 down-side">
                        <div class="col-xs-12 col-md-4">
                            <div class="box">
                                <img class="img-responsive" src="/image/mainpage/scalefusion/byod/ic/profile.png" alt="">
                                <h2>
                                    User Management
                                </h2>
                                <p>
                                    Add/manage users and apply corporate policies to their personal devices in an easy way.
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="box">
                                <img class="img-responsive" src="/image/mainpage/scalefusion/byod/ic/application.png" alt="">
                                <h2>
                                    BYOD Security
                                </h2>
                                <p>
                                    Implement robust security and data protection policies such as disabling copying of data from work apps to personal apps.
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="box">
                                <img class="img-responsive" src="/image/mainpage/scalefusion/byod/ic/speech-bubble.png" alt="">
                                <h2>
                                    Integrated Communication
                                </h2>
                                <p>
                                    EVA Communication Suite allows users to have a two-way chat and VoIP Calls with their teams across the organization.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="byod-3">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="col-xs-12 col-md-6 top">
                        <img class="img-responsive" src="/image/mainpage/scalefusion/byod/image 297.png" alt="">
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="text">
                            <h2>
                                Secure and Manage Your Devices for Business With Scalefusion BYOD Solutions
                            </h2>
                            <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                            <p>
                                Scalefusion BYOD solutions empower you to manage and secure employee-owned Android, iOS, macOS and Windows 10 devices used for work. Equip BYO devices with business apps, improve employee availability & facilitate remote working.
                            </p>
                        </div>
                        <div class="col-xs-12 col-md-12 down-side">
                            <div class="col-xs-12 col-md-3">
                                <div class="box">
                                    <img class="img-responsive" src="/image/mainpage/scalefusion/byod/ic/Vector.png" alt="">
                                    <p>
                                        Windows 10
                                    </p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <div class="box">
                                    <img class="img-responsive" src="/image/mainpage/scalefusion/byod/ic/Vector-2.png" alt="">
                                    <p>
                                        iOS
                                    </p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <div class="box">
                                    <img class="img-responsive" src="/image/mainpage/scalefusion/byod/ic/Vector-1.png" alt="">
                                    <p>
                                        android
                                    </p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <div class="box">
                                    <img class="img-responsive" src="/image/mainpage/scalefusion/byod/ic/Vector-2.png" alt="">
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

    <section id="byod-4">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="text">
                        <h2>
                            Simplify BYOD Management With Scalefusion
                        </h2>
                        <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                        <p>
                            Using Scalefusion BYOD solutions, IT admins can quickly enroll BYO devices, publish apps and establish secure communication between the workforce without hampering data privacy of the employees.
                        </p>
                    </div>
                    <div class="col-xs-12 col-md-12 down-side">
                        <div class="col-xs-12 col-md-3">
                            <div class="box">
                                <img class="img-responsive" src="/image/mainpage/scalefusion/byod/ic/Vector-4.png" alt="">
                                <h2>
                                    Ease of Enrollment
                                </h2>
                                <p>
                                    Add users via Office 365 AD, Azure AD, G Suite etc. Simplify onboarding with email-based enrollment.
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <div class="box">
                                <img class="img-responsive" src="/image/mainpage/scalefusion/byod/ic/Vector-5.png" alt="">
                                <h2>
                                    Personal Data Privacy
                                </h2>
                                <p>
                                    Maintain personal data privacy. Remotely wipe-off only business data if an employee leaves or device is stolen or lost.
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <div class="box">
                                <img class="img-responsive" src="/image/mainpage/scalefusion/byod/ic/Vector-6.png" alt="">
                                <h2>
                                    Efficient App Management
                                </h2>
                                <p>
                                    Streamline app & content distribution. Protect business data by restricting sharing between managed and unmanaged apps.
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <div class="box">
                                <img class="img-responsive" src="/image/mainpage/scalefusion/byod/ic/Vector-7.png" alt="">
                                <h2>
                                    Team Communication
                                </h2>
                                <p>
                                    With our team communication Suite stay connected with your team. Exchange two-way messages and VoIP calling within your organization.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="byod-5">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="text">
                        <h2>
                            Ready for Every Industry
                        </h2>
                        <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                        <p>
                            With Scalefusion BYOD solution, diverse businesses & educational institutes can encourage their employees & students to use their personal devices for work & education without compromising on security & privacy.
                        </p>
                    </div>
                    <div class="col-xs-12 col-md-12">
                        <div class="col-xs-12 col-md-4">
                            <div class="box">
                                <h2>
                                    <span>
                                        <img class="img-responsive" src="/image/mainpage/scalefusion/byod/ic/Vector-8.png" alt="">
                                    </span>
                                    Education
                                </h2>
                                <p>
                                    Enhance learning processes by introducing BYOD for students. Equip student devices with educational books & apps.
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="box">
                                <h2>
                                    <span>
                                        <img class="img-responsive" src="/image/mainpage/scalefusion/byod/ic/Group.png" alt="">
                                    </span>
                                    Logistics
                                </h2>
                                <p>
                                    Empower your frontline workers by allowing the use of personal devices for work & optimize user-productivity.
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="box">
                                <h2>
                                    <span>
                                    <img class="img-responsive" src="/image/mainpage/scalefusion/byod/ic/Vector-9.png" alt="">
                                    </span>
                                    Information Technology
                                </h2>
                                <p>
                                    Improve employee availability by extending secure access to work apps & resources on personal devices of the employees.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="byod-8">
        <div class="body">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-12 up-side">
                        <div class="col-xs-12 col-md-12">
                            <div class="text">
                                <h3>
                                    Scalefusion BYOD Security
                                </h3>
                                <h2>
                                    Enforce IT Policies To Keep Corporate Data Secure
                                </h2>
                                <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                                <p>
                                    Broaden the scope of your BYOD implementation while ensuring total BYOD security and protection of your corporate data and resources. Close all the security gaps and make sure that users’ privacy is not breached.
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-12">
                            <div class="col-xs-12 col-md-4">
                                <div class="box">
                                    <img class="img-responsive" src="/image/mainpage/scalefusion/byod/ic/image 337.png" alt="">
                                    <div class="text-sub">
                                        <h2>
                                            Android Work Profile
                                        </h2>
                                        <li>
                                            Containerize personal and work apps for Android phones and tablets
                                        </li>
                                        <li>
                                            Categorically manage apps in work container badged by a briefcase symbol
                                        </li>
                                        <li>
                                            Secure the devices without touching the personal apps and data
                                        </li>
                                        <li>
                                            Prevent data breach by restricting data copy and screenshots from work apps
                                        </li>
                                        <li>
                                            Enforce passcode policies for work container

                                        </li>
                                        <li>
                                            Perform device integrity, security and compatibility check with SafetyNet Attestation

                                        </li>
                                        <li>
                                            Disable or remove work profiles from Rooted devices
                                        </li>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="box">
                                    <img class="img-responsive" src="/image/mainpage/scalefusion/byod/ic/image 338.png" alt="">
                                    <div class="text-sub">
                                        <h2>
                                            Device Compliance &
                                            Policy Enforcement
                                        </h2>
                                        <p>
                                            Empower your frontline workers by allowing the use of personal devices for work & optimize user-productivity.
                                        </p>
                                        <li>
                                            Publish business apps & resources seamlessly

                                        </li>
                                        <li>

                                            Distinctly manage business apps on employee devices

                                        </li>
                                        <li>

                                            Safeguard employee data misuse by locking lost or stolen devices

                                        </li>
                                        <li>

                                            Prevent data sharing between work and personal apps

                                        </li>
                                        <li>

                                            Disable users from taking screenshots of work apps


                                        </li>
                                        <li>

                                            Configure email and exchange settings to secure business emails

                                        </li>
                                        <li>

                                            Push network and VPN settings as well as digital certificates
                                        </li>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="box">
                                    <img class="img-responsive" src="/image/mainpage/scalefusion/byod/ic/image 339.png" alt="">
                                    <div class="text-sub">
                                        <h2>
                                            Apple BYO Devices
                                        </h2>
                                        <p>
                                            Improve employee availability by extending secure access to work apps & resources on personal devices of the employees.
                                        </p>
                                        <li>
                                            Protect corporate data with Windows Information Protection Policy


                                        </li>
                                        <li>


                                            Publish business apps & resources seamlessly


                                        </li>
                                        <li>

                                            Whitelist websites and configure Chrome Browser


                                        </li>
                                        <li>


                                            Configure email and exchange settings to secure business emails

                                        </li>
                                        <li>


                                            Configure BitLocker settings to encrypt disk data



                                        </li>
                                        <li>


                                            Manage Operating System updates



                                        </li>
                                        <li>

                                            Push network and VPN settings as well as digital certificates
                                        </li>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="byod-9">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12 main">
                    <div class="col-xs-12 col-md-6">
                        <div class="text">
                            <h2>
                                Seamless App Distribution and
                                Management
                            </h2>
                            <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                            <p>
                                Install, update and uninstall business apps on employee devices with ease. Distribute apps to your device fleet from App Store, Google Play Store and Windows Business Store.
                                <br>
                                <br>
                                Publish in-house applications in the form of APK files, IPA files, PList links, PKG files and MSI files via Enterprise Store on Scalefusion dashboard. Install work apps silently on devices without end-user approval.
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <img class="img-responsive" src="/image/mainpage/scalefusion/byod/image 340.png" alt="">
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
