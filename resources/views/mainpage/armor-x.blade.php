@extends('layout/home-2')

{{-- Title Website --}}
@section('title', 'MOBIHUB | Armor-X')

{{-- Link CSS --}}
@section('link')

@endsection

{{-- Body HTML --}}
@section('content')
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
            <div class="col-xs-12 col-md-12">
                <ul class="breadcrumb">
                    <li><a href="#">APPLE</a></li>
                    <li><a href="#">IPHONE 12 CASES (895)</a></li>
                </ul>
            </div>

            <div class="col-xs-12 col-md-3">
                <div class="panel-group" id="accordion-3" role="tablist" aria-multiselectable="true">
                @foreach ($brands as $brand)    
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a class="" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    {{ $brand->name }}
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                            @foreach ($brand->categories as $category)        
                                <li>
                                    <div class="sub-title" data-id="{{ $category->id }}">{{ $category->name }} <i data-id="icon-{{ $category->id }}" class="fas fa-plus arrow-right"></i></div>
                                    <ul @if($category->id ==1) class="active" @endif data-id="ul-{{ $category->id }}">
                                        <li>Iphone 12 Pro Max</li>
                                    </ul>
                                </li>
                            @endforeach    
                                
                            </div>
                        </div>
                    </div>
                @endforeach
                    {{-- <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    SAMSUNG
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean congue erat in luctus pretium. Praesent suscipit tempor consequat. Nam ac enim sit amet justo ultricies condimentum. Ut condimentum, risus at hendrerit ultricies, arcu diam lobortis metus, eu aliquam quam metus ut enim. Aliquam at mi quis tortor semper laoreet ut.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    LG
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean congue erat in luctus pretium. Praesent suscipit tempor consequat. Nam ac enim sit amet justo ultricies condimentum. Ut condimentum, risus at hendrerit ultricies, arcu diam lobortis metus, eu aliquam quam metus ut enim. Aliquam at mi quis tortor semper laoreet ut.
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>

            <div class="col-xs-12 col-md-9">
               
                <div class="col-xs-12 col-md-12">
                    Display 1-12 of 892 Products
                </div>
                
                <div id="postData">
                    @foreach ($product as $row)  
                        <div class="col-xs-12 col-md-3">
                            <div class="product-grid" onclick="window.open('/armor-x-product/{{ $row->id }}')">
                                <div class="product-image">
                                    <a href="#" class="image">
                                        <img class="pic-1" src="{{asset('storage/images/' . $row->cover_img)}}" class="img-responsive">
                                    </a>
                                    <span class="product-new-label">new</span>
                                    <ul class="product-links">
                                        {{-- <li><a href="#" data-tip="Add to Cart"><i class="fa fa-cart-arrow-down"></i></a></li> --}}
                                        <li><a href="#" data-tip="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                        {{-- <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li> --}}
                                        <li><a href="#" data-tip="Quick View"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="#">{{ mb_strimwidth($row->name, 0, 70, "...", "UTF-8") }}</a></h3>
                                    <a class="add-to-cart" href="#">ติดต่อผู้ขาย</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class='col-xs-12 col-md-12 loader-image' style='display:block;text-align:center;'>
                    <img src='/image/loading.gif' style="width:30px; height:30px; margin-top:20px" />
                </div>
                <div id="loadBtn" style="text-align:center">

            </div>

        </div>
    </div>
</section>

@endsection
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

@section('script')
<script>  
    $(document).ready(function(){
        var start = 0;
        var limit = 5;
        var reachedMax = false;

        getPostData();

        $(window).scroll(function(){
          if ($(window).scrollTop() == $(document).height()- $(window).height()) {
            getPostData();
          }
        });

        function getPostData(){
          $.ajax({
            url : 'fetch_posts.php',
            method: 'POST',
            dataType: 'text',
            cache:false,
            data : {getData:1,start:start,limit:limit},
            success:function(response){
              if(response=="") {
                $(".loader-image").hide();
                $("#loadBtn").html("<button type='button' class='btn btn-success btn-outline'>That is All</button>");
              }else{
                start += limit;
                $(".loader-image").show();
                $("#postData").append(response);  
              }
            }
          });
        }
    });

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
</script>
@endsection