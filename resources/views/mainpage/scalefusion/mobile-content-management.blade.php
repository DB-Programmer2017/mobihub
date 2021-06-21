@extends('layout/home-2')


{{-- Title Website --}}
@section('title', 'MOBIHUB | Mobile Content Management')

{{-- Link CSS --}}
@section('link')
<style>
#mobile-content-1{
    background-image: url('/image/mainpage/scalefusion/banner_feature.jpg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 485px;
    display: flex;
    align-items: center;
}
#mobile-content-1 h2 {
    width: 50%;
    color: #e36864;
    font-size: 45px;
    font-weight: 500;
    line-height: 54px;
    margin-bottom: 46px;
    font-family: 'Prompt', sans-serif;
}
#mobile-content-1 p {
    width: 50%;
    font-weight: 300;
    font-size: 16px;
    line-height: 30px;
    font-family: 'Prompt', sans-serif;
    color: #FFFFFF;
}
#mobile-content-1 h4{
    color: #FFFFFF;
    font-weight: normal;
    font-size: 30px;
    line-height: 52px;
}
#mobile-content-2{
    margin: 80px 0;
}
#mobile-content-3{
    margin: 0px 0 80px 0;
}
#mobile-content-2 .text {
    width: 70%;
    padding: 25% 0;
    line-height: 2;
}
#mobile-content-2 .text h2 {
    font-size: 30px;
    font-weight: 600;
    line-height: 1.5;
}
#mobile-content-3 .service-box{
    background: #F4F4F4;
    width: 100%;
    height: 150px;
    padding: 40px;
}
#mobile-content-3 .service-box h4{
    font-size: 16px;
    color:#D45745;
    font-weight: 600;
}
#mobile-content-3 .service-box p{
    font-size: 12px;
}
#mobile-content-red{
    background-color: #F4F4F4;
}
#mobile-content-red .text{
    text-align: center;
    line-height: 3;
    margin: 50px 0 30px 0;
}
#mobile-content-red .text h2{
    font-size: 24px;
    font-weight: 600;
    letter-spacing: 1px;
}
#mobile-content-red .service-box{
    background-color: #50505045;
    width: 100%;
    height: 225px;
    padding: 40px;
    text-align: center;
    margin-bottom: 100px;
}
#mobile-content-red .img-responsive {
    width: 15%;
    height: auto;
    margin: auto
}
#mobile-content-red h4{
    color: #fff;
    font-size: 16px;
    font-weight: 600;
}
#mobile-content-red .service-box p{
    color: #fff;
    font-size: 12px;
}
#mobile-content-red .text p{
    font-size: 12px;
}
#mobile-content-4 .text{
    padding: 20% 7%;
}
#mobile-content-4 .pic{
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 100px;
}
#mobile-content-5 {
    background: #F4F4F4;

}
#mobile-content-5 .pic img{
    padding: 100px;
}
#mobile-content-5 .text{
    padding: 15% 4%;
}



@media  (min-width: 992px)  and (max-width: 1199.98px){
    #mobile-content-1 h2 {
    width: 55%;
    font-size: 41px;
    }
}
@media  (min-width: 320px)  and (max-width: 991.98px){
    #mobile-content-1 h2 {
    width: 65%;
    font-size: 35px;
    }
    .img-responsive,
    .thumbnail>img,
    .thumbnail a>img,
    .carousel-inner>.item>img,
    .carousel-inner>.item>a>img{
        margin: auto;
    }
    #mobile-content-2 .text {
        width: 100%;
        text-align: center;
        padding: 0% 0;
        line-height: 2;
    }
    #mobile-content-red .service-box {
        background-color: #50505045;
        width: 490px;
        height: 216px;
        padding: 20px;
        text-align: center;
        margin-bottom: 100px;
        margin: 50px auto 50px auto;
    }
}
@media (max-width: 612px){
    #mobile-content-1 {
        padding-top: 90px;
    }
    #mobile-content-red .service-box {
    height: 265px;
    }
    #mobile-content-5 .pic img{
        padding: 100px 50px 0px 50px;
    }
    #mobile-content-4 .pic {
        padding: 0px 50px 100px 50px;
    }
    #mobile-content-1 h2 {
        width: 100%;
        font-size: 25px;
        line-height: 32px;
        margin-bottom: 10px;
    }
    #mobile-content-1 p {
        width: 100%;
        font-size: 12px;
        line-height: 20px;
    }
    #mobile-content-red .service-box {
        background-color: #50505045;
        width: 100%;
        height: 216px;
        padding: 20px;
        text-align: center;
        margin-bottom: 0px;
    }
}
</style>
@endsection


{{-- Body HTML --}}
@section('content')

<section id="mobile-content-1">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <h4>Content Management</h4>
                <h2>Publish and Share Content in a
                    Secure Environment </h2>
            </div>

            <div class="col-xs-12 col-md-12">
                <p>
                    Empower your remote workforce and frontline employees
                    with streamlined access to business documents.
                    Push content files, videos and presentations and
                    enforce security policies to keep it safe.
                </p>
            </div>
        </div>
    </div>
</section>

<section id="mobile-content-2">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <div class="col-xs-12 col-md-6">
                    <img src="/image/mainpage/scalefusion/17713-NR85QM 1.png" class="img-responsive">
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="text">
                        <h2>How Scalefusion Content Management Works? </h2>
                        <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                        <p>Manage content and its distribution in three simple steps from the dashboard. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="mobile-content-3">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <div class="col-xs-12 col-md-4">
                    <div class="service-box">
                        <h4>Upload</h4>
                        <p>
                            Easily upload and organize various
                            content formats in different folders.
                        </p>
                    </div>
                </div>

                <div class="col-xs-12 col-md-4">
                    <div class="service-box">
                        <h4>Deploy</h4>
                        <p>
                            Seamlessly publish files as well as folders to the devices or the group of devices.
                        </p>
                    </div>
                </div>

                <div class="col-xs-12 col-md-4">
                    <div class="service-box">
                        <h4>Manage</h4>
                        <p>
                            Add, copy, delete, publish and unpublish files & folders from the devices.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="mobile-content-red">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12 text">
                <h2>Content Management Made Easy</h2>
                <img src="/image/mainpage/scalefusion/icon/Line 23.svg" alt="">
                <p>
                    Move past the conventional content sharing platforms. Leverage enhanced security for content collaboration on managed Android, iOS and Windows 10 devices.
                </p>
            </div>
            <div class="col-xs-12 col-md-12">
                <div class="col-xs-12 col-md-4">
                    <div class="service-box">
                        <img class="img-responsive" src="/image/mainpage/scalefusion/icon/image 8.png" alt="">
                        <h4>Support Multiple File Format</h4>
                        <p>
                            Share various file formats. Push doc, docx, ppt, pptx, xls, xlsx, pdf, avi, mkv, 3gp, mp4, mp3, wav, 3ga, m4a, aac, ogg, amr & gif files.
                        </p>
                    </div>
                </div>

                <div class="col-xs-12 col-md-4">
                    <div class="service-box">
                        <img class="img-responsive" src="/image/mainpage/scalefusion/icon/image 9.png" alt="">
                        <h4>Remote Content Copy and Deletion</h4>
                        <p>
                            Copy multiple files to different folders and then publish the folder(s) on a device or group of devices. Files and folders are automatically deleted from the devices if they are deleted from the dashboard.
                        </p>
                    </div>
                </div>

                <div class="col-xs-12 col-md-4">

                    <div class="service-box">
                        <img class="img-responsive" src="/image/mainpage/scalefusion/icon/image 10.png" alt="">
                        <h4>Display Presentations</h4>
                        <p>
                            Create and play interactive presentations on devices. Set device screensavers as presentations when not in use.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="mobile-content-4">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6 text">
                <h2>Turn Your Devices Into Digital Signage Kiosks </h2>
                <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                <p>Configure your devices in single app presentation mode.
                        Display product videos and presentations on loop. </p>
            </div>
            <div class="col-xs-12 col-md-6">
                <div class="pic">
                    <img src="/image/mainpage/scalefusion/digital-signage-header.png" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="mobile-content-5">
    <div class="container">
        <div class="col-xs-12 col-md-6 pic">
            <center><img src="/image/mainpage/scalefusion/security.png" class="img-responsive"></center>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-6 text">
                <h2>Secure Content Sharing for Enterprises </h2>
                <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                <p>Protect the corporate data and resources from misuse.
                    Prevent data sharing from managed devices. Enforce access
                    control and security settings on corporate data on BYO devices.
                </p>
            </div>
        </div>
    </div>
</section>

@endsection

{{-- js --}}
@section('script')

@endsection
