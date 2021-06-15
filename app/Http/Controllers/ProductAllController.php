<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductAllModel;
use App\Models\ProductEditModel;//query product edit

use App\Models\ProductModel;//category
use App\Models\BrandModel;//brand
use App\Models\ProductGalleryModel;//gallery
use App\Models\ProductChoiceModel;//Choice
use App\Models\ProductChoiceListModel;//ChoiceList
use App\Models\DealerModel;//Dealer

use Redirect,Response;

class ProductAllController extends Controller
{
    function product (Request $request){
        $product_cate   = ProductAllModel::paginate(20) ;
        $category       = ProductModel::all();
        $brand          = BrandModel::all();
        $dealer         = DealerModel::all();

        return view('/admin/main-page/product',compact(['product_cate','category','brand','dealer']));
    }

    public function editProductAll(Request $request){
        // $request->validate(
        //     ['name'=>'required|unique:product_category'],
        //     ['name2.required'=>'กรุณากรอกข้อมูล ประเภทสินค้า-ไทย'],
        //     ['cover_image2'   =>  'image|nullable|max:1999'],
        // );
        
        if($request->hasFile('cover_img2')) {
            //get filename with the extension
            $filenameWithExt    = $request->file('cover_img2')->getClientOriginalName();

            //get filename
            $filename           = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //get extension
            $extension          = $request->file('cover_img2')->getClientOriginalExtension();

            //get filename to store
            $filenameToStore    = $filename . 'p_' . time() . '.' . $extension;

            //upload image
            $path               = $request->file('cover_img2')->storeAs('public/images', $filenameToStore);

            $old_img = $request->img_cover_name;

            if($old_img !=''){
                unlink('storage/images/'.$old_img );
            }

        } else {
            $filenameToStore = '';
        }


        if($request->has('product_id2')) {
            $id  = $request->product_id2;

            if($filenameToStore == ''){
                ProductAllModel::find($id)->update([
                    'name'=>$request->name2,
                    'dealer_id'=>$request->dealer_id2,
                    'category_id'=>$request->category_id2,
                    'description'=>$request->description2,
                    'part_number'=>$request->part_number2,
                    'meta_tag'=>$request->meta_tag2,
                    'product_tag'=>$request->product_tag2,
                    'stock_amount'=>$request->stock_amount2,
                    'price_sale'=>$request->price_sale2,
                    'is_quo'=>$request->is_quo2,
                    'is_enable'=>$request->is_enable2
                ]);
            }else{
                ProductAllModel::find($id)->update([
                    'cover_img'=> $filenameToStore,
                    'name'=>$request->name2,
                    'dealer_id'=>$request->dealer_id2,
                    'category_id'=>$request->category_id2,
                    'description'=>$request->description2,
                    'part_number'=>$request->part_number2,
                    'meta_tag'=>$request->meta_tag2,
                    'product_tag'=>$request->product_tag2,
                    'stock_amount'=>$request->stock_amount2,
                    'price_sale'=>$request->price_sale2,
                    'is_quo'=>$request->is_quo2,
                    'is_enable'=>$request->is_enable2
                ]);
            }

            $files = [];
            if($request->hasfile('filenames2'))
            {
                foreach($request->file('filenames2') as $file)
                {
                    $name = "NEW".time().rand(1,100).'.'.$file->extension();
                    $file->move(public_path('storage/images'), $name);  
                    $files[] = $name;  
                }
            }

            foreach ($files as $key => $value) {
                $file= new ProductGalleryModel();

                $file->img = $value;
                $file->product_id =  $id;
                $file->save();
            }

            /* Choice */
            $choice = [];
            foreach($request->filenames3 as $filenames) {
                $choice = new ProductChoiceModel();
                if($filenames !=''){
                    $choice->product_id = $id;
                    $choice->name = $filenames;
                    $choice->save();
                }
            }

            return redirect()->back()->with('success',"บันทึกข้อมูลเรียบร้อยแล้ว");
        }
    }
    
    public function store(Request $request){
        // $request->validate(
        //     ['name'=>'required|unique:product_category'],
        //     ['name.required'=>'กรุณากรอกข้อมูล ประเภทสินค้า-ไทย'],
        //     ['dealer_id.required'=>'กรุณากรอกข้อมูล'],
        //     ['category_id.required'=>'กรุณากรอกข้อมูล'],
        //     ['cover_image'   =>  'image|nullable|max:1999'],
        // );

        $request->validate([
            'name' => 'required',
            'dealer_id' => 'required',
            'category_id' => 'required',
        ]);

        if($request->hasFile('cover_img')) {
            //get filename with the extension
            $filenameWithExt    = $request->file('cover_img')->getClientOriginalName();

            //get filename
            $filename           = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //get extension
            $extension          = $request->file('cover_img')->getClientOriginalExtension();

            //get filename to store
            $filenameToStore    = $filename . 'p_' . time() . '.' . $extension;

            //upload image
            $path               = $request->file('cover_img')->storeAs('public/images', $filenameToStore);

        } else {
            $filenameToStore = '';
        }

            $product_cate               = new ProductAllModel;
            $product_cate->part_number  = $request->part_number;
            $product_cate->product_tag  = $request->product_tag;
            $product_cate->meta_tag     = $request->meta_tag;
            $product_cate->name         = $request->name;
            $product_cate->dealer_id     = $request->dealer_id;
            $product_cate->category_id  = $request->category_id;
            $product_cate->description  = $request->description;
            $product_cate->stock_amount = $request->stock_amount;
            $product_cate->price_sale   = $request->price_sale;
            $product_cate->cover_img    = $filenameToStore;
            $product_cate->save();

            $LastInsertId = $product_cate->id;
            
            $files = [];
            if($request->hasfile('filenames'))
            {
                foreach($request->file('filenames') as $file)
                {
                    $name = "NEW".time().rand(1,100).'.'.$file->extension();
                    $file->move(public_path('storage/images'), $name);  
                    $files[] = $name;  
                }
            }

            // $file= new ProductGalleryModel();
            // $file->img = $files;
            // $file->product_id =  $LastInsertId;
            // $file->save();

            foreach ($files as $key => $value) {
                $file= new ProductGalleryModel();

                $file->img = $value;
                $file->product_id =  $LastInsertId;
                $file->save();
          }

            return redirect()->back()->with('success',"บันทึกข้อมูลเรียบร้อยแล้ว");
    }

    public function softdelete(Request $request, $id){
        $delete = $update = ProductAllModel::find($id)->delete();
        return redirect('/product-category')->with('success', 'ลบข้อมูลเรียบร้อยแล้ว');
    }

    public function editProduct2($id){
        $product_cate   = ProductAllModel::paginate(20) ;
        $category       = ProductModel::all();
        $brand          = BrandModel::all();

        $product_edit = ProductAllModel::find($id);
        //dd($product_cate->name,$product_cate->name_en);

        //return view('page/dashboard/edit-product-category',compact('product_cate'));
        //return view('/admin/main-page/product',compact('product_edit'));

        return view('/admin/main-page/product',compact(['product_cate','category','brand','product_edit']));
    }

    public function editProduct($id){
		$where = array('id' => $id);
		$customer = ProductAllModel::where($where)->first();
		return Response::json($customer);
	}

    public function ImageProduct($id){
		$where = array('product_id' => $id);
		$customer= ProductGalleryModel::where($where)->get();
		return Response::json($customer);
	}

    public function ChoiceProduct($id){
		$where = array('product_id' => $id);
		$customer= ProductChoiceModel::where($where)->get();
		return Response::json($customer);
	}

    public function ChoiceList($id){
        $customer = ProductChoiceModel::find($id);
		return Response::json($customer);
	}

    public function ajaxRequestPost(Request $request){
        // $request->validate([
        //     'product_id' => 'required',
        //     'choice_id' => 'required',
        //     'name' => 'required',
        // ]);

        // $todo = ProductChoiceListModel::create($request);
        // return Response::json($todo);

        dd($request);
        $input = $request->all();
          
        ProductChoiceListModel::create($input);
     
        return response()->json(['success'=>'Got Simple Ajax Request.']);
    }

    public function softdeleteImage($id){     
        //dd($id);
        $image = ProductGalleryModel::find($id);
        //unlink("storage/images/".$image->img);
        ProductGalleryModel::where("id", $image->id)->delete();
        return redirect()->back()->with('success',"ลบข้อมูลเรียบร้อยแล้ว");
	}
}
