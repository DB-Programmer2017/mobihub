<?php

namespace App\Http\Controllers;
use App\Models\NewsAllModel;
use App\Models\NewsCategoryModel;
use Illuminate\Support\Facades\Cookie;

use Illuminate\Http\Request;

class MobihubController extends Controller
{
    function news (Request $request){
        $news      = NewsAllModel::where('is_enable', '1')->orderBy('updated_at', 'desc')->paginate(9);
        $newscate  = NewsCategoryModel::all();

        // dd($news);

        return view('mainpage/news-post',compact(['news','newscate']));
    }

    function ShowDetail($slug){
        $newsDetail     = NewsAllModel::where('slug', $slug)->first();
        // dd($newsDetail);
        $newscate       = NewsCategoryModel::all();
        $news           = NewsAllModel::where('id','<>',$newsDetail->id)->where('is_enable', '1')->inRandomOrder()->paginate(3) ;

        if (Cookie::get($newsDetail->id)!='') {
            Cookie::queue('$newsDetail->id', '1', 60);
            $newsDetail->incrementReadCount();
        }
        // $newsDetail->incrementReadCount();
        return view('mainpage/news-detail',compact(['newsDetail','newscate','news']));
    }
}
