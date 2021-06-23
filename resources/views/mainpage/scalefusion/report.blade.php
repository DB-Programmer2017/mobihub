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
        background-image: url('/image/mainpage/scalefusion/deepdrive/deepdrive_bg.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 485px;
        display: flex;
        align-items: center;
    }
    @media (max-width:1024.98px){

    }
    @media (max-width:500.98px){

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
                        DeepDive
                     </h3>
                     <h2>
                        Get Quick and Deep Insights Into
                        Your Device Inventory
                     </h2>
                     <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                     <p>
                        Stay updated and informed with the help of DeepDive, and get a 360-degree overview of the entire device inventory. Leverage vital device-related intelligence and take quick and effective actions for enhanced device management.
                     </p>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')

@endsection
