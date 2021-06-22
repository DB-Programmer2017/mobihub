<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DealerModel;
use Redirect,Response;
use Illuminate\Support\Str;

class DealerController extends Controller
{
    function dealer (){
        $product_cate =DealerModel::paginate(20) ;

        return view('/admin/main-page/dealer',compact('product_cate'));
    }

    public function editProductDealer(Request $request){
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

            if($old_img !='noimage.jpg'){
                unlink('storage/images/'.$old_img );
            }

        } else {
            $filenameToStore = '';
        }


        if($request->has('cate_id2')) {
            $id  = $request->cate_id2;
// dd(Str::slug($request->name2, '-'));
            if($filenameToStore == ''){
                DealerModel::find($id)->update([
                    'name'      =>$request->name2,
                    'is_enable' =>$request->is_enable2,
                ]);
            }else{
                DealerModel::find($id)->update([
                    'cover_img' => $filenameToStore,
                    'name'      =>$request->name2,
                    'is_enable' =>$request->is_enable2,
                ]);
            }

            // $slug =  DealerModel::find($id);
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

            $product_cate               = new DealerModel;
            $product_cate->name         = $request->name;
            $product_cate->cover_img    = $filenameToStore;
            $product_cate->slug         = Str::slug($request->name, '-');
            $product_cate->save();
            return redirect()->back()->with('success',"บันทึกข้อมูลเรียบร้อยแล้ว");
    }

    public function editProductDealers($id){
		$where = array('id' => $id);
		$customer = DealerModel::where($where)->first();
		return Response::json($customer);
	}

    public function softdelete(Request $request, $id){
        $delete = $update = ProductModel::find($id)->delete();
        return redirect('/dealer')->with('success', 'ลบข้อมูลเรียบร้อยแล้ว');
    }
}
