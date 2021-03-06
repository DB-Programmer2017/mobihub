@extends('layout/home-2')


{{-- Title Website --}}
@section('title', 'Mobihub | Report')

{{-- Link CSS --}}
@section('link')

<style>
    h3,h4,h2,h1,p  {
        font-family: 'Prompt';
    }
    #report-1{
        background-image: url('/image/mainpage/scalefusion/report/shutterstock_1918308866-[Converted].jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 485px;
        display: flex;
        align-items: center;
    }
    #report-1 .col-md-12 {
        width: 50%;
    }
    #report-1 p,
    #report-1 h2,
    #report-1 h3{
        font-weight: 200;
        color: #505050;
    }
    #report-2{
        padding: 100px 0;
        background: #fff;
    }
    #report-2 .text{
        text-align: center;
        font-weight: 200;
        color: #505050;
    }
    #report-4 .text p,
    #report-4 .text h2,
    #report-3 .text p,
    #report-3 .text h2,
    #report-2 .text h2{
        font-weight: 200;
        color: #505050;
    }
    #report-2 .text p{
        padding: 2% 10%;
        font-size: 12px;
    }
    #report-2 ul{
        padding: 20% 5%;
        margin-left: 15%;
    }
    #report-2 ul li{
        line-height: 2.1;
        color: #505050;
        font-weight: 400;
    }
    #report-3 .text{
        padding-right: 10%
    }
    #report-4 .text{
        padding-left: 10%;
    }
    #report-3{
        padding: 100px 0;
    }
    #report-4{
        background: #fff;
        padding: 100px 0;
    }
    #report-5{
        padding: 100px 0;
    }
    #report-5 .text{
        text-align: center;
    }
    #report-5 .text h2{
        font-weight: 200;
        color: #505050;
    }
    #report-5 .text p{
        font-weight: 200;
        color: #505050;
    }
    #report-5 .box{
        background: #fff;
        width: 350px;
        height: 200px;
        margin: 20px auto;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }
    #report-5 .box h2{
        font-size: 14px;
        color: #505050;
    }
    #report-5 .box p{
        font-size: 10px;
        color: #505050;
        font-weight: 400;
        padding: 0 10%;
    }
    #report-5 .box .img-responsive{
        width: 60px;
        height: 60px;
        margin: auto;
    }
    #report-5 .box .img-responsive1{
        width: 100%;
        height: auto;
        display: block;
        margin: 10px 0;
    }
    @media (max-width:1199.98px){
        #report-2 ul{
        padding: 0% 5%;
        margin-left: 5%;
        }
        #report-3 .text,
        #report-4 .text {
            padding-left: 5%;
        }
        #report-5 .box{
            width: 300px;
            height: 180px;
        }
    }
    @media (max-width:600.98px){
        #report-5 .box{
            width: 270px;
            height: 180px;
        }

    }
    @media (max-width:500.98px){
        #report-1 .col-md-12{
            width: 70%;
        }
        #report-4 .text p,
        #report-3 .text p{
            font-size: 12px;

        }

        #report-1 p{
            font-size: 16px;
        }
        #report-5 .text h2,
        #report-2 .text h2,
        #report-3 .text h2,
        #report-4 .text h2,
        #report-1 h2{
            font-size: 23px;
        }
        #report-1 h3{
            font-size: 18px;
        }
        #report-5 .text h2,
        #report-2 .text h2{
            padding: 0 5%;
        }
    }
</style>
@endsection


{{-- Body HTML --}}
@section('content')

    <section id="report-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                     <h3>
                        Reports
                     </h3>
                     <h2>
                        Comprehensive Reporting for Easy Device Management
                     </h2>
                     <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                     <p>
                        Power your device management with analytics and reporting. Generate extensive reports on device performance and usage with Scalefusion.
                     </p>
                </div>
            </div>
        </div>
    </section>

    <section id="report-2">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="text">
                        <h2>
                            Quick Report Generation and Download
                        </h2>
                        <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                        <p>Managing a large device inventory without seeking the aid of trends and analytics is old-school. It adds a burden on your IT teams to monitor and map individual device performance, creates room for error and can negatively impact your business operations and employee productivity. Navigate a large device inventory with the help of reports available at a click. Pull reports for device details, outline device performance and usage and predict device downtimes before they happen.</p>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <img src="/image/mainpage/scalefusion/report/Group 373.png" class="img-responsive" alt="">
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <ul>
                            <li>Request reports for a specific date range
                            </li>
                            <li>
                                Select the details that you need
                            </li>
                            <li>
                                Make use of search tabs for quick report generation
                            </li>
                            <li>
                                View the report on the dashboard
                            </li>
                            <li>
                                Download as CSV for future reference
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="report-3">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="col-xs-12 col-md-4 col-md-push-8">
                        <img src="/image/mainpage/scalefusion/report/image 142.png" class="img-responsive" alt="">
                    </div>
                    <div class="col-xs-12 col-md-8 col-md-pull-4">
                        <div class="text">
                            <h2>
                                Get Hold of Your Audit Logs
                            </h2>
                            <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                            <p>Device inventory management is not a one-person job. With several admins and co-admins managing the enterprise mobility on the Scalefusion dashboard, overlaps are common. Be on the top of device management activities performed on the Scalefusion dashboard. Generate exhaustive reports for account activity (audit logs), sort reports for each activity and user and get the exact date and time at which the activity was performed.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="report-4">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="col-xs-12 col-md-4">
                        <img src="/image/mainpage/scalefusion/report/image 143.png" class="img-responsive" alt="">
                    </div>
                    <div class="col-xs-12 col-md-8">
                        <div class="text">
                            <h2>
                                Automate Reports With Scalefusion Workflows
                            </h2>
                            <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                            <p>Streamline report tracking and analytics and speed up your IT operations. Ramp up IT productivity by replacing manual report generation with automated reports using Scalefusion Workflows. Schedule report type & time and obtain regular reports delivered straight to your inbox.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="report-5">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="text">
                        <h2>
                            A Broad Range of Reports, Available at a Blink
                        </h2>
                        <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                    </div>
                </div>
                <div class=" col-12 col-sm-6 col-md-4">
                    <div class="box">
                        <div>
                            <img src="/image/mainpage/scalefusion/report/icon/big-data.png"class="img-responsive" alt="">
                            <h2>
                                Data Usage
                            </h2>
                            <p>
                                Track Wi-Fi and mobile data usage. Keep a check on app-wise data usage.
                            </p>
                        </div>
                    </div>
                </div>
                <div class=" col-12 col-sm-6 col-md-4">
                    <div class="box">
                        <div>
                            <img src="/image/mainpage/scalefusion/report/icon/inventory.png"class="img-responsive" alt="">
                            <h2>
                                Data Usage
                            </h2>
                            <p>
                                Track Wi-Fi and mobile data usage. Keep a check on app-wise data usage.
                            </p>
                        </div>
                    </div>
                </div>
                <div class=" col-12 col-sm-6 col-md-4">
                    <div class="box">
                        <div>
                            <img src="/image/mainpage/scalefusion/report/icon/history.png"class="img-responsive" alt="">
                            <h2>
                                Data Usage
                            </h2>
                            <p>
                                Track Wi-Fi and mobile data usage. Keep a check on app-wise data usage.
                            </p>
                        </div>
                    </div>
                </div>
                <div class=" col-12 col-sm-6 col-md-4">
                    <div class="box">
                        <div>
                            <img src="/image/mainpage/scalefusion/report/icon/mobile.png"class="img-responsive" alt="">
                            <h2>
                                Data Usage
                            </h2>
                            <p>
                                Track Wi-Fi and mobile data usage. Keep a check on app-wise data usage.
                            </p>
                        </div>
                    </div>
                </div>
                <div class=" col-12 col-sm-6 col-md-4">
                    <div class="box">
                        <div>
                            <img src="/image/mainpage/scalefusion/report/icon/destination.png"class="img-responsive" alt="">
                            <h2>
                                Data Usage
                            </h2>
                            <p>
                                Track Wi-Fi and mobile data usage. Keep a check on app-wise data usage.
                            </p>
                        </div>
                    </div>
                </div>
                <div class=" col-12 col-sm-6 col-md-4">
                    <div class="box">
                        <div>
                            <img src="/image/mainpage/scalefusion/report/icon/verified-account.png"class="img-responsive" alt="">
                            <h2>
                                Data Usage
                            </h2>
                            <p>
                                Track Wi-Fi and mobile data usage. Keep a check on app-wise data usage.
                            </p>
                        </div>
                    </div>
                </div>
                <div class=" col-12 col-sm-6 col-md-4">
                    <div class="box">
                        <div>
                            <img src="/image/mainpage/scalefusion/report/icon/dual.png"class="img-responsive" alt="">
                            <h2>
                                Data Usage
                            </h2>
                            <p>
                                Track Wi-Fi and mobile data usage. Keep a check on app-wise data usage.
                            </p>
                        </div>
                    </div>
                </div>
                <div class=" col-12 col-sm-6 col-md-4">
                    <div class="box">
                        <div>
                            <img src="/image/mainpage/scalefusion/report/icon/download.png"class="img-responsive" alt="">
                            <h2>
                                Data Usage
                            </h2>
                            <p>
                                Track Wi-Fi and mobile data usage. Keep a check on app-wise data usage.
                            </p>
                        </div>
                    </div>
                </div>
                <div class=" col-12 col-sm-6 col-md-4">
                    <div class="box">
                        <div>
                            <img src="/image/mainpage/scalefusion/report/icon/update.png"class="img-responsive" alt="">
                            <h2>
                                Data Usage
                            </h2>
                            <p>
                                Track Wi-Fi and mobile data usage. Keep a check on app-wise data usage.
                            </p>
                        </div>
                    </div>
                </div>
                <div class=" col-12 col-sm-6 col-md-4">
                    <div class="box">
                        <div>
                            <img src="/image/mainpage/scalefusion/report/icon/stats.png"class="img-responsive" alt="">
                            <h2>
                                Data Usage
                            </h2>
                            <p>
                                Track Wi-Fi and mobile data usage. Keep a check on app-wise data usage.
                            </p>
                        </div>
                    </div>
                </div>
                <div class=" col-12 col-sm-6 col-md-4">
                    <div class="box">
                        <div>
                            <img src="/image/mainpage/scalefusion/report/icon/broken-shield 1.png"class="img-responsive" alt="">
                            <h2>
                                Data Usage
                            </h2>
                            <p>
                                Track Wi-Fi and mobile data usage. Keep a check on app-wise data usage.
                            </p>
                        </div>
                    </div>
                </div>
                <div class=" col-12 col-sm-62 col-md-4">
                    <div class="box">
                        <div>
                            <img src="/image/mainpage/scalefusion/report/icon/question-list.png"class="img-responsive" alt="">
                            <h2>
                                Data Usage
                            </h2>
                            <p>
                                Track Wi-Fi and mobile data usage. Keep a check on app-wise data usage.
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
