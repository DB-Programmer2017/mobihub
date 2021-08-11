<nav class="navbar navbar-default navbar-fixed-top">
  <div class="navbar-top">

    <ul class="navbar-top-left">
      <li class="social" onclick="window.open('https://www.facebook.com/MobihubThailand')" ><i class="fab fa-facebook-f"></i></li>
      <li class="social" onclick="window.open('https://www.instagram.com/mobihubthailand/')"><i class="fab fa-instagram"></i></li>
      {{-- <li class="social"><i class="fab fa-linkedin-in"></i></li> --}}
      <li class="social" onclick="window.open('https://liff.line.me/1645278921-kWRPP32q?accountId=438tvagh&openerPlatform=native&openerKey=talkroom%3Amessage#mst_challenge=3-BmaqTCSfNmaYNSOxTvI1t64D-qfrPHYqwOSG8-1_A')"><i class="fab fa-line"></i></li>
      <li class="social" onclick="window.open('https://www.youtube.com/channel/UCkSv8qp3SH49fjvW0NdQ32Q')"><i class="fab fa-youtube"></i></li>
    </ul>

    <ul class="navbar-center">
      <li><img src="/image/logo_web.png" class="img-brand"></li>
    </ul>

    <ul class="navbar-top-right">
      <li><i class="far fa-envelope"></i> sales@mobihub.co.th</li>
      <li><i class="fas fa-phone-volume"></i> 099-287-4710 ถึง 4711</li>
    </ul>
  </div>

    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        {{-- <a class="navbar-brand" href="#">Mobihub</a> --}}
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class=""><a href="/">{{ trans('message.Home') }}</a></li>
          <li><a href="/about">{{ trans('message.About') }}</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">{{ trans('message.Product') }} <span class="caret"></span></a>
            <ul class="dropdown-menu" aria-labelledby="themes">
              <li><a href="/scalefusion">Scalefusion</a></li>
              <li class="divider"></li>
              <li><a href="/otterbox">OtterBox</a></li>
              <li><a href="/armor-x">Armor-X</a></li>
              <li><a href="/rammounts">Ram Mounts</a></li>
            </ul>
          </li>

          <li><a href="/service">{{ trans('message.Services') }}</a></li>
          <li><a href="/news-post">{{ trans('message.News') }}</a></li>
          <li><a href="/contact">{{ trans('message.Contact') }}</a></li>

        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li>
            <button type="button" onclick="window.open('/quotation')" class="btn btn-primary btn-quotation">{{ trans('message.Quotation') }}</button>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ trans('message.Language') }} <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <li>
                    <a href="{{ URL::to('change/th') }}" class="menu-item-2">
                        <img class="img-box-1" style="height: 25px; width: auto;"  src="/image/thailand.png"> Thai
                    </a>
                </li>
                <li>
                    <a href="{{ URL::to('change/en') }}" class="menu-item-2">
                        <img class="img-box-1" style="height: 25px; width: auto;" src="/image/united-kingdom.png"> English
                    </a>
                </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
</nav>
    <div class="mobile-navbar">
        <li class="logo"><a class="navbar-brand" href="/"alt=""><img src="/image/mainpage/logo/logo mobihub.png" width="65%"  alt=""></a></li>
        <li class="bar" onclick="openNav()"><i class="fas fa-bars"></i></li>
    </div>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="/">{{ trans('message.Home') }}</a>

        <li class="dropdown-2">
            <a href="#" class="icon-1">{{ trans('message.Product') }}</a>

            <ul class="dropdown-menu-2">
                <li class="dropdown-right-2">
                    <li><h4>Hardware :</h4></li>
                    <li><a href="/armor-x" class="menu-item-2">Armor-X</a></li>
                    <li><a href="/rammounts" class="menu-item-2">Ram Mounts</a></li>
                    <li><a href="/otterbox" class="menu-item-2">Otterbox</a></li>

                    <li><h4>Software :</h4></li>
                    <li><a href="/scalefusion" class="menu-item-2">Scalefusion</a></li>

                </li>

                {{-- <li class="dropdown-right-2">
                    <a href="#" class="menu-item-2">Software <span class="arrow"><i class="fas fa-angle-right"></i></span></a>
                    <ul class="menu-right-2">
                        <li><a href="#" class="menu-item-2">Scalefusion</a></li>
                    </ul>
                </li>

                <li class="dropdown-right-2">
                    <a href="#" class="menu-item-2">Accesories <span class="arrow"><i class="fas fa-angle-right"></i></span></a>
                    <ul class="menu-right-2">
                        <li><a href="#" class="menu-item-2">Armor-X</a></li>
                        <li><a href="#" class="menu-item-2">Ram Mounts</a></li>
                        <li><a href="#" class="menu-item-2">Otterbox</a></li>
                    </ul>
                </li> --}}
            </ul>
            {{-- <div class="dropdown-menus2">
                <li class="dropdown-right2">
                    <a href="#" class="menu-item-dropdowns">Hardware
                        <span class="arrow"><i class="fas fa-plus"></i></span>
                    </a>

                    <ul class="menu-right2">
                        <li><a href="#" class="menu-item">Item 3.1</a></li>
                        <li><a href="#" class="menu-item">Item 3.2</a></li>
                        <li><a href="#" class="menu-item">Item 3.3</a></li>
                        <li><a href="#" class="menu-item">Item 3.4</a></li>
                    </ul>
                </li>

                <li class="dropdown-right2">
                    <a href="#" class="menu-item-dropdowns">Software
                        <span class="arrow"><i class="fas fa-plus"></i></span>
                    </a>

                    <ul class="menu-right2">
                        <li><a href="#" class="menu-item">Item 3.1</a></li>
                        <li><a href="#" class="menu-item">Item 3.2</a></li>
                        <li><a href="#" class="menu-item">Item 3.3</a></li>
                        <li><a href="#" class="menu-item">Item 3.4</a></li>
                    </ul>
                </li>

                <li class="dropdown-right2">
                    <a href="#" class="menu-item-dropdowns">Accessories
                        <span class="arrow"><i class="fas fa-plus"></i></span>
                    </a>
                    <ul class="menu-right2">
                        <li><a href="#" class="menu-item">Item 3.1</a></li>
                        <li><a href="#" class="menu-item">Item 3.2</a></li>
                        <li><a href="#" class="menu-item">Item 3.3</a></li>
                        <li><a href="#" class="menu-item">Item 3.4</a></li>
                    </ul>
                </li>
            </div> --}}
        </li>

        <a href="/service">{{ trans('message.Services') }}</a>
        <a href="/news">{{ trans('message.News') }}</a>
        <a href="/about">{{ trans('message.About') }}</a>
        <a href="/contact">{{ trans('message.Contact') }}</a>
        <li class="dropdown-2">
            <a href="#" class="icon-1">{{ trans('message.Language') }}</a>
            <ul class="dropdown-menu-2">
                <li class="dropdown-right-2">
                    <li>
                        <a href="{{ URL::to('change/th') }}" class="menu-item-2">
                            <img class="img-box-1"  src="/image/thailand.png"> Thai
                        </a>
                    </li>
                    <li>
                        <a href="{{ URL::to('change/en') }}" class="menu-item-2">
                            <img class="img-box-1"  src="/image/united-kingdom.png"> English
                        </a>
                    </li>
                </li>
            </ul>
        </li>

        <a href="/quotation" class="quotation-mobile">{{ trans('message.Quotation') }}</a>

        {{-- <a href="#"><img class="img-box-1"  src="/image/thailand.png"> THAI</a>
        <a href="#"><img class="img-box-1"  src="/image/united-kingdom.png"> ENGLISH</a> --}}

        <div class="social-mobile">
            <li onclick="window.open('https://www.facebook.com/MobihubThailand')"><i class="fab fa-facebook-f"></i></li>
            <li onclick="window.open('https://www.instagram.com/mobihubthailand/')"><i class="fab fa-instagram"></i></li>
            <li><i class="fab fa-linkedin-in"></i></li>
            <li onclick="window.open('https://liff.line.me/1645278921-kWRPP32q?accountId=438tvagh&openerPlatform=native&openerKey=talkroom%3Amessage#mst_challenge=3-BmaqTCSfNmaYNSOxTvI1t64D-qfrPHYqwOSG8-1_A')"><i class="fab fa-line"></i></li>
            <li onclick="window.open('https://www.youtube.com/channel/UCkSv8qp3SH49fjvW0NdQ32Q')"><i class="fab fa-youtube"></i></li>
        </div>
        {{-- <a href="tel:02-287-4710" style="margin-top:20px">
        <center><button type="button" class="btn btn-danger">สอบถามข้อมูล : 099-287-4710 ถึง 4711</button></center>
        </a>
        <a href="#">
        <center><button type="button" onclick="window.open('/quotation')" class="btn btn-danger"><i class="far fa-envelope"></i> ขอใบเสนอราคา</button></center>
        </a> --}}
    </div>


    <script>
      function openNav() {
        document.getElementById("mySidenav").style.width = "100%";
      }

      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
      }

    </script>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="/js/custom.js"></script>
