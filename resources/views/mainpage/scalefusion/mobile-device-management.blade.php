@extends('layout/home-2')


{{-- Title Website --}}
@section('title', 'MOBIHUB | Android obile device management')

{{-- Link CSS --}}
@section('link')
<link rel="stylesheet" href="/css/solution/mdm.css">

@endsection


{{-- Body HTML --}}
@section('content')

<section id="mobile-device-management-1">
    <div class="container">
        <div class="row flex">
            <div class="col-xs-12 col-md-6">
                <h2>Mobile Device Management<br>Software for a Modern Workforce</h2>
                <p class="body">
                    Scalefusion Mobile Device Management (MDM) Software gives your IT teams visibility and control required to secure,
                    manage and monitor any corporate-owned or employee-owned devices that access corporate data.
                </p>
                <div class="sec-1-image">
                    <img  src="{{ asset('/image/mainpage/scalefusion/hero-img-2.png') }}">
                </div>
            </div>

            <div class="hero-image col-xs-12 col-md-6">
                <img src="{{ asset('/image/mainpage/scalefusion/hero-img-1.png') }}">
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-md-12 text-center trusted-by-company">
                <h4>Trusted by World’s Leading Companies</h4>
                <center><img src="{{ asset('/image/mainpage/scalefusion/logo-leading-brands.png') }}" /></center>
            </div>
        </div>
    </div>
</section>

<section id="mobile-device-management-2">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 text-center">
                <h2>Manage Your Fleet of Devices From One Platform</h2>
                <hr class="short-divider">
                <p class="body">Scalefusion MDM gives IT managers robust insights and security of devices running on Android, iOS,
                    macOS & Windows 10 devices across diverse ownership models such as corporate-owned & bring your own device (BYOD).
                </p>
            </div>
            <div class="col-xs-12 col-md-12">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#Andriod" data-toggle="tab" aria-expanded="false">Andriod</a></li>
                    <li class=""><a href="#iOS" data-toggle="tab" aria-expanded="true">iOS</a></li>
                    <li class=""><a href="#macOS" data-toggle="tab" aria-expanded="true">macOS</a></li>
                    <li class=""><a href="#Windows-10" data-toggle="tab" aria-expanded="true">Windows 10</a></li>
                </ul>
            </div>

            <div class="col-xs-12 col-md-12">

                <div id="myTabContent" class="tab-content">

                    <div class="tab-pane fade active in" id="Andriod">
                        <div class="container">
                            <div class="row tab-info">
                                <div class="col-xs-12 col-md-6">
                                    <h3>Android Device Management</h3>
                                    <p class="body">Manage diverse Android endpoints in an enterprise environment including smartphones and tablets to accelerate employee productivity. <br>
                                        Improve business visibility by managing Android-based point of sales systems and Android digital signage.
                                        Transform frontline operations with rugged devices and vehicle mounted devices.</p>
                                    <a href="#">Learn More&rarr;</a>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <img src="{{ asset('/image/mainpage/scalefusion/android-devices.png') }}"/>
                                </div>
                            </div>
                            <hr class="tab-info">
                        </div>
                    </div>


                    <div class="tab-pane fade" id="iOS">
                        <div class="container">
                            <div class="row tab-info">
                                <div class="col-xs-12 col-md-6">
                                    <h3>iOS Device Management</h3>
                                    <p class="body">Offer your employees the best-in-market devices, leverage the power of iPhones and iPads for business. <br>
                                        Enhance classroom learning experience with iPads managed with Scalefusion. Manage enterprise iOS devices with Scalefusion and Apple Business Manager.</p>
                                    <a href="#">Learn More&rarr;</a>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <img src="{{ asset('/image/mainpage/scalefusion/ios-devices.png') }}"/>
                                </div>
                            </div>
                            <hr class="tab-info">
                        </div>
                    </div>


                    <div class="tab-pane fade" id="macOS">
                        <div class="container">
                            <div class="row tab-info">
                                <div class="col-xs-12 col-md-6">
                                    <h3>macOS Management</h3>
                                    <p class="body">Drive smart workplaces with Macbooks and iMacs. Reinvent learning with mac for classrooms and education. <br>
                                        Streamline over-the-air provisioning and security of macOS devices with Scalefusion and Apple Business Manager.</p>
                                    <a href="#">Learn More&rarr;</a>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <img src="{{ asset('/image/mainpage/scalefusion/macos-devices.png') }}"/>
                                </div>
                            </div>
                            <hr class="tab-info">
                        </div>
                    </div>

                    <div class="tab-pane fade" id="Windows-10">
                        <div class="container">
                            <div class="row tab-info">
                                <div class="col-xs-12 col-md-6">
                                    <h3>Windows 10 Management</h3>
                                    <p class="body">Power your workforce with the devices they are most familiar with. Unleash the power of Windows 10 laptops, desktops and Surface devices for business. <br>
                                        Facilitate remote working and remote learning on Windows 10 laptops provisioned by Scalefusion MDM.</p>
                                    <a href="#">Learn More&rarr;</a>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <img src="{{ asset('/image/mainpage/scalefusion/android-devices.png') }}"/>
                                </div>
                            </div>
                            <hr class="tab-info">
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
            <div class="col-xs-12 col-md-12 text-center">
                <h5>Device Enrollment Methods in Mobile Device Management</h5>
                <h2>A Comprehensive Way To Quickly Onboard & Secure Your Device Fleet</h2>
                <hr class="short-divider">
            </div>

            <div class="col-xs-12 col-md-12">
                <div class="enrollment-type">
                    <div class="enrollment-type-box">
                        <img src="{{ asset('/image/mainpage/scalefusion/email-based.svg') }}"/>
                        <h5>Email based <br> Enrollment</h5>
                    </div>
                    <div class="enrollment-type-box">
                        <img src="{{ asset('/image/mainpage/scalefusion/Android-Zero-touch.svg') }}"/>
                        <h5>Android Zero-touch <br> Enrollment</h5>
                    </div>
                    <div class="enrollment-type-box">
                        <img src="{{ asset('/image/mainpage/scalefusion/rom-based-enrollment.svg') }}"/>
                        <h5>ROM based Enrollment</h5>
                    </div>
                    <div class="enrollment-type-box">
                        <img src="{{ asset('/image/mainpage/scalefusion/qr_code.svg') }}"/>
                        <h5>QR Code/URL based <br> Enrollment</h5>
                    </div>
                    <div class="enrollment-type-box">
                        <img src="{{ asset('/image/mainpage/scalefusion/apple_dep.svg') }}"/>
                        <h5>Apple DEP <br> Enrollment</h5>
                    </div>
                    <div class="enrollment-type-box">
                        <img src="{{ asset('/image/mainpage/scalefusion/gsuite-1.svg') }}"/>
                        <h5>GSuite based <br> Enrollment</h5>
                    </div>
                    <div class="enrollment-type-box">
                        <img src="{{ asset('/image/mainpage/scalefusion/google_afw.svg') }}"/>
                        <h5>Google AfW based <br> Enrollment</h5>
                    </div>
                    <div class="enrollment-type-box">
                        <img src="{{ asset('/image/mainpage/scalefusion/imei.svg') }}"/>
                        <h5>IMEI based <br> Enrollment</h5>
                    </div>
                    <div class="enrollment-type-box">
                        <img src="{{ asset('/image/mainpage/scalefusion/office_365.svg') }}"/>
                        <h5>Office 365 based <br> Enrollment</h5>
                    </div>
                    <div class="enrollment-type-box">
                        <img src="{{ asset('/image/mainpage/scalefusion/windows_autopilot.svg') }}"/>
                        <h5>Windows Autopilot <br> Enrollment</h5>
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
            <div class="col-md-3"></div>
            <div class="col-xs-12 col-md-6">
                <h5>Secure Mobile Device Management Software</h5>
                <h2>Protect Corporate Data through Device Security and Policies</h2>
                <hr class="short-divider">
                <p>Our Mobile Device Management Software offers wide-range of security policies that enables
                     your IT administrators to keep data secure and prevent data leakage.
                     Enforce strong security policies to protect corporate data.
                </p>
            </div>
            <div class="col-md-3"></div>
        </div>
            <div class="row flex">
                <div class="three-freatures flex">
                    <div class="col">
                        <h4 class="topic">Enforce Passcode Policy</h4>
                        <p class="body text">Enforce strong password policies to protect critical company data stored on mobile devices.</p>
                    </div>
                    <div class="col">
                        <h4 class="topic">SafetyNet Attestation</h4>
                        <p class="body text">Perform Android device integrity, security, and compatibility check and assign policies accordingly.</p>
                    </div>
                    <div class="col">
                        <h4 class="topic">MDM Kiosk Mode</h4>
                        <p class="body text">IT admin can lock a device into single or multi-app Kiosk mode and prevent access to system settings or any other apps.</p>
                    </div>
                    <div class="col">
                        <h4 class="topic">Factory Reset Protection</h4>
                        <p class="body text">Allow/block the specific Google Accounts that can be used to sign-in to the device if they are factory reset.</p>
                    </div>
                    <div class="col">
                        <h4 class="topic">Control Screen Capture</h4>
                        <p class="body text">Restrict your employees from taking screenshots of work apps on their personal devices.</p>
                    </div>
                    <div class="col">
                        <h4 class="topic">Configure Wi-Fi Settings</h4>
                        <p class="body text">Push Wi-Fi settings, blocking device connection to unidentified networks.</p>
                    </div>
                    <div class="col">
                        <h4 class="topic">Detect Compliance Violations</h4>
                        <p class="body text">Empower the IT admin to detect any compliance violations and take appropriate actions accordingly.</p>
                    </div>
                    <div class="col">
                        <h4 class="topic">Remote Wipe/Factory Reset</h4>
                        <p class="body text">Allow the IT administrator to remote wipe/factory reset device to prevent data loss or theft.</p>
                    </div>
                    <div class="col">
                        <h4 class="topic">Security Incidents Monitoring</h4>
                        <p class="body text">Monitor security breaches like forceful SIM card swap or unsuccessful exit incident from the Kiosk Mode.</p>
                    </div>
                    <div class="col">
                        <h4 class="topic">Restrict Profile Removal</h4>
                        <p class="body text">Prevent users from removing MDM Profile from the Apple Devices. This feature is available only on Apple DEP Devices.</p>
                    </div>
                    <div class="col">
                        <h4 class="topic">Administrator Activity Logs</h4>
                        <p class="body text">Get insights into the activities performed by administrator on the Scalefusion dashboard.</p>
                    </div>
                    <div class="col">
                        <h4 class="topic">Data Sharing Restrictions</h4>
                        <p class="body text">Restrict users from copying/sharing data or documents from work apps to personal apps.</p>
                    </div>
                </div>
            </div>

    </div>

</section>

<section id="mobile-device-management-5">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 text-center">
                <h5>Do more than Mobile Device Management</h5>
                <h2>Everything You Need To Manage Your Device Fleet</h2>
                <hr class="short-divider">
            </div>

            <div class="col-xs-12 col-md-12">
                <div class="enrollment-type">
                    <div class="enrollment-type-box">
                        <img src="{{ asset('/image/mainpage/scalefusion/kiosk_mode.svg') }}"/>
                        <h5>Kiosk Mode</h5>
                    </div>
                    <div class="enrollment-type-box">
                        <img src="{{ asset('/image/mainpage/scalefusion/single_app_mode.svg') }}"/>
                        <h5>Single App Mode</h5>
                    </div>
                    <div class="enrollment-type-box">
                        <img src="{{ asset('/image/mainpage/scalefusion/kiosk_browser.svg') }}"/>
                        <h5>Kiosk Browser</h5>
                    </div>
                    <div class="enrollment-type-box">
                        <img src="{{ asset('/image/mainpage/scalefusion/whitelist_websites.svg') }}"/>
                        <h5>Whitelist Websites</h5>
                    </div>
                    <div class="enrollment-type-box">
                        <img src="{{ asset('/image/mainpage/scalefusion/location_tracking.svg') }}"/>
                        <h5>Location Tracking</h5>
                    </div>
                    <div class="enrollment-type-box">
                        <img src="{{ asset('/image/mainpage/scalefusion/blacklist_websites.svg') }}"/>
                        <h5>Blacklist Websites</h5>
                    </div>
                    <div class="enrollment-type-box">
                        <img src="{{ asset('/image/mainpage/scalefusion/multi_geofence.svg') }}"/>
                        <h5>Multi Geofence</h5>
                    </div>
                    <div class="enrollment-type-box">
                        <img src="{{ asset('/image/mainpage/scalefusion/role_based_access.svg') }}"/>
                        <h5>Role-Based Access</h5>
                    </div>
                    <div class="enrollment-type-box">
                        <img src="{{ asset('/image/mainpage/scalefusion/device_analytics.svg') }}"/>
                        <h5>Device Analytics</h5>
                    </div>
                    <div class="enrollment-type-box">
                        <img src="{{ asset('/image/mainpage/scalefusion/custom_branding.svg') }}"/>
                        <h5>Custom Branding</h5>
                    </div>
                    <div class="enrollment-type-box">
                        <img src="{{ asset('/image/mainpage/scalefusion/reports_and_alerts.svg') }}"/>
                        <h5>Reports & Alerts</h5>
                    </div>
                    <div class="enrollment-type-box">
                        <img src="{{ asset('/image/mainpage/scalefusion/disable_hardware_buttons.svg') }}"/>
                        <h5>Disable Hardware Buttons</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</section>

<section id="mobile-device-management-6">
    <div class="background-layer-gradiant">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                </div>
                <div class="col-xs-12 col-md-6">
                    <h5>MDM Software with Remote Control</h5>
                    <h2>Enable Remote Cast & Control To Troubleshoot Devices Easily</h2>
                    <hr class="short-divider">
                    <p class="body">Push business apps with ease. Install applications from App Store, Google Play Store, Windows Business Store via the Scalefusion dashboard.
                        <br>
                        <br>
                        Install in-house apps by uploading APK files, IPA files, PList links, PKG files, UWP files or MSI files on the Scalefusion Enterprise Store.
                        Publish, delete or update apps without any end-user intervention.
                    <p><a href="#">Learn More &rarr;</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="mobile-device-management-7">
    <div class="background-layer-gradiant background-layer-gradiant-after">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <h2>Seamless App Distribution and Management</h2>
                    <hr class="short-divider">
                    <p class="body">Quickly resolve device issues and reduce device downtime with Remote Cast and Control.
                        On select Android OEMs and Windows 10 devices, mirror and take control of the device screens, perform actions and resolve issues, faster.
                        On iOS devices, mirror device screens and resolve device issues remotely.
                        <br>
                        <br>
                        Take screenshots, record screen sessions and create context-aware support tickets on integrated ITSM platforms.
                    </p>
                    <p><a href="#">Learn More &rarr;</a></p>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="hero-image">
                        <img  src="{{ asset('/image/mainpage/scalefusion/hero-3.png') }}"style="
                        max-width: 100%;">
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>


<section id="mobile-device-management-8">

        <div class="container">
            <div class="row flex">
                <div class="col-xs-12 col-md-6 row tab-info">
                    <div class="hero-image">
                        <img  src="{{ asset('/image/mainpage/scalefusion/hero-3.png') }}">
                    </div>
                </div>

                <div class="col-xs-12 col-md-6">
                    <h2>Seamless App Distribution and Management</h2>
                    <hr class="short-divider">
                    <p class="body">Quickly resolve device issues and reduce device downtime with Remote Cast and Control.
                        On select Android OEMs and Windows 10 devices, mirror and take control of the device screens, perform actions and resolve issues, faster.
                        On iOS devices, mirror device screens and resolve device issues remotely.
                        <br>
                        <br>
                        Take screenshots, record screen sessions and create context-aware support tickets on integrated ITSM platforms.
                    </p>
                    <p><a href="#">Learn More &rarr;</a></p>
                </div>
            </div>
            <hr class="tab-info">
        </div>

</section>


<section id="mobile-device-management-9">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-2"></div>
            <div class="col-xs-12 col-md-8">
                <h2>Everything You Need To Manage Your Device Fleet</h2>
                <hr class="short-divider">
                <p class="body">Quickly enroll devices, streamline policy enforcement, automate application management,
                    monitor & secure your device inventory, troubleshoot & fix on-field issues. Stay on top of things every day.
                </p>
            </div>
            <div class="col-xs-12 col-md-2"></div>
        </div>

        <div class="row flex tabs">
            <div class="col-xs-12 col-md-3">
                <div class="card">
                   <ul class="nav nav-tabs flex">
                    <li class="active">
                        <a href="#automated-device-setup" data-toggle="tab" aria-expanded="false">
                            <div class="tab-box">
                                <img src="{{ asset('/image/mainpage/scalefusion/automated-device-setup.svg') }}" />
                                <p>Automated Device Setup</p>
                            </div>
                        </a>
                    </li>
                    <li class="">
                        <a href="#device-compliance" data-toggle="tab" aria-expanded="true">
                            <div class="tab-box">
                                <img src="{{ asset('/image/mainpage/scalefusion/device-compliance.svg') }}" />
                                <p>Device Compliance & Automated Policy Enforcement</p>
                            </div>
                        </a>
                    </li>
                    <li class="">
                        <a href="#dynamic-policie" data-toggle="tab" aria-expanded="true">
                            <div class="tab-box">
                                <img src="{{ asset('/image/mainpage/scalefusion/dynamic-policies.svg') }}" />
                                <p>Dynamic Policies and Workflows</p>
                            </div>
                        </a>
                    </li>

                </ul>
                </div>
            </div>
            <div class="col-xs-12 col-md-9">
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="automated-device-setup">

                                <div class="col">
                                    <h3>Automated Device Setup</h3>
                                    <p>Define a standard set of corporate policies that are aligned to your business and once the device is enrolled,
                                        all the defined policies are automatically applied.
                                    </p>
                                    <ul>
                                        <li>Push Wi-fi settings and device-specific restrictions to devices automatically</li>
                                        <li>Access business emails with superior security through Exchange, POP and IMAP</li>
                                        <li>Automatically install required business apps on the devices</li>
                                    </ul>
                                </div>

                    </div>

                    <div class="tab-pane fade" id="device-compliance">

                                <div class="col">
                                    <h3>Device Compliance & Automated Policy Enforcement</h3>
                                    <p>Create a profile with required MDM policies for device restrictions, passcode settings, access settings,
                                        apps and more and assign it based on OS or ownership type (BYOD or corporate-owned).
                                    </p>
                                    <ul>
                                        <li>Enforce device passcodes settings</li>
                                        <li>Bookmark/Push intranet sites and other important website URLs for quick access</li>
                                        <li>Selectively wipe business data from retired devices</li>
                                    </ul>
                                </div>

                    </div>

                    <div class="tab-pane fade" id="dynamic-policie">

                                <div class="col">
                                    <h3>Dynamic Policies and Workflows</h3>
                                    <p>With our proprietary Scalefusion Workflows feature,
                                        IT admins can assign dynamic policies to devices and also schedule repetitive tasks that will run automatically.
                                    </p>
                                    <ul>
                                        <li>Dynamically change device policy based on the time of the day</li>
                                        <li>Schedule Lock/Unlock of Kiosk Mode based devices</li>
                                        <li>Schedule device reboot of unattended Kiosks or frontline devices</li>
                                    </ul>
                                </div>

                    </div>


                </div>
            </div>
        </div>
    </div>

</div>
</section>

<section id="mobile-device-management-10">
    <div class="background-layer-dark-top">
        <div class="container">
            <div class="row flex">
                <div class="col-xs-12 col-md-6">
                    <h2>Why Choose Scalefusion MDM?</h2>
                    <hr class="short-divider">
                    <p class="body">Our MDM software is user-centric, crusading to help businesses generate measurable growth,
                        improved efficiency & reduced costs with mobility.
                    </p>
                </div>
            </div>

            <div class="row flex m-card">
                <div class="col-xs-12 col-md-3 flex-column m-card">
                    <div class="card-image"><img src="{{ asset('/image/mainpage/scalefusion/increase_productivity.svg') }}"/></div>
                    <div class="card-title"><h4>Save Cost, Increase
                        Productivity</h4></div>
                    <div class="card-body"><p>Upkeep device performance to improve productivity by troubleshooting device issues remotely.</p></div>
                </div>
                <div class="col-xs-12 col-md-3 flex-column m-card">
                    <div class="card-image"><img src="{{ asset('/image/mainpage/scalefusion/reduced_work.svg') }}"/></div>
                    <div class="card-title"><h4>Reduced Manual
                        IT Work</h4></div>
                    <div class="card-body"><p>Provision devices in bulk, improve IT productivity by automating data-driven compliance checks & security alerts.</p></div>
                </div>
                <div class="col-xs-12 col-md-3 flex-column m-card">
                    <div class="card-image"><img src="{{ asset('/image/mainpage/scalefusion/manage_device.svg') }}"/></div>
                    <div class="card-title"><h4>Start Managing Devices in
                        20 Minutes</h4></div>
                    <div class="card-body"><p>Easy-to-use solution with a short learning curve, facilitated with an industry-leading support to ensure faster time-to-market.</p></div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

{{-- js --}}
@section('script')

@endsection
