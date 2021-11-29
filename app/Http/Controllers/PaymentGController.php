<?php

namespace App\Http\Controllers;

use App\Models\PaymentG;
use Illuminate\Http\Request;

class PaymentGController extends Controller
{
    public function index()
    {
        $payment = PaymentG::all();
        return view('pages.payment.index', compact('payment'));
    }


    // Flow control functions or methods
    public function personal_details()
    {
        return view('pages.payment.create_personal_details');
    }

    public function card_details()
    {
        return view('pages.payment.create_card_details');
    }

    public function store_personal(Request $request)
    {
        return view('pages.payment.create_card_details', $request->all());
    }

    public function success()
    {
        return view('pages.payment.success');
    }

    public function fail()
    {
        return view('pages.payment.fail');
    }

    public function store_card(Request $request)
    {
        $payment = new PaymentG;

        // $request->validate([
        //     'card_name' => 'required|max:255',
        //     'expiration_year' => 'required',
        //     'expiration_month' => 'required',
        //     'cvv' => 'required|max:3',
        //     'pin' => 'required|max:3',
        //     'card_number' => 'required|max:16',
        //     'email' => 'required|email',
        //     'amount' => 'required|integer|size:16',
        // ]);

        $payment->card_name = $request->input('card_name');
        $payment->expiration_year = $request->input('expiration_year');
        $payment->expiration_month = $request->input('expiration_month');
        $payment->cvv = $request->input('cvv');
        $payment->pin = $request->input('pin');
        $payment->card_number = $request->input('card_number');
        $payment->email = $request->input('email');
        $payment->amount = $request->input('amount');
        
        $payment->save();

        return view('pages.payment.success', ['success'=>true, 'amount'=>$payment->amount, 'email'=>$payment->email, 'card_name'=>$payment->card_name]);
    }


    public function delete($id)
    {
        $payment = PaymentG::find($id);
        $payment->delete();
        return redirect('paymentG')->with('status', 'Payment deleted successful');
    }

    public function update(Request $request, $id)
    {
        $payment = PaymentG::find($id);
        $payment->card_name = $request->input('card_name');
        $payment->card_number = $request->input('card_number');
        $payment->email = $request->input('email');
        $payment->expiration_date = $request->input('expiration_date');
        $payment->cvv = $request->input('cvv');
        $payment->pin = $request->input('pin');
        $payment->update();

        return redirect('paymentG')->with('status', 'Payment updated successful');
    }
}


