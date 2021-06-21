@extends('/admin/layout/home-admin')


{{-- Title Website --}}
@section('title', 'MOBIHUB | Home')

{{-- Link CSS --}}
@section('link')

{{-- bootstrap --}}
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> --}}
{{-- <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script> --}}
{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script> --}}

@endsection


{{-- Body HTML --}}
@section('content')

{{-- Table --}}
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-12 col-sm-5 col-xs-12">
                            <h4 class="title">Product <span>Sub Category</span></h4>
                        </div>
                        <div class="col-sm-7 col-xs-12 text-right">
                            <button type="button" class="btn btn-info btn-sm show-modal" data-toggle="modal" data-target="#myModal">
                                <i class="fas fa-plus"></i> New Category
                              </button>

                              
                        </div>
                    </div>
                </div>
                <div class="panel-body table-responsive">  
                    <table class="table table-hover" id="datatable2">
                        <thead>
                            <tr class="active">
                                <th width="3%">#</th>
                                <th width="13%">Updated</th>
                                <th  width="13%">Dealer</th>
                                <th  width="13%">Brand</th>
                                <th  width="13%">Category</th>
                                <th>Sub Category</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($sub_categories as $sub_category)    
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{$sub_category->updated_at}}</td>
                                <td>{{$sub_category->dealer->name }}</td>
                                <td>{{$sub_category->brand->name }}</td>
                                <td>{{$sub_category->category->name }}</td>
                                <td>
                                    <a href="javascript:void(0)" class="edit" data-id="{{ $sub_category->id }}" data-toggle="modal" data-target="#myModal2"> {{$sub_category->name}}</a>
                                    {{-- {{$row->name}} --}}
                                </td>
                                <td>
                                    @if ($sub_category->is_enable == "1")
                                        <span class="label label-success">Publish</span>
                                    @else 
                                        <span class="label label-danger">Suspend</span>
                                    @endif
                                </td>
                                {{-- <td>
                                    <button type="button" onclick="EditCate('{{$row->id}},{{$row->name}},{{$row->cover_img}},{{$row->is_enable}}')"  class="btn btn-warning btn-sm show-modal2" data-toggle="modal" data-target="#myModal2">
                                        <i class="far fa-edit"></i> Edit
                                      </button>
                                </td> --}}
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

{{-- AddNew Modal --}}
<div class="container">
    <div class="row">
        <form action="{{route('sub-category.store')}}" method="post" id="editForm">
            @csrf
            {{-- {{ mothod_field('PUT') }} --}}

            <div class="col-md-12">
                <div class="modal-box">
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content clearfix">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <div class="modal-body">
                                    <h3 class="title">Category</h3>

                                    <div class="col-xs-12 col-md-12 form-group">
                                        Dealer :
                                        <select class="form-control" id="dealer_id" name="dealer_id">
                                            <option value=''>-- Select Dealer --</option>
                                            @foreach ($dealers as $dealer)    
                                                <option value="{{ $dealer->id }}">{{ $dealer->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-xs-12 col-md-12 form-group">
                                        Brand :
                                        <select class="form-control" id="brand_id" name="brand_id">
                                        </select>
                                    </div>

                                    <div class="col-xs-12 col-md-12 form-group">
                                        Category :
                                        <select class="form-control" id="category_id" name="category_id">
                                        </select>
                                    </div>

                                    <div class="col-xs-12 col-md-12 form-group">
                                        Sub Category :
                                        <input type="hidden" id="sub_category_id" name="sub_category_id" value="">
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Name">
                                    </div>

                                    <div class="col-xs-12 col-md-12 form-group">
                                        <select class="form-control" name="is_enable" id="is_enable">
                                            <option value="1">Publish</option>
                                            <option value="0">Suspend</option>
                                        </select>
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

{{-- Edit Category Modal --}}
<div class="container">
    <div class="row">
        <form action="{{route('sub-category.update')}}" method="post" id="editForm">
            @csrf
            {{-- {{ mothod_field('PUT') }} --}}

            <div class="col-md-12">
                <div class="modal-box">
                    <!-- Modal -->
                    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content clearfix">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                <div class="modal-body">
                                    <h3 class="title">Category</h3>

                                    <div class="col-xs-12 col-md-12 form-group">
                                        Dealer :
                                        <select class="form-control" id="dealer_id2" name="dealer_id2">
                                            @foreach ($dealers as $dealer)    
                                                <option value="{{ $dealer->id }}">{{ $dealer->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                    <div class="col-xs-12 col-md-12 form-group">
                                        Brand : 
                                        <select class="form-control" id="brand_id2" name="brand_id2">
                                            @foreach ($brands as $brand)    
                                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-xs-12 col-md-12 form-group">
                                        Category :
                                        <select class="form-control" id="category_id2" name="category_id2">
                                            @foreach ($categories as $category)    
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-xs-12 col-md-12 form-group">
                                        Sub Category :
                                        <input type="hidden" readonly id="sub_category_id2" name="sub_category_id2" value="">
                                        <input type="hidden" id="img_cover_name" name="img_cover_name" value="">
                                        <input type="text" id="name2" name="name2" class="form-control" placeholder="Name">
                                    </div>


                                    <div class="col-xs-12 col-md-12 form-group">
                                        Status :
                                        <select class="form-control" name="is_enable2" id="is_enable2">
                                            <option value="1">Publish</option>
                                            <option value="0">Suspend</option>
                                        </select>
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

@endsection

@section('script')

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script> --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(".show-modal2").hide();

    function EditCate(id){
        var str = id;
        var res = str.split(",");

        //$(".show-modal2").click();
        $('#cate_id2').val(res[0]);
        $('#name2').val(res[1]);
        $('#img_cover_name').val(res[2]);
        $('#is_enable2').val(res[3]);
    }
</script>

<script>
    var product_category = document.getElementById('product_category');

    function openModal(){
        product_category.style.display = "block";
    }

    $('body').on('click', '.edit', function () {
        $('#product-cover').html("");
           var softwareEnq_id = $(this).data('id');
// alert(softwareEnq_id);
           $.get('/admin/sub-category/' + softwareEnq_id +'/editSubCategory', function (res) {
                // alert(res.id);
                $('#sub_category_id2').val(res.id);
                $('#dealer_id2').val(res.dealer_id);
                $('#name2').val(res.name);
                $('#is_enable2').val(res.is_enable);
                $('#brand_id2').val(res.brand_id);
                $('#category_id2').val(res.category_id);
            
                if(res.cover_img ==''){
                    $('#product-cover').hide();
                }else{
                    $('#product-cover').show();
                    $('#product-cover').append('<center><img src="{{url('storage/images/')}}/'+res.cover_img +'" class="img-responsive" alt="">'+
                '</center>');
                }
                
                // $.get('/admin/product/' + softwareEnq_id +'/ImageProduct', function (data) {
                //     if(data.length>0) {
                //         for(i=0;i<data.length;i++) {     
                //             $('#product-list').append('<div class="col-md-3 col-sm-3 hero-feature"><div class="thumbnail"><img src="{{url('storage/images/')}}/'+data[i]['img'] +'" class="img-responsive" alt=""><a href="{{url('/admin/product/softdeleteImage')}}/'+data[i]['id']+'"  class="btn btn-danger btn-xs" type="button"><i class="fas fa-trash-alt"></i> Delete</button></div>');
                //         }   
                //     }
                // });
            })
       });


    $(document).ready(function($){
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

//ตอนเพิ่มSUb categoryใหม่ หาbrand ของ dealer
        $('#dealer_id').on('change',function(e) {
            var dealer_id = e.target.value;
// alert(1);
            $.ajax({
                url: '/admin/product/getBrand/'+dealer_id,
                type: 'get',
                dataType: 'json',
                success: function(response){
                    $("#brand_id").empty()
                    $("#category_id").empty();;

                    var len = 0;

                    if(response['data'] != null){
                        len = response['data'].length;
                        var select = "<option value=''>-- Select Brand --</option>";
                        $("#brand_id").append(select);
                    }
                    if(len > 0){
                        // Read data and create <option >
                        for(var i=0; i<len; i++){
                            var id = response['data'][i].id;
                            var name = response['data'][i].name;

                            var option = "<option value='"+id+"'>"+name+"</option>"; 
                            $("#brand_id").append(option); 
                        }
                    }

                }
            });
        });
    });

//ตอนเพิ่มSUb categoryใหม่ หาcategory ของ brand
    $('#brand_id').on('change',function(e) {
            var brand_id = e.target.value;
// alert(brand_id);
            $.ajax({
                url: '/admin/product/getCategory/'+brand_id,
                type: 'get',
                dataType: 'json',
                success: function(response){
                    $("#category_id").empty();

                    var len = 0;

                    if(response['data'] != null){
                        len = response['data'].length;
                        // alert(response['data']);
                        var select = "<option value=''>-- Select Category --</option>";
                        $("#category_id").append(select);
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

//ในmodal edit, ออโต้ ฟิลเตอร์ brand เวลาเปลี่ยนdealer 
        $('#dealer_id2').on('change',function(e) {
            var dealer_id = e.target.value;
            
            // Empty the dropdown
            //$('#sel_emp').find('option').not(':first').remove();

            // AJAX request  
            $.ajax({
                url: '/admin/product/getBrand/'+dealer_id,
                type: 'get',
                dataType: 'json',
                success: function(response){
                    $("#brand_id2").empty();
                    $("#category_id2").empty();
                    $("#sub_category_id2").empty();

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
                            $("#brand_id2").append(option); 
                        }
                    }

                }
            });
        });

//ในmodal edit, ออโต้ ฟิลเตอร์ category เวลาเปลี่ยนbrand
        $('#brand_id2').on('change',function(e) {
            var brand_id = e.target.value;
// alert(brand_id);
            // Empty the dropdown
            //$('#sel_emp').find('option').not(':first').remove();

            // AJAX request  
            $.ajax({
                url: '/admin/product/getCategory/'+brand_id,
                type: 'get',
                dataType: 'json',
                success: function(response){
                    $("#category_id2").empty();
                    $("#sub_category_id2").empty();

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

</script>


@endsection