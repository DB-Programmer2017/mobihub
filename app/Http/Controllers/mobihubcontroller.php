<?php

namespace App\Http\Controllers;
use App\Models\NewsAllModel;
use App\Models\NewsCategoryModel;
use Illuminate\Support\Facades\Cookie;

use Illuminate\Http\Response;
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
        // dd($newsDetail->id);
        $newscate       = NewsCategoryModel::all();
        $news           = NewsAllModel::where('slug', $newsDetail->slug)->where('is_enable', '1')->inRandomOrder()->paginate(3) ;
        // dd($news);

        
        //ถ้ายังไม่มีคุกกี้ จะทำคำสั่ง ถ้ามีคุกกี้แล้ว จำนวนคนอ่านก็จะไม่ขึ้น เพราะมันซ้ำ
        if (Cookie::get($newsDetail->id) == null) {
            // สร้างคุกกี้ในแต่ละข่าว เวลาเข้าไปดูข่าว
            $cookie = Cookie::queue($newsDetail->id, 1, 60);

            //ทำคำสั่ง incrementReadCount ใน NewsModel
            $newsDetail->incrementReadCount();
        }
        // $newsDetail->incrementReadCount();
        return view('mainpage/news-detail',compact(['newsDetail','newscate','news']));
    }
}
