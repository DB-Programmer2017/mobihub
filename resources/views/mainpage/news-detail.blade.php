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


@endsection


{{-- Body HTML --}}
@section('content')

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
                <h1 class="title">
                    {{ $newsDetail->name }}
                </h1>
                <p class="news-date"><i class="far fa-calendar-alt"></i> {{ date('M d, Y', strtotime($newsDetail->updated_at)) }}</p>
                {{-- {{ $newsDetail->description }} --}}
                {!! str_replace('<p>', ' ', $newsDetail->description) !!}

                <ul class="social">
                    <li  onclick="fb()"> <i class="fab fa-facebook-f"></i></li>
                    <li><i class="fab fa-twitter"></i></li>
                    <li><i class="fab fa-google-plus-g"></i></li>
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
                    <div class="news-group" onclick="window.location.assign('{{$row->id}}')">
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
    <script>
        function fb(){
            var imgsrc=document.getElementById("imgfb").src;
            var fbpopup = window.open("https://www.facebook.com/sharer/sharer.php?u="+encodeURIComponent(imgsrc), "pop", "width=600, height=400, scrollbars=no");
            return false;
        }
    
    </script>
@endsection
