@extends('layout/home-2')

{{-- Title Website --}}
@section('title', 'MOBIHUB | Armor-X')

{{-- Link CSS --}}
@section('link')
    <style>
        #menu-toggle{
            display: none;
            height: 40px;
            width: 40px;
            padding-top: 10px;
            text-align: center;
            border-radius: 50px;
            position: fixed;
            font-size: 20px;
            color: #fff;
            background: #fb5d5d;
            bottom: 0;
            right: 0;
            margin-right: 10px;
            margin-bottom: 10%;
            cursor: pointer;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            z-index: 9999;
        }

        .sidenav-armorx {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 999999;
            top: 0;
            left: 0;
            background-color: #fff;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav-armorx a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 16px;
            color: #000;
            display: block;
            transition: 0.3s;
        }

        .sidenav-armorx .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 46px;
            margin-left: 50px;
        }

        @media screen and (max-height: 450px) {
        .sidenav-armorx {padding-top: 15px;}
        .sidenav-armorx a {font-size: 18px;}
        }
        .brand{
            width: 70%;
            font-size: 35px;
            font-weight: bold;
            text-align: right;
            background: #f4f4f4;
            margin-top: -40px;
        }
        .brand-title{
            font-weight: bold;
            text-transform: uppercase;
        }
        .brand-title i{
            float: right;
        }
        .category-title{
            padding-left: 20px;
            border-left: 1px dashed #f4f4f4;
        }
        .sidenav-armorx  .sub-category-title{
            margin-left: 20px;
        }
        .sub-category-title label{
            font-weight: normal;
        }
        @media  (min-width: 320px)  and (max-width: 736px) { 
            #menu-toggle{
                display: inline;
            }
        }
        @media  (min-width: 767px)  and (max-width: 1023px) { 
            #menu-toggle{
                display: inline;
            }
        }
        @media  (min-width:800px)  and (max-width:900px) { 
            #menu-toggle{
                display: none;
            }
        }
    </style>
@endsection

{{-- Body HTML --}}
@section('content')

    <div id="menu-toggle" onclick="openNavArmorx()">
        <i class="fas fa-list-ul"></i>
    </div>

    <form action="{{url('/armor-x/filter')}}" method="POST">
    <div id="mySidenavArmorx" class="sidenav-armorx ">
        <a href="/armor-x" class=brand>ARMOR-X</a>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNavArmorx()">&times;</a>
        
        @foreach ($brands as $brand)
        @csrf
            @if(!empty($_GET['category']))
                @php 
                    $filter_cates=explode(",",$_GET['category']); 
                @endphp
            @endif
            <a href="#" class="brand-title">
                {{ $brand->name }} <i class="fas fa-caret-down"></i>
            </a>

            <?php $counter=0; ?>
                @if(!empty($brand->categories))
                    @foreach ($brand->categories as $category)
                        {{-- <a href="#" class="category-title" data-id="{{ $category->id }}">{{ $category->name }}</a> --}}

                        @foreach($category->subCategories as $subCategory)
                            <a href="#" class="sub-category-title">
                                <input class="custom-control-input category_checkbox" type="checkbox" @if(!empty($filter_cates) && in_array($subCategory->slug,$filter_cates)) checked @endif   att-name="{{ $subCategory->name }}" value="{{ $subCategory->slug }}" name="category[]" onchange="this.form.submit();" id="{{ $subCategory->id }}"> 
                                <label for="{{ $subCategory->id }}">{{ $subCategory->name }} [{{ count(App\Models\ProductAllModel::where('sub_category_id', $subCategory->id)->get()) }}]</label>
                            </a>
                        @endforeach
                    @endforeach
                @endif
        @endforeach

      </div>
    </form>

    <section class="armor-x-panel">
    </section>

    <div class="container armor-x-panel-2">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <h2>About Armor-x</h2>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries, but also the leap into electronic typesetting,
                    remaining essentially unchanged. It was popularised in the 1960s with the release of
                    Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                    software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>

            <div class="col-xs-12 col-md-6">
                <h2>Contact</h2>
                <p>
                    1448/15 Crystal Design Center (CDC) L2, 2FL.,Room 202, 201, 206, 208,
                    Praditmanuthum Rd. Klongjan, Bangkapi Bangkok 10240   THAILAND.
                </p>
                <p>
                    <li class="icon"><i class="far fa-envelope"></i></li> sales@mobihub.co.th
                </p>
                <p>
                    <li class="icon"><i class="fas fa-phone-volume" icon></i></li> 099-287-4710
                </p>
            </div>
        </div>
    </div>

<section class="armor-x-panel-3">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <iframe  src="https://www.youtube.com/embed/g1n6tuCeTRY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-md-12" style="margin-top: 20px">
                {{-- <ul class="breadcrumb">
                    <li><a href="#">APPLE</a></li>
                    <li><a href="#">IPHONE 12 CASES (895)</a></li>
                </ul> --}}
            </div>

            <div class="col-xs-12 col-md-3 category-menu-panel">
                <div class="panel-group" id="accordion-3" role="tablist" aria-multiselectable="true">
                <form action="{{url('/armor-x/filter')}}" method="POST">
                    @foreach ($brands as $brand)
                        @csrf

                            @if(!empty($_GET['category']))
                                @php
                                    $filter_cates=explode(",",$_GET['category']);
                                @endphp
                            @endif

                            <div class="panel panel-default panel-category">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a class="" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            {{ $brand->name }}
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                    <?php $counter=0; ?>
                                        @if(!empty($brand->categories))
                                            @foreach ($brand->categories as $category)
                                                <li>
                                                    <div class="sub-title" data-id="{{ $category->id }}">{{ $category->name }}</div>
                                                    {{-- <ul @if($category->id == 1) class="active" @endif data-id="ul-{{ $category->id }}"> --}}
                                                        <ul class="active">
                                                        @foreach($category->subCategories as $subCategory)
                                                            <li>
                                                                <input class="custom-control-input category_checkbox" type="checkbox" @if(!empty($filter_cates) && in_array($subCategory->slug,$filter_cates)) checked @endif   att-name="{{ $subCategory->name }}" value="{{ $subCategory->slug }}" name="category[]" onchange="this.form.submit();" id="{{ $subCategory->id }}"> 
                                                                <label for="{{ $subCategory->id }}">{{ $subCategory->name }} [{{ count(App\Models\ProductAllModel::where('sub_category_id', $subCategory->id)->get()) }}]</label>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                    <?php $counter++; ?>
                                            @endforeach
                                        @endif

                                    </div>
                                </div>
                            </div>
                    @endforeach
                </form>

                </div>
            </div>

            <div class="col-xs-12 col-md-9">

                <div class="col-xs-12 col-md-12">
                    <div class="well well-sm">
                        <p>
                            Total products : {{$product->total()}}
                        </p>
                    </div>
                </div>

                    @foreach ($product as $row)  
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="product-grid" onclick="window.open('/armor-x-product/{{ $row->slug }}')">
                                <div class="product-image">
                                    <a href="#" class="image">
                                        <img class="pic-1" src="{{asset('storage/images/' . $row->cover_img)}}" class="img-responsive">
                                    </a>
                                    <span class="product-new-label">new</span>
                                    <ul class="product-links">
                                        <li><a href="#" data-tip="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                        <li><a href="#" data-tip="Quick View"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="#">{{ mb_strimwidth($row->name, 0, 50, "...", "UTF-8") }}</a></h3>
                                    <a class="add-to-cart" href="#">ติดต่อผู้ขาย</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                <div class="col-xs-12 col-md-12">
                    <center>{{$product->appends($_GET)->links('vendor.pagination.default')}}</center>
                </div>

        </div>
    </div>
</section>

@endsection
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

@section('script')
<script>
    $("#accordion-3 li .sub-title").click(function(e) {
        var id =$(this).attr("data-id");
        $currItem = $('[data-id=ul-' + id + ']');
        $currItem2 = $('[data-id=icon-' + id + ']');

        $(this).parents().siblings().find('ul').removeClass('active');
        //$(this).parents().siblings().find('i').removeClass('fa-plus');

        $currItem.addClass('active');
        //$currItem2.addClass('fa-minus');

        e.preventDefault();
    });

    function openNavArmorx() {
        document.getElementById("mySidenavArmorx").style.width = "100%";
    }

    function closeNavArmorx() {
        document.getElementById("mySidenavArmorx").style.width = "0";
    }
</script>
@endsection
