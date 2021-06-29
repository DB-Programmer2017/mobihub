@extends('layout/home-2')


{{-- Title Website --}}
@section('title', 'Mobihub | Workflow')

{{-- Link CSS --}}
@section('link')

<style>
    h3,h4,h2,h1,p  {
        font-family: 'Prompt';
    }
    #workflow-1{
        background-image: url('/image/mainpage/scalefusion/workflow/shutterstock_1086120500-[Converted].jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 530px;
        display: flex;
        align-items: center;
    }
    #workflow-1 .col-md-12 {
        width: 50%;
    }
    #workflow-2 p,
    #workflow-2 h2,
    #workflow-1 p,
    #workflow-1 h2,
    #workflow-1 h3{
        font-weight: 200;
        color: #505050;
    }
    #workflow-2{
        padding: 100px 0;
        background: #ffffff;
    }
    #workflow-3 .box{
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: #ffffff;
        width: 150px;
        height: 30px;
        padding: 20px;
    }
    #workflow-3{
        padding: 100px 0;
    }
    #workflow-3 .text h2{
        font-weight: 200;
        color: #505050;
    }
    #workflow-3 .text p{
        font-weight: 200;
        color: #505050;
    }
    #workflow-3 .box img{
        width: 15%;
    }
    #workflow-3 .box p{
        font-weight: 200;
        color: #505050;
        margin: 0px 5px;
    }
    #workflow-3 .workflow-flex{
       margin: 12% 0;
    }
    #workflow-4 .text {
        text-align: center;

    }
    #workflow-4 .text h2{
        font-weight: 200;
        color: #505050;
    }
    #workflow-4{
        padding: 100px 0;
    }
    #workflow-4 .text{
        text-align: center;
    }
    #workflow-4 .text h2{
        font-weight: 200;
        color: #505050;
    }
    #workflow-4 .text p{
        font-weight: 200;
        color: #505050;
    }
    #workflow-4 .box{
        width: 350px;
        height: 200px;
        margin: 20px auto;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }
    #workflow-4 .box h2{
        font-size: 14px;
        color: #505050;
    }
    #workflow-4 .box p{
        font-size: 10px;
        color: #505050;
        font-weight: 400;
        padding: 0 10%;
    }
    #workflow-4 .box .img-responsive{
        width: 60px;
        height: 60px;
        margin: auto;
    }
    #workflow-4 .box .img-responsive1{
        width: 100%;
        height: auto;
        display: block;
        margin: 10px 0;
    }
    #workflow-4 .center{
        display: contents;
    }
    #workflow-5{
        padding: 100px  0;
        background: #999999;
    }
    #workflow-5 p,
    #workflow-5 h3,
    #workflow-5 h2,
    #workflow-5 .text h2{
        color: #ffffff;
        font-weight: 400;
    }
    #workflow-5 .box{

        display: flex;
        height: 150px;
    }
    #workflow-5 .box h3{
        font-size: 20px;
        font-weight: 600;
        margin-right: 15px;
    }
    #workflow-5 .box h2{
        font-size: 16px
    }
    #workflow-5 .box p{
        font-size: 12px;
    }
    @media (max-width:1199.98px){

    }
    @media (max-width:600.98px){


    }
    @media (max-width:500.98px){

    }
</style>
@endsection


{{-- Body HTML --}}
@section('content')

    <section id="workflow-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                     <h3>
                        Workflows
                     </h3>
                     <h2>
                        Automate and Streamline IT Tasks
                     </h2>
                     <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                     <p>
                        Automate and schedule IT tasks and set compliance alerts on managed devices, without complex coding & scripting. Create a set of tasks or actions referred to as ‘Flows’ and select a time and frequency for its execution.
                     </p>
                </div>
            </div>
        </div>
    </section>

    <section id="workflow-2">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="col-xs-12 col-md-6">
                        <div class="text">
                            <h2>
                                Why Scalefusion Workflows?
                             </h2>
                             <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                             <p>
                                One of the biggest challenges for IT teams is to individually perform periodic tasks on the devices that are managed via a Mobile Device Management Solution. Administrators also have to conduct intermittent compliance checks on managed devices for security incidents and device performance. In traditional MDMs, automating these jobs and compliance audits requires coding or scripting which adds to the IT endeavors.
                             </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <img src="/image/mainpage/scalefusion/workflow/image 144.png" class="img-responsive" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="workflow-3">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="col-xs-12 col-md-6">
                        <img src="/image/mainpage/scalefusion/workflow/17713-NR85QM 2.png" class="img-responsive" alt="">
                    </div>
                    <div class="col-xs-12 col-md-6 workflow-flex">
                        <div>
                            <div class="text">
                                <h2>
                                    Simplify IT Tasks and Free up IT Time
                                 </h2>
                                 <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                                 <p>
                                    Create Workflows to automate and schedule tasks as well as to set alerts. Schedule workflows for devices/device groups, irrespective of the profile configuration.
                                 </p>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="box">
                                    <img src="/image/mainpage/scalefusion/workflow/icon/Vector.png" class="img-responsive" alt="">
                                    <p>
                                        Windows 10
                                    </p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="box">
                                    <img src="/image/mainpage/scalefusion/workflow/icon/Vector-1.png" class="img-responsive" alt="">
                                    <p>
                                        iOS
                                    </p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="box">
                                    <img src="/image/mainpage/scalefusion/workflow/icon/Vector-2.png" class="img-responsive" alt="">
                                    <p>
                                        android
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="workflow-4">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="text">
                        <h2>
                            Leverage Diverse Workflows Types for
                            Dynamic Requirements
                        </h2>
                        <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                    </div>
                </div>
                <div class=" col-12 col-sm-6 col-md-4">
                    <div class="box">
                        <div>
                            <img src="/image/mainpage/scalefusion/report/icon/big-data.png"class="img-responsive" alt="">
                            <h2>
                                Switch Profile
                            </h2>
                            <p>
                                Set up dynamic policy application on managed devices. Schedule profile change for devices at a particular time on select days.
                            </p>
                        </div>
                    </div>
                </div>
                <div class=" col-12 col-sm-6 col-md-4">
                    <div class="box">
                        <div>
                            <img src="/image/mainpage/scalefusion/report/icon/inventory.png"class="img-responsive" alt="">
                            <h2>
                                Lock/Unlock Devices
                            </h2>
                            <p>
                                Automatically lock the devices at a set time for a set duration. Lock the devices into a single app mode during the lock period.
                            </p>
                        </div>
                    </div>
                </div>
                <div class=" col-12 col-sm-6 col-md-4">
                    <div class="box">
                        <div>
                            <img src="/image/mainpage/scalefusion/report/icon/history.png"class="img-responsive" alt="">
                            <h2>
                                Clear Browser Cache
                            </h2>
                            <p>
                                Schedule to clear browser cache at a particular time and day. Available for select browsers.
                            </p>
                        </div>
                    </div>
                </div>
                <div class=" col-12 col-sm-6 col-md-4">
                    <div class="box">
                        <div>
                            <img src="/image/mainpage/scalefusion/report/icon/mobile.png"class="img-responsive" alt="">
                            <h2>
                                Schedule to clear browser cache at a particular time and day. Available for select browsers.
                            </h2>
                            <p>
                                For Windows 10 devices, schedule a time to set devices in a group in SAM mode.
                            </p>
                        </div>
                    </div>
                </div>
                <div class=" col-12 col-sm-6 col-md-4">
                    <div class="box">
                        <div>
                            <img src="/image/mainpage/scalefusion/report/icon/destination.png"class="img-responsive" alt="">
                            <h2>
                                Geofence-based Switch
                                Profile
                            </h2>
                            <p>Schedule a profile change based on geolocation. Apply dynamic policies when a device moves in or out of a geofence. Track Wi-Fi and mobile data usage. Keep a check on app-wise data usage.
                            </p>
                        </div>
                    </div>
                </div>
                <div class=" col-12 col-sm-6 col-md-4">
                    <div class="box">
                        <div>
                            <img src="/image/mainpage/scalefusion/report/icon/verified-account.png"class="img-responsive" alt="">
                            <h2>
                                Device Reboot
                            </h2>
                            <p>
                                Remotely reboot devices. Schedule a remote reboot for all the devices in a group at a particular time on select days.
                            </p>
                        </div>
                    </div>
                </div>
                <div class=" col-12 col-sm-6 col-md-4">
                    <div class="box">
                        <div>
                            <img src="/image/mainpage/scalefusion/report/icon/dual.png"class="img-responsive" alt="">
                            <h2>
                                Switch Presentation
                            </h2>
                            <p>
                                On digital signage devices running in presentation mode, automate switching between two presentations.
                            </p>
                        </div>
                    </div>
                </div>
                <div class=" col-12 col-sm-6 col-md-4">
                    <div class="box">
                        <div>
                            <img src="/image/mainpage/scalefusion/report/icon/download.png"class="img-responsive" alt="">
                            <h2>
                                Publish Apps
                            </h2>
                            <p>
                                Automate app publishing at scheduled intervals. Select, schedule and push apps on devices and device profiles.
                            </p>
                        </div>
                    </div>
                </div>
                <div class=" col-12 col-sm-6 col-md-4">
                    <div class="box">
                        <div>
                            <img src="/image/mainpage/scalefusion/report/icon/update.png"class="img-responsive" alt="">
                            <h2>
                                Clear App Data
                            </h2>
                            <p>
                                Periodically clear app data remotely. Automate app data clearance on scheduled intervals.
                            </p>
                        </div>
                    </div>
                </div>
                <div class=" col-12 col-sm-6 col-md-4 center">
                    <div class="box">
                        <div>
                            <img src="/image/mainpage/scalefusion/report/icon/stats.png"class="img-responsive" alt="">
                            <h2>
                                Broadcast Message
                            </h2>
                            <p>
                                Create broadcast messages to be sent across groups. Set a schedule to send the messages.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="workflow-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text">
                        <h2>
                            Compliance Alerts & Security Checks
                         </h2>
                         <img src="/image/mainpage/scalefusion/icon/Line 23.svg" alt="">
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="box">
                            <h3>
                                01
                            </h3>
                        <div>
                            <h2>
                                Battery Usage
                            </h2>
                            <p>
                                Monitor the battery level of managed devices and send alerts on devices whenever the battery is lower than specified.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="box">
                        <h3>
                            02
                        </h3>
                        <div>
                            <h2>
                                Security Incidents
                            </h2>
                            <p>
                                Be aware of the security incidents. Schedule automated emails on any security incidence.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="box">
                        <h3>
                            03
                        </h3>
                        <div>
                            <h2>
                                Data Usage
                            </h2>
                            <p>
                                Set monthly data usage limits for devices. Send alerts on the devices when the data usage limit is crossed.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="box">
                        <div class="col-12">
                            <h3>
                                04
                            </h3>
                        </div>
                        <div>
                            <h2>
                                Inactivity Compliance
                            </h2>
                            <p>
                                Set an allowed time for inactivity. Trigger an email for inactivity for all devices in the inventory.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="box">
                        <div class="col-12">
                            <h3>
                                05
                            </h3>
                        </div>
                        <div>
                            <h2>
                                Geo-fence
                            </h2>
                            <p>
                                Set geo-fence for devices for a specific time range. Receive alerts whenever a device moves-in or moves-out of the geo-fence.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="box">
                        <div class="col-12">
                            <h3>
                                06
                            </h3>
                        </div>
                        <div>
                            <h2>
                                Storage Compliance
                            </h2>
                            <p>
                                Set a storage threshold. Automate an alert when the device storage limit is about to be exceeded.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')

@endsection
