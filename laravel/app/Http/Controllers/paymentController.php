<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payments;

class paymentController extends Controller
{
    public function index(){
    	$payments = Payments::all();
    	return view('payment',['payments'=>$payments]);
    }

    // add payment

    public function add_payment(Request $request){
    	
    	$this->validate($request,[
	        'card_no' => 'required|numeric',
	        'expiry' => 'required|min:2|max:50',
	        'cvv' => 'required|numeric',
	        'card_holder' => 'required|min:2|max:50'
      	]);

      	$payment = new Payments([
      		'card_no' => $request['card_no'],
      		'expiry' => $request['expiry'],
      		'cvv' => $request['cvv'],
      		'card_holder' => $request['card_holder']
      	]);
      	$payment->save();

      	return redirect()->route('products')->with('success', 'Payment added successfully !!');
    }

   
}
