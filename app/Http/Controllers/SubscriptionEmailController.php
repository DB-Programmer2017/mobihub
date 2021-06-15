<?php

namespace App\Http\Controllers;

use App\Models\SubscriptionEmail;
use Illuminate\Http\Request;

class SubscriptionEmailController extends Controller
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
        return view('include.footer');
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
            'email' =>  'required|email',
        ]);

        // dd($request->all());

        SubscriptionEmail::create($request->all());

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\subsciptionEmail  $subsciptionEmail
     * @return \Illuminate\Http\Response
     */
    public function show(subsciptionEmail $subsciptionEmail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\subsciptionEmail  $subsciptionEmail
     * @return \Illuminate\Http\Response
     */
    public function edit(subsciptionEmail $subsciptionEmail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\subsciptionEmail  $subsciptionEmail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, subsciptionEmail $subsciptionEmail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\subsciptionEmail  $subsciptionEmail
     * @return \Illuminate\Http\Response
     */
    public function destroy(subsciptionEmail $subsciptionEmail)
    {
        //
    }
}
