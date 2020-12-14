<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Mail\PaymentValidation;
use Illuminate\Support\Facades\Mail;

class TransactionController extends Controller
{
    //

    public  function  validator(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'application_id' => 'required|exists:applications,id|unique:transactions,application_id',
            'account' => 'required',
            'amount' => 'required',
            'phone' => 'required',
            'email' => 'required | email',
            'interested_programme' => 'required',
            'date' => 'required',
        ]);

        Transaction::create($request->all() + ['status' => 'Pending']);
        Mail::to($request->email)->send(new PaymentValidation($request->all()));

        return redirect()->route('validate')->with(['status' => "Transaction validation request is successuful."]);
    }
}

