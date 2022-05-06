<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment_details;


class PaymentController extends Controller
{
    public function store(Request $request)
    {
       // $payment = new Payment_details;
    // $payment->order_id = 1;
    // $payment->amount = $request->amount;
    // $payment->status = 1;
    // $payment->save();
    return redirect()->route('delivery_address');
  
    }
}
