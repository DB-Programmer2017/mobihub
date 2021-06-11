<!DOCTYPE html>
<html lang="en" itemtype="https://schema.org/WebPage">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" >
    <link href="https://fonts.googleapis.com/css?family=Prompt|Poppins|Questrial|Merienda|Caveat+Brush|Oswald|Anton|Mitr|Abril+Fatface" rel="stylesheet">
    <link rel="stylesheet" href="/css/layout/style.css">

    @yield('link')

</head>
<body>
    <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "106561104903497");
      chatbox.setAttribute("attribution", "biz_inbox");
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v10.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
    <div>
        @include('/include/navbar')
    </div>
    <main>
        <style>
            /* main{
                margin-top: 125px;
            }
            @media  (max-width: 1023px){
                main{
                margin-top: 73px;
                }
            } */
        </style>
        @yield('content')
    </main>
        @include('/include/footer')
</body>

@yield('script')
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/custom.js"></script>
