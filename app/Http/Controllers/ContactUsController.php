<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SalesMail;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mainpage.contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate input
        $this->validate($request, [
            'name'      =>  'required',
            'email'     =>  'required|email',
            'subject'   =>  'required',
            'message'   =>  'required',
        ]);

        $contactUs  =   [
                            'name'      =>  $request->name,
                            'company'   =>  $request->company,
                            'email'     =>  $request->email,
                            'subject'   =>  $request->subject,
                            'phone'     =>  $request->phone,
                            'message'   =>  $request->message,
                        ];
        // Store input data in contact_us
        ContactUs::create($contactUs);

        session()->flash('success', 'Thank You. Your request has sent successfully, Our team will response as soon as possible.');


        //object $contactUs will be sent to use SalesMail class (use App\Mail\SalesMail)
        //marketing.mobihub@gmail.com
        //sales@databar.co.th
        Mail::to('piyapat.t@databar.co.th')
                ->send(new SalesMail($contactUs));

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function show(ContactUs $contactUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactUs $contactUs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactUs $contactUs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactUs $contactUs)
    {
        //
    }
}
