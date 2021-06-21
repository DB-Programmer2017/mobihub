<?php

namespace App\Http\Controllers;

use App\Models\ArmorxProductModel;
use App\Models\ArmorxProductCateModel;

use Illuminate\Http\Request;

class ArmorxController extends Controller
{
    function home_armor_x (Request $request){
        
        $brands = ArmorxProductModel::with('categories')->get();
        // return ArmorxProductModel::with('categories')->get();
        // $sub_categories = ArmorxProductCateModel::with('subCategories')->get();
        // return ArmorxProductCateModel::with('subCategories')->get();
        return view('mainpage/armor-x',compact(['brands']));
    }
}
