<?php

namespace App\Http\Controllers;

use App\Models\ArmorxProductModel;
use App\Models\ArmorxProductCateModel;
use App\Models\ArmorxProductSubCateModel;
use App\Models\ProductAllModel;
use App\Models\ProductGalleryModel;
use App\Models\ProductChoiceModel;
use App\Models\ProductChoiceListModel;
use App\Models\SubCategoryModel;
use App\Models\SlideAllModel;
use App\Models\NewsAllModel;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class ArmorxController extends Controller
{
    function home_armor_x (Request $request){

        // $sub_categories = SubCategoryModel::where('dealer_id', '3')->with('products')->withCount('products')->get(); //products_count
        // select armor-x's brands
        $brands = ArmorxProductModel::where('dealer_id', '3')
                    ->with('categories')
                    ->get();


            // $brands = DB::table('product_brand')
            // ->distinct('product.brand_id')
            // ->join('product', 'product_brand.id', '=', 'product.brand_id')
            // ->where('product.brand_id','>','0')
            // ->where('product_brand.dealer_id', '3')
            // ->where('product_brand.is_enable', '1')
            // ->groupBy('product.brand_id')
            // ->orderBy('product_brand.name', 'ASC')
            // ->select('product_brand.*', 'product.brand_id')
            // ->get();

            // $categorys = [];
            // foreach($brands as $categorys) {
            //     $categorys = ArmorxProductCateModel::where('brand_id',$categorys->id)->get();
            // }

            // $sub_category = [];
            // foreach($categorys as $sub_category) {
            //     //$sub_categorys = ArmorxProductSubCateModel::where('brand_id',$sub_categorys->id)->get();
            //     $sub_category = DB::table('product_sub_category')
            //     ->distinct('product.sub_category_id')
            //     ->join('product', 'product_sub_category.id', '=', 'product.sub_category_id')

            //     ->where('product.sub_category_id','>','0')
            //     ->where('product_sub_category.dealer_id', '3')
            //     ->where('product_sub_category.is_enable', '1')

            //     ->groupBy('product.sub_category_id')
            //     ->orderBy('product_sub_category.name', 'ASC')
            //     ->select('product_sub_category.*', 'product.sub_category_id')
            //     ->get();
            // }

        $product = ProductAllModel::query();
        //print_r(ArmorxProductModel::with('subCategories')->get());

        if(!empty($_GET['category'])){
            $slugs=explode(",",$_GET['category']);

            $cate_ids=SubCategoryModel::whereIn('slug', $slugs)
            ->pluck('id')
            ->toArray() ;

            $product=$product->whereIn('sub_category_id',$cate_ids)
            ->where('dealer_id', '3')
            ->where('is_enable', '1')
            ->orderBy('id', 'asc')->paginate(8) ;
        }else{
            $product = ProductAllModel::where('dealer_id', '3')->where('is_enable', '1')->orderBy('id', 'asc')->paginate(8) ;
        }


        return view('mainpage/armor-x',compact(['brands','product']));
    }

    public function numberProduct() {
        $sub_categories = SubCategoryModel::where('dealer_id', '3')->with('products')->withCount('products')->get();

        return view('mainpage/armor-x2',compact(['sub_categories']));
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

    public function OtterBoxFilter(Request $request){
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
        return redirect()->route('otterbox', $catUrl);

    }

    public function RamMountsFilter(Request $request){
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
        return redirect()->route('otterbox', $catUrl);

    }

    function ProductDetail($slugs){
        $id=ProductAllModel::where('slug', $slugs)->pluck('id')->first();
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

    function home_otterbox (Request $request){
        $brands  = ArmorxProductModel::where('dealer_id','1')->with('categories')->get();
        $product = ProductAllModel::query();

        if(!empty($_GET['category'])){
            $slugs=explode(",",$_GET['category']);

            $cate_ids=SubCategoryModel::whereIn('slug', $slugs)
            ->pluck('id')
            ->toArray() ;

            $product=$product->whereIn('sub_category_id',$cate_ids)
            ->where('dealer_id', '1')
            ->where('is_enable', '1')
            ->orderBy('id', 'asc')->paginate(8) ;
        }else{
            $product = ProductAllModel::where('dealer_id', '1')->where('is_enable', '1')->orderBy('id', 'asc')->paginate(8) ;
        }

        return view('mainpage/otterbox',compact(['brands','product']));
    }

    function ProductOtterBoxDetail($slugs){
        $id=ProductAllModel::where('slug', $slugs)->pluck('id')->first();
        $product        = ProductAllModel::find($id);

        $gallery        = ProductGalleryModel::where('product_id', $id)->orderBy('id', 'asc')->get();
        $product_relate = ProductAllModel::where('dealer_id', '1')->where('id', '<>',$id)->where('is_enable', '1')->orderBy('id', 'asc')->get();
        $choice         = ProductChoiceModel::where('product_id', '=',$id)->where('is_enable', '1')->orderBy('id', 'asc')->get();

        $choice_list    = ProductAllModel::with('productChoiceList')->get();
        return view('mainpage/otterbox-product',compact(['product','gallery','product_relate','choice','choice_list']));

        $brands         = ArmorxProductModel::with('categories')->get();
        $sub_categories = ArmorxProductCateModel::with('subCategories')->get();
        return view('mainpage/otterbox',compact(['brands', 'sub_categories']));
    }

    function home_rammounts (Request $request){
        $brands  = ArmorxProductModel::where('dealer_id','2')->with('categories')->get();
        $product = ProductAllModel::query();

        if(!empty($_GET['category'])){
            $slugs=explode(",",$_GET['category']);

            $cate_ids=SubCategoryModel::whereIn('slug', $slugs)
            ->pluck('id')
            ->toArray() ;

            $product=$product->whereIn('sub_category_id',$cate_ids)
            ->where('dealer_id', '2')
            ->where('is_enable', '1')
            ->orderBy('id', 'asc')->paginate(8) ;
        }else{
            $product = ProductAllModel::where('dealer_id', '2')->where('is_enable', '1')->orderBy('id', 'asc')->paginate(8) ;
        }

        return view('mainpage/rammounts',compact(['brands','product']));
    }

    function ProductRamMountsDetail($slugs){
        $id=ProductAllModel::where('slug', $slugs)->pluck('id')->first();
        $product        = ProductAllModel::find($id);
        $gallery        = ProductGalleryModel::where('product_id', $id)->orderBy('id', 'asc')->get();
        $product_relate = ProductAllModel::where('dealer_id', '2')->where('id', '<>',$id)->where('is_enable', '1')->orderBy('id', 'asc')->get();
        $choice         = ProductChoiceModel::where('product_id', '=',$id)->where('is_enable', '1')->orderBy('id', 'asc')->get();

        $choice_list    = ProductAllModel::with('productChoiceList')->get();
        return view('mainpage/rammounts-product',compact(['product','gallery','product_relate','choice','choice_list']));

        $brands         = ArmorxProductModel::with('categories')->get();
        $sub_categories = ArmorxProductCateModel::with('subCategories')->get();
        return view('mainpage/rammounts',compact(['brands', 'sub_categories']));
    }

    function index_slide(){
        $product = SlideAllModel::where('is_enable', '1')->get();
        $news = NewsAllModel::where('is_enable', '1')->get();
         return view('mainpage/home',compact(['product', 'news']));
    }

    // function news_slide(){
    //     $news = NewsAllModel::where('is_enable', '1')->get();
    //      return view('mainpage/home',compact(['news']));
    // }
}
