<?php

namespace App\Http\Controllers;

use App\Models\SubCategoryModel;
use Illuminate\Http\Request;
use App\Models\DealerModel;//Dealer
use App\Models\BrandModel;
use App\Models\ProductModel;
use Illuminate\Support\Str;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sub_categories =   SubCategoryModel::orderBy('created_at', 'DESC')->get();
        $dealers        =   DealerModel::all();
        $brands         =   BrandModel::all();
        $categories     =   ProductModel::all();

        return view('admin.main-page.product-sub-category', [
            'sub_categories'    => $sub_categories,
            'dealers'           => $dealers,
            'brands'            => $brands,
            'categories'        => $categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'  =>  'required',
        ]);

        $sub_category   =   new SubCategoryModel;

        $sub_category->name         = $request->name;
        $sub_category->slug         = Str::slug($request->name, '-');
        $sub_category->dealer_id    = $request->dealer_id;
        $sub_category->is_enable    = $request->is_enable;
        $sub_category->brand_id     = $request->brand_id;
        $sub_category->category_id  = $request->category_id;

        $sub_category->save();

// dd($request->all());
        //flash messages tell user that the create succeeded
        session()->flash('success', 'New Sub-category has been created successfully');
        return redirect()->back();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubCategoryModel  $subCategoryModel
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategoryModel $subCategoryModel)
    {
        //
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubCategoryModel  $subCategoryModel
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, SubCategoryModel $subCategoryModel)
    {

    }

    public function editSubCategory($id){
		$where = array('id' => $id);
		$customer = SubCategoryModel::where($where)->first();
        // print_r($customer);
        // dd($customer);
		return \Response::json($customer);
	}


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubCategoryModel  $subCategoryModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategoryModel $subCategoryModel)
    {
        $id = $request->sub_category_id2;
        $sub_category   =   SubCategoryModel::find($id);
        $sub_category->name         = $request->name2;
        $sub_category->slug         = Str::slug($request->name2, '-');
        $sub_category->dealer_id    = $request->dealer_id2;
        $sub_category->is_enable    = $request->is_enable2;
        $sub_category->brand_id     = $request->brand_id2;
        $sub_category->category_id  = $request->category_id2;
        // dd(Str::slug($request->name2, '-'));

        $sub_category->save();

        return redirect()->back()->with('success',"บันทึกข้อมูลเรียบร้อยแล้ว");
    }

    public function getSubCategory($categoryid=0){
        // Fetch Employees by Departmentid
        $empData['data'] = SubCategoryModel::orderby("name","asc")
                    ->select('id','name')
                    ->where('category_id',$categoryid)
                    ->get();
  
        return response()->json($empData);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubCategoryModel  $subCategoryModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategoryModel $subCategoryModel)
    {
        //
    }
}
