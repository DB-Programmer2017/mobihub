@extends('layout/home-2')


{{-- Title Website --}}
@section('title', 'Mobihub | Mobile Application Management')

{{-- Link CSS --}}
@section('link')
<link rel="stylesheet" href="/css/scalefusion/mobile-application.css">
<style>
    /* body{
        background: #f5faff;
    } */
</style>
{{-- bootstrap --}}
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> --}}
{{-- <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script> --}}
{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script> --}}

@endsection
{{-- Body HTML --}}
@section('content')

<section id="mobile-application-1">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <h4>Application Management </h4>
                <h2>Application Management Delivered for Your Business </h2>
            </div>

            <div class="col-xs-12 col-md-12">
                <p>
                Get started with mobile application management on your business
                endpoints. Power corporate-owned and employee-owned devices with a line of business apps.
                </p>
            </div>
        </div>
    </div>
</section>

<section id="mobile-application-2">
    <div class="container">
        <div class="row">
            <div class="box"></div>
            <div class="col-xs-12 col-md-8">
                <div class="content">
                    <h2>"Distribute Apps Over the Air, With Zero-touch</h2>
                    <p>
                        Push business apps on managed devices without end-user intervention.
                        Extend secure access to public apps from the Scalefusion dashboard.
                        Silently install applications on managed devices without end-user intervention.
                    </p>
                </div>
            </div>

            <div class="col-xs-12 col-md-4">
                <center><img src="/image/mainpage/scalefusion/application-icon.png" class="img-responsive"></center>
            </div>

            <div class="col-xs-12 col-md-12"></div>

            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="service-box">
                    <div class="icon">
                        <i class="fab fa-google-play"></i>
                    </div>
                    <div class="service-content">
                        <div class="col-xs-12 col-md-12"><h4>Play Store / Play for Work Apps </h4></div>
                        <p>
                            Choose from millions of Android apps and make them
                            work for your business. Deploy apps to enterprise
                            devices from the Play for Work App inventory.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="service-box">
                    <div class="icon">
                        <i class="fab fa-app-store"></i>
                    </div>
                    <div class="service-content">
                        <div class="col-xs-12 col-md-12"><h4>App Store</h4></div>
                        <p>
                            Search for the right app on the App store.
                            Quickly install public apps on Apple devices with ease.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="service-box">
                    <div class="icon">
                        <i class="fab fa-app-store-ios"></i>
                    </div>
                    <div class="service-content">
                        <div class="col-xs-12 col-md-12"><h4>Apple Volume Purchase Program </h4></div>
                        <p>
                            Purchase app licenses in bulk. Integrate Apple Volume Purchase
                            Program within the Scalefusion dashboard and push apps
                            on iOS and macOS devices with Apple VPP.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="service-box">
                    <div class="icon">
                        <i class="fab fa-windows"></i>
                    </div>
                    <div class="service-content">
                        <div class="col-xs-12 col-md-12"><h4>Windows Business Store </h4></div>
                        <p>
                            Leverage Azure AD-based setup to push business apps on Windows 10 devices.
                            Shop for apps in the Windows Business Store and sync with the
                            Scalefusion dashboard for installation.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="mobile-application-3">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <img src="/image/mainpage/scalefusion/window.png" class="img-responsive">
            </div>
            <div class="col-xs-12 col-md-6 title">
                <h2>Application Management</h2>
                <div class="col-xs-12 col-md-12">
                    <p>at Your Fingertips</p>
                </div>
            </div>
        </div>

        <div class="row">

                <div class="col-xs-12 col-md-4 service-box">
                    <span>01</span>
                    <label>App Install/Uninstall</label>
                    <p>Install and uninstall apps on managed devices with ease.</p>
                </div>

                <div class="col-xs-12 col-md-4 service-box">
                    <span>02</span>
                    <label>App Installation Status</label>
                    <p>Be on the top of your app installation progress. Generate quick reports for app deployment status.</p>
                </div>

                <div class="col-xs-12 col-md-4 service-box">
                    <span>03</span>
                    <label>View App Version</label>
                    <p>Keep a check on the app versions for devices and device groups. Automate app version reports and last update date.</p>
                </div>

                <div class="col-xs-12 col-md-4 service-box">
                    <span>04</span>
                    <label>Update Apps</label>
                    <p>Remotely update applications to the latest version. Use Scalefusion Enterprise App to leverage app versioning.</p>
                </div>

                <div class="col-xs-12 col-md-4 service-box">
                    <span>05</span>
                    <label>Schedule App Installation</label>
                    <p>Automate app installation with Scalefusion workflows. Schedule app installation at a set date and time.</p>
                </div>

                <div class="col-xs-12 col-md-4 service-box">
                    <span>06</span>
                    <label>Track App Data Usage</label>
                    <p>Monitor data used by apps over mobile and Wi-Fi networks. Identify which apps consume more data on corporate devices.</p>
                </div>

                <div class="col-xs-12 col-md-4 service-box">
                    <span>07</span>
                    <label>Configure Apps</label>
                    <p>Create app configurations for authentication and access settings for supported apps.</p>
                </div>

                <div class="col-xs-12 col-md-4 service-box">
                    <span>08</span>
                    <label>Support for BYOD</label>
                    <p>Install business apps on BYO devices. Prevent data copy from work apps to personal apps. Selectively wipe apps on device retirement.</p>
                </div>
        </div>


    </div>
</div>
</section>

<section id="mobile-application-4">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <h2>Hassle Free Distribution of Private Business Apps </h2>
                <p>
                    Push private or in-house applications custom-made for your enterprise.
                    Upload and distribute enterprise apps via Scalefusion Enterprise Store.
                </p>
                <li>Android: Upload app APK</li>
                <li>iOS: Upload pList link/IPA file </li>
                <li>Windows: Upload MSIX/ APPX bundle </li>
                <li>macOS: Upload PKG bundle </li>
            </div>

            <div class="col-xs-12 col-md-6">
                <center><img src="/image/mainpage/scalefusion/file-icon.png" class="img-pesponsive"></center>
            </div>
        </div>
    </div>
</div>
</section>

{{-- <section id="device-user-enrollment-5">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8">
                <h2>Next Steps To Get Started With Scalefusion</h2>
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
