<?php

namespace App\Http\Controllers;

use App\BankDetail;
use Illuminate\Http\Request;

class BankDetailController extends Controller
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
    public function adddetail()
    {
        return view('/add_details');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request['user_id'] = auth()->user()->id;
        $request->validate([
            'user_id' => 'required',
            'bank_name' => 'required',
            'branch' => 'required',
            'branch_code' => 'required',
            'account_number' => 'required|numeric',
        ]);


        BankDetail::create($request->all());

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BankDetail  $bankDetail
     * @return \Illuminate\Http\Response
     */
    public function show(BankDetail $bankDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BankDetail  $bankDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(BankDetail $bankDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BankDetail  $bankDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BankDetail $bankDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BankDetail  $bankDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(BankDetail $bankDetail)
    {
        //
    }
}
