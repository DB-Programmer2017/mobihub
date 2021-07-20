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
    #intergration-2{
        margin: 100px 0;
    }
    #intergration-2 .box-1{
        background-image: url('/image/mainpage/scalefusion/intergration/apple.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: contain;
        display: flex;
        height: 260px;
        align-items: center;
    }
    #intergration-2 .box-2{
        background-image: url('/image/mainpage/scalefusion/intergration/android.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: contain;
        display: flex;
        height: 260px;
        align-items: center;
    }
    #intergration-2 p,
    #intergration-2 h2,
    #intergration-1 p,
    #intergration-1 h2,
    #intergration-1 h3{
        font-weight: 200;
        color: #505050;
    }
    #intergration-2 h2,
    #intergration-1 h2{
        font-size: 2rem
    }
    #intergration-2 .text{
        text-align: center;
    }
    #intergration-2 .box-1 .text,
    #intergration-2 .box-2 .text {
        text-align: start;
        padding: 0 0 0 34%;
    }
    #intergration-2 .box .pic-bg{
        width: 100%
    }
    #intergration-2 .box .text{
        text-align: start;
    }
    #intergration-3{
        background-image: url('/image/mainpage/scalefusion/intergration/shutterstock_1663934017-[Converted].jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        display: flex;
        align-items: center;
        padding:100px 0;
    }
    #intergration-3 .text h2{
        font-weight: 200;
        color: #505050;
        font-size: 24px;
    }
    #intergration-3 .text p{
        color: #2D394B;
    }
    #intergration-3 .col-md-3{
        margin-top: 50px;
    }
    #intergration-3 .box{
        background: #fff;
        border-radius: 5px;
        padding: 10px;
        width: 100%;
        height: 158px;
    }
    #intergration-3 .box h2{
        color: #EB6864;
        font-size: 18px;
    }
    #intergration-3 .box p{
        font-size: 11px;
        color: #505050;
        font-weight: 200;
    }
    #intergration-4 {
        background: #999999;
        padding: 100px 0;
    }
    #intergration-4 .text{
        text-align: center;
        padding: 40px 0 0 0;
    }
    #intergration-4 .text h2{
        font-size: 52px;
    }
    #intergration-4 .text h3{
        font-size: 23px;
        font-weight: 200;
    }
    #intergration-4 .text h2,
    #intergration-4 .text h3{
        color: #fff;
    }
    #intergration-4 .box{
        background: rgba(255, 255, 255, 0.3);
        border-radius: 5px;
        width: auto;
        height: 220px;
        text-align: center;
        padding: 20px
    }
    #intergration-4 .box h2,
    #intergration-4 .box p{
        color: #ffffff;
    }
    #intergration-4 .box p{
        font-size: 11px;
    }
    #intergration-4 .box h2{
        font-size: 18px;
    }
    #intergration-5{
        margin: 100px 0;
    }

    #intergration-5 .text{

    }
    #intergration-5 .text p{
        width: 60%
    }
    #intergration-5 .swiper-container-horizontal>.swiper-pagination-progressbar, .swiper-container-vertical>.swiper-pagination-progressbar.swiper-pagination-progressbar-opposite{
        top: 97%;
    }
    #intergration-5 .swiper-slide{
        border-right:1px dashed #D45745;
    }
    #intergration-5 .text h2 {
        font-weight: 200;
        color: #505050;
        font-size: 24px;
    }
    #intergration-5 .text p {
        color: #2D394B;
    }
    #intergration-5 .swiper-container{
        margin-top: 50px;
    }
    #intergration-6{
        background: #fff;
        padding: 100px 0;
    }
    #intergration-6 .row{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    #intergration-6 .text h2 {
        font-weight: 200;
        color: #505050;
        font-size: 24px;
    }
    #intergration-6 .text p {
        color: #2D394B;
    }
    @media (max-width:1199.98px){

    }
    @media  (min-width: 320px)  and (max-width: 991.98px){
            #intergration-2 .box-1{
            background-image: url('/image/mainpage/scalefusion/intergration/apple.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            height: 260px;
            align-items: center;
            margin: 30px 0;
        }

            #intergration-2 .box-2 {
            background-image: url(/image/mainpage/scalefusion/intergration/android.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            height: 260px;
            align-items: center;
            margin: 30px 0;
        }
        #intergration-3 .box {
            background: #fff;
            border-radius: 5px;
            padding: 10px;
            width: 100%;
            height: 218px;
            box-shadow: 1px 1px 5px #4d4d4d12;
        }
        #intergration-4 .box {
            padding: 25px;
            margin: 30px 0;
            height: 200px;
        }
        #intergration-4 .img-responsive {
            max-width: 55%;
            height: auto;
            margin: auto;
        }

    }
    @media (max-width:767.98px){
        #intergration-3 .box {
            background: #fff;
            border-radius: 5px;
            padding: 10px;
            width: 55%;
            height: 175px;
            margin: auto;
            box-shadow: 1px 1px 5px #4d4d4d12;
        }
    }
    @media (max-width:600.98px){
            #intergration-6 .row{
            display: block;
            justify-content: center;
            align-items: center;
        }
            #intergration-1 {
            background-image: url(/image/mainpage/scalefusion/intergration/shutterstock_1610993995-[Converted].jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 550px;
            display: flex;
            align-items: flex-start;
        }
        #intergration-1 .col-md-12 {
            width: 70%;
        }
    }
    @media (max-width:500.98px){
        #intergration-2 .box-1 h2{
            font-size: 1.2rem;
        }
        #intergration-2 .box-2 h2{
            font-size: 1.2rem;
        }

        #intergration-2 .box-1 p{
            font-size: 1rem;
        }
        #intergration-2 .box-2 p{
            font-size: 1rem;
        }
        #intergration-2 .box-1{
            background-image: url('/image/mainpage/scalefusion/intergration/apple.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: contain;
            display: flex;
            height: auto;
            align-items: center;
            margin: 10px 0;
        }
            #intergration-2 .box-2 {
            background-image: url(/image/mainpage/scalefusion/intergration/android.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: contain;
            display: flex;
            height: auto;
            align-items: center;
            margin: 10px 0;
        }
        /* #intergration-2 .box-1 .text, #intergration-2 .box-2 .text {

        } */
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
    <section id="intergration-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="text">
                        <h2>
                            Single Sign-on
                        </h2>
                        <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                        <p>
                            Significantly cut down on support costs, curb device downtime & upkeep performance of Android devices with versatile capabilities of Scalefusion. Track device performance, schedule compliance alerts, detect device issues, remotely mirror device screens & create, manage support tickets with chosen ITSM tool.
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="box">
                        <h2>
                            Okta
                        </h2>
                        <p>
                            Leverage SAML based single sign on to Scalefusion using Okta. Add an extra layer of security to your Scalefusion account with Okta.
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="box">
                        <h2>
                            Azure AD
                        </h2>
                        <p>
                            Migrate to Azure AD based account setup. Automate Windows device enrollment and unlock advanced security and management features by adding Azure AD based Workplace accounts.
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="box">
                        <h2>
                            Office 365 AD
                        </h2>
                        <p>
                            Sign in using Office 365 AD account credentials. Import users from Office 365 AD for BYOD management.
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="box">
                        <h2>
                            G Suite
                        </h2>
                        <p>
                            Migrate to GSuite based sign-in on Scalefusion dashboard. Invite admins and co-admins available in the GSuite directory.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="intergration-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-4">
                        <div class="text">
                            <h2>ITSM</h2>
                            <h3>
                                Made Easy
                            </h3>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="col-md-6 ">
                            <div class="box">
                                <img src="/image/mainpage/scalefusion/intergration/brand/image 149.png" class="img-responsive" alt="">
                                <h2>
                                    Jira
                                </h2>
                                <p>
                                    Integrate JIRA IT service management tool on Scalefusion. Create context-aware support tickets on JIRA as a part of Remote Support.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="box">
                                <img src="/image/mainpage/scalefusion/intergration/brand/image 150.png" class="img-responsive" alt="">
                                <h2>
                                    Freshservice
                                </h2>
                                <p>
                                    Integrate Freshservice ITSM on the Scalefusion dashboard. Seamlessly create support tickets for Remote Cast and Control sessions without navigating to Freshservice.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="intergration-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="text">
                        <h2>
                            OEM Partners
                        </h2>
                        <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                        <p>
                            Our partnership with leading technology vendors allows us to provide robust security and additional device management capabilities. Become our OEM Partner to integrate your hardware or software systems with Scalefusion and provide a more comprehensive solution to your customers.
                        </p>
                    </div>
                    <div class="swiper-container mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="/image/mainpage/scalefusion/intergration/brand/image 152.png" class="img-responsive" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="/image/mainpage/scalefusion/intergration/brand/image 153.png" class="img-responsive" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="/image/mainpage/scalefusion/intergration/brand/image 154.png" class="img-responsive" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="/image/mainpage/scalefusion/intergration/brand/image 155.png" class="img-responsive" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="/image/mainpage/scalefusion/intergration/brand/image 156.png" class="img-responsive" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="/image/mainpage/scalefusion/intergration/brand/image 157.png" class="img-responsive" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="/image/mainpage/scalefusion/intergration/brand/image 158.png" class="img-responsive" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="/image/mainpage/scalefusion/intergration/brand/image 159.png" class="img-responsive" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="/image/mainpage/scalefusion/intergration/brand/image 160.png" class="img-responsive" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="/image/mainpage/scalefusion/intergration/brand/image 161.png" class="img-responsive" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="/image/mainpage/scalefusion/intergration/brand/image 162.png" class="img-responsive" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="/image/mainpage/scalefusion/intergration/brand/image 163.png" class="img-responsive" alt="">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="intergration-6">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-5">
                    <img src="/image/mainpage/scalefusion/intergration/image 173.png" class="img-responsive" alt="">
                </div>
                <div class="col-xs-12 col-md-7">
                    <div class="text">
                        <h2>
                            Connect Scalefusion With Your Internal Apps
                        </h2>
                        <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                        <p>
                            Use our API to integrate Scalefusion with the tools you love and create customized, tailored processes that work exactly the way you need them to. Scalefusion API is organized around REST, returns JSON-encoded responses, and uses standard HTTP response codes & authentication.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        pagination: {
            el: ".swiper-pagination",
            type: "progressbar",
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        autoHeight: true,
        loop: true,
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 0,
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 0,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 0,
            },
        },
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
    });
  </script>
@endsection
