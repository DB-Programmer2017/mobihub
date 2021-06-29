<?php

namespace App\Http\Controllers;
use App\Models\ScaleFusionModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Redirect,Response;
class ScaleFusionController extends Controller
{
    function index (){
        $product   =   ScaleFusionModel::orderBy('rd', 'ASC')->paginate(20) ;

        return view('/admin/main-page/scalefusion',compact(['product']));
    }

    public function store(Request $request){
        $request->validate(
            ['name'=>'required'],
            ['name.required'=>'กรุณากรอกข้อมูล ประเภทสินค้า-ไทย'],
            ['cover_image'   =>  'image|nullable|max:1999'],
        );

        if($request->hasFile('cover_img')) {
            $filenameWithExt    = $request->file('cover_img')->getClientOriginalName();
            $filename           = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension          = $request->file('cover_img')->getClientOriginalExtension();
            $filenameToStore    = $filename . '_' . time() . '.' . $extension;
            $path               = $request->file('cover_img')->storeAs('public/images', $filenameToStore);

        } else {
            $filenameToStore = '';
        }

        $product_cate               = new ScaleFusionModel;
        $product_cate->name         = $request->name;
        $product_cate->description  = $request->description;
        $product_cate->is_enable    = $request->is_enable;
        $product_cate->cover_img    = $filenameToStore;
        $product_cate->slug         = Str::slug($request->name, '-');
       
        $product_cate->save();
        return back()->with('success',"บันทึกข้อมูลเรียบร้อยแล้ว");
    }

    public function updateScaleFusion(Request $request){
        if($request->hasFile('cover_img2')) {
            $filenameWithExt    = $request->file('cover_img2')->getClientOriginalName();
            $filename           = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension          = $request->file('cover_img2')->getClientOriginalExtension();
            $filenameToStore    = $filename . 'n_' . time() . '.' . $extension;
            $path               = $request->file('cover_img2')->storeAs('public/images', $filenameToStore);

            $old_img = $request->img_cover_name;

            if($old_img !=''){
                unlink('storage/images/'.$old_img );
            }

        } else {
            $filenameToStore = '';
        }

        if($request->has('id2')) {
            $id  = $request->id2;

            if($filenameToStore == ''){
                ScaleFusionModel::find($id)->update([
                    'is_enable'     => $request->is_enable2,
                    'name'          => $request->name2,
                    'description'   => $request->description2,
                    'slug'          => Str::slug($request->name2, '-')
                ]);
            }else{
                ScaleFusionModel::find($id)->update([
                    'cover_img' => $filenameToStore,
                    'name'          => $request->name2,
                    'description'   => $request->description2,
                    'slug'          => Str::slug($request->name2, '-')
                ]);
            }
        }

        return redirect()->back()->with('success',"บันทึกข้อมูลเรียบร้อยแล้ว");
    }

    public function editScale($id){
		$where = array('id' => $id);
		$customer = ScaleFusionModel::where($where)->first();
		return Response::json($customer);
	}

    function SclaeSortable($id){
        $ids = explode(',',$id);
        //dd($ids);

        foreach($ids as $index=>$id) {
            $id = (int) $id;

            if($id != '') {
                $rd = $index+1;

                $customer = ScaleFusionModel::find($id)->update([
                    'rd'=>$rd
                ]);

            }
        }

        session()->flash('success', 'อัพเดทเรียบร้อยแล้ว');
        return Response::json($customer);
    }
}
