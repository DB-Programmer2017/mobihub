@extends('/admin/layout/home-admin')


{{-- Title Website --}}
@section('title', 'MOBIHUB | Products')

{{-- Link CSS --}}
@section('link')

{{-- bootstrap --}}
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> --}}
{{-- <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script> --}}
{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script> --}}

{{-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script> --}}

{{-- <script src="//cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script> --}}

@endsection


{{-- Body HTML --}}
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col col-sm-5 col-xs-12">
                            <h4 class="title">Product <span>All</span></h4>
                        </div>
                        <div class="col-sm-7 col-xs-12 text-right">
                            <button type="button" class="btn btn-info btn-sm show-modal" data-toggle="modal" data-target="#myModal">
                                <i class="fas fa-plus"></i> New Product
                            </button> 
                        </div>
                    </div>
                </div>
                <div class="panel-body table-responsive">  
                    <table class="table table-hover" id="datatable2">
                        <thead>
                            <tr class="active">
                                <th>#</th>
                                <th width="10%">Part Number</th>
                                <th width="10%">Dealer</th>
                                <th width="10%">Category</th>
                                <th>Product Name</th>
                                <th width="10%">Photo</th>
                                <th width="5%">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($product_cate as $row)    
                            <tr>
                                <td>{{$product_cate->firstItem()+$loop->index}}</td>
                                <td>
                                    {{$row->part_number}}
                                </td>
                                <td>
                                    {{$row->dealer['name']}}
                                </td>
                                <td>{{$row->category['name'] }}</td>
                                <td>
                                    {{-- <a href="#"  onclick="EditCate('{{$row->id}},{{$row->name}},{{$row->cover_img}},{{$row->is_enable}},{{$row->description}},{{$row->category->id}},{{$row->brand_id}}')" data-toggle="modal" data-target="#myModal2">
                                        {{$row->name}}
                                    </a> --}}

                                    <a href="javascript:void(0)" onclick="Dealer('{{$row->dealer_id}}')" class="edit" data-id="{{ $row->id }}" data-toggle="modal" data-target="#myModal2"> {{$row->name}}</a>
                                </td>
                                <td>
                                    @if ($row->cover_img  !='')
                                        <img src="{{asset('storage/images/' . $row->cover_img)}}" class="img-responsive">
                                    @endif
                                </td>
                                <td>
                                    @if ($row->is_enable == "1")
                                        <span class="label label-success">Publish</span>
                                    @else 
                                        <span class="label label-danger">Suspend</span>
                                    @endif
                                </td>
                                
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{-- <div class="panel-footer">
                    <div class="row">
                        <div class="col col-xs-4">Page 1 of 5</div>
                        <div class="col-xs-8">
                            <ul class="pagination hidden-xs pull-right">
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                            </ul>
                            <ul class="pagination visible-xs pull-right">
                                <li><a href="#"><</a></li>
                                <li><a href="#">></a></li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <form action="{{route('addProductAll')}}" method="post" id="editForm" enctype="multipart/form-data">
            @csrf
            {{-- {{ mothod_field('PUT') }} --}}

            <div class="col-md-12">
                <div class="modal-box">
                    <!-- Modal -->
                    <div class="modal fade product-modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content clearfix">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <div class="modal-body">
                                    <h3 class="title">Add Product</h3>

                                    <div class="col-xs-12 col-md-3 form-group">
                                        Topic 
                                        <select class="form-control" id="brand_id" name="brand_id">
                                            <option value="">New</option>
                                        </select>
                                    </div>

                                    <div class="col-xs-12 col-md-3 form-group">
                                        Dealer :
                                        <select class="form-control" id="dealer_id" name="dealer_id">
                                            <option value=''>-- Select Dealer --</option>
                                            @foreach ($dealer as $row)    
                                                <option value="{{ $row->id }}">{{ $row->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-xs-12 col-md-3 form-group">
                                        Category : 
                                        <select class="form-control" id="category_id" name="category_id">
                                        </select>
                                    </div>

                                    <div class="col-xs-12 col-md-3 form-group">
                                        Part Number(SKU) : 
                                        <input type="text" id="part_number" name="part_number" class="form-control" placeholder=" Part Number">
                                    </div>

                                    <div class="col-xs-12 col-md-12 form-group">
                                        Product Name : 
                                        <input type="hidden" id="cate_id" name="cate_id" value="">
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Name">
                                    </div>

                                    <div class="col-xs-12 col-md-12 form-group">
                                        Product Tag : 
                                        <input type="text" id="product_tag" name="product_tag" class="form-control" placeholder="Product Tag">
                                    </div>

                                    <div class="col-xs-12 col-md-12 form-group">
                                        Meta Tag : 
                                        <input type="text" id="meta_tag" name="meta_tag" class="form-control" placeholder=" Meta Tag">
                                    </div>

                                    <div class="col-xs-12 col-md-12 form-group">
                                        Description : 
                                        <textarea style="height: 150px" id="description" name="description" class="form-control ckeditor" placeholder="Description"></textarea>
                                    </div>

                                    <div class="col-xs-12 col-md-12">
                                        <div class="form-upload2">
                                            <center><span>Upload an Image</span></center>
                                            <i class="fas fa-cloud-upload-alt"></i>
                                            <center>
                                                <input type="file" id="cover_img" name="cover_img">
                                            </center>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-md-12" style="margin-bottom:30px">
                                        <div class="input-group hdtuto control-group lst increment" >
                                            <input type="file" name="filenames[]" class="myfrm form-control">
                                            <div class="input-group-btn"> 
                                              <button class="btn btn-success" type="button"><i class="fas fa-plus"></i> Add</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-12">
                                        <div class="clone hide">
                                            <div class="hdtuto control-group lst input-group" style="margin-top:10px">
                                              <input type="file" name="filenames[]" class="myfrm form-control">
                                              <div class="input-group-btn"> 
                                                <button class="btn btn-danger" type="button"><i class="fas fa-trash-alt"></i></button>
                                              </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="btn-save">Save</button>

                                    {{-- @if(session("success"))
                                        <div class="alert alert-success"><i class="fas fa-check"></i> {{session("success")}}</div>
                                    @endif --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="container">
    <div class="row">
        <form action="{{route('editProductAll')}}" method="post" id="editForm" enctype="multipart/form-data">
            @csrf
            {{-- {{ mothod_field('PUT') }} --}}

            <div class="col-md-12">
                <div class="modal-box">
                    <!-- Modal -->
                    <div class="modal fade product-modal" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content clearfix">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <div class="modal-body">
                                    <h3 class="title">Edit Product</h3>

                                    <div class="col-xs-12 col-md-3 form-group">
                                        Topic 
                                        <select class="form-control" id="topic_id2" name="topic_id2">
                                            <option value="">New</option>
                                        </select>
                                    </div>

                                    <div class="col-xs-12 col-md-3 form-group">
                                        Dealer :
                                        <select class="form-control" id="dealer_id2" name="dealer_id2">
                                            {{-- <option value='0'>-- Select Dealer --</option> --}}
                                            @foreach ($dealer as $row)    
                                                <option value="{{ $row->id }}">{{ $row->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-xs-12 col-md-3 form-group">
                                        Category : 
                                        <select class="form-control" id="category_id2" name="category_id2">
                                            {{-- <option value='0'>-- Select Category --</option> --}}
                                            {{-- @foreach ($category as $row)    
                                                <option value="{{ $row->id }}">{{ $row->name }}</option>
                                            @endforeach --}}
                                        </select>
                                    </div>

                                    <div class="col-xs-12 col-md-3 form-group">
                                        Part Number(SKU) : 
                                        <input type="text" id="part_number2" name="part_number2" class="form-control" placeholder="Part Number">
                                    </div>

                                    <div class="col-xs-12 col-md-12 form-group">
                                       Product Name : 
                                        <input type="hidden" readonly id="product_id2" name="product_id2" value="">
                                        <input type="hidden" id="img_cover_name" name="img_cover_name" value="">
                                        <input type="text" id="name2" name="name2" class="form-control" placeholder="Name" value="">
                                    </div>

                                    <div class="col-xs-12 col-md-12 form-group">
                                        Product Tag : 
                                        <input type="text" id="product_tag2" name="product_tag2" class="form-control" placeholder="Product Tag ">
                                    </div>

                                    <div class="col-xs-12 col-md-12 form-group">
                                        Meta Tag : 
                                        <input type="text" id="meta_tag2" name="meta_tag2" class="form-control" placeholder="Meta Tag">
                                    </div>

                                    <div class="col-xs-12 col-md-12 form-group">
                                        Description : 
                                        <textarea style="height: 250px" id="description2" name="description2" class="form-control ckeditor" placeholder="Description"></textarea>
                                    </div>

                                    <div class="col-xs-12 col-md-3">
                                        <div class="form-group">
                                            Sale Price :
                                            <input type="text" class="form-control" name="price_sale2" id="price_sale2">
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-md-3">
                                        <div class="form-group">
                                            Stock :
                                            <select class="form-control" name="stock_amount2" id="stock_amount2">
                                                <option value="0"></option>
                                                <?php for($i=1;$i<=100;$i++){?>
                                                    <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-md-3">
                                        <div class="form-group">
                                            Show on Quotation :
                                            <select class="form-control" name="is_quo2" id="is_quo2">
                                                <option value="0">No</option>
                                                <option value="1">Yes</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-md-2">
                                        <div class="form-group">
                                            Status :
                                            <select class="form-control" name="is_enable2" id="is_enable2">
                                                <option value="1">Publish</option>
                                                <option value="0">Suspend</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-md-12">
                                        <div id="product-cover"></div>
                                    </div>

                                    <div class="col-xs-12 col-md-12">
                                        <div class="form-upload2">
                                            <center><span>Upload and Image</span></center>
                                            <i class="fas fa-cloud-upload-alt"></i>
                                            <input type="file" id="cover_img2" name="cover_img2">
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-md-12 inside">
                                        <div class="col-xs-12 col-md-12">
                                            <div class="input-group hdtuto2 control-group lst increment2" >
                                                <input type="file" name="filenames2[]" class="myfrm form-control">
                                                <div class="input-group-btn"> 
                                                <button class="btn btn-success new-file" type="button"><i class="fas fa-plus"></i> Add</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-12" style="margin-bottom:30px ">
                                            <div class="clone2 hide">
                                                <div class="hdtuto2 control-group lst input-group" style="margin-top:10px">
                                                <input type="file" name="filenames2[]" class="myfrm form-control">
                                                <div class="input-group-btn"> 
                                                    <button class="btn btn-danger remove-file" type="button"><i class="fas fa-trash-alt"></i></button>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="col-xs-12 col-md-12"></div>
                                        <div id="product-list"></div>
                                    </div>

                                    <div class="col-xs-12 col-md-12 inside2">
                                        {{-- Option --}}
                                        <div class="col-xs-12 col-md-12">
                                            <div class="input-group hdtuto3 control-group lst increment3" >
                                                <input type="text" name="filenames3[]" class="myfrm form-control">
                                                <div class="input-group-btn"> 
                                                <button class="btn btn-success new-file3" type="button"><i class="fas fa-plus"></i> Add</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-md-12" style="margin-bottom:30px ">
                                            <div class="clone3 hide">
                                                <div class="hdtuto3 control-group lst input-group" style="margin-top:10px">
                                                <input type="text" name="filenames3[]" class="myfrm form-control">
                                                <div class="input-group-btn"> 
                                                    <button class="btn btn-danger remove-file3" type="button"><i class="fas fa-trash-alt"></i></button>
                                                    {{-- <button class="btn btn-warning" type="button"><i class="fas fa-camera"></i></button> --}}
                                                </div>
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-md-12" style="margin-top: 20px;padding:0px">
                                                <div id="choice-list"></div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-md-12">
                                        <button class="btn-save">Save</button>
                                    </div>
                                 

                                    {{-- @if(session("success"))
                                        <div class="alert alert-success"><i class="fas fa-check"></i> {{session("success")}}</div>
                                    @endif --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="container">
    <div class="row">
        <form action="#" method="post" id="ChoiceItemList" enctype="multipart/form-data">
            @csrf
            <div class="col-md-12">
                <div class="modal-box">
                    <!-- Modal -->
                    <div class="modal fade product-modal" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content clearfix">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <div class="modal-body">
                                    <h3 class="title" id="choice-name">Option : </h3>
                                    <input type="hidden" readonly id="option_id" name="option_id">

                                    <table id="customers">
                                        <tr>
                                          <th>#</th>
                                          <th>Option List</th>
                                          <th>Status</th>
                                        </tr>
                                        <tr>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                        </tr>
                                    </table>

                                    <div class="form-group">
                                        <div class="input-group">
                                          <input type="text" class="form-control" id="option_name_list" name="option_name_list">
                                          <span class="input-group-btn">
                                            <button class="btn btn-success" type="button" id="btnAddOptionList">Add</button>
                                          </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

<script>
    //$(".cate-2").hide();
    $(".show-modal2").hide();

    function EditCate(id){
        $('#product_id2').val("");
        $('#name2').val("");
        $('#img_cover_name').val("");
        $('#is_enable2').val("0");
        $('#description2').val("");

        var str = id;
        var res = str.split(",");

        //$(".show-modal2").click();
        $('#product_id2').val(res[0]);
        $('#name2').val(res[1]);
        $('#img_cover_name').val(res[2]);
        $('#is_enable2').val(res[3]);
        $('#description2').val(res[4]);
        $('#category_id2').val(res[5]);
        $('#brand_id2').val(res[6]);
    }
</script>

<script type="text/javascript">
    $(document).ready(function() {
        // $('.ckeditor').ckeditor();

      $(".btn-success").click(function(){ 
          var lsthmtl = $(".clone").html();
          $(".increment").after(lsthmtl);
      });
      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".hdtuto").remove();
      });

      /*Edit*/
      $(".new-file").click(function(){ 
          var lsthmtl = $(".clone2").html();
          $(".increment2").after(lsthmtl);
      });
      $("body").on("click",".remove-file",function(){ 
          $(this).parents(".hdtuto2").remove();
      });

      /*Option*/
      $(".new-file3").click(function(){ 
          var lsthmtl = $(".clone3").html();
          $(".increment3").after(lsthmtl);
      });
      $("body").on("click",".remove-file3",function(){ 
          $(this).parents(".hdtuto3").remove();
      });

    });
</script>

<script>
    var product_category = document.getElementById('product_category');

    function openModal(){
        product_category.style.display = "block";
    }
</script>

<script type="text/javascript">
    function DeleteImage(id){   
        var result = confirm("Want to delete? "+id);
        var token = $("meta[name='csrf-token']").attr("content");
        var id = id;
        if (result==true) {
            $.ajax(
            {
                url: "/admin/product/softdeleteImage/"+id,
                type: 'get',
                data: {

                    "id": id,
                    "_token": token,
                },
                success: function (){

                    console.log("it Works");

                }
            });
        }
    }

    function ChoiceItem(id){
       // var id= id;
        var id=id;

        $.get('/admin/product/' + id +'/ChoiceList', function (res) {
            $('#choice-name').html("Option : "+res.name);
            $("#option_id").val(res.id);
        });
    }

    $("#btnAddOptionList").click(function() {
        var choice_id           = $("#option_id").val();
        var option_name_list    = $("#option_name_list").val();
        var product_id          = $("#product_id2").val();

        if(choice_id !="" && option_name_list !=""){
            $.ajax({
                type:'POST',
                url:"{{ route('ajaxRequestPost') }}",
                data:{
                    choice_id:choice_id, 
                    option_name_list:option_name_list,
                    product_id:product_id
                },
                success:function(data){
                    alert(data.success);
                }
            });
        }
    });

    function Dealer(id){
        var dealer_id = id;
            // Empty the dropdown
            $('#category_id2').find('option').not(':first').remove();

            // AJAX request  
            $.ajax({
                url: '/admin/product/getCategory/'+dealer_id,
                type: 'get',
                dataType: 'json',
                success: function(response){
                    var len = 0;

                    if(response['data'] != null){
                        len = response['data'].length;
                    }
                    if(len > 0){
                        // Read data and create <option >
                        for(var i=0; i<len; i++){
                            var id = response['data'][i].id;
                            var name = response['data'][i].name;

                            var option = "<option value='"+id+"'>"+name+"</option>"; 
                            $("#category_id2").append(option); 
                        }
                    }

                }
            });
    }
    
    $(document).ready(function($){
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#dealer_id').on('change',function(e) {
            var dealer_id = e.target.value;

            $.ajax({
                url: '/admin/product/getCategory/'+dealer_id,
                type: 'get',
                dataType: 'json',
                success: function(response){
                    $("#category_id").empty();

                    var len = 0;

                    if(response['data'] != null){
                        len = response['data'].length;
                    }
                    if(len > 0){
                        // Read data and create <option >
                        for(var i=0; i<len; i++){
                            var id = response['data'][i].id;
                            var name = response['data'][i].name;

                            var option = "<option value='"+id+"'>"+name+"</option>"; 
                            $("#category_id").append(option); 
                        }
                    }

                }
            });
        });


        $('#dealer_id2').on('change',function(e) {
            var dealer_id = e.target.value;
            
            // Empty the dropdown
            //$('#sel_emp').find('option').not(':first').remove();

            // AJAX request  
            $.ajax({
                url: '/admin/product/getCategory/'+dealer_id,
                type: 'get',
                dataType: 'json',
                success: function(response){
                    $("#category_id2").empty();

                    var len = 0;

                    if(response['data'] != null){
                        len = response['data'].length;
                    }
                    if(len > 0){
                        // Read data and create <option >
                        for(var i=0; i<len; i++){
                            var id = response['data'][i].id;
                            var name = response['data'][i].name;

                            var option = "<option value='"+id+"'>"+name+"</option>"; 
                            $("#category_id2").append(option); 
                        }
                    }

                }
            });
        });

       $('#addNewBook').click(function () {
          $('#addEditBookForm').trigger("reset");
          $('#ajaxBookModel').html("Add Book");
          $('#ajax-book-model').modal('show');
       });

       
       $('body').on('click', '.edit', function () {
        $('#product-cover').html("");

           var softwareEnq_id = $(this).data('id');

           $.get('/admin/product/' + softwareEnq_id +'/editProduct', function (res) {
                $('#product-list').html("");
                $('#product_id2').val(res.id);
                $('#name2').val(res.name);
                $('#dealer_id2').val(res.dealer_id);
                $('#category_id2').val(res.category_id);
                $('#product_tag2').val(res.product_tag);
                $('#meta_tag2').val(res.meta_tag);
                $('#part_number2').val(res.part_number);
                $('#price_sale2').val(res.price_sale);
                $('#is_quo2').val(res.is_quo);
                $('#stock_amount2').val(res.stock_amount);
                //$('#description2').val(res.description);

                CKEDITOR.instances['description2'].setData(res.description);

                $('#product-cover').append('<center><img src="{{url('storage/images/')}}/'+res.cover_img +'" class="img-responsive" alt="">'+
                //'&<button type="button" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i> Delete</button>'+
                //'&<a href="#" onclick="return confirm('คุณต้องการลบข้อมูลนี้หรือไม่?')" class="btn btn-danger btn-xs">ลบ</a>'+
                //'<button type="button" onclick="DeleteImage('+res.id+')" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i> Delete</button>'+
                '</center>');
                
                //image
                $.get('/admin/product/' + softwareEnq_id +'/ImageProduct', function (data) {
                    if(data.length>0) {
                        for(i=0;i<data.length;i++) {     
                                //$('#product-list').append('<div class="col-xs-12 col-md-3 col-sm-3"><img src="{{ '+img+' }}" class="img-responsive"></div>');
                                // $('#product-list').append('<div class="col-md-3 col-sm-3 hero-feature"><div class="thumbnail"><img src="{{url('storage/images/')}}/'+data[i]['img'] +'" class="img-responsive" alt=""><button type="button"  onclick="DeleteImage('+data[i]['id']+')" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i> Delete Pic</button></div>');
                            $('#product-list').append('<div class="col-md-3 col-sm-3 hero-feature"><div class="thumbnail"><img src="{{url('storage/images/')}}/'+data[i]['img'] +'" class="img-responsive" alt=""><a href="{{url('/admin/product/softdeleteImage')}}/'+data[i]['id']+'"  class="btn btn-danger btn-xs" type="button"><i class="fas fa-trash-alt"></i> Delete</button></div>');
                        }   
                    }
                });

                //image
                $.get('/admin/product/' + softwareEnq_id +'/ChoiceProduct', function (data2) {
                    if(data2.length>0) {
                        for(i=0;i<data2.length;i++) {     
                            var n = i+1;
                                //$('#product-list').append('<div class="col-xs-12 col-md-3 col-sm-3"><img src="{{ '+img+' }}" class="img-responsive"></div>');
                                // $('#product-list').append('<div class="col-md-3 col-sm-3 hero-feature"><div class="thumbnail"><img src="{{url('storage/images/')}}/'+data[i]['img'] +'" class="img-responsive" alt=""><button type="button"  onclick="DeleteImage('+data[i]['id']+')" class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i> Delete Pic</button></div>');

                            $('#choice-list').append('<div class="col-md-6 col-sm-6 form-group"><div class="input-group"><span class="input-group-addon">'+n+'</span><input type="text" value="'+data2[i]['name']+'" class="form-control"><span class="input-group-btn"><button class="btn btn-success" onclick="ChoiceItem('+data2[i]['id']+')" title="Add List" type="button" data-toggle="modal" data-target="#myModal3"><i class="fas fa-plus-circle"></i></button><button class="btn btn-warning" title="Cancel" type="button"><i class="fas fa-times-circle"></i></button></span></div></div>');
                        }   
                    }
                });
            })

            // $.ajax({
            //    type:"POST",
            //    url: "{{ url('edit-book') }}",
            //    data: { id: id },
            //    dataType: 'json',
            //    success: function(res){
            //      $('#id').val(res.id);
            //      $('#name2').val(res.name);
            //      $('#brand_id2').val(res.brand_id);
            //      $('#category_id2').val(res.category_id);
            //      $('#meta_tag2').val(res.meta_tag);
            //      $('#description2').val(res.description);
            //   },
            // error: function (res) {
            //     alert(res);
            //   }
            // });
       });

       $('body').on('click', '.delete', function () {
          if (confirm("Delete Record?") == true) {
           var id = $(this).data('id');
            
           // ajax
           $.ajax({
               type:"POST",
               url: "{{ url('delete-book') }}",
               data: { id: id },
               dataType: 'json',
               success: function(res){
                 window.location.reload();
              }
           });
          }
       });
       $('body').on('click', '#btn-save', function (event) {
             var id = $("#id").val();
             var title = $("#title").val();
             var code = $("#code").val();
             var author = $("#author").val();
             $("#btn-save").html('Please Wait...');
             $("#btn-save"). attr("disabled", true);
            
           // ajax
           $.ajax({
               type:"POST",
               url: "{{ url('add-update-book') }}",
               data: {
                 id:id,
                 title:title,
                 code:code,
                 author:author,
               },
               dataType: 'json',
               success: function(res){
                window.location.reload();
                    $("#btn-save").html('Submit');
                    $("#btn-save"). attr("disabled", false);
              }
           });
       });
   });
   </script>

    <script type="text/javascript">
        CKEDITOR.replace('description2', {
            filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form',
            customConfig: '/js/admin/ckeditor/config.js'
        });
    </script>
@endsection