@extends('layout/home-2')


{{-- Title Website --}}
@section('title', 'MOBIHUB | Team Communication')

{{-- Link CSS --}}
@section('link')
<style>
    #team-commu-1{
        background-image: url('/image/mainpage/scalefusion/banner_feature.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 485px;
        display: flex;
        align-items: center;
    }
     #device-user-enrollment-2-1{
        padding-top: 100px;
        padding-bottom: 100px;
        background: rgba(45, 57, 75, 0.05);
    }
    #device-user-enrollment-2-1 .vertical-tab{
        display: table;
    }
    #device-user-enrollment-2-1 .vertical-tab .nav-tabs{
        display: table-cell;
        width: 28%;
        min-width: 28%;
        vertical-align: top;
        border: none;
    }
    #device-user-enrollment-2-1 .vertical-tab .nav-tabs li{
       float: none;
       vertical-align: top;
    }
    #device-user-enrollment-2-1 .vertical-tab .nav-tabs li a{
        color: #000;
        font-size: 18px;
        font-weight: 500;
        letter-spacing: 1px;
        text-align: right;
        /* text-transform: uppercase; */
        padding: 25px 0;
        margin: 0;
        border-radius: 0;
        border: none;
        transition: all 0.5s ease 0s;
    }
    #device-user-enrollment-2-1 .vertical-tab .nav-tabs li a:hover,
    #device-user-enrollment-2-1 .vertical-tab .nav-tabs li.active a,
    #device-user-enrollment-2-1 .vertical-tab .nav-tabs li.active a:hover{
        color: #C5001A;
        background-color: transparent;
        font-weight: 600;
        letter-spacing: 2px;
        text-shadow: 0 0 5px #fff;
        border: none;
    }
    #device-user-enrollment-2-1 .vertical-tab .nav-tabs li a:before,
    #device-user-enrollment-2-1 .vertical-tab .nav-tabs li a:after{
        content: '';
        background-color: #C5001A;
        height: 12px;
        width: 12px;
        border-radius: 50%;
        transform: scale(0);
        position: absolute;
        left: 0;
        bottom: 0;
        transition: all 0.3s;
    }
    #device-user-enrollment-2-1 .vertical-tab .nav-tabs li a:after{
        height: 2px;
        width: 0;
        border-radius: 0;
        transform: scale(1);
        bottom: 4px;
        left: 2px;
        transition: all 0.3s ease 0.1s;
    }
    #device-user-enrollment-2-1 .vertical-tab .nav-tabs li a:hover:before,
    #device-user-enrollment-2-1 .vertical-tab .nav-tabs li.active a:before{
        transform: scale(1);
    }
    #device-user-enrollment-2-1 .vertical-tab .nav-tabs li a:hover:after,
    #device-user-enrollment-2-1 .vertical-tab .nav-tabs li.active a:after{
        width: 100%;
    }
    #device-user-enrollment-2-1 .vertical-tab .tab-content{
        letter-spacing: 1px;
        line-height: 23px;
        padding-left: 95px;
        vertical-align: middle;
        border-radius: 0;
        display: table-cell;
        position: relative;
        background-image: url('image/Rectangle 195.jpg');
        background-size: cover;
    }
    #device-user-enrollment-2-1 .vertical-tab .tab-content h3{
        color: #C5001A;
        line-height: 38px;
        font-weight: 600;
        margin: 0 0 5px 0;
        width: 60%;
    }
    #device-user-enrollment-2-1 .vertical-tab .tab-content p{
        margin-top: 20px;
        color: #2D394B;
    }
    #device-user-enrollment-2-1 .vertical-tab .tab-content img{
        position: absolute;
        margin-top: -20%;
    }
    @media only screen and (max-width: 479px){
        #device-user-enrollment-2-1 .vertical-tab .nav-tabs{
            width: 100%;
            display: block;
            border: none;
        }
        #device-user-enrollment-2-1 .vertical-tab .nav-tabs li a{
            padding: 12px 20px;
            margin: 0 0 8px;
        }
        #device-user-enrollment-2-1 .vertical-tab .tab-content{
            padding: 20px 15px 10px;
            display: block;
        }
        #device-user-enrollment-2-1 .vertical-tab .tab-content h3{ font-size: 18px; }
    }

@media  (min-width: 992px)  and (max-width: 1199.98px){

}
@media  (min-width: 320px)  and (max-width: 991.98px){

}
@media (max-width: 612px){

}
</style>
@endsection


{{-- Body HTML --}}
@section('content')
    <section id="team-commu-1">
       <div class="container">
           <div class="row">
               <div class="col-xs-12 col-md-12">
                    <h3>
                        Eva Communication App
                    </h3>
                    <h2>
                        Secure Communication App for
                        Remote Workers
                    </h2>
                    <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                    <p>
                        Connect your workforce, help them collaborate and let the conversations flow with Eva Team Communication App.
                    </p>
               </div>
           </div>
       </div>
    </section>
    <section id="device-user-enrollment-2-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <h2>
                        Keep Your Employees Engaged and Productive
                    </h2>
                    <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                    <p>
                        Bring your perimeter-less workforce together. Get work done
                        faster, minus the noise.
                    </p>
                </div>
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
@endsection

{{-- js --}}
@section('script')

@endsection
