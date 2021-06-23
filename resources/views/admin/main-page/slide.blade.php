@extends('/admin/layout/home-admin')


{{-- Title Website --}}
@section('title', 'MOBIHUB | News')

{{-- Link CSS --}}
@section('link')

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        #sortable-list tr	{ 
            cursor:move;  
        }
    </style>
@endsection

{{-- Body HTML --}}
@section('content')

<form id="dd-form" action="{{ route('updateOrder') }}" method="post">
    <div id="message-box" style="display:none">{{session("success")}} Waiting for sortation submission...</div>

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
                <div class="panel-body table-responsive"> 

                    <p>
                        <input type="checkbox" style="opacity:0" checked value="1" name="autoSubmit" id="autoSubmit" checked />
                        <label for="autoSubmit"></label>
                    </p>

                    <table class="table table-hover" id="table-draggable2" >
                        <thead>
                            <tr class="active">
                                <th width="5%">#</th>
                                <th width="13%">Created</th>
                                <th>Photo</th>
                                <th width="5%">Status</th>
                            </tr>
                        </thead>
                        <tbody class="connectedSortable" id="sortable-list">
                            <?php $order = array(); ?>
                            @foreach ($slides_banner as $row)    
                                <tr class="row1" data-id="{{ $row->id }}" title="{{ $row->id }}">
                                    <td>{{$slides_banner->firstItem()+$loop->index}}</td>
                                    <td>
                                        {{$row->created_at}}
                                    </td>
                                    <td>
                                        @if ($row->cover_img  !='')
                                            <a href="javascript:void(0)"  class="edit" data-id="{{ $row->id }}" data-toggle="modal" data-target="#myModal2">
                                                <img src="{{asset('storage/images/' . $row->cover_img)}}" class="img-responsive">
                                            </a>
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

                                <?php $order[] = $row['id']; ?>
                            @endforeach

                            <input type="text" name="sort_order" id="sort_order" value="<?php echo implode(',',$order); ?>" />

                        </tbody>
                    </table>

                    

                </div>
            </div>
        </div>
    </div>
</div>

</form>
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


            var sortInput = jQuery('#sort_order');
            var submit = jQuery('#autoSubmit');
            var messageBox = jQuery('#message-box');
            var list = jQuery('#sortable-list');
            /* create requesting function to avoid duplicate code */
            var request = function() {
                jQuery.ajax({
                    beforeSend: function() {
                        messageBox.text('Updating the sort order in the database.');
                    },
                    complete: function() {
                        messageBox.text('Database has been updated.');
                        window.location.assign(page);
                    },
                    data: 'sort_order=' + sortInput[0].value + '&ajax=' + submit[0].checked + '&do_submit=1&byajax=1', //need [0]?
                    type: 'post',
                    url: '<?php echo $_SERVER["REQUEST_URI"]; ?>'
                });
            };
            /* worker function */
            var fnSubmit = function(save) {
                var sortOrder = [];
                list.children('tr').each(function(){
                    sortOrder.push(jQuery(this).data('id'));
                });
                sortInput.val(sortOrder.join(','));
                console.log(sortInput.val());
                if(save) {
                    request();
                }
            };
            /* store values */
            list.children('tr').each(function() {
                var li = jQuery(this);
                li.data('id',li.attr('title')).attr('title','');
            });
            /* sortables */
            list.sortable({
                opacity: 0.7,
                update: function() {
                    fnSubmit(submit[0].checked);
                }
            });
            list.disableSelection();
            /* ajax form submission */
            jQuery('#dd-form').bind('submit',function(e) {
                if(e) e.preventDefault();
                fnSubmit(true);
            });
        });

    </script>
@endsection