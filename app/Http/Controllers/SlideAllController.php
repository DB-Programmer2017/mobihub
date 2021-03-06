<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SlideAllModel;


use Redirect,Response;

class SlideAllController extends Controller
{
    function slide (Request $request){
        $slides_banner   = SlideAllModel::orderBy('rd', 'ASC')->paginate(20) ;
        return view('/admin/main-page/slide',compact(['slides_banner']));
    }

    function sortable (Request $request){
        $slides_banner   = SlideAllModel::where('is_enable', '1')->orderBy('rd', 'ASC')->paginate(20) ;

        return view('/admin/main-page/sortable',compact(['slides_banner']));
    }

    function sortableUpdate($id){
        $ids = explode(',',$id);

        foreach($ids as $index=>$id) {
            $id = (int) $id;

            if($id != '') {
                $rd = $index+1;

                // mysqli_query($conn,"UPDATE factory_label SET
                // rd = '".($index + 1)."'
                // WHERE id = '".$id."'");

                $customer = SlideAllModel::find($id)->update([
                    'rd'=>$rd
                ]);

            }
        }

        session()->flash('success', 'เลือกลำดับของ Banner เรียบร้อยแล้ว');
        return Response::json($customer);
    }



    public function store(Request $request){
        $request->validate([
            'cover_img' => 'required',
            'size'      => 'required',
        ]);

        if($request->hasFile('cover_img')) {
            $filenameWithExt    = $request->file('cover_img')->getClientOriginalName();
            $filename           = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension          = $request->file('cover_img')->getClientOriginalExtension();
            $filenameToStore    = $filename . 's_' . time() . '.' . $extension;
            $path               = $request->file('cover_img')->storeAs('public/images', $filenameToStore);

        } else {
            $filenameToStore = '';
        }

        // if ($request->hasFile('cover_img')) {
        //     $image = $request->file('cover_img');
        //     $filename = 'page' . '-' . time() . '.' . $image->getClientOriginalExtension();
        //     $location = public_path('public/images/' . $filename);

        //     Image::make($image)->resize(1200, 600)->save($location);

        //     if(!empty($page->image)){
        //       Storage::delete('images/' . $page->image);
        //     }

        //     $page->image = $filename;
        // }
        
        $last_rd     =   SlideAllModel::where('rd','>','0')->orderBy('rd','DESC')->first();
        $rd = $last_rd->rd + 1;

        $new_slide              = new SlideAllModel;
        $new_slide->cover_img   = $filenameToStore;
        $new_slide->size        = $request->size;
        $new_slide->rd          = $rd;
        $new_slide->save();

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

        if($request->has('slide_id2')) {
            $id  = $request->slide_id2;

            if($filenameToStore == ''){
                SlideAllModel::find($id)->update([
                    'is_enable' => $request->is_enable2,
                    'size'      => $request->size2
                ]);
            }else{
                SlideAllModel::find($id)->update([
                    'cover_img' => $filenameToStore,
                    'is_enable' => $request->is_enable2,
                    'size'      => $request->size2
                ]);
            }
        }

        return redirect()->back()->with('success',"บันทึกข้อมูลเรียบร้อยแล้ว");
    }

    /** To update the order of slides **/
    public function updateOrder(Request $request) {
        $ids = explode(',', $request->sort_order);
        
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
