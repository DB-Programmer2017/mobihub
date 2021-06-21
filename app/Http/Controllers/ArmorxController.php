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
        $brands  = ArmorxProductModel::with('categories')->get();

        $product=ProductAllModel::query();

        if(!empty($_GET['category'])){
            // $slugs=explode(",",$_GET['category']);
            $slugs=explode(",",$_GET['category']);
            
            $cate_ids=ArmorxProductCateModel::whereIn('slug', $slugs)
            ->pluck('id')
            ->toArray() ;

            $product=$product->whereIn('sub_category_id', $slugs)
            ->where('dealer_id', '3')
            ->where('is_enable', '1')
            ->orderBy('id', 'asc')->paginate(8) ;

            // $product=ProductAllModel::join('product_sub_category', 'product_sub_category.id','=','product.sub_category_id')
            // ->whereIn('product_sub_category.slug', $slugs)
            // ->where('product.dealer_id', '3')
            // ->where('product.is_enable', '1')
            // ->get(['product.*', 'product_sub_category.*'])->paginate(8) ;
            
        }else{
            $product = ProductAllModel::where('dealer_id', '3')->where('is_enable', '1')->orderBy('id', 'asc')->paginate(8) ;
        }

        return view('mainpage/armor-x',compact(['brands','product']));
    }

    public function ArmorxFilter(Request $request){
        $data = $request->all();
        $catUrl='';
        if(!empty($data['category'])){
            foreach($data['category'] as $category){
                if(empty($catUrl)){
                    $catUrl .='&category='.$category;
                }else{
                    $catUrl .=','.$category;
                }
            }
        }
        //dd($catUrl);
        return redirect()->route('armor-x', $catUrl);

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
