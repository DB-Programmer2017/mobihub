@extends('layout/home-2')


{{-- Title Website --}}
@section('title', 'MOBIHUB | News Post')

{{-- Link CSS --}}
@section('link')
<link rel="stylesheet" href="/css/mainpage/news.css">


@endsection


{{-- Body HTML --}}
@section('content')

    <section class="panel-top-breadcrumb-news panel-top-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <h1>ข่าวสาร</h1>
                    <li><a href="/" class="active">Mobihub</a></li>
                    <li><a href="#" >ข่าวสาร</a></li>
                </div>
            </div>
        </div>
    </section>

    <section class="section-news">
        <div class="container">
            <div class="row">
                @foreach ($news as $row)
                    <div class="col-xs-12 col-md-4" onclick="window.location.assign('news-detail/{{$row->slug}}')">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                    <img class="pic-1" src="{{asset('storage/images/' . $row->cover_img)}}">
                            {{-- <img class="pic-2" src="{{asset('storage/images/' . $row->cover_img)}}"> --}}
                                </a>
                                <span class="category-label">{{$row->news_category->name}}</span>

                                <a class="product-like-icon" href="#" data-tip="Add to Wishlist"><i class="far fa-heart"></i></a>
                                <ul class="product-links">
                                    <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                                    <li><a href="#" data-tip="Comapre"><i class="fa fa-random"></i></a></li>
                                    <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">{{ mb_strimwidth($row->name, 0, 50, "...", "UTF-8") }}</a></h3>

                                <div class="content">
                                    {{ mb_strimwidth($row->title, 0, 140, "...", "UTF-8") }}
                                </div>
                            </div>
                            <div class="product-cate">
                                {{ date('M d, Y', strtotime($row->updated_at)) }}
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-xs-12 col-md-12">
                    <center>{{$news->appends($_GET)->links('vendor.pagination.default')}}</center>
                </div>
            </div>
        </div>
    </section>


@endsection
{{-- Body Script --}}
@section('script')

@endsection
