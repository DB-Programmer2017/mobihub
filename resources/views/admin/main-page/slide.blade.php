@extends('/admin/layout/home-admin')


{{-- Title Website --}}
@section('title', 'MOBIHUB | News')

{{-- Link CSS --}}
@section('link')

    <meta name="csrf-token" content="{{ csrf_token() }}">


    <style>
        #page_list2 li,
        #page_list2 .trd
        {
            padding:16px;
            background-color:#f9f9f9;
            border:1px dotted #ccc;
            cursor:move;
            margin-top:12px;
        }
        #page_list2 li.ui-state-highlight,
        #page_list2 .trd.ui-state-highlight
        {
            padding:24px;
            background-color:#ffffcc;
            border:1px dotted #ccc;
            cursor:move;
            margin-top:12px;
        }
        .list-group-item img{
            height: 30px;
            display: inline-block;
        }
        .list-group-item .btn{
            float: right;
        }

        #page_list li
        {
            padding:16px;
            background-color:#f9f9f9;
            border:1px dotted #ccc;
            cursor:move;
            margin-top:12px;
        }
        #page_list li.ui-state-highlight
        {
            padding:24px;
            background-color:#ffffcc;
            border:1px dotted #ccc;
            cursor:move;
            margin-top:12px;
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
                            <h4 class="title">Slide</h4>
                        </div>
                        <div class="col-sm-7 col-xs-12 text-right">
                            <button type="button" class="btn btn-info btn-sm show-modal" data-toggle="modal" data-target="#myModal">
                                <i class="fas fa-plus"></i> Add Slide
                            </button> 
                        </div>
                    </div>
                </div>
                
                <ul class="list-unstyled" id="page_list2">
                    @foreach ($slides_banner as $row2)
                        <li class="list-group-item" id="{{ $row2->id }}">
                            #{{$slides_banner->firstItem()+$loop->index}} ) 
                                @if ($row2->is_enable == "1")
                                    <span class="label label-success">Publish</span>
                                @else 
                                    <span class="label label-danger">Suspend</span>
                                @endif

                            <img src="{{asset('storage/images/' . $row2->cover_img)}}" class="img-responsive">
                            @if ($row2->cover_img  !='')
                                <a href="javascript:void(0)"  class="edit btn btn-info" data-id="{{ $row2->id }}" data-toggle="modal" data-target="#myModal2">
                                    Edit
                                </a>
                            @endif   
                        </li>
                    @endforeach
                </ul>
                <input type="hidden" name="page_order_list2" id="page_order_list2" />

            </div>
        </div>
    </div>
</div>



{{-- Modal: add a new slide banner --}}
<div class="container">
    <div class="row">
        <form action="{{route('addSlideAll')}}" method="post" id="editForm" enctype="multipart/form-data">
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
                                    <h3 class="title">Add Slide</h3>

                                    <div class="col-xs-12 col-md-12">
                                        <div class="form-upload2">
                                            <center><span>Upload an Image</span></center>
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

{{-- Modal: edit a slide banner --}}
<div class="container">
    <div class="row">
        <form action="{{route('editSlideAll')}}" method="post" id="editForm" enctype="multipart/form-data">
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
                                    <h3 class="title">Edit Slide</h3>

                                    <input type="hidden" readonly id="product_id2" name="product_id2" class="form-control">

                                    
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

    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    
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

                $.get('/admin/slide/' + softwareEnq_id +'/editSlide', function (res) {
                    $('#product-list').html("");
                    $('#product_id2').val(res.id);
                    $('#is_enable2').val(res.is_enable);

                    $('#product-cover').append('<center><img src="{{url('storage/images/')}}/'+res.cover_img +'" class="img-responsive" alt="">'+
                    '</center>');
                })
            });


            $( "#page_list2" ).sortable({
                placeholder : "ui-state-highlight",
                update  : function(event, ui){
                var page_id_array = new Array();

                $('#page_list2 li').each(function(){
                    page_id_array.push($(this).attr("id"));
                });
                
                //alert(page_id_array);

                $.ajax({
                    url:"/admin/sortable/update/"+page_id_array,
                    method:"GET",
                    data:{
                        page_id_array:page_id_array
                    },
                    success:function(data)
                    {
                    //alert(data);
                        window.location.reload();
                    }
                });
                }
            });

            $( "#page_list" ).sortable({
                placeholder : "ui-state-highlight",
                update  : function(event, ui){
                var page_id_array = new Array();

                $('.trd').each(function(){
                    page_id_array.push($(this).attr("id"));
                });
                
                //alert(page_id_array);

                $.ajax({
                    url:"/admin/sortable/update/"+page_id_array,
                    method:"GET",
                    data:{
                        page_id_array:page_id_array
                    },
                    success:function(data)
                    {
                    //alert(data);
                        window.location.reload();
                    }
                });
                }
            });
        });

    </script>
@endsection