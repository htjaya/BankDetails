<?php

namespace App\Http\Controllers;

use App\BankDetail;
use Illuminate\Http\Request;

class BankDetailController extends Controller
{

    public function bankView()
    {
        $bank_details = BankDetail::all();
        return view('home', compact('bank_details'));
    }

    public function adddetail()
    {
        return view('/add_details');
    }


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



    public function edit($id)
    {
        $bank = BankDetail::find($id);
        return view('edit', compact('bank'));
    }

    public function editStore(Request $request, $id)
    {

        $bank_details = BankDetail::find($id);
        $bank_details->bank_name = $request->bank_name;
        $bank_details->branch = $request->branch;
        $bank_details->branch_code = $request->branch_code;
        $bank_details->account_number = $request->account_number;
        $bank_details->save();

        return redirect('/home');
    }

    public function destroy($id)
    {
        BankDetail::find($id)->delete();

        return redirect('/home');
    }
}
