<?php

namespace App\Http\Controllers;

use App\Models\ArmorxProductModel;
use App\Models\ArmorxProductCateModel;

use Illuminate\Http\Request;

class ArmorxController extends Controller
{
    function home_armor_x (Request $request){
        //brand
        // $brands = ArmorxProductModel::where('dealer_id', '3')->where('is_enable', '1')->orderBy('id', 'asc')->get();
        // dd($brands);
        //category
        // $categories = ArmorxProductModel::join('product_category', 'product_brand.id', '=', 'product_category.brand_id')
        //             ->select('product_brand.id', 'product_category.name')
        //             ->get();
        // $category = ArmorxProductModel::join('product_category', 'brand_id', '=', 'product_brand.id')->get();
        // $category_brand= ArmorxProductCateModel::where('dealer_id', '3')->where('is_enable', '1')->orderBy('id', 'asc')->get();
        // dd($categories);

        $brands = ArmorxProductModel::with('categories')->get();
        return view('mainpage/armor-x',compact(['brands']));
    }
}
