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

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col col-sm-5 col-xs-12">
                            <h4 class="title">Product <span>Brand</span></h4>
                        </div>
                        <div class="col-sm-7 col-xs-12 text-right">
                            <button type="button" class="btn btn-info btn-sm show-modal" data-toggle="modal" data-target="#myModal">
                                <i class="fas fa-plus"></i> New Brand
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
                                <th>Dealer</th>
                                <th>Brand</th>
                                <th>Photo</th>
                                <th  width="5%">Status</th>
                                {{-- <th>Action</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($product_cate as $row)    
                            <tr>
                                <td>{{$product_cate->firstItem()+$loop->index}}</td>
                                <td>{{$row->updated_at}}</td>
                                <td>{{$row->dealer['name'] }}</td>
                                {{-- <td>{{$row->name}}</td> --}}
                                <td>
                                    <a href="javascript:void(0)" class="edit" data-id="{{ $row->id }}" data-toggle="modal" data-target="#myModal2"> {{$row->name}}</a>
                                    {{-- {{$row->name}} --}}
                                </td>
                                <td>
                                    <img src="{{asset('storage/images/' . $row->cover_img)}}" class="img-responsive">
                                </td>
                                <td>
                                    @if ($row->is_enable == "1")
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

<div class="container">
    <div class="row">
        <form action="{{route('addProductBrand')}}" method="post" id="editForm" enctype="multipart/form-data">
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
                                    <h3 class="title">Brand</h3>

                                    <div class="col-xs-12 col-md-12 form-group">
                                        Dealer 
                                        <select class="form-control" id="dealer_id" name="dealer_id">
                                            @foreach ($dealer as $row)    
                                                <option value="{{ $row->id }}">{{ $row->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-xs-12 col-md-12 form-group">
                                        <input type="hidden" id="cate_id" name="cate_id" value="">
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Name">
                                    </div>

                                    <div class="col-xs-12 col-md-12 form-group">
                                        <select class="form-control" name="is_enable" id="is_enable">
                                            <option value="1">Publish</option>
                                            <option value="0">Suspend</option>
                                        </select>
                                    </div>

                                    <div class="col-xs-12 col-md-12">
                                        <div class="form-upload">
                                            <i class="fas fa-cloud-upload-alt"></i>
                                            <input type="file" id="cover_img" name="cover_img">
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
        <form action="{{route('editProductBrand')}}" method="post" id="editForm" enctype="multipart/form-data">
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
                                    <h3 class="title">Brand</h3>

                                    <div class="col-xs-12 col-md-12 form-group">
                                        Dealer :
                                        <select class="form-control" id="dealer_id2" name="dealer_id2">
                                            @foreach ($dealer as $row)    
                                                <option value="{{ $row->id }}">{{ $row->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-xs-12 col-md-12 form-group">
                                        Brand : 
                                        <input type="hidden" id="cate_id2" name="cate_id2" value="">
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

                                    <div class="col-xs-12 col-md-12">
                                        <div id="product-cover"></div>
                                    </div>

                                    <div class="col-xs-12 col-md-12">
                                        <div class="form-upload">
                                            <i class="fas fa-cloud-upload-alt"></i>
                                            <input type="file" id="cover_img2" name="cover_img2">
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

@endsection

@section('script')

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

           $.get('/admin/product-brand/' + softwareEnq_id +'/editBrand', function (res) {
                $('#cate_id2').val(res.id);
                $('#dealer_id2').val(res.dealer_id);
                $('#name2').val(res.name);
                $('#is_enable2').val(res.is_enable);
                $('#size2').val(res.size);
                $('#img_cover_name').val(res.cover_img);
            
                if(res.cover_img ==''){
                    $('#product-cover').hide();
                }else{
                    $('#product-cover').show();
                    $('#product-cover').append('<center><img src="{{url('storage/images/')}}/'+res.cover_img +'" class="img-responsive" alt="">'+
                '</center>');
                }
            })
       });
</script>


@endsection