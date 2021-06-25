<?php

namespace App\Http\Controllers;

use App\Models\SlideAllModel;
use App\Models\NewsAllModel;
use App\Models\ProductAllModel;


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
        if ($screenWidth=="1200"){//Desktop//
            $id='1';
            $where = array('size'=> $id);
        }elseif ($screenWidth=="800"){//Tablet//
            $id='2';
            $where = array('size'=> $id);
        }elseif ($screenWidth=="500"){//Mobile//
            $id='3';
            $where = array('size'=> $id);
        }else{//Desktop//
            $id='1';
            $where = array('size'=> $id);
        }

        //$where = array('product_id' => $id);

		$slide= SlideAllModel::where('is_enable', '1')->where($where)->get();
		return Response::json($slide);
    }
}
