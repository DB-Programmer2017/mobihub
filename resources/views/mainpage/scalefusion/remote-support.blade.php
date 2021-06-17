@extends('layout/home-2')


{{-- Title Website --}}
@section('title', 'Mobihub | Remote Support')

{{-- Link CSS --}}
@section('link')
<style>
    body{
        background: #f5faff;
    }
    #remote-support-1 h4{
        color: #FFFFFF;
        font-weight: normal;
        font-size: 30px;
        line-height: 52px;
    }
    #remote-support-1{
        background-image: url('/image/mainpage/scalefusion/5172658.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 485px;
        display: flex;
        align-items: center;
    }
    #remote-support-1 h2 {
    width: 50%;
    color: #FF4646;
    font-size: 45px;
    font-weight: 500;
    line-height: 54px;
    margin-bottom: 46px;
    font-family: 'Prompt', sans-serif;
    }
    #remote-support-1 p {
        width: 50%;
        font-weight: 300;
        font-size: 16px;
        line-height: 30px;
        font-family: 'Prompt', sans-serif;
        color: #FFFFFF;
    }
    #remote-support-2 .box{
        margin: 50px 0;
    }
    #remote-support-2 h2{
        font-size: 60px;
        text-align: end;
    }
    #remote-support-2 .pd{
        padding: 40px 0 0 100px;
    }
    #remote-support-3{
        background-color: #D45745;
        height: 500px;
    }
    #remote-support-3 .service-box{
        display: inline-flex;
        align-items: center;
        padding: 0 0 0 20px;
        margin: 20px 0;
        border-radius: 5px;
        width: 260px;
        height: 60px;
        background-color: #fff;
    }
    #remote-support-7 .box,
    #remote-support-5 .box,
    #remote-support-3 .box{
        display: flex;
        align-items: center;
        height: 100%;
    }
    @media (max-width: 1023px){
        #remote-support-5 .box,
        #remote-support-3 .box{
            display: block;
        }
    }
    #remote-support-3 center {
        color: #fff;
        padding: 0 250px;
    }
    #remote-support-3 .icon-box{
        padding: 0 150px;
    }
    #remote-support-3 .service-box h4{
        font-weight: 600;
        font-size: 14px;
        line-height: 21px;
    }
    #remote-support-3 .icon img{
        margin: 0 10px;
        width: 30px;
        height: 30px;

    }
    #remote-support-4{
        margin: 100px 0px;
    }
    #remote-support-5 h2,
    #remote-support-4 h2{
        font-weight: 600;
        font-size: 35px;
        line-height: 53px;
    }
    #remote-support-5 div{
        text-align: end;
    }
    #remote-support-4 ul li::marker{
        color: #D45745; /* Change the color */
    }
    #remote-support-5{
        background-color: #F4F4F4;
        margin: 50px 0;
        height: 560px;
    }
    #remote-support-5 .text{
        display: flex;
        align-items: center;
        height: 100%;
    }
    #remote-support-7{
        background-color:#2D394B;
        height: 560px;
    }
    #remote-support-7 .col-md-push-6{
        color: #fff;
    }
    #remote-support-7 .service-box{
        background-color: #fff;
        width: 465px;
        height: 130px;
        border-radius: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin:  20px 0;
    }
    #remote-support-7 .service-box img{
        width: 80%;
    }
    @media only screen and (max-width:1022px){
        #remote-support-1 h2 {
            width: 100%;
            margin-bottom: 10px;
            font-size: 31px;
            line-height: 40px;
        }
        #remote-support-1 h4 {
            font-size: 22px;
        }
        #remote-support-1 p {
            width: 100%;
        }
        #remote-support-2 h2 {
            font-size: 40px;
            text-align: center;
        }
        #remote-support-2 .pd {
            padding: 50px 0 0 0px;
        }
        #remote-support-3 {
            height: auto;
        }
        #remote-support-3 center {
            padding: 0px;
        }
        #remote-support-3 .icon-box {
            padding: 0 90px;
        }
        #remote-support-4 .col-md-push-6 {
            padding: 0 50px 50px 50px;
        }
        #remote-support-4 {
            margin: 50px 0px;
        }
        #remote-support-5 {
            height: auto;
        }
        #remote-support-5 .col-md-6 {
            padding: 0 50px 50px 50px;
        }
        #remote-support-7 .box, #remote-support-5 .box, #remote-support-3 .box {
            display: block;
            height: 100%;
        }

        #remote-support-3 .service-box h4 {
            text-align: start;
        }
        #remote-support-5 div {
            text-align: start;
        }
    }
    @media only screen and (max-width:767px){
        #remote-support-3 .col-md-4{
            text-align: center;
        }
        #remote-support-3 center {
            padding: 50px;
        }
        #remote-support-3 .service-box {
            width: 178px;
        }
        #remote-support-7 .service-box {
            width: auto;
            height: 100px;
        }
    }
</style>
{{-- bootstrap --}}
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> --}}
{{-- <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script> --}}
{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script> --}}

@endsection
{{-- Body HTML --}}
@section('content')
<section id="remote-support-1">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <h4>Remoted Troubleshooting </h4>
                <h2>Extend Quick IT Support To Your Employees, Remotely</h2>
            </div>

            <div class="col-xs-12 col-md-12">
                <p>
                    Provide instant support for remote workforce and frontline employees.
                    Virtually troubleshoot device issues, just as you would physically.
                </p>
            </div>
        </div>
    </div>
</section>

<section id="remote-support-2">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 box">
                <div class="col-xs-12 col-md-6">
                    <h2>“Save Costs and Time Spent on in-Person Troubleshooting”</h2>
                </div>
                <div class="col-xs-12 col-md-6 pd">
                    <p>
                        Technical crack-ups, device or software errors,
                        network errors and glitches hamper employee productivity.
                        Addressing these quickly and extending resolutions for a large device inventory,
                        spread within several geographical locations is a critical IT challenge.
                    </p>
                    <ul>
                        <label>With Remote Support:</label>
                        <li>Save on-site troubleshooting expenses</li>
                        <li>Provide issue resolutions, faster</li>
                        <li>Reduce device downtime</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="remote-support-3">
    <div class="container box">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <center>
                    <h2>Remote Troubleshooting</h2>
                    <img src="/image/mainpage/scalefusion/icon/Line 23.svg" alt="">
                    <p>
                        บางฉบับของข้อความใช้คำว่า adipisici แทน adipiscing เพราะการใช้อักษรคู่เสียงเดี่ยว ng ท้ายคำเป็นสิ่งที่แปลกใน
                        ภาษาละตินคลาสสิก บางฉบับของข้อความใช้คำว่า adipisici แทน adipiscing เพราะการใช้อักษรคู่เสียงเดี่ยว
                        ng ท้ายคำเป็นสิ่งที่แปลกในภาษาละตินคลาสสิก
                    </p>
                </center>
            </div>
            <div class="col-xs-12 col-md-12 icon-box">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="service-box">
                        <div class="icon">
                            <img src="/image/mainpage/scalefusion/Group.png" >
                        </div>
                        <h4>Remote Cast</h4>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="service-box">
                        <div class="icon">
                            <img src="/image/mainpage/scalefusion/Group 197.png" >
                        </div>
                        <h4>Remote Control</h4>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="service-box">
                        <div class="icon">
                            <img src="/image/mainpage/scalefusion/Vector.png" >
                        </div>
                        <h4>Capture Screenshots</h4>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="service-box">
                        <div class="icon">
                            <img src="/image/mainpage/scalefusion/Vector-1.png" >
                        </div>
                        <h4>Take Screen Recordings</h4>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="service-box">
                        <div class="icon">
                            <img src="/image/mainpage/scalefusion/Group-1.png" >
                        </div>
                        <h4>Sync Files</h4>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="service-box">
                        <div class="icon">
                            <img src="/image/mainpage/scalefusion/Vector-2.png" >
                        </div>
                        <h4>Create Support Tickets</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="remote-support-4">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6 col-md-push-6">
                    <h2>Over-the-air IT Support for</h2>
                    <h2 style="color:#D45745; margin-top:0px;">Android Devices</h2>
                    <p>
                        Resolve issues on Android devices with Scalefusion Remote Cast and Control.
                        Extend quick fixes by remotely mirroring device screens on the Scalefusion dashboard.
                        On select devices, take screen control.
                    </p>
                <ul>
                    <li>Remotely cast device screens on the Scalefusion dashboard</li>
                    <li>Provide step-by-step issue resolution over VoIP call</li>
                    <li>Push files, download for inspection or delete files from the device</li>
                    <li>Take screenshots and screen recordings</li>
                    <li>Create context-aware support tickets</li>
                </ul>
            </div>
            <div class="col-xs-12 col-md-6 col-md-pull-6">
                <img src="/image/mainpage/scalefusion/it-support.png" class="img-responsive">
            </div>
        </div>
    </div>
</section>

<section id="remote-support-5">
    <div class="container box">
        <div class="row  box">
            <div class="col-xs-12 col-md-6 ">
                <div>
                    <h2>Remote Support for Windows 10 </h2>
                    <h2 style="color:#D45745; margin-top:0px;">Desktops and Laptops</h2>
                    <img src="/image/mainpage/scalefusion/icon/red-line.svg" alt="">
                    <p>
                        Simplify device issue resolution on remote Windows 10 devices.
                        Control Windows 10 device screens, perform actions and rapidly
                        resolve device issues. Record sessions, take screenshots and create
                        support tickets on integrated ITSM platforms.
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 ">
                <center><img class="img-responsive" src="/image/mainpage/scalefusion/it-support-2.png" class="img-reponsive"></center>
            </div>
        </div>
    </div>
</section>

<section id="remote-support-4">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6 col-md-push-6">
                <div>
                    <h2>Remote Support for Windows 10 </h2>
                    <h2 style="color:#D45745; margin-top:0px;">Desktops and Laptops</h2>
                    <img src="/image/mainpage/scalefusion/icon/red-line.svg" alt="">
                    <p>
                        Simplify device issue resolution on remote Windows 10 devices.
                        Control Windows 10 device screens, perform actions and rapidly
                        resolve device issues. Record sessions, take screenshots and create
                        support tickets on integrated ITSM platforms.
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-md-pull-6">
                <center><img class="img-responsive" src="/image/mainpage/scalefusion/it-support-2.png" class="img-reponsive"></center>
            </div>
        </div>
    </div>
</section>
<section id="remote-support-7">
    <div class="container box">
        <div class="row box">
            <div class="col-xs-12 col-md-6 col-md-push-6">
                <h2>Make IT Ticketing a Breeze </h2>
                <img src="/image/mainpage/scalefusion/icon/red-line.svg" alt="">
                <p>Simplify support ticketing.
                    Integrate the ITSM tool of your choice on the Scalefusion dashboard.
                    Create context-aware support tickets with necessary device
                    vital information without navigating to the tool. </p>
            </div>

            <div class="col-xs-12 col-md-6 col-md-pull-6">
                <center>
                    <div class="service-box">
                        <img  src="/image/mainpage/scalefusion/it-support-4.png" class="img-responsive">
                    </div>
                    <div class="service-box">
                        <img  src="/image/mainpage/scalefusion/it-support-5.png" class="img-responsive">
                    </div>
                </center>
            </div>
        </div>
    </div>
</section>
@endsection
{{-- Body Script --}}
@section('script')


@endsection
