@extends('layout/home-2')


{{-- Title Website --}}
@section('title', 'MOBIHUB | Team Communication')

{{-- Link CSS --}}
@section('link')
<style>
    #team-commu-1{
        background-image: url('/image/mainpage/scalefusion/banner_feature.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 485px;
        display: flex;
        align-items: center;
    }
    #team-commu-1 h3{
        color: #fff;
    }
    #team-commu-1 h2{
        color: #fff;
    }
    #team-commu-1 p{
        color: #fff;
    }
     #team-commu-2{
        padding-top: 100px;
        padding-bottom: 100px;
    }
    #team-commu-2 .vertical-tab{
        display: table;
    }
    #team-commu-2 .vertical-tab .nav-tabs{
        display: table-cell;
        width: 28%;
        min-width: 28%;
        vertical-align: top;
        border: none;
    }
    #team-commu-2 .vertical-tab .nav-tabs li{
       float: none;
       vertical-align: top;
    }
    #team-commu-2 .vertical-tab .nav-tabs li a{
        color: #000;
        font-size: 18px;
        font-weight: 500;
        letter-spacing: 1px;
        text-align: right;
        /* text-transform: uppercase; */
        padding: 25px 0;
        margin: 0;
        border-radius: 0;
        border: none;
        transition: all 0.5s ease 0s;
    }
    #team-commu-2 .vertical-tab .nav-tabs li a:hover,
    #team-commu-2 .vertical-tab .nav-tabs li.active a,
    #team-commu-2 .vertical-tab .nav-tabs li.active a:hover{
        color: #fff;
        background-color: #999999;
        font-weight: 200;
        text-align: center;
        letter-spacing: 2px;
        text-shadow: 0 0 0px #fff;
        margin: 10px 0;
    }
    #team-commu-2 .vertical-tab .nav-tabs li a:before,
    #team-commu-2 .vertical-tab .nav-tabs li a:after{
        content: '';
        background-color: #C5001A;
        height: 12px;
        width: 12px;
        border-radius: 50%;
        transform: scale(0);
        position: absolute;
        left: 111%;
        bottom: 42%;
        transition: all 0.3s;
    }
    #team-commu-2 .vertical-tab .nav-tabs li a:after{
        height: 2px;
        width: 0;
        border-radius: 0;
        transform: scale(0.8);
        bottom: 47%;
        left: 104%;
        transition: all 0.3s ease 0.1s;
    }
    #team-commu-2 .vertical-tab .nav-tabs li a:hover:before,
    #team-commu-2 .vertical-tab .nav-tabs li.active a:before{
        transform: scale(1);
    }
    #team-commu-2 .vertical-tab .nav-tabs li a:hover:after,
    #team-commu-2 .vertical-tab .nav-tabs li.active a:after{
        width: 100%;
    }
    #team-commu-2 .vertical-tab .tab-content{
        letter-spacing: 1px;
        line-height: 23px;
        padding-left: 95px;
        vertical-align: middle;
        border-radius: 0;
        display: table-cell;
        position: relative;
        background-image: url('image/Rectangle 195.jpg');
        background-size: cover;
    }
    #team-commu-2 .vertical-tab .tab-content h3{
        color: #C5001A;
        line-height: 38px;
        font-weight: 600;
        margin: 0 0 5px 0;
        width: 60%;
    }
    #team-commu-2 .vertical-tab .tab-content p{
        margin-top: 20px;
        color: #2D394B;
    }
    #team-commu-2 .vertical-tab .tab-content img{

    }
    #team-commu-2 .tab-pane{
        text-align: center;
    }
    #team-commu-2 h2{
        font-size: 32px;
        font-weight: 200;

    }
    #team-commu-2 p{
        margin-bottom: 50px;
    }
    @media only screen and (max-width: 479px){
        #team-commu-2 .vertical-tab .nav-tabs{
            width: 100%;
            display: block;
            border: none;
        }
        #team-commu-2 .vertical-tab .nav-tabs li a{
            padding: 12px 20px;
            margin: 0 0 8px;
        }
        #team-commu-2 .vertical-tab .tab-content{
            padding: 20px 15px 10px;
            display: block;
        }
        #team-commu-2 .vertical-tab .tab-content h3{ font-size: 18px; }
    }

    /* team-commu-3 */
    #team-commu-3{
        padding: 100px 0;
    }

    #team-commu-3 a:hover,a:focus{
    text-decoration: none;
    outline: none;
    }
    #team-commu-3 .vertical-tab{
        font-family: 'Poppins', sans-serif;
        display: table;
    }
    #team-commu-3 .vertical-tab .nav-tabs{
        display: table-footer-group;
        width: 28%;
        min-width: 28%;
        vertical-align: top;
        border: none;
    }
    #team-commu-3 .vertical-tab .nav-tabs li{
        width: 33.29%;
    }
    #team-commu-3 .vertical-tab .nav-tabs li a{
        color: #333;
        background: #e7e7e7;
        font-size: 10px;
        font-weight: 700;
        margin-top: 30px;
        letter-spacing: 1px;
        text-align: center;
        text-transform: uppercase;
        padding: 15px 5px 10px;
        border: none;
        border-top: 4px solid #d1d1d1;
        border-radius: 0;
        display: block;
        position: relative;
        z-index: 1;
        transition: all 0.3s ease 0s;
    }
    #team-commu-3 .vertical-tab .nav-tabs li:last-child a{ margin-bottom: 0; }
    #team-commu-3 .vertical-tab .nav-tabs li a:hover,
    #team-commu-3 .vertical-tab .nav-tabs li.active a,
    #team-commu-3 .vertical-tab .nav-tabs li.active a:hover{
        color: #fff;
        background: #fff;
        border: none;
        border-top: 4px solid #d1d1d1;
        text-shadow: 0 0 5px rgba(0,0,0,0.3);
    }
    #team-commu-3 .vertical-tab .nav-tabs li a:before,
    #team-commu-3 .vertical-tab .nav-tabs li a:after{
        content: '';
        background: #EB6864;
        height: 0;
        width: 100%;
        position: absolute;
        left: 0;
        top: 0;
        z-index: -1;
        transition: all 0.3s ease;
    }
    #team-commu-3 .vertical-tab .nav-tabs li a:before{
        width: 0;
        height: 4px;
        top: -4px;
    }
    #team-commu-3 .vertical-tab .nav-tabs li a:hover:before,
    #team-commu-3 .vertical-tab .nav-tabs li.active a:before,
    #team-commu-3 .vertical-tab .nav-tabs li.active a:hover:before{
        width: 100%;
    }
    #team-commu-3 .vertical-tab .nav-tabs li a:hover:after,
    #team-commu-3 .vertical-tab .nav-tabs li.active a:after,
    #team-commu-3 .vertical-tab .nav-tabs li.active a:hover:after{
        height: 100%;
    }
    #team-commu-3 .vertical-tab .tab-content{
        color: #333;
        background: #fff;
        font-size: 14px;
        letter-spacing: 0.5px;
        line-height: 25px;
        padding: 20px 20px 10px;
        margin-top: 10px;
        border: 4px solid #1B76FF;
        display: table-cell;
        position: relative;
    }
    #team-commu-3 .vertical-tab .tab-content h3{
        color: #1B76FF;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin: 0 0 7px 0;
    }
    /* team-commu-4 */
    #team-commu-4{
        padding: 50px 0;
        background: #F4F4F4;
    }
    /* team-commu-5 */
    #team-commu-5{
        padding: 50px 0;
    }
    #team-commu-5 .col-md-6 h2{
        font-size: 14px;
        font-weight: 400;
        letter-spacing: 1px;
        font-family: 'Prompt';
    }
    #team-commu-5 .col-md-6 .text{
        color:#D45745;
        font-size: 16px;
        font-weight: 600;
    }
    #team-commu-5 .col-md-4 h2{
        font-size: 14px;
        color: #fff;
        letter-spacing: 1px;
        font-family: 'Prompt';
    }
    #team-commu-5 .col-md-4 p{
        font-size: 12px;
        color: #fff;
        font-family: 'Prompt';
    }
    #team-commu-5 .box{
        text-align: center;
        background: #999999;
        border-radius: 5px;
        height: auto;
        padding: 30px;
    }
    #team-commu-5 .box img{
        width: 60px;
        height: 60px;
        margin: auto;
    }
    #team-commu-5 .col-md-6 .text-head{
        font-size: 25px;
        font-weight: 200;
        font-family: 'Prompt';
        padding: 50px 130px;
    }
    #team-commu-5 .box-sup{
        text-align: center;
    }
    #team-commu-5 .box-sup p{
        color: #000;
        padding: 10px 0;
    }
    #team-commu-5 .box-sup img{
        width: 30px;
        height: 30px;
        margin: auto;
    }
    /* #team-commu-6 */
    #team-commu-6{
        background: #F4F4F4;
        padding: 100px 0;
    }
    #team-commu-6 .text-team-6{
        text-align: center;
        padding: 100px 0;
    }
    #team-commu-6 .text-team-6 h2{
        color: #D45745;
    }
    #team-commu-6 ul li img{
        max-width: 50%;
        height: auto;
        width: 150px;
    }
    #team-commu-6 ul{
        display: inline-flex;
        list-style: none;
        justify-content: center;
        align-items: center;
        width: 100%;
        padding-left: 20px;
    }

    @media only screen and (max-width: 479px){
        #team-commu-3 .vertical-tab .nav-tabs{
            width: 100%;
            display: block;
            border: none;
        }
        #team-commu-3 .vertical-tab .nav-tabs li a{ margin: 0 0 10px; }
        #team-commu-3 .vertical-tab .tab-content{
            padding: 25px 20px;
            display: block;
        }
        #team-commu-3 .vertical-tab .tab-content h3{ font-size: 18px; }
        #team-commu-2 .vertical-tab .nav-tabs li a:before,
        #team-commu-2 .vertical-tab .nav-tabs li a:after{
            display: none;
    }
    }

@media  (min-width: 992px)  and (max-width: 1199.98px){
        #team-commu-5 .box {
        text-align: center;
        background: #999999;
        border-radius: 5px;
        height: auto;
        padding: 30px;
        width: 100%;
        margin: auto;
        margin-top: 50px;
    }
}
@media  (min-width: 320px)  and (max-width: 991.98px){
    #team-commu-5 .box{
        text-align: center;
        background: #999999;
        border-radius: 5px;
        height: auto;
        padding: 30px;
        width: 300px;
        margin: auto;
        margin-top: 50px;
    }
    #team-commu-3 .tab-pane img{
        margin: auto;
    }
    #team-commu-5 .col-md-6 .text-head {
        padding: 30px 80px;
        font-size: 16px;
    }
    #team-commu-6 {
        padding: 50px 0;
    }
    #team-commu-6 .text-team-6{
        padding: 50px 0;
    }
    #team-commu-6 .text-team-6 h3{
        font-size: 16px;
    }
    #team-commu-6 ul li img {
        max-width: 70%;
    }
}
@media (max-width: 612px){

}
</style>
@endsection


{{-- Body HTML --}}
@section('content')
    <section id="team-commu-1">
       <div class="container">
           <div class="row">
               <div class="col-xs-12 col-md-12">
                    <h3>
                        Eva Communication App
                    </h3>
                    <h2>
                        Secure Communication App for
                        Remote Workers
                    </h2>
                    <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                    <p>
                        Connect your workforce, help them collaborate and let the conversations flow with Eva Team Communication App.
                    </p>
               </div>
           </div>
       </div>
    </section>
    <section id="team-commu-2">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <h2>
                        Keep Your Employees Engaged and Productive
                    </h2>
                    <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                    <p>
                        Bring your perimeter-less workforce together. Get work done
                        faster, minus the noise.
                    </p>
                </div>
                <div class="col-xs-12 col-md-12">
                    <div class="vertical-tab" role="tabpanel">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">Exchange Instant Messages</a></li>
                            <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab">Attach Images or Files</a></li>
                            <li role="presentation"><a href="#Section3" aria-controls="windows" role="tab" data-toggle="tab">Record & Send Audio Messages</a></li>
                            <li role="presentation"><a href="#Section4" aria-controls="samsung" role="tab" data-toggle="tab">Make VoIP Calls</a></li>
                            <li role="presentation"><a href="#Section5" aria-controls="rom" role="tab" data-toggle="tab">Hold Virtual Conferences</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content tabs">
                            <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                                <img src="/image/mainpage/scalefusion/team/image 125.png" alt="">
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Section2">
                                <img src="/image/mainpage/scalefusion/team/image 126.png" alt="">
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Section3">
                                <img src="/image/mainpage/scalefusion/team/image 127.png" alt="">
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Section4">
                                <img src="/image/mainpage/scalefusion/team/image 128.png" alt="">
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Section5">
                                <img src="/image/mainpage/scalefusion/team/image 129.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="team-commu-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Tab panes -->
                    <div class="tab-content tabs">
                        <div role="tabpanel" class="tab-pane fade in active" id="teamSection1">
                            <img src="/image/mainpage/scalefusion/team/image 130.png" class="img-responsive" alt="">
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="teamSection2">
                            <img src="/image/mainpage/scalefusion/team/group_chats-3ceaa3e834057dd7f079ec8e25656c4060e7a5c946c0fa10da149d5c3966424c.png" class="img-responsive" alt="">
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="teamSection3">
                            <img src="/image/mainpage/scalefusion/team/block_calls-9144cc7554da2764cda68d9406d69a2857e6d4839f7b11b4f3338aea498694a7.png" class="img-responsive" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="vertical-tab" role="tabpanel">

                        <!-- Tab panes -->
                            <div role="tabpanel" class="tab-pane fade in active" id="teamSection1">
                                <h3>Foster Strong Team Relationships With Ease</h3>
                                <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                                <p>Help your employees to connect without an email id. Publish business contacts and team-wise group chats from dashboard.</p>
                            </div>
                         <!-- Nav tabs -->
                         <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#teamSection1" aria-controls="home" role="tab" data-toggle="tab">Manage Contact List</a></li>
                            <li role="presentation"><a href="#teamSection2" aria-controls="profile" role="tab" data-toggle="tab">Create Group Chats</a></li>
                            <li role="presentation"><a href="#teamSection3" aria-controls="messages" role="tab" data-toggle="tab">Block non-work calls</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="team-commu-4" >
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="col-xs-12 col-md-6 col-md-push-6">
                        <img src="/image/mainpage/scalefusion/team/image 131 (1).png" class="img-responsive" alt="">
                    </div>
                    <div class="col-xs-12 col-md-6 col-md-pull-6">
                        <div class="text">
                            <h2>Eva Communication App That Is Also Secure</h2>
                            <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                            <p>Don’t let security threats hinder your conversation. Eva Team Communication App makes sure that your business chats are always encrypted.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="team-commu-5" >
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <h2>
                       <span class="text">Eva Communication App</span> For
                        Powering Frontline Workers
                    </h2>
                </div>
                <div class="col-xs-12 col-md-6">
                    <h2>
                        Drive engagement within your field force. Leverage Eva team communication app for business to streamline communication with your frontline employees.
                    </h2>
                    <img src="/image/mainpage/scalefusion/icon/redLine.png" alt="">
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="box">
                      <img src="/image/mainpage/scalefusion/team/heart (1).png" alt="" class="img-responsive">
                      <h2>
                        Healthcare
                      </h2>
                      <p>
                        Stay in touch with your frontline healthcare warriors. Share critical data and updates instantly with team.
                      </p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                     <div class="box">
                      <img src="/image/mainpage/scalefusion/team/delivery-box (1).png" alt="" class="responsive">
                      <h2>
                        Last-Mile Delivery
                      </h2>
                      <p>
                        Help your delivery executives operate efficiently. Save on cellular costs by allowing business-only contacts.
                      </p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="box">
                        <img src="/image/mainpage/scalefusion/team/boat (1).png" alt="" class="responsive">
                        <h2>
                            Logistics & Transportation
                        </h2>
                        <p>
                            Share important resources and mandates with logistics fleet drivers. Improve engagement when hit the road.
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <h2 class="text-head">Eva Communication App Is Perfect for</h2>
                </div>
                <div class="col-xs-12 col-md-6" style="padding: 71px 0px;">
                    <div class="col-xs-4 col-md-4">
                        <div class="box-sup">
                            <img src="/image/mainpage/scalefusion/team/chatting.png" alt="" class="img-responsive">
                            <p>
                                Secure
                                Communication
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-4 col-md-4">
                        <div class="box-sup">
                            <img src="/image/mainpage/scalefusion/team/book.png" alt="" class="img-responsive">
                            <p>
                                Contact
                                Management
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-4 col-md-4">
                        <div class="box-sup">
                            <img src="/image/mainpage/scalefusion/team/admin-message.png" alt="" class="img-responsive">
                            <p>
                                Channel
                                Management
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="team-commu-6">
        <div class="text-team-6">
            <h2>
                6000+
            </h2>
            <h3>
                Businesses Across the Globe Trust Scalefusion To Manage Their Mobility
            </h3>
        </div>
        <ul >
            <li>
                <img src="/image/mainpage/scalefusion/team/image 124.png" alt="" class="img-responsive">
            </li>
            <li>
                <img src="/image/mainpage/scalefusion/team/slice-logo@2x-2884391d0fffa0e37d94e557f2c98bd243d836d391a06d830df1f5d92ef84ee0.png" alt="" class="img-responsive">
            </li>
            <li>
                <img src="/image/mainpage/scalefusion/team/radisson-logo@2x-bbe3b14bba89a541d80a035b208cd3d329801647af8ddb864e9040d245a7e5f1.png" alt="" class="img-responsive">
            </li>
            <li>
                <img src="/image/mainpage/scalefusion/team/saintgobain-logo@2x-22ab799eae10e587d9c15c79b6cbe3080e6314b5fb392d377eccf63068102efb.png" alt="" class="img-responsive">
            </li>
            <li>
                <img src="/image/mainpage/scalefusion/team/cottonon-logo@2x-8ac9345db465fdcd3bc9691ed62ab44b632d052c79404c23b0d133336c2a81af.png" alt="" class="img-responsive">
            </li>
            <li>
                <img src="/image/mainpage/scalefusion/team/dnata-logo@2x-dcddda61cbc3956499986eca0d07c4fe8601d7fb48be7cfcf076b1049b44afdb.png" alt="" class="img-responsive">
            </li>
        </ul>
    </section>


@endsection

{{-- js --}}
@section('script')

@endsection
