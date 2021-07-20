<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Models\ProductAllModel;
use App\Models\ProductEditModel;//query product edit

use App\Models\ProductModel;//category
use App\Models\BrandModel;//brand
use App\Models\ProductGalleryModel;//gallery
use App\Models\ProductChoiceModel;//Choice
use App\Models\ProductChoiceListModel;//ChoiceList
use App\Models\DealerModel;//Dealer
use App\Models\SubCategoryModel;

use Illuminate\Support\Str;

use Redirect,Response;//ใส่บรรทัดนี้หากค้องการส่งข้อมูลแบบ Ajax

class ProductAllController extends Controller
{
    function product (Request $request){
        $product_cate   = ProductAllModel::paginate(20) ;
        $categories     = ProductModel::all();
        $brands         = BrandModel::all();
        $dealer         = DealerModel::all();
        $sub_categories = SubCategoryModel::all();
        $product_id     = $request->product_id3;
        $choice_id      = $request->choice_id3;

        $option_lists   = ProductChoiceListModel::where('product_id', $product_id)->where('choice_id', $choice_id)->get();

        return view('/admin/main-page/product',compact(['product_cate','categories','brands','dealer', 'option_lists', 'sub_categories']));
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
        // dd($request->all());
            if($filenameToStore == ''){
                ProductAllModel::find($id)->update([
                    'name'=>$request->name2,
                    'dealer_id'=>$request->dealer_id2,
                    'brand_id'=>$request->brand_id2,
                    'category_id'=>$request->category_id2,
                    'sub_category_id'=>$request->sub_category_id2,
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
                    'brand_id'=>$request->brand_id2,
                    'category_id'=>$request->category_id2,
                    'sub_category_id'=>$request->sub_category_id2,
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

            $slug =  ProductAllModel::find($id);
            // dd($slug);
            $slug->slug = Str::slug($request->name2, '-');
            $slug->save();

            $files = [];
            if($request->hasfile('filenames2'))
            {
                foreach($request->file('filenames2') as $file)
                {
                    $name = "NEW".time().rand(1,100).'.'.$file->extension();
                    $file->move(storage_path('app/public/images'), $name);  
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

            /* Update edit Choice */ 
            $choice_ids     = $request->choice_ids;
            // dd($choice_ids);
            $choice_name    = $request->choice_name;
            $count_items    = count($request->choice_ids);

            for($i = 0; $i<$count_items; $i++)
            {
                $edit_choice = ProductChoiceModel::find($choice_ids[$i]);
                // dd($edit_choice);
                $edit_choice->update([
                    'name' => $choice_name[$i],
                ]);
            }


            return redirect()->back()->with('success',"บันทึกข้อมูลเรียบร้อยแล้ว");
        }
    }

    public function storePoductChoice(Request $request) {
        // dd($request->choice_list_ids);
        // $request->validate([
        //     'option_name_list' => '',
        // ]);

        if($request->option_name_list != '') {
            $details    =   new ProductChoiceListModel;

            $details->name          =   $request->option_name_list;
            $details->product_id    =   $request->product_id3;
            $details->choice_id     =   $request->choice_id3;
        // dd($request->product_id2);
            $details->save();
            session()->flash('success', 'เพิ่ม "'. $details->name .'" สำเร็จ');
        } else {
            $choice_list_ids    = $request->choice_list_ids;
            $choice_list_names  = $request->choice_list_names;
            $count_items        = count($request->choice_list_ids);
            // dd($count_items);
            for($i=0; $i<$count_items; $i++) {
                $edit_choice_list = ProductChoiceListModel::find($choice_list_ids[$i]);

                $edit_choice_list->update([
                    'name' => $choice_list_names[$i],
                ]);
                session()->flash('success', 'อัพเดทสำเร็จ');
            }
            
        }
            

            
        return back();
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
            'name'              => 'required',
            'dealer_id'         => 'required',
            'brand_id'          => 'required',
            'category_id'       => 'required',
            'sub_category_id'   => 'required',
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

            $product_cate                   = new ProductAllModel;
            $product_cate->part_number      = $request->part_number;
            $product_cate->product_tag      = $request->product_tag;
            $product_cate->meta_tag         = $request->meta_tag;
            $product_cate->name             = $request->name;
            $product_cate->dealer_id        = $request->dealer_id;
            $product_cate->brand_id         = $request->brand_id;
            $product_cate->category_id      = $request->category_id;
            $product_cate->sub_category_id  = $request->sub_category_id;
            $product_cate->description      = $request->description;
            $product_cate->stock_amount     = $request->stock_amount;
            $product_cate->price_sale       = $request->price_sale;
            $product_cate->cover_img        = $filenameToStore;
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

    public function uploadFile(Request $request){

        if ($request->input('submit') != null ){
    
          $file = $request->file('file-csv');
    
          // File Details 
          $filename = $file->getClientOriginalName();
          $extension = $file->getClientOriginalExtension();
          $tempPath = $file->getRealPath();
          $fileSize = $file->getSize();
          $mimeType = $file->getMimeType();
    
          // Valid File Extensions
          $valid_extension = array("csv");
    
          // 2MB in Bytes
          $maxFileSize = 2097152; 
    
          // Check file extension
          if(in_array(strtolower($extension),$valid_extension)){
    
            // Check file size
            if($fileSize <= $maxFileSize){
    
              // File upload location
              $location = 'uploads';
    
              // Upload file
              $file->move($location,$filename);
    
              // Import CSV to Database
              $filepath = public_path($location."/".$filename);
    
              // Reading file
              $file = fopen($filepath,"r");
    
              $importData_arr = array();
              $i = 0;
    
              while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
                 $num = count($filedata );

                 for ($c=0; $c < $num; $c++) {
                    $importData_arr[$i][] = $filedata [$c];
                 }
                 $i++;
              }
              fclose($file);
    
              // Insert to MySQL database
              foreach($importData_arr as $importData){
                $insertData = array(
                   "name"=>$importData[1],
                   "slug"=>$importData[2],
                   "part_number"=>$importData[3],
                   "description"=>$importData[4]);
                   ProductAllModel::insertData($insertData);
    
              }
    
              Session::flash('message','Import Successful.');
            }else{
              Session::flash('message','File too large. File must be less than 2MB.');
            }
    
          }else{
             Session::flash('message','Invalid File Extension.');
          }
    
        }

        //return redirect()->action('PagesController@index');
        return redirect()->back()->with('success',"บันทึกข้อมูลเรียบร้อยแล้ว");
    }


    public function showOptionList(Request $request){

        return view('admin.main-page.product', compact(['option_lists']));
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

    public function ChoiceListDetails($id){
        $customer = ProductChoiceListModel::where('choice_id', $id)->get();
		return Response::json($customer);
	}

    public function ChoiceList($id){
        $customer = ProductChoiceModel::find($id);
		return Response::json($customer);
	}

    public function editChoiceList(Request $request) {
        //dd('yes');
    }

    public function ajaxRequestPost(Request $request){
        // $request->validate([
        //     'product_id' => 'required',
        //     'choice_id' => 'required',
        //     'name' => 'required',
        // ]);

        // $todo = ProductChoiceListModel::create($request);
        // return Response::json($todo);

        // dd($request);
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

    public function softdeleteChoice($id){     
        //dd($id);
        $choice = ProductChoiceModel::find($id);

        // ProductChoiceModel::where("id", $choice->id)->delete();
        // ProductChoiceListModel::where("choice_id", $id)->delete();
        // print_r($x);
        if($choice->is_enable == '1') {
            $choice->update([
                'is_enable' => '0'
            ]);  
        } else {
            $choice->update([
                'is_enable' => '1'
            ]);  
        }
        
        return redirect()->back()->with('success',"อัพเดทข้อมูลเรียบร้อยแล้ว");
	}

    public function softdeleteChoiceList($id){     
        // dd($id);
        $choice_list = ProductChoiceListModel::find($id);

        // ProductChoiceListModel::where("id", $choice_list->id)->delete();
        if($choice_list->is_enable == '1') {
            $choice_list->update([
                'is_enable' => '0'
            ]);  
        } else {
            $choice_list->update([
                'is_enable' => '1'
            ]);  
        }

        return redirect()->back()->with('success',"อัพเดทข้อมูลเรียบร้อยแล้ว");
	}

    public function updateStatusChoice($id){
        $choice_list = ProductChoiceModel::find($id);
        if($choice_list->is_enable == '1') {
            $choice_list->update([
                'is_enable' => '0'
            ]);  
        } else {
            $choice_list->update([
                'is_enable' => '1'
            ]);  
        }
		return Response::json($choice_list);
    }

    public function updateStatusChoiceList($id){
        $choice_list = ProductChoiceListModel::find($id);
        if($choice_list->is_enable == '1') {
            $choice_list->update([
                'is_enable' => '0'
            ]);  
        } else {
            $choice_list->update([
                'is_enable' => '1'
            ]);  
        }
		return Response::json($choice_list);
    }

    public function DeleteImage($id){     
        $image = ProductGalleryModel::find($id);
        unlink("storage/images/".$image->img);

        ProductGalleryModel::where("id", $image->id)->delete();
        
        return Response::json($image);
	}
}
