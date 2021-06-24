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
        background-image: url('/image/mainpage/scalefusion/workflow/shutterstock_1918308866-[Converted].jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 485px;
        display: flex;
        align-items: center;
    }
    #workflow-1 .col-md-12 {
        width: 50%;
    }
    #workflow-1 p,
    #workflow-1 h2,
    #workflow-1 h3{
        font-weight: 200;
        color: #505050;
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

    </section>

    <section id="workflow-3">

    </section>

    <section id="workflow-4">

    </section>

    <section id="workflow-5">
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
