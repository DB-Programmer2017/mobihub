<?php

namespace App\Http\Controllers;
use App\Models\NewsAllModel;
use App\Models\NewsCategoryModel;

use Illuminate\Http\Request;

class mobihubcontroller extends Controller
{
    function news (Request $request){
        $news      = NewsAllModel::where('is_enable', '1')->orderBy('updated_at', 'desc')->paginate(9) ;
        $newscate  = NewsCategoryModel::all();
        //$product_cate   = ProductAllModel::paginate(20) ;

        return view('mainpage/news-post',compact(['news','newscate']));
    }

    function ShowDetail($id){
        $newsDetail     = NewsAllModel::find($id);
        $newscate       = NewsCategoryModel::all();
        $news           = NewsAllModel::where('id','<>',$id)->where('is_enable', '1')->inRandomOrder()->paginate(3) ;

        return view('mainpage/news-detail',compact(['newsDetail','newscate','news']));
    }
}
