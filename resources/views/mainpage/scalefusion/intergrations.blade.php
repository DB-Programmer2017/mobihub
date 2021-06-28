@extends('layout/home-2')


{{-- Title Website --}}
@section('title', 'Mobihub | Intergrations')

{{-- Link CSS --}}
@section('link')

<style>
    h3,h4,h2,h1,p  {
        font-family: 'Prompt';
    }
    #intergration-1{
        background-image: url('/image/mainpage/scalefusion/intergration/shutterstock_1610993995-[Converted].jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 550px;
        display: flex;
        align-items: center;
    }
    #intergration-1 .col-md-12 {
        width: 50%;
    }
    #intergration-2 p,
    #intergration-2 h2,
    #intergration-1 p,
    #intergration-1 h2,
    #intergration-1 h3{
        font-weight: 200;
        color: #505050;
    }
    #intergration-2 .text{
        text-align: center;
    }
    #intergration-2 .box-1 .text,
    #intergration-2 .box-2 .text {
    text-align: start;
    padding: 0 0 0 34%;
}
    /* #intergration-2 .box-1{
        background-image: url('/image/mainpage/scalefusion/intergration/Vector (1).png');
        background-repeat: no-repeat;
        background-size: contain;
        background-position: unset;
    }
    #intergration-2 .box-2{
        background-image: url('/image/mainpage/scalefusion/intergration/Vector-1 (1).png');
        background-repeat: no-repeat;
        background-size: contain;
        background-position: unset;
    } */
    #intergration-2 .box .pic-bg{
        width: 100%
    }
    #intergration-2 .box .text{
        text-align: start;
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
    <section id="intergration-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                     <h3>
                        Intergrations
                     </h3>
                     <h2>
                        Partnering With Great Companies and OEMs To Bring You the Best Device Management Experience
                     </h2>
                     <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                     <p>
                        Integrate the best-in-market solutions to compliment your enterprise mobility management. Onboard the diverse services to the Scalefusion dashboard and simplify inventory-wide device management.
                     </p>
                </div>
            </div>
        </div>
    </section>
    <section id="intergration-2">
        <div class="container">
           <div class="row">
                <div class="col-12">
                    <div class="text">
                        <h2>
                            Enterprise Device Management
                        </h2>
                        <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="box-1">
                            <div class="text">
                                <h2>
                                    Apple Business Manager
                                </h2>
                                <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                                <p>
                                    Provision Apple devices straight out of the box using Apple Business Manager. Configure policies and restrictions for DEP devices and push app licenses via VPP on the Scalefusion dashboard.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="box-2">
                            <div class="text">
                                <h2>
                                    Android Enterprise
                                </h2>
                                <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                                <p>
                                    Activate Android Enterprise setup on Scalefusion for managing Android devices. Access Android EMM features by setting up your Android Enterprise (AfW) account on the Scalefusion dashboard.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </section>

@endsection

@section('script')

@endsection
