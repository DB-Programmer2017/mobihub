<?php

namespace App\Http\Controllers;

use App\Models\ArmorxProductModel;
use App\Models\ArmorxProductCateModel;

use Illuminate\Http\Request;

class ArmorxController extends Controller
{
    function home_armor_x (Request $request){
        $category = ArmorxProductModel::where('dealer_id', '3')->where('is_enable', '1')->orderBy('id', 'asc')->get();
        
        $category_brand= ArmorxProductCateModel::where('dealer_id', '3')->where('is_enable', '1')->orderBy('id', 'asc')->get();
        
        return view('mainpage/armor-x',compact(['category','category_brand']));
    }
}
