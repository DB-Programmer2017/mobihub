<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SlideAllModel;
use App\Http\Controllers\Image

use Redirect,Response;

class SlideAllController extends Controller
{
    function slide (Request $request){
        $slides_banner   = SlideAllModel::paginate(20) ;
        return view('/admin/main-page/slide',compact(['slides_banner']));
    }

    public function store(Request $request){
        $request->validate([
            'cover_img' => 'required'
        ]);

        // if($request->hasFile('cover_img')) {
        //     $filenameWithExt    = $request->file('cover_img')->getClientOriginalName();
        //     $filename           = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //     $extension          = $request->file('cover_img')->getClientOriginalExtension();
        //     $filenameToStore    = $filename . 's_' . time() . '.' . $extension;
        //     $path               = $request->file('cover_img')->storeAs('public/images', $filenameToStore);

        // } else {
        //     $filenameToStore = '';
        // }

        if ($request->hasFile('cover_img')) {
            $image = $request->file('cover_img');
            $filename = 'page' . '-' . time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('public/images/' . $filename);

            Image::make($image)->resize(1200, 600)->save($location);

            if(!empty($page->image)){
              Storage::delete('images/' . $page->image);
            }

            $page->image = $filename;
          }

            $product_cate               = new SlideAllModel;
            $product_cate->cover_img    = $filename;
            $product_cate->save();

            return redirect()->back()->with('success',"บันทึกข้อมูลเรียบร้อยแล้ว");
    }

    public function editSlideAll(Request $request){
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
                SlideAllModel::find($id)->update([
                    'is_enable'=>$request->is_enable2
                ]);
            }else{
                SlideAllModel::find($id)->update([
                    'cover_img'=> $filenameToStore,
                    'is_enable'=>$request->is_enable2
                ]);
            }
            return redirect()->back()->with('success',"บันทึกข้อมูลเรียบร้อยแล้ว");
        }
    }

    /** To update the order of slides **/
    public function updateOrder(Request $request) {
        $ids = explode(',', $request->sort_order);
        dd($ids);
        $slides     =   SlideAllModel::all();

        foreach ($slides as $slide) {
            foreach ($request->order as $order) {
                if($order['id'] == $slide->id) {
                    $slide->update(['order' => $prder['position']]);
                }
            }
        }

        return \Response('update Successfully.', 200);
    }
    public function editSlide($id){
		$where = array('id' => $id);
		$customer = SlideAllModel::where($where)->first();
		return Response::json($customer);
	}
}
