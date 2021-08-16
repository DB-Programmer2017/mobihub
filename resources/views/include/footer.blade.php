<section class="footer">
    <img src="/image/M.png" class="img-responsive image">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3">
                <h4>{{ trans('message.Subscribte') }}</h4>
                <div class="form-group">
                    <form method="POST" action="{{ route('subscriptionEmail.store') }} ">
                        @csrf
                        <div class="input-group">
                            <input type="email" name="email" class="form-control" placeholder="{{ trans('message.Fill your Email...') }}">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="submit">ติดตาม</button>
                            </span>
                        </div>
                    </form>
                    {{-- <div class="input-group">
                      <input type="text" class="form-control" placeholder="กรอกอีเมลของคุณที่นี่">
                      <span class="input-group-btn">
                        <button class="btn btn-primary" type="button">ติดตาม</button>
                      </span>
                    </div> --}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-2 about">
                <h4>Mobihub</h4>
                <li onclick="window.open('/about')">{{ trans('message.About') }}</li>
                <li onclick="window.open('/news-post')">{{ trans('message.News') }}</li>
                <li onclick="window.open('/scalefusion')">scalefusion</li>
                <li onclick="window.open('/service')">{{ trans('message.Services') }}</li>
                <li onclick="window.open('/contact')">{{ trans('message.Contact') }}</li>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4">
                <h4>Mobihub Company Limited </h4>
                <p>
                    เป็นหนึ่งในไม่กี่บริษัทที่เป็นตัวแทนจำหน่ายซอฟแวร์ทางด้าน Cloud Solution
                    และ อุปกรณ์ด้าน Mobile, Mobility ที่ครบวงจ­รที่สุด เราเน้นขายสินค้าด้านความ
                    ปลอดภัยในการใช้งานอุปกรณ์พกพาทุกรูปเเบบ รวมถึง Software as a service(Saas)
                    ที่จะคอยปกป้องข้อมูลของคุณได้อย่างปลอดภัย
                </p>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-3">
                <h4>ติดต่อเรา</h4>
                <li>
                    1448/15 Crystal Design Center (CDC), L2, 2FL.,
                    Room 202, 204, 206, 208, Soi Ladprao 87 (Chandra Suk),
                    Praditmanuthum Rd. , Klongjan, Bangkapi, Bangkok 10240 THAILAND.
                </li>
                <li><i class="far fa-envelope"></i> sales@mobihub.co.th</li>
                <li><i class="fas fa-phone-volume"></i> 099-287-4710 {{ trans('message.To') }} 4711</li>
            </div>

        </div>
    </div>
    <div class="copy-right">Copyright © Mobihub all rights reserved. </div>
</section>
