<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BrandModel;
use App\Models\DealerModel;//Dealer
use Redirect,Response;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    function brand (){
        $product_cate =BrandModel::paginate(20) ;
        $dealer       =DealerModel::all();

        //return view('/admin/main-page/brand',compact('product_cate'));
        return view('/admin/main-page/brand',compact(['product_cate','dealer']));
    }

    public function editProductBrand(Request $request){
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
            $filenameToStore    = $filename . 'b_' . time() . '.' . $extension;

            //upload image
            $path               = $request->file('cover_img2')->storeAs('public/images', $filenameToStore);

            $old_img = $request->img_cover_name;

            if($old_img !=''){
                unlink('storage/images/'.$old_img );
            }

        } else {
            $filenameToStore = '';
        }

        // dd($request->dealer_id2);
        if($request->has('brand_id2')) {
            $id  = $request->brand_id2;

            if($filenameToStore == ''){
                BrandModel::find($id)->update([
                    'name'=>$request->name2,
                    'dealer_id'=>$request->dealer_id2,
                    'is_enable'=>$request->is_enable2
                ]);
            }else{
                BrandModel::find($id)->update([
                    'cover_img'=> $filenameToStore,
                    'name'=>$request->name2,
                    'is_enable'=>$request->is_enable2
                ]);
            }
            
            // $slug =  BrandModel::find($id);
            // $slug->slug = Str::slug($request->name2, '-');
            // $slug->save();

            return redirect()->back()->with('success',"บันทึกข้อมูลเรียบร้อยแล้ว");
        }
    }

    public function store(Request $request){
        $request->validate(
            ['name'=>'required|unique:product_category'],
            ['name.required'=>'กรุณากรอกข้อมูล ประเภทสินค้า-ไทย'],
            ['cover_image'   =>  'image|nullable|max:1999'],
        );

        if($request->hasFile('cover_img')) {
            //get filename with the extension
            $filenameWithExt    = $request->file('cover_img')->getClientOriginalName();

            //get filename
            $filename           = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //get extension
            $extension          = $request->file('cover_img')->getClientOriginalExtension();

            //get filename to store
            $filenameToStore    = $filename . 'b_' . time() . '.' . $extension;

            //upload image
            $path               = $request->file('cover_img')->storeAs('public/images', $filenameToStore);

        } else {
            $filenameToStore = '';
        }

            $product_cate               = new BrandModel;
            $product_cate->name         = $request->name;
            $product_cate->dealer_id    = $request->dealer_id;
            $product_cate->is_enable    = $request->is_enable;
            $product_cate->cover_img    = $filenameToStore;
            $product_cate->slug         = Str::slug($request->name, '-');
            $product_cate->save();
            return redirect()->back()->with('success',"บันทึกข้อมูลเรียบร้อยแล้ว");
    }

    public function editBrand($id){
		$where = array('id' => $id);
		$customer = BrandModel::where($where)->first();
		return Response::json($customer);
	}

    public function getBrand($dealerid=0) {
        $empData['data'] = BrandModel::orderby("name","asc")
        ->select('id','name')
        ->where('dealer_id',$dealerid)
        ->get();

        return response()->json($empData);
    }

    public function softdelete(Request $request, $id){
        $delete = $update = BrandModel::find($id)->delete();
        return redirect('/brand')->with('success', 'ลบข้อมูลเรียบร้อยแล้ว');
    }
}
