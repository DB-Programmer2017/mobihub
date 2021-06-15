@extends('layout/home-2')


{{-- Title Website --}}
@section('title', 'MOBIHUB | Contact Us')

{{-- Link CSS --}}
@section('link')
<link rel="stylesheet" href="/css/mainpage/contact.css">
{{-- bootstrap --}}
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> --}}
{{-- <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script> --}}
{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script> --}}

@endsection


{{-- Body HTML --}}
@section('content')

    <section class="panel-top-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <center>
                        <h1>ติดต่อเรา</h1>
                        <li><a href="/" class="active">Mobihub</a></li>
                        <li><a href="#" >ติดต่อเรา</a></li>
                    </center>
                </div>
            </div>
        </div>
    </section>
    <section class="service-2">
        <div class="container contact-form">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <h1>ติดต่อเรา</h1>

                    @if(session()->has('success'))
                    <div class="alert alert-success d-flex justify-content-center">
                        {{ session('success') }}
                    </div>
                @endif

                <form  method="POST" action="{{ route('contact.store') }}">
                    @csrf

                    <!-- Error -->
                        @if ($errors->has('name'))
                            <div class="error text-danger">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                    <input type="text" class="form-control" placeholder="ชื่อ - นามสกุล *" name="name" id="name">

                    <!-- Error -->
                        @if ($errors->has('email'))
                            <div class="error text-danger">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    <input type="email" class="form-control" placeholder="ตำแหน่ง/ชื่อบริษัท *" name="email" id="email">

                    <!-- Error -->
                        @if ($errors->has('subject'))
                            <div class="error text-danger">
                                {{ $errors->first('subject') }}
                            </div>
                        @endif
                    <input type="text" class="form-control" placeholder="อีเมล *" name="subject" id="subject">


                    <!-- Error -->
                        @if ($errors->has('message'))
                            <div class="error text-danger">
                                {{ $errors->first('message') }}
                            </div>
                        @endif
                    <textarea name="message" id="message" cols="30" rows="10" class="form-control"  placeholder="ข้อความ *"></textarea>

                    <button type="submit" class="btn btn-danger">ส่ง<i class="fas fa-long-arrow-alt-right"></i></button>
                </form>

{{--
                    <input type="text" class="form-control" placeholder="ชื่อ - นามสกุล *">

                    <input type="text" class="form-control" placeholder="ตำแหน่ง/ชื่อบริษัท *">

                    <input type="text" class="form-control" placeholder="อีเมล *">

                    <textarea name="" id=""  rows="5" class="form-control"  placeholder="ข้อความ *"></textarea>
                    <div class="button">
                        <button type="button" class="btn btn-danger">ส่ง</button>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    {{-- <div class="container contact-form">
        <div class="row">
            <div class="col-xs-12 col-md-8">

                <h1>Contact Form</h1>

                @if(session()->has('success'))
                    <div class="alert alert-success d-flex justify-content-center">
                        {{ session('success') }}
                    </div>
                @endif

                <form  method="POST" action="{{ route('contact.store') }}">
                    @csrf

                    <!-- Error -->
                        @if ($errors->has('name'))
                            <div class="error text-danger">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                    <label>NAME :</label>
                    <input type="text" class="form-control" placeholder="Please Enter Your Name" name="name" id="name">

                    <!-- Error -->
                        @if ($errors->has('email'))
                            <div class="error text-danger">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    <label>EMAIL :</label>
                    <input type="email" class="form-control" placeholder="Please Enter Your Email" name="email" id="email">

                    <!-- Error -->
                        @if ($errors->has('subject'))
                            <div class="error text-danger">
                                {{ $errors->first('subject') }}
                            </div>
                        @endif
                    <label>SUBJECT :</label>
                    <input type="text" class="form-control" placeholder="Please Enter Your Subject" name="subject" id="subject">


                    <!-- Error -->
                        @if ($errors->has('message'))
                            <div class="error text-danger">
                                {{ $errors->first('message') }}
                            </div>
                        @endif
                    <label>MESSAGE :</label>
                    <textarea name="message" id="message" cols="30" rows="10" class="form-control"  placeholder="Please Enter Your Message"></textarea>

                    <button type="submit" class="btn btn-danger">Send</button>
                </form>

            </div>

            <div class="col-xs-12 col-md-4 contact-content">
                <h2>Still need help for any problem?</h2>
                <p>
                    Check out our In-App Help, Blog, and Youtube Channel.
                    You can also email our support team at sales@mobihub.co.th
                </p>
                <button type="button" class="btn btn-danger btn-block">Get Free More <i class="fas fa-arrow-right"></i></button>
            </div>
        </div>
    </div> --}}

    <div class="container contact-map">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3874.60687334236!2d100.61596421477988!3d13.80255649031464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29d8a5b6ca4e1%3A0xbe44151e51909d75!2sDATABAR%20Company%20Limited!5e0!3m2!1sth!2sth!4v1621236065480!5m2!1sth!2sth" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

            <div class="col-xs-12 col-md-12">
                <div class="col-xs-12 col-md-4 service-box">
                    <i class="fas fa-envelope"></i>
                    <h3>Contact Us</h3>
                    <p>sales@mobihub.co.th</p>
                </div>

                <div class="col-xs-12 col-md-4 service-box">
                    <i class="fas fa-phone-volume"></i>
                    <h3>Tell</h3>
                    <p>099-287-4710 ถึง 4711</p>
                </div>

                <div class="col-xs-12 col-md-4 service-box">
                    <i class="fas fa-map-marker-alt"></i>
                    <h3>Tracking Map</h3>
                    <p>sales@mobihub.co.th</p>
                </div>
            </div>
        </div>
    </div>

@endsection
{{-- Body Script --}}
@section('script')


@endsection
