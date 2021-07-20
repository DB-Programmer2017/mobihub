@extends('layout/home-2')


{{-- Title Website --}}
@section('title', 'Mobihub | Intergrations')

{{-- Link CSS --}}
@section('link')

<style>
    h3,h4,h2,h1,p  {
        font-family: 'Prompt';
    }

    #android-manage-2 p,
    #android-manage-2 h2,
    #android-manage-1 p,
    #android-manage-1 h2,
    #android-manage-1 h3{
        font-weight: 200;
        color: #505050;
    }
    #android-manage-2 h2,
    #android-manage-1 h2{
        font-size: 1.7rem
    }
    #android-manage-1 .text{
        width: 50%;
    }
    #android-manage-1{
        background-image: url('/image/mainpage/scalefusion/mobile-manage/image 174.png');
        background-position: right;
        background-repeat: no-repeat;
        background-size: contain;
        display: flex;
        align-items: center;
        background-position-x: 85%;
        margin: 100px 0;
    }

    @media (max-width:1199.98px){

    }
    @media  (min-width: 320px) and (max-width: 991.98px){

    }
    @media (max-width:767.98px){

    }
    @media (max-width:600.98px){

    }
    @media (max-width:500.98px){

    }

</style>
@endsection


{{-- Body HTML --}}
@section('content')
    <section id="android-manage-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="text">
                        <h2>
                            Android MDM Software
                         </h2>
                         <h3>
                            Android Device Management Software made for IT Team
                         </h3>
                         <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                         <p>
                            Secure and manage your Android devices with Scalefusion. Configure restrictions, apps & enterprise settings and deploy to devices with ease.
                         </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="android-manage-2">

    </section>

@endsection

@section('script')

@endsection
