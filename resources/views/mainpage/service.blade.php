@extends('layout/home-2')


{{-- Title Website --}}
@section('title', 'MOBIHUB | Service')

{{-- Link CSS --}}
@section('link')
<link rel="stylesheet" href="/css/mainpage/service.css">
<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@100;200;500;900&display=swap" rel="stylesheet">

@endsection


{{-- Body HTML --}}
@section('content')
    <section class="service">
        <div class="bg">
            <div class="box">
                <div class="text-banner">
                    <h1>
                        Service
                    </h1>
                    <p>
                        เราจัดจำหน่ายสินค้าให้กับผู้บริโภคเเละองค์กรธุรกิจควบคู่กันซึ่งรองรับ
                        ความต้องการของเป้าหมายเราให้บริการด้านการขายในทุกๆ
                        เเพลตฟอร์ม
                        เพื่อความสะดวกในการจัดให้ข้อมูลเเละการจัดจำหน่าย
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="service-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="col-xs-12 col-md-6">
                        <div class="card-1">
                            <div class="box">
                                <h2>
                                    B2B
                                </h2>
                                <p>
                                    Email : sales@mobihub.co.th <br>
                                    Tel. : 099-287-4710 ถึง 4711
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="card-2">
                            <div class="box">
                                <h2>
                                    B2C
                                </h2>
                                <p>
                                    ช่องทางจัดจำหน่าย Shopee, Lazada,
                                    Facebook, JD Central, Line
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="card-3">
                            <div class="box-3">
                                <h2>
                                    Consulting Service
                                </h2>
                                <p>
                                    เราให้คำปรึกษาเกี่ยวกับระบบ cloud computing
                                    ของเรากับทั้ง
                                    B2B เเละ B2C การติดตั่ง การใช้งาน
                                    ฟังชั่น เเละความปลอดภัยของข้อมูล
                                     รวมถึงการ
                                    เชื่อต่ออุปกรณ์เสริมต่างๆ เข้ากับ Device ของคุณ
                                    อย่างเหมาะสม
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="card-4">
                            <div class="box-4">
                                <h2>
                                    Solution
                                </h2>
                                <p>
                                    รับให้คำปรึกาษาในเรื่องของการทำธุรกิจ
                                    เเละการจัดจำหน่ายlสินค้าขาย
                                     ปลีก-ส่ง
                                    การจัดซื้อช่องทางแพลตฟอร์ม ซึ่งสินค้าบาง
                                    ชนิดเป็นสินค้านำเข้า
                                    มากจากต่างประเทศจะมี
                                    วิธีการซื้อที่เเตกต่างจากปกติรับประกันได้รับ
                                    สินนค้า 100%
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
