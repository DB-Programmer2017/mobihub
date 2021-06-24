<?php

namespace App\Http\Controllers;

use App\Models\SlideAllModel;
use App\Models\NewsAllModel;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    function index_slide(){
        $slides = SlideAllModel::where('is_enable', '1')->orderBy('rd', 'ASC')->get();
        $news = NewsAllModel::where('is_enable', '1')->get();
         return view('mainpage/home',compact(['slides', 'news']));
    }
}
