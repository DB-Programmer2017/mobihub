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
}
