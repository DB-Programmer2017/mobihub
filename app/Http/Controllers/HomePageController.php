<?php

namespace App\Http\Controllers;

use App\Models\SlideAllModel;
use App\Models\NewsAllModel;
use App\Models\ProductAllModel;

use Redirect,Response; //ใส่บรรทัดนี้หากค้องการส่งข้อมูลแบบ Ajax
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    function index_slide(){
        $slides     = SlideAllModel::where('is_enable', '1')->orderBy('rd', 'ASC')->get();
        $news       = NewsAllModel::where('is_enable', '1')->get();
        $recommend  =  ProductAllModel::where('is_enable', '1')->orderBy('id', 'ASC')->get();

        // var_dump($slides->where('size', 1));
        return view('mainpage/home',compact(['slides', 'news', 'recommend']));
    }
    function ajax_slide($screenWidth){
        // dd($screenWidth);
        if ($screenWidth >="1200"){//Desktop//
            $id='1';
            $where = array('size'=> $id);

        }elseif ($screenWidth >="800" && $screenWidth<="1199"){//Tablet//
            $id='2';
            $where = array('size'=> $id);

        }elseif ($screenWidth >="400"){//Mobile//
            $id='3';
            $where = array('size'=> $id);
        }else{//Desktop//
            $id='1';
            $where = array('size'=> $id);
        }

        //dd($where);
        //$where = array('product_id' => $id);

		$slide= SlideAllModel::where('is_enable', '1')->where($where)->orderBy('rd', 'ASC')->get();

        // print_r($slide);

		return Response::json($slide);
    }
}
