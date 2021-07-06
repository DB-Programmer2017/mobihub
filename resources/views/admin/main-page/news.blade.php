@extends('/admin/layout/home-admin')


{{-- Title Website --}}
@section('title', 'MOBIHUB | News')

{{-- Link CSS --}}
@section('link')
    <style>
        .fa-star{
            color:#FF8F00;
        }
    </style>

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
                            <h4 class="title">News</h4>
                        </div>
                        <div class="col-sm-7 col-xs-12 text-right">
                            <button type="button" class="btn btn-info btn-sm show-modal" data-toggle="modal" data-target="#myModal">
                                <i class="fas fa-plus"></i> Add News
                            </button> 
                        </div>
                    </div>
                </div>
                <div class="panel-body table-responsive">  
                    <table class="table table-hover" id="datatable2">
                        <thead>
                            <tr class="active">
                                <th width="5%">#</th>
                                <th width="10%">Created</th>
                                <th width="30%">Name</th>
                                <th>Title</th>
                                <th width="10%">Photo</th>
                                <th width="3%"><i class="fas fa-eye"></i></th>
                                <th width="5%">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($product_cate as $row)    
                            <tr>
                                <td>
                                    @if ($row->recommen == "1")
                                    <i class="fas fa-star"></i>
                                    @endif

                                    {{$product_cate->firstItem()+$loop->index}}
                                </td>
                                <td>
                                    <a href="javascript:void(0)" onclick="Dealer('{{$row->dealer_id}}')" class="edit" data-id="{{ $row->id }}" data-toggle="modal" data-target="#myModal2">
                                        {{$row->created_at}}
                                    </a>
                                    <span class="label label-default" style="display:block;font-weight:normal">
                                        {{$row->news_category['name'] }}
                                    </span>
                                </td>
                                <td>
                                    <a href="javascript:void(0)" onclick="Dealer('{{$row->dealer_id}}')" class="edit" data-id="{{ $row->id }}" data-toggle="modal" data-target="#myModal2"> {{$row->name}}</a>
                                </td>
                                <td>{{$row->title }}</td>
                                <td>
                                    @if ($row->cover_img  !='')
                                        <img src="{{asset('storage/images/' . $row->cover_img)}}" class="img-responsive">
                                    @endif
                                </td>
                                <td>
                                    <span>{{ $row->reads }}</span>
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
        <form action="{{route('addNewsAll')}}" method="post" id="editForm" enctype="multipart/form-data">
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
                                    <h3 class="title">Add News</h3>

                                    <div class="col-xs-12 col-md-4 form-group">
                                        Category :
                                        <select class="form-control" id="category_id" name="category_id">
                                            @foreach ($category as $row)    
                                                <option value="{{ $row->id }}">{{ $row->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-xs-12 col-md-12 form-group">
                                        Name : 
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Name">
                                    </div>

                                    <div class="col-xs-12 col-md-12 form-group">
                                       Title : 
                                        <input type="text" id="title" maxlength="200" name="title" class="form-control" placeholder="Title">
                                    </div>

                                    <div class="col-xs-12 col-md-12 form-group">
                                        Description : 
                                        <textarea style="height: 150px" id="description" name="description" class="form-control ckeditor" placeholder="Description"></textarea>
                                    </div>

                                    <div class="col-xs-12 col-md-12">
                                        <div class="form-upload2">
                                            <center>
                                                <span>Upload an Image</span>
                                            </center>
                                            <i class="fas fa-cloud-upload-alt"></i>
                                            <center>
                                                <input type="file" id="cover_img" name="cover_img">
                                            </center>
                                            
                                        </div>
                                    </div>

                                    <button class="btn-save">Save</button>
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
        <form action="{{route('editNewsAll')}}" method="post" id="editForm" enctype="multipart/form-data">
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
                                    <h3 class="title">Edit News</h3>

                                    <div class="col-xs-12 col-md-4 form-group">
                                        Category :
                                        <select class="form-control" id="category_id2" name="category_id2">
                                            @foreach ($category as $row)    
                                                <option value="{{ $row->id }}">{{ $row->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-xs-12 col-md-12 form-group">
                                        Name : 
                                        <input type="text" id="name2" name="name2" class="form-control" placeholder="Name">
                                        <input type="hidden" readonly id="product_id2" name="product_id2" class="form-control">
                                    </div>

                                    <div class="col-xs-12 col-md-12 form-group">
                                       Title : 
                                        <input type="text" id="title2" maxlength="200" name="title2" class="form-control" placeholder="Title">
                                    </div>

                                    <div class="col-xs-12 col-md-12 form-group">
                                        Description : 
                                        <textarea style="height: 150px" id="description2" name="description2" class="form-control ckeditor" placeholder="Description"></textarea>
                                    </div>

                                    <div class="col-xs-12 col-md-12">
                                        <div id="product-cover"></div>
                                    </div>

                                    <div class="col-xs-12 col-md-12">
                                        <div class="form-upload2">
                                            <center><span>Upload an Image</span></center>
                                            <i class="fas fa-cloud-upload-alt"></i>
                                            <center>
                                                <input type="file" id="cover_img2" name="cover_img2">
                                            </center>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-md-6">
                                        <div class="form-group">
                                            News Recommend(Image 800px * 800px) :
                                            <select class="form-control" name="recommen2" id="recommen2">
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
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

                                    <button class="btn-save">Save</button>
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
    {{-- <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script> --}}

    <script src="//cdn.ckeditor.com/4.14.1/full/ckeditor.js"></script>

    <script type="text/javascript">
        $(document).ready(function($){    
            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


        
            $('body').on('click', '.edit', function () {
                $('#product-cover').html("");

                var softwareEnq_id = $(this).data('id');

                $.get('/admin/news/' + softwareEnq_id +'/editNews', function (res) {
                    $('#product-list').html("");
                    $('#product_id2').val(res.id);
                    $('#name2').val(res.name);
                    $('#recommen2').val(res.recommen);
                    $('#is_enable2').val(res.is_enable);
                    $('#category_id2').val(res.category_id);
                    $('#title2').val(res.title);
                    CKEDITOR.instances['description2'].setData(res.description);

                    $('#product-cover').append('<center><img src="{{url('storage/images/')}}/'+res.cover_img +'" class="img-responsive" alt="">'+
                    '</center>');
                    
                    //image
                    // $.get('/admin/product/' + softwareEnq_id +'/ImageProduct', function (data) {
                    //     if(data.length>0) {
                    //         for(i=0;i<data.length;i++) {     
                    //              $('#product-list').append('<div class="col-md-3 col-sm-3 hero-feature"><div class="thumbnail"><img src="{{url('storage/images/')}}/'+data[i]['img'] +'" class="img-responsive" alt=""><a href="{{url('/admin/product/softdeleteImage')}}/'+data[i]['id']+'"  class="btn btn-danger btn-xs" type="button"><i class="fas fa-trash-alt"></i> Delete</button></div>');
                    //         }   
                    //     }
                    // });

                })
            });
        });

        CKEDITOR.replace('description', {
            filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form',
            customConfig: '/js/admin/ckeditor/config.js'
        });  

        CKEDITOR.replace('description2', {
            filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form',
            customConfig: '/js/admin/ckeditor/config.js'
        });  
    </script>

@endsection

