<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        #sortable-list tr	{ 
            cursor:move;  
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
</head>
<body>
    <div class="container">

        <div class="alert alert-success" id="response" role="alert">Sort and save :)</div>
            <ul class="list-unstyled" id="page_list">
                @foreach ($slides_banner as $row2)
                    <li class="list-group-item" id="{{ $row2->id }}">#{{ $row2->id }} ) {{ $row2->cover_img }}</li>
                @endforeach
            </ul>
            <input type="hidden" name="page_order_list" id="page_order_list" />
    </div>

    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
     

            $( "#page_list" ).sortable({
                placeholder : "ui-state-highlight",
                update  : function(event, ui){
                var page_id_array = new Array();

                $('#page_list li').each(function(){
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
</body>
</html>