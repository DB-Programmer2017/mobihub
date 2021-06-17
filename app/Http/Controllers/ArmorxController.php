<?php

namespace App\Http\Controllers;

use App\Models\ArmorxProductModel;
use App\Models\ArmorxProductCateModel;
use App\Models\ProductAllModel;
use App\Models\ProductGalleryModel;
use App\Models\ProductChoiceModel;
use App\Models\ProductChoiceListModel;

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

        $brands  = ArmorxProductModel::with('categories')->get();
        $product = ProductAllModel::where('dealer_id', '3')->where('is_enable', '1')->orderBy('id', 'asc')->paginate(8) ;

        return view('mainpage/armor-x',compact(['brands','product']));
    }

    function ProductDetail($id){
        $product        = ProductAllModel::find($id);
        $gallery        = ProductGalleryModel::where('product_id', $id)->orderBy('id', 'asc')->get();
        $product_relate = ProductAllModel::where('dealer_id', '3')->where('id', '<>',$id)->where('is_enable', '1')->orderBy('id', 'asc')->get();
        $choice         = ProductChoiceModel::where('product_id', '=',$id)->where('is_enable', '1')->orderBy('id', 'asc')->get();
        
        $choice_list    = ProductAllModel::with('productChoiceList')->get();
        return view('mainpage/armor-x-product',compact(['product','gallery','product_relate','choice','choice_list']));
        
        $brands         = ArmorxProductModel::with('categories')->get();
        $sub_categories = ArmorxProductCateModel::with('subCategories')->get();
        return view('mainpage/armor-x',compact(['brands', 'sub_categories']));
    }

    function get_causes_against_category($id){
        $data= ProductAllModel::where('dealer_id', '3')
        ->whereIn('sub_category_id',[$id])
        ->where('is_enable', '1')
        ->orderBy('id', 'asc')->get();
        
        //dd($data);
        
        return Response::json($data);
    }
}
