<?php

namespace Neher\Inquiry\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Neher\Inquiry\Http\Requests\InquiryStore;
use Neher\Inquiry\Models\Inquiry;
use Neher\Inquiry\Mail\InquiryArrived;
use Illuminate\Support\Facades\Mail;

class InquriesController extends Controller
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
        $title = "Inquiry::".config('app.name');
        return view('inquiry::inquries.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InquiryStore $request)
    {
                
        $inquiry = new Inquiry;

        $inquiry->name = $request->name;
        $inquiry->email = $request->email;
        $inquiry->mobile = $request->mobile;
        $inquiry->body = $request->body;

        $inquiry->save();

        Mail::to(config('inquiry.send_email_to'))->send(new InquiryArrived($inquiry));

        return back()->withSuccess("Thank you for your Inquiry");
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
