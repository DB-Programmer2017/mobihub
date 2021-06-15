<?php

namespace App\Http\Controllers;
use App\Models\SlidePublishModel;
use App\Models\ProductModel;

use Illuminate\Http\Request;

class MobihubController extends Controller
{
    function slideindex (Request $request){
        // $product_cate   = SlidePublishModel::orderBy('id', 'ASC')->get();

        $product_cate   = SlidePublishModel::where('id','>', '1')->where('is_enable', '1')->orderBy('id', 'ASC')->get();
        $first_slide    = SlidePublishModel::where('is_enable', '1')->first();
        $count_slide    = SlidePublishModel::where('is_enable', '1')->count();

        $product_otterbox   = ProductModel::where('dealer_id', '1')->where('size', 'v')->where('is_enable', '1')->orderBy('id', 'ASC')->get();
        $product_otterbox_h = ProductModel::where('dealer_id', '1')->where('size', 'h')->where('is_enable', '1')->orderBy('id', 'ASC')->get();

        $product_armorx   = ProductModel::where('dealer_id', '3')->where('size', 'v')->where('is_enable', '1')->orderBy('id', 'ASC')->get();
        $product_armorx_h = ProductModel::where('dealer_id', '3')->where('size', 'h')->where('is_enable', '1')->orderBy('id', 'ASC')->get();
        
        return view('/main-page/home-new',compact(['product_cate','first_slide','count_slide','product_otterbox','product_otterbox_h','product_armorx','product_armorx_h']));
    }
}
