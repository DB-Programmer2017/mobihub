<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsAllModel;

use Redirect,Response;

class NewsAllController extends Controller
{
    function news (Request $request){
        $product_cate   = NewsAllModel::paginate(20) ;

        return view('/admin/main-page/news',compact(['product_cate']));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'title' => 'required'
        ]);

        if($request->hasFile('cover_img')) {
            $filenameWithExt    = $request->file('cover_img')->getClientOriginalName();
            $filename           = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension          = $request->file('cover_img')->getClientOriginalExtension();
            $filenameToStore    = $filename . 'n_' . time() . '.' . $extension;
            $path               = $request->file('cover_img')->storeAs('public/images', $filenameToStore);

        } else {
            $filenameToStore = '';
        }

            $product_cate               = new NewsAllModel;
            $product_cate->name         = $request->name;
            $product_cate->title        = $request->title;
            $product_cate->description  = $request->description;
            $product_cate->cover_img    = $filenameToStore;
            $product_cate->save();

            // $LastInsertId = $product_cate->id;
            
            // $files = [];
            // if($request->hasfile('filenames'))
            // {
            //     foreach($request->file('filenames') as $file)
            //     {
            //         $name = "NEW".time().rand(1,100).'.'.$file->extension();
            //         $file->move(public_path('storage/images'), $name);  
            //         $files[] = $name;  
            //     }
            // }

            // foreach ($files as $key => $value) {
            //     $file= new ProductGalleryModel();

            //     $file->img = $value;
            //     $file->product_id =  $LastInsertId;
            //     $file->save();
            // }

            return redirect()->back()->with('success',"บันทึกข้อมูลเรียบร้อยแล้ว");
    }

    public function editNewsAll(Request $request){
        if($request->hasFile('cover_img2')) {
            //get filename with the extension
            $filenameWithExt    = $request->file('cover_img2')->getClientOriginalName();

            //get filename
            $filename           = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //get extension
            $extension          = $request->file('cover_img2')->getClientOriginalExtension();

            //get filename to store
            $filenameToStore    = $filename . 'n_' . time() . '.' . $extension;

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
                NewsAllModel::find($id)->update([
                    'name'=>$request->name2,
                    'title'=>$request->title2,
                    'description'=>$request->description2,
                    'is_enable'=>$request->is_enable2
                ]);
            }else{
                NewsAllModel::find($id)->update([
                    'cover_img'=> $filenameToStore,
                    'name'=>$request->name2,
                    'title'=>$request->title2,
                    'description'=>$request->description2,
                    'is_enable'=>$request->is_enable2
                ]);
            }
            return redirect()->back()->with('success',"บันทึกข้อมูลเรียบร้อยแล้ว");
        }
    }

    public function editNews($id){
		$where = array('id' => $id);
		$customer = NewsAllModel::where($where)->first();
		return Response::json($customer);
	}
}
