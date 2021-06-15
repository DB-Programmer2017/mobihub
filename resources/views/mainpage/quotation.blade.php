@extends('layout/home-2')


{{-- Title Website --}}
@section('title', 'MOBIHUB | Quotation')

{{-- Link CSS --}}
@section('link')


@endsection


{{-- Body HTML --}}
@section('content')
{{-- <style>
.quotation
{
    background:  url("/image/mainpage/quotation/banner-quotation.jpg") no-repeat center;
    background-size: cover;
    z-index: -100;
    height: 500px;
}
.viewport-header {
    position: relative;
    height: 500px;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
}
.viewport-header h1{
    z-index: 2;
    color: white;
}
video {
    object-fit: cover;
    width: 100%;
    height: 574px;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
}

</style>


    <section class="quotation">

        <video src="/image/mainpage/quotation/No Copyright Video, Copyright Free,  Motion Graphics, Background, Animation, Green Screen, YouTube (1).mp4" autoplay loop playsinline muted></video>

        <header class="viewport-header">
        <h1>
            Explore
            <span>Montana</span>
        </h1>
        </header>
    </section>

    <section class="form">
        <h1>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur, deleniti ut doloribus culpa quia doloremque possimus voluptas architecto esse odio nobis commodi illo labore repellendus id iusto qui officia minus!</h1>
    </section> --}}

    <style>
        .quotation .bg{
            background:  url("/image/mainpage/quotation/shutterstock_1673876659-[Converted].jpg") no-repeat center;
            background-size: cover;
            width: 100%;

        }
        #footer {
            margin-top: 0px;
        }
        /* .quotation .contact-form{
            display: flex;
            justify-content: center;
            padding-top: 30px;
        }
        .quotation .box{
            background-color: #fdfaf6;
            width: 700px;
            height: auto;
            padding: 50px;
            box-shadow: 0 0 10px rgb(0 0 0 / 15%), 10px 10px rgb(0 0 0 / 5%);
        }

        .form-control {
            background-color: #fdfaf6;
        }
        @media  (min-width: 320px)  and (max-width: 766px) {
            .quotation .box{
                width: 400px;
            }
        }
        @media  (min-width: 767px)  and (max-width: 1199px) {
            .quotation .box{
                width: 500px;
            }
        }
        @media  (min-width: 1200px) {
            .quotation .box{
                width: 700px;
                height: auto;
                padding: 50px;
                box-shadow: 0 0 10px rgb(0 0 0 / 15%), 10px 10px rgb(0 0 0 / 5%);
        }

        } */
.form-bg{
    padding: 70px 0;
}
.quotation .form-container{
    background-color: #fff;
    font-family: 'Poppins', sans-serif;
    font-size: 0;
    box-shadow: 0 0 25px -15px rgba(0,0,0,0.3);
    display: flex;
    flex-wrap: wrap;
}
.quotation .form-container .left-content{
    background-color: #2E323B;
    font-family: 'Oswald', sans-serif;
    width: 40%;
    padding: 244px 50px;
    display: inline-block;
    vertical-align: top;
}
.quotation .form-container .left-content .title{
    color: #d31d4f;
    font-size: 20px;
    font-weight: 300;
    letter-spacing: 2px;
    text-transform: uppercase;
    margin: 0 0 55px;
}
.quotation .form-container .left-content .sub-title{
    color: #fff;
    font-size: 40px;
    font-weight: 300;
    text-transform: uppercase;
    margin: 0;
}
.quotation .form-container .right-content{
    text-align: center;
    width: 60%;
    padding: 30px 50px;
    display: inline-block;
}
.quotation .form-container .right-content .form-title{
    color: #888;
    font-family: 'Oswald', sans-serif;
    font-size: 40px;
    font-weight: 400;
    text-align: left;
    text-transform: uppercase;
    padding: 0 0 2px;
    margin: 0 0 30px;
    border-bottom: 2px solid #FF97A8;
}
.quotation .form-container .right-content .form-horizontal {
    color: #999;
    font-size: 14px;
    text-align: left;
    margin: 0 0 15px;
}
.quotation .form-container .form-horizontal .form-group{ margin: 0 0 20px; }
.quotation .form-container .form-horizontal .form-group:nth-of-type(2){ margin-bottom: 35px; }
.quotation .form-container .form-horizontal .form-group label{ font-weight: 500; }
.quotation .form-container .form-horizontal .form-control{
    color: #888;
    background: #f9f9f9;
    font-weight: 400;
    letter-spacing: 1px;
    height: 40px;
    padding: 6px 12px;
    border-radius: 5px;
    border: none;
    box-shadow: none;
}
.quotation .form-container .form-horizontal textarea{
    height: 80px !important;
}
.quotation .form-container .form-horizontal .form-control:focus{ box-shadow: 0 0 5px #FF97A8; }
.quotation .form-container .form-horizontal .signin{
    color: #fff;
    background: linear-gradient(to right, #d31d4f, #FF97A8);
    font-size: 15px;
    font-weight: 500;
    letter-spacing: 0.5px;
    text-transform: capitalize;
    width: 100%;
    padding: 9px 11px;
    margin: 0 0 20px;
    border-radius: 50px;
    transition: all 0.3s ease 0s;
}
.quotation .form-container .form-horizontal .btn:hover,
.quotation .form-container .form-horizontal .btn:focus{
    box-shadow: 0 0 10px #FF97A8;
    outline: none;
}
.quotation .form-container .form-horizontal .remember-me{
    width: calc(100% - 105px);
    display: inline-block;
}
.quotation .form-container .form-horizontal .remember-me .check-label{
    color: #999;
    font-size: 12px;
    font-weight: 400;
    vertical-align: top;
    display: inline-block;
}
.quotation .form-container .form-horizontal .remember-me .checkbox{
    height: 17px;
    width: 17px;
    min-height: auto;
    margin: 0 1px 0 0;
    border: 2px solid #FF97A8;
    border-radius: 5px;
    cursor: pointer;
    display: inline-block;
    position: relative;
    appearance: none;
    -moz-appearance: none;
    -webkit-appearance: none;
    transition: all 0.3s ease 0s;
}
.quotation .form-container .form-horizontal .remember-me .checkbox:before{
    content: '';
    height: 5px;
    width: 10px;
    border-bottom: 2px solid #fff;
    border-left: 2px solid #fff;
    transform: rotate(-45deg);
    position: absolute;
    left: 2px;
    top: 2.5px;
    transition: all 0.3s ease;
}
.quotation .form-container .form-horizontal .remember-me .checkbox:checked{ background-color: #FF97A8; }
.quotation .form-container .form-horizontal .remember-me .checkbox:checked:before{ opacity: 1; }
.quotation .form-container .form-horizontal .remember-me .checkbox:not(:checked):before{ opacity: 0; }
.quotation .form-container .form-horizontal .remember-me .checkbox:focus{ outline: none; }
.quotation .form-container .form-horizontal .forgot{
    color: #999;
    font-size: 12px;
    text-align: right;
    width: 100px;
    vertical-align: top;
    display: inline-block;
    transition: all 0.3s ease 0s;
}
.quotation .form-container .form-horizontal .forgot:hover{ text-decoration: underline; }
.quotation .form-container .right-content .separator{
    color: #999;
    font-size: 15px;
    text-align: center;
    margin: 0 0 15px;
    display: block;
}
.quotation .form-container .right-content .social-links{
    text-align: center;
    padding: 0;
    margin: 0 0 25px;
    list-style: none;
}
.quotation .form-container .right-content .social-links li{
    margin: 0 2px 5px;
    display: inline-block;
}
.quotation .form-container .right-content .social-links li a{
    color: #fff;
    background-color: #F16262;
    font-size: 12px;
    padding: 9px 12px;
    border-radius: 5px;
    display: block;
    transition: all 0.3s ease 0s;
}
.quotation .form-container .right-content .social-links li:nth-child(2) a{ background-color: #3B5897; }
.quotation .form-container .right-content .social-links li a i{ margin-right: 10px; }
.quotation .form-container .right-content .social-links li a:hover{ box-shadow: 0 0 5px rgba(0,0,0,0.5); }
.quotation .form-container .right-content .signup-link{
    color: #999;
    font-size: 13px;
}
.quotation .form-container .right-content .signup-link a{
    color: #F16262;
    transition: all 0.3s ease 0s;
}
.quotation .form-container .right-content .signup-link a:hover{ text-decoration: underline; }
@media only screen and (max-width:767px){
    .quotation .form-container .left-content,
    .quotation .form-container .right-content{
        width: 100%;
        padding: 30px;
    }
    .quotation .form-container .left-content .title{ margin: 0 0 20px; }
    .quotation .form-container .left-content .sub-title{ font-size: 30px; }
}
    </style>

    <section class="quotation">
        <div class="bg">
            {{-- <section class="service-2">
                <div class="container contact-form">
                    <div class="row">
                        <div class="col-xs-12 col-md-12 box">
                            <h1>Quotation</h1>

                            <label>NAME :</label>
                            <input type="text" class="form-control" placeholder="Please Enter Your Name">

                            <label>Position/Company* :</label>
                            <input type="text" class="form-control" placeholder="Please Enter Your Position/Company">

                            <label>EMAIL :</label>
                            <input type="text" class="form-control" placeholder="Please Enter Your Email">
                            <p>*Description about your interesting products on this message</p>
                            <label>MESSAGE :</label>
                            <textarea name="" id=""  rows="5" class="form-control"  placeholder="Please Enter Your Message"></textarea>

                            <button type="button" class="btn btn-danger">Send</button>
                        </div>
                    </div>
                </div>
            </section> --}}
            <div class="form-bg">

                @if(session()->has('success'))
                    <div class="alert alert-success d-flex justify-content-center">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="container">
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8">
                            <div class="form-container">
                                <div class="left-content">
                                    <h3 class="title">MOBIHUB</h3>
                                    <h4 class="sub-title">CONNECTED MOBILITY, SOLUTIONS ENABLED</h4>
                                </div>
                                <div class="right-content">
                                    <h3 class="form-title">QUOTATION</h3>
                                    {{-- <form class="form-horizontal" method="POST" > --}}
                                    <form class="form-horizontal" method="POST" action="{{ route('quotation.store') }}">
                                        @csrf

                                        <div class="form-group">
                                        <label>Name :</label>
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                        <label>Position/Company (optional) :</label>
                                            <input type="text" name="company" class="form-control">
                                        </div>
                                        <div class="form-group">
                                        <label>Email :</label>
                                            <input type="email" name="email" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Telephone :</label>
                                                <input type="text" name="phone" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label><strong>Product :</strong></label><br>
                                            @foreach ($products as $product)
                                                <label><input type="checkbox" name="products[]" value="{{ $product->name }}">{{ $product->name }}</label>
                                            @endforeach
                                        </div>

                                        <div class="form-group">
                                        <label>Message :</label>
                                        <textarea name="message" id=""  rows="20" class="form-control"  placeholder="Please Enter Your Message"></textarea>
                                        </div>
                                        <button type="submit" class="btn signin">Submit</button>
                                    </form>
                                </div>
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
