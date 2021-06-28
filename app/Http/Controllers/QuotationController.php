<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quotation;
use App\Models\ProductAllModel;
use Illuminate\Support\Facades\Mail;
use App\Mail\QuotationMail;

class QuotationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quotations = Quotation::orderBy('created_at', 'DESC')->get();

        return '123';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products  =  ProductAllModel::orderBy('name', 'ASC')->get();
        return view('mainpage.quotation', [
            'products' => $products,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'  =>  'required',
            'email' =>  'required|email',
            'phone' =>  'numeric',
        ]);

        $quo_no   = Quotation::where('quo_no','LIKE','MH_QT%')->orderBy('quo_no', 'desc')->first();
        $code_num = "MH_QT".date("ym");

        if($quo_no['quo_no'] == null){
            $quo_no = $code_num."_001";
        }else{
            $code_run=  substr($quo_no['quo_no'],10,13);
            $quo_no =$code_num."_".str_pad($code_run+1 ,3, "0", STR_PAD_LEFT);
        }

        $quotation  =   [
            'quo_no'    =>  $quo_no,
            'name'      =>  $request->name,
            'email'     =>  $request->email,
            'company'   =>  $request->company,
            'phone'     =>  $request->phone,
            'message'   =>  $request->message,
            'products'  =>  $request->products,
        ];
// dd($quotation);
// dd(json_encode($request->products));
        Quotation::create($quotation);

        
        session()->flash('success', 'Thank You. Your request has sent successfully, Our team will response as soon as possible.');
        Mail::to('pairin.p@databar.co.th')
        ->send(new QuotationMail($quotation));

        // Mail::to('piyapat.t@databar.co.th')
        // ->send(new QuotationMail($quotation));

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
