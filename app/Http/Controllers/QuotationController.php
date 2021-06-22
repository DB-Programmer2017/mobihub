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

        $quotation  =   [
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

        Mail::to('piyapat.t@databar.co.th')
        ->send(new QuotationMail($quotation));

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
