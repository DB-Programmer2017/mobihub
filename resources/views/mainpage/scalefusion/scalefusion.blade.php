@extends('layout/home-2')


{{-- Title Website --}}
@section('title', 'MOBIHUB | scalefusion')

{{-- Link CSS --}}
@section('link')
<link rel="stylesheet" href="/css/scalefusion/scalefusion.css">
<style>
    .scalefusion-1{
        background-image: url('/image/mainpage/scalefusion/Group523.png');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 485px;
        display: flex;
        align-items: center;
    }
</style>
@endsection


{{-- Body HTML --}}
@section('content')
    <section class="scalefusion-product">

        <section class="scalefusion-1 bg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-5 flex">
                        <h1>
                            Scalefusion
                        </h1>
                        <img src="/image/mainpage/scalefusion/icon/Line 22.svg" alt="">
                        <p>
                            Mobile Device and Endpoint Management that will Delight your IT Team
                        </p>
                        <a href="https://scalefusion.com/?stm_id=a59bea" target="_blank" class="btn-sf-registration">Registration</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="scalefusion-2">
            <div class="bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="col-xs-12 col-md-6">
                                <div class="box-text">
                                    <div>
                                        <h1>
                                            Features
                                        </h1>
                                        <img src="/image/mainpage/scalefusion/icon/Line 23.svg" alt="">
                                        <p>
                                            Explore the features and capabilities of Scalefusion
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <div class="card">
                                    <div class="box">
                                        <div class="box-content">
                                            <img class="img-responsive" src="/image/mainpage/scalefusion/icon/account.png" alt="">
                                            <div class="post">Device and User
                                            Enrollment</div>
                                            <img src="/image/mainpage/scalefusion/icon/line 50.svg" alt="">
                                        </div>
                                        <div class="button-link">
                                            <a href="/scalefusion/device-user-enrollment" class="button-box">
                                                <div class="box-content">
                                                    <img class="img-responsive" src="/image/mainpage/scalefusion/icon/account (1).png" alt="">
                                                    <div class="post">Device and User
                                                    Enrollment</div>
                                                    <img src="/image/mainpage/scalefusion/icon/line 23.svg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <div class="card">
                                    <div class="box">
                                        <div class="box-content">
                                            <img class="img-responsive" src="/image/mainpage/scalefusion/icon/application (1).png" alt="">
                                            <div class="post">Application
                                                Management</div>
                                            <img src="/image/mainpage/scalefusion/icon/line 50.svg" alt="">
                                        </div>
                                        <div class="button-link">
                                            <a href="/scalefusion/mobile-application-management" class="button-box">
                                                <div class="box-content">
                                                    <img class="img-responsive" src="/image/mainpage/scalefusion/icon/application.png" alt="">
                                                    <div class="post">Application
                                                        Management</div>
                                                    <img src="/image/mainpage/scalefusion/icon/line 23.svg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <div class="card">
                                    <div class="box">
                                        <div class="box-content">
                                            <img class="img-responsive" src="/image/mainpage/scalefusion/icon/online-support.png" alt="">
                                            <div class="post">Remote
                                                Support</div>
                                            <img src="/image/mainpage/scalefusion/icon/line 50.svg" alt="">
                                        </div>
                                        <div class="button-link">
                                            <a href="/scalefusion/remote-support" class="button-box">
                                                <div class="box-content">
                                                    <img class="img-responsive" src="/image/mainpage/scalefusion/icon/online-support (1).png" alt="">
                                                    <div class="post">Remote
                                                        Support</div>
                                                    <img src="/image/mainpage/scalefusion/icon/line 23.svg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <div class="card">
                                    <div class="box">
                                        <div class="box-content">
                                            <img class="img-responsive" src="/image/mainpage/scalefusion/icon/smartphone (1).png" alt="">
                                            <div class="post">Location
                                                Tracking</div>
                                            <img src="/image/mainpage/scalefusion/icon/line 50.svg" alt="">
                                        </div>
                                        <div class="button-link">
                                            <a href="/location-tracking" class="button-box">
                                                <div class="box-content">
                                                    <img class="img-responsive" src="/image/mainpage/scalefusion/icon/smartphone.png" alt="">
                                                    <div class="post">Location
                                                        Tracking</div>
                                                    <img src="/image/mainpage/scalefusion/icon/line 23.svg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <div class="card">
                                    <div class="box">
                                        <div class="box-content">
                                            <img class="img-responsive" src="/image/mainpage/scalefusion/icon/blog (1).png" alt="">
                                            <div class="post">Content
                                                Management</div>
                                            <img src="/image/mainpage/scalefusion/icon/line 50.svg" alt="">
                                        </div>
                                        <div class="button-link">
                                            <a href="/mobile-content-management" class="button-box">
                                                <div class="box-content">
                                                    <img class="img-responsive" src="/image/mainpage/scalefusion/icon/blog.png" alt="">
                                                    <div class="post">Content
                                                        Management</div>
                                                    <img src="/image/mainpage/scalefusion/icon/line 23.svg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <div class="card">
                                    <div class="box">
                                        <div class="box-content">
                                            <img class="img-responsive" src="/image/mainpage/scalefusion/icon/meeting (1).png" alt="">
                                            <div class="post">Team
                                                Communication</div>
                                            <img src="/image/mainpage/scalefusion/icon/line 50.svg" alt="">
                                        </div>
                                        <div class="button-link">
                                            <a href="#" class="button-box">
                                                <div class="box-content">
                                                    <img class="img-responsive" src="/image/mainpage/scalefusion/icon/meeting.png" alt="">
                                                    <div class="post">Team
                                                        Communication</div>
                                                    <img src="/image/mainpage/scalefusion/icon/line 23.svg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <div class="card">
                                    <div class="box">
                                        <div class="box-content">
                                            <img class="img-responsive" src="/image/mainpage/scalefusion/icon/analytics (1).png" alt="">
                                            <div class="post">DeepDive
                                                Analytics</div>
                                            <img src="/image/mainpage/scalefusion/icon/line 50.svg" alt="">
                                        </div>
                                        <div class="button-link">
                                            <a href="#" class="button-box">
                                                <div class="box-content">
                                                    <img class="img-responsive" src="/image/mainpage/scalefusion/icon/analytics.png" alt="">
                                                    <div class="post">DeepDive
                                                        Analytics</div>
                                                    <img src="/image/mainpage/scalefusion/icon/line 23.svg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <div class="card">
                                    <div class="box">
                                        <div class="box-content">
                                            <img class="img-responsive" src="/image/mainpage/scalefusion/icon/report (1).png" alt="">
                                            <div class="post">Report</div>
                                            <img src="/image/mainpage/scalefusion/icon/line 50.svg" alt="">
                                        </div>
                                        <div class="button-link">
                                            <a href="#" class="button-box">
                                                <div class="box-content">
                                                    <img class="img-responsive" src="/image/mainpage/scalefusion/icon/report.png" alt="">
                                                    <div class="post">Report</div>
                                                    <img src="/image/mainpage/scalefusion/icon/line 23.svg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <div class="card">
                                    <div class="box">
                                        <div class="box-content">
                                            <img class="img-responsive" src="/image/mainpage/scalefusion/icon/process (1).png" alt="">
                                            <div class="post">Workflows</div>
                                            <img src="/image/mainpage/scalefusion/icon/line 50.svg" alt="">
                                        </div>
                                        <div class="button-link">
                                            <a href="#" class="button-box">
                                                <div class="box-content">
                                                    <img class="img-responsive" src="/image/mainpage/scalefusion/icon/process.png" alt="">
                                                    <div class="post">Workflows</div>
                                                    <img src="/image/mainpage/scalefusion/icon/line 23.svg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <div class="card">
                                    <div class="box">
                                        <div class="box-content">
                                            <img class="img-responsive" src="/image/mainpage/scalefusion/icon/solution (1).png" alt="">
                                            <div class="post">Integrations</div>
                                            <img src="/image/mainpage/scalefusion/icon/line 50.svg" alt="">
                                        </div>
                                        <div class="button-link">
                                            <a href="#" class="button-box">
                                                <div class="box-content">
                                                    <img class="img-responsive" src="/image/mainpage/scalefusion/icon/solution.png" alt="">
                                                    <div class="post">Integrations</div>
                                                    <img src="/image/mainpage/scalefusion/icon/line 23.svg" alt="">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="scalefusion-2-mobile">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-head">
                            <h1>
                                Features
                            </h1>
                            <img src="/image/mainpage/scalefusion/icon/Line 50.svg" alt="">
                            <p>
                                Explore the features and capabilities of Scalefusion
                            </p>
                        </div>
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a class="i-1" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Device and User
                                            Enrollment
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <a href="/scalefusion/device-user-enrollment" class="btn btn-sm light-red">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed i-2" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Application
                                            Management
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <a href="/scalefusion/mobile-application-management" class="btn btn-sm light-red">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed i-3" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Remote Support
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <a href="/remote-support" class="btn btn-sm light-red">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFour">
                                    <h4 class="panel-title">
                                        <a class="collapsed i-4" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Location Tracking
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                    <div class="panel-body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <a href="/location-tracking" class="btn btn-sm light-red">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFive">
                                    <h4 class="panel-title">
                                        <a class="collapsed i-5" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            Content
                                            Management
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                    <div class="panel-body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <a href="/mobile-content-management" class="btn btn-sm light-red">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingSix">
                                    <h4 class="panel-title">
                                        <a class="collapsed i-6" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            Team
                                            Communication
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                    <div class="panel-body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <a href="/" class="btn btn-sm light-red">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingSeven">
                                    <h4 class="panel-title">
                                        <a class="collapsed i-7" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                            DeepDive
                                            Analytics
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                                    <div class="panel-body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <a href="/" class="btn btn-sm light-red">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingEight">
                                    <h4 class="panel-title">
                                        <a class="collapsed i-8" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                            Report
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                                    <div class="panel-body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <a href="/" class="btn btn-sm light-red">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingNine">
                                    <h4 class="panel-title">
                                        <a class="collapsed i-9" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                            Workflows
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
                                    <div class="panel-body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <a href="/" class="btn btn-sm light-red">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTen">
                                    <h4 class="panel-title">
                                        <a class="collapsed i-10" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                            Integrations
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
                                    <div class="panel-body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <a href="/" class="btn btn-sm light-red">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="scalefusion-3">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <div class="box-text">
                            <h1>
                                Solution
                            </h1>
                            <img src="/image/mainpage/scalefusion/icon/Line 22.svg" alt="">
                            <p>
                                Discover the solutions to help & support every business use-case
                            </p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="text-head">
                                <h1>
                                    By OS & DeviceSupport
                                </h1>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="text-head">
                                <h1>
                                    By Business Initiative
                                </h1>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 in-grid">
                            <div class="col-md-4 col-sm-6">
                                <div class="box" onclick="window.open('/android-mobile-device-management')">
                                    <p>Android Management</p>
                                    <div class="box-content">
                                        <p class="title">Android Management</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="box" onclick="window.open('/ios-mobile-device-management')">
                                    <p>iOS Management</p>
                                    <div class="box-content">
                                        <p class="title">iOS Management</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="box">
                                    <p>Window 10 Management</p>
                                    <div class="box-content">
                                        <p class="title">Android Management</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="box">
                                    <p>macOS Management</p>
                                    <div class="box-content">
                                        <p class="title">macOS Management</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 in-grid">
                            <div class="col-md-4 col-sm-6">
                                <div class="box" onclick="window.open('/mobile-device-management')">
                                    <p>Mobile Device Management</p>
                                    <div class="box-content">
                                        <p class="title">Mobile Device Management</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="box">
                                    <p>Kiosk Software</p>
                                    <div class="box-content">
                                        <p class="title">Kiosk Software</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="box">
                                    <p>Rugged Device Management</p>
                                    <div class="box-content">
                                        <p class="title">Rugged Device Management</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="box">
                                    <p>Unified Endpoint Management</p>
                                    <div class="box-content">
                                        <p class="title">Unified Endpoint Management</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="box">
                                    <p>Enterprise Mobility Management</p>
                                    <div class="box-content">
                                        <p class="title">Enterprise Mobility Management</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="box">
                                    <p>Bring Your Own Device (BYOD)</p>
                                    <div class="box-content">
                                        <p class="title">Bring Your Own Device (BYOD)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="scalefusion-3-mobile">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="box-text">
                            <h1>
                                Solution
                            </h1>
                            <img src="/image/mainpage/scalefusion/icon/Line 22.svg" alt="">
                            <p>
                                Discover the solutions to help & support every business use-case
                            </p>
                            <h2>
                                By OS & DeviceSupport
                            </h2>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="counter green">
                            <div class="counter-icon">
                                <i class="fab fa-android"></i>
                            </div>
                            <div class="counter-content">
                                <h3>Android Management</h3>
                                <span class="counter-value">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <a href="/android-mobile-device-management" class="btn btn-lg magenta">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="counter apple-black">
                            <div class="counter-icon">
                                <i class="fab fa-apple"></i>
                            </div>
                            <div class="counter-content">
                                <h3>iOS Management</h3>
                                <span class="counter-value">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <a href="/ios-mobile-device-management" class="btn btn-lg magenta">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="counter">
                            <div class="counter-icon">
                                <i class="fab fa-windows"></i>
                            </div>
                            <div class="counter-content">
                                <h3>Window 10 Management</h3>
                                <span class="counter-value">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <a href="#" class="btn btn-lg magenta">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="counter light-blue">
                            <div class="counter-icon">
                                <i class="fas fa-laptop"></i>
                            </div>
                            <div class="counter-content">
                                <h3>MacOS Management</h3>
                                <span class="counter-value">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <a href="#" class="btn btn-lg magenta">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="box-text">
                        <h2>
                            By Business Initiative
                        </h2>
                    </div>
                    <div class="col-sm-6">
                        <div class="counter green">
                            <div class="counter-icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="counter-content">
                                <h3>Mobile Device Management</h3>
                                <span class="counter-value">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <a href="/mobile-device-management" class="btn btn-lg magenta">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="counter green">
                            <div class="counter-icon">
                                <i class="fas fa-tasks"></i>
                            </div>
                            <div class="counter-content">
                                <h3>Kiosk Software</h3>
                                <span class="counter-value">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <a href="#" class="btn btn-lg magenta">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="counter green">
                            <div class="counter-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div class="counter-content">
                                <h3>Rugged Device Management</h3>
                                <span class="counter-value">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <a href="#" class="btn btn-lg magenta">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="counter green">
                            <div class="counter-icon">
                                <i class="fas fa-project-diagram"></i>
                            </div>
                            <div class="counter-content">
                                <h3>Unified Endpoint Management</h3>
                                <span class="counter-value">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <a href="#" class="btn btn-lg magenta">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="counter green">
                            <div class="counter-icon">
                                <i class="fas fa-industry"></i>
                            </div>
                            <div class="counter-content">
                                <h3>Enterprise Mobility Management</h3>
                                <span class="counter-value">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <a href="#" class="btn btn-lg magenta">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="counter green">
                            <div class="counter-icon">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <div class="counter-content">
                                <h3>Bring Your Own Device (BYOD)</h3>
                                <span class="counter-value">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <a href="#" class="btn btn-lg magenta">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

</div>









</body>

    </section>


@endsection

{{-- js --}}
@section('script')
<script>
    $(function(){
	var tabIndex = 0;

	var $acc = $('#accordion');
	const tabsCount = $acc.find('.collapse').length;

	// IF SKIP JS INITIALISATION - SHOW METHOD WILL NOT CLOSE OTHER TABS (UNLESS THEY'RE ALREADY INITIALIZED WITH MANUAL CLICKS)
	$acc.find('.collapse').collapse({
		parent: $acc, // to make it work as accordion
		toggle: false // don't toggle while initializing
	});

	$('#openNextTabBtn').on('click', function(){
		$acc.find('.collapse').eq(++tabIndex % tabsCount).collapse('show');
	});
});
</script>
@endsection
