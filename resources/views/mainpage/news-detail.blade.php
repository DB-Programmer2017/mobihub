<?php 
$title = $newsDetail->name ;
$url ="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>

@extends('layout/home-2')

{{-- Title Website --}}
@section('title', 'MOBIHUB | '.$title )

{{-- Link CSS --}}
@section('link')
<link rel="stylesheet" href="/css/mainpage/news.css">
<meta property="og:url"                content="http://www.mobihub.co.th/news-detail/{{ $newsDetail->slug }}" />
<meta property="og:type"               content="website" />
<meta property="og:title"              content="{{ $newsDetail->name }}" />
<meta property="og:description"        content="#mobihub" />
<meta property="og:image"              content="{{asset('storage/images/' . $newsDetail->cover_img)}}" />

@endsection


{{-- Body HTML --}}
@section('content')
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v11.0" nonce="kBpusAcv"></script>
<section  id="panel-news-detail">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <a href="/">หน้าแรก</a>
                <a href="/news-post"><i class="fas fa-angle-right"></i> ข่าวสาร</a>
                <a href=""><i class="fas fa-angle-right"></i> {{$newsDetail->news_category->name}}</a>
                <a href="" class="active"><i class="fas fa-angle-right"></i> {{ $newsDetail->name }}</a>
            </div>
        </div>
    </div>
</section>

<div class="container" id="news-detail">
    <div class="row">
        <div class="col-xs-12 col-md-9">
            <img class="img-responsive" id="imgfb" alt="{{ $newsDetail->name }}" src="{{asset('storage/images/' . $newsDetail->cover_img)}}">

            <div class="col-xs-12 col-md-12 panel-content">
                <input type="hidden" id="post_title" value="{{ $newsDetail->name }}">
                <h1 class="title">
                    {{ $newsDetail->name }}
                </h1>
                <p class="news-date"><i class="far fa-calendar-alt"></i> {{ date('M d, Y', strtotime($newsDetail->updated_at)) }}</p>
                {{-- {{ $newsDetail->description }} --}}
                {!! str_replace('<p>', ' ', $newsDetail->description) !!}

 
                <div class="fb-share-button" data-href="https://www.mobihub.co.th/news-detail/a-guide-to-application-whitelisting" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.mobihub.co.th%2Fnews-detail%2Fa-guide-to-application-whitelisting&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
                <ul class="social">
                    
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                {{-- <div class="addthis_inline_share_toolbox"></div> --}}
            
                    <li  onclick="fb()"> <i class="fab fa-facebook-f"></i></li>
                    <li onclick="tweetCurrentPost()"><i class="fab fa-twitter"></i></li>
                    <li onclick="copyUrl()"><i class="fas fa-copy"></i></li>
                    
                </ul>
                
            </div>
        </div>

        <div class="col-xs-12 col-md-3">
            <div class="panel-category">
                <h3>Category</h3>

                <div class="list-group">
                    <a href="#" class="list-group-item">
                        <p class="list-group-item-text">{{$newsDetail->news_category->name}}</p>
                    </a>
                </div>
            </div>

            <div class="panel-category" style="padding-top: 20px">
                @foreach ($news as $row) 
                    <div class="news-group" onclick="window.location.assign('{{$row->slug}}')">
                        <div class="image">
                            <img class="img-responsive" alt="{{ $row->name }}" src="{{asset('storage/images/' . $row->cover_img)}}">
                        </div>
                        <div class="news-content">
                            <p class="title">{{ $row->name }}</p>
                            <p class="dates">{{ date('M d, Y', strtotime($row->updated_at)) }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
    
</div>

@endsection
{{-- Body Script --}}
@section('script')
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-60deb102b8a0b7d9"></script>
    <script>


        function fb(){
            var imgsrc=document.getElementById("imgfb").src;
            // alert(imgsrc);
            var title = $("#post_title").val();
            // alert(title);
            var fbpopup = window.open("https://www.facebook.com/sharer/sharer.php?u="+encodeURIComponent(window.location.href) + "&description=#mobihub", "facebook-share-dialog", "width=600, height=400, scrollbars=no");
            return false;
        }

        function tweetCurrentPost() {
            var title = $("#post_title").val();
            //http://twitter.com/share?text=text goes here&url=http://url goes here&hashtags=hashtag1,hashtag2,hashtag3
            window.open("https://twitter.com/share?url="+ encodeURIComponent(window.location.href)+"&text="+ title + "&hashtags=mobihub");
            return false;
        }

        function linkedin() {
            var title = $("#post_title").val();
            window.open("https://www.linkedin.com/shareArticle?mini=true&url="+ encodeURIComponent(window.location.href));
            return false;
        }

        function copyUrl() {
            var inputc = document.body.appendChild(document.createElement("input"));
            inputc.value = window.location.href;
            inputc.focus();
            inputc.select();
            document.execCommand('copy');
            inputc.parentNode.removeChild(inputc);
            alert("URL Copied.");
        }
    
    </script>

<script>
    (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>
@endsection
