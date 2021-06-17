@extends('layout/home-2')


{{-- Title Website --}}
@section('title', 'Mobihub | Device and User Enrollment')

{{-- Link CSS --}}
@section('link')
<style>
    body{
        background: #f5faff;
    }
</style>
{{-- bootstrap --}}
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> --}}
{{-- <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script> --}}
{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script> --}}
<link rel="stylesheet" href="/css/scalefusion/device-user.css">
@endsection


{{-- Body HTML --}}
@section('content')

<section id="device-user-enrollment-1">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <h4>Enrollment</h4>
                <h2>Device and User Enrollment as Simple as It Can Get</h2>
                <hr>
            </div>

            <div class="col-xs-12 col-md-12">
                <p>
                    Enroll devices over the air, initiate out of the box policy application for Android, Apple & Windows devices. Drive bulk device enrollment and make the device provisioning easy and straightforward.
                </p>
            </div>
        </div>
    </div>
</section>

<section id="device-user-enrollment-2">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-7">
                <a href="#" class="imgage-1"><img src="/image/mainpage/scalefusion/112.png"></a>
                <a href="#" class="imgage-2"><img src="/image/mainpage/scalefusion/image 114.png"></a>
            </div>

            <div class="col-xs-12 col-md-5 content">
                <h2>
                    Over the Air Device Enrollment, Out of the Box Policy Application
                </h2>
                <p>Onboard enterprise-owned devices into corporate policies with zero-touch.
                    Ship provisioned devices straight to the employees.
                </p>
            </div>

        </div>
    </div>
</section>

<section id="device-user-enrollment-2-1">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <div class="vertical-tab" role="tabpanel">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">Addroid Zero-touch Enrollment</a></li>
                        <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab">Apple DEP Enrollment</a></li>
                        <li role="presentation"><a href="#Section3" aria-controls="windows" role="tab" data-toggle="tab">Windows Autopilot</a></li>
                        <li role="presentation"><a href="#Section4" aria-controls="samsung" role="tab" data-toggle="tab">Samsung KME-based Enrollment</a></li>
                        <li role="presentation"><a href="#Section5" aria-controls="rom" role="tab" data-toggle="tab">ROM-based Enrollment</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content tabs">
                        <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                            <h3>Addroid Zero-touch Enrollment</h3>
                            <p>Enroll Android devices over the air with Scalefusion & Google’s Android Zero-touch.
                                Apply corporate policies & configurations in bulk without manually
                                maneuvering the devices. Configure devices loaded with business apps & enable
                                employees to start using them straight out of the box. </p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="Section2">
                            <h3>Apple DEP Enrollment </h3>
                            <p>Extend a seamless unboxing experience for iOS and macOS devices.
                                With Scalefusion support for Apple DEP (Device Enrollment Program)
                                enrollment, empower IT admins to enroll, configure & equip
                                the devices using Apple Business Manager. Apply corporate
                                policies, configure restrictions, distribute apps using VPP
                                (Volume Purchase Program) & ship devices directly from the warehouse to employees. </p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="Section3">
                            <h3>Windows Autopilot </h3>
                            <p>Seamlessly enroll Windows 10 laptops and desktops using Windows
                                Autopilot program. Pre-configure new devices or reset and
                                repurpose devices to make them business-ready.
                                Automatically join devices to Azure Active Directory (Azure AD) or Active
                                Directory (via Hybrid Azure AD Join). </p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="Section4">
                            <h3>Samsung KME-based Enrollment </h3>
                            <p>Samsung Knox streamlines enrollment of
                                Samsung devices with KME-based enrollment. Integrated with Scalefusion,
                                easily roll out policy configurations & automatically
                                enroll devices in bulk. End-users can start using devices with
                                pre-applied policies & restrictions. </p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="Section5">
                            <h3>ROM-based Enrollment </h3>
                            <p>Scalefusion partners with OEMs to extend
                                Scalefusion as an in-built application. With customized ROMs,
                                devices are enrolled automatically on powering. Devices are
                                loaded with pre-configured policies & restrictions via the Scalefusion app. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="device-user-enrollment-3">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8">
                <h2>Bulk Device Enrollment for Diverse Device Types</h2>
            </div>

            <div class="col-xs-12 col-md-4">
                <p class="content">
                    Speed up policy application on the devices with bulk device enrollment.
                    Create policies, push apps and content and get started with device management.
                </p>
            </div>

            <div class="col-xs-12 col-md-12 divider"></div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="service-box">
                    <div class="icon">
                        <i class="fas fa-qrcode"></i>
                    </div>
                    <h4>QR code-based Enrollment</h4>
                    <p>
                        Streamline device setup in a few simple steps.
                        Admins and users can simply scan a QR code and
                        policies will be automatically applied on iOS & Android devices.
                    </p>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="service-box">

                        <div class="icon">
                            <i class="fas fa-hashtag"></i>
                        </div>

                    <h4>EMM Token Enrollment (AFW#) </h4>
                    <p>
                        Enroll company-owned Android devices when they are
                        unboxed or after a factory reset. Perform six taps on the
                        device screen and scan a QR Code.
                    </p>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="service-box">

                        <div class="icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>

                    <h4>Serial Number-based Enrollment </h4>
                    <p>
                        Upload a CSV of serial numbers of Android devices on the Scalefusion
                        dashboard. Enroll devices, apply policies and restrictions in bulk.
                    </p>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="service-box">

                        <div class="icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>

                    <h4>IMEI-based Enrollment </h4>
                    <p>
                        Enroll Android devices by adding IMEI numbers and apply policies
                        against each device in a straightforward CSV sheet.
                        Add devices to specific groups and apply policy configurations without manual intervention.
                    </p>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="service-box">

                        <div class="icon">
                            <i class="fab fa-apple"></i>
                        </div>

                    <h4>Enrollment Using Apple Configurator </h4>
                    <p>
                        Supervise non-DEP devices or unsupervised devices using Apple Configurator 2 (AC2)
                        and enroll the devices into Scalefusion using Apple Business Manager.
                        Supervision of devices can be done by plugging in the device to a Mac and AC2 app.
                        Once the device is supervised, apply policies & configure restrictions over the air.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<section id="device-user-enrollment-4">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <h3>
                    Simplify BYOD
                </h3>
                <p class="topic">Enrollment</p>
            </div>
            <div class="col-xs-12 col-md-6">
                <p class="title">
                    Make way for provisioning employee-owned devices.
                    Choose from a variety of options to start enrolling BYO devices on the Scalefusion dashboard.
                </p>
            </div>
            <div class="col-xs-12 col-md-12"></div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="service-box">

                        <div class="icon">
                            <img src="/image/mainpage/scalefusion/undraw_Mail_sent_re_0ofv.png">
                        </div>

                    <h4>Email-based Enrollment (For BYOD) </h4>
                    <p>
                        Invite users to enrollment over email. Users can enroll the
                        devices with email ID and can complete the verification with OTP
                        authentication received in email.
                    </p>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="service-box">

                        <div class="icon">
                            <img src="/image/mainpage/scalefusion/undraw_cloud_files_wmo8.png">
                        </div>

                    <h4>Azure Active Directory-based Enrollment </h4>
                    <p>
                        Sign up using Office 365 Active Directory and can invite users
                        from their Active Directory accounts. Users can self-enroll using QR code or
                        Email-based enrollment.
                    </p>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="service-box">

                        <div class="icon">
                            <img src="/image/mainpage/scalefusion/undraw_icons_wdp4.png">
                        </div>

                    <h4>G Suite-based
                        Enrollment </h4>
                    <p>
                        Get started with G Suite integration on Scalefusion.
                        Import and invite users from the G Suite Directory and
                        enable users to self-enroll devices.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <section id="device-user-enrollment-5">
    <div class="container">
        <div class="row">

            <div class="col-xs-12 col-md-8">
                <h2>Get Started With Simplified Device Enrollment and Provisioning With Scalefusion </h2>
            </div>

            <div class="col-xs-12 col-md-4">
                <button type="button" class="btn btn-danger">Get Started <i class="fas fa-arrow-right"></i></button>
                <button type="button" class="btn btn-default">Schedule a Demo <i class="fas fa-arrow-right"></i></button>
            </div>
        </div>
    </div>
</section>  --}}


@endsection
{{-- Body Script --}}
@section('script')


@endsection
