@extends('layout/home-2')


{{-- Title Website --}}
@section('title', 'MOBIHUB | Service')

{{-- Link CSS --}}
@section('link')
<link rel="stylesheet" href="/css/mainpage/service.css">


@endsection


{{-- Body HTML --}}
@section('content')
    <section class="service">
        <div class="bg">
            <div class="box">
                <div class="text-banner">
                    <h3>
                        WELCOME TO OUR COMPANY
                    </h3>
                    <h1>
                        SERVICES
                    </h1>
                </div>
                <div class="button">
                    <button type="button" class="btn btn-danger btn-md">
                        ติดต่อเรา <span><i class="fas fa-long-arrow-alt-right"></i></span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="service-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="col-xs-12 col-md-4">
                        <div class="card">
                            <img src="/image/mainpage/service/customer-service.svg" alt="" class="card-pic">
                            <h2 class="head-card">
                                Call center
                            </h2>
                            <p class="title-card">
                                บางฉบับของข้อความใช้คำว่า adipisici
                                แทน adipiscing เพราะการใช้อักษรคู่เสียงเดี่ยว
                                ng ท้ายคำเป็นสิ่งที่แปลกในภาษาละตินคลาสสิก
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <div class="card">
                            <img src="/image/mainpage/service/wrench.svg" alt="" class="card-pic">
                            <h2 class="head-card">
                                Repair
                            </h2>
                            <p class="title-card">
                                บางฉบับของข้อความใช้คำว่า adipisici
                                แทน adipiscing เพราะการใช้อักษรคู่เสียงเดี่ยว
                                ng ท้ายคำเป็นสิ่งที่แปลกในภาษาละตินคลาสสิก
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <div class="card">
                            <img src="/image/mainpage/service/warranty.svg" alt="" class="card-pic">
                            <h2 class="head-card">
                                Warranty
                            </h2>
                            <p class="title-card">
                                บางฉบับของข้อความใช้คำว่า adipisici
                                แทน adipiscing เพราะการใช้อักษรคู่เสียงเดี่ยว
                                ng ท้ายคำเป็นสิ่งที่แปลกในภาษาละตินคลาสสิก
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="service-2">
        <div class="container contact-form">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <h1>ติดต่อเรา</h1>

                    <input type="text" class="form-control" placeholder="ชื่อ - นามสกุล *">

                    <input type="text" class="form-control" placeholder="ตำแหน่ง/ชื่อบริษัท *">

                    <input type="text" class="form-control" placeholder="อีเมล *">

                    <textarea name="" id=""  rows="5" class="form-control"  placeholder="ข้อความ *"></textarea>
                    <div class="button">
                        <button type="button" class="btn btn-danger">ส่ง</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')

@endsection
