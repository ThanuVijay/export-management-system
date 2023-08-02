<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invoices;

class invoiceController extends Controller
{
    public function index(){
    	$invoices = Invoices::all();
    	return view('invoice',['invoices'=>$invoices]);
    }

    // add invoice

    public function add_invoice(Request $request){
    	
    	$this->validate($request,[
	        'invoice_id' => 'required|min:2|max:50',
	        'order' => 'required|min:2|max:50',
	        'status' => 'required|min:2|max:50',
	        'amount' => 'required|numeric'
      	]);

      	$invoice = new Invoices([
      		'invoice_id' => $request['invoice_id'],
      		'order' => $request['order'],
      		'status' => $request['status'],
      		'amount' => $request['amount']
      	]);
      	$invoice->save();

      	return redirect()->route('invoices')->with('success', 'Invoice added successfully !!');
    }

    // edit invoice

    public function edit_invoice($invoice_id){
    	$invoice = Invoices::find($invoice_id);

    	return view('pages.edit_invoices')->with('invoice',$invoice);
    }

    // update invoice 

    public function update_invoice($invoice_id, Request $request){
    	$this->validate($request,[
	        'invoice_id' => 'required|min:2|max:50',
	        'order' => 'required|min:2|max:50',
	        'status' => 'required|min:2|max:50',
	        'amount' => 'required|numeric'
      	]);

    	Invoices::find($invoice_id)->update([
      		'invoice_id' => $request['invoice_id'],
      		'order' => $request['order'],
      		'status' => $request['status'],
      		'amount' => $request['amount']
      	]);

      	return redirect()->route('invoices')->with('success', 'Invoice updated successfully !!');
    }

    // delete invoice 

    public function delete_invoice($id){

    	$invoice = Invoices::find($id);

    	if($invoice){
    		$invoice->delete();
    		return redirect()->route('invoices')->with('success', 'Invoice deleted successfully !!');
    	}else{
    		return redirect()->route('invoices')->with('warning', 'Error 404: Invoice Not Found !!');
    	}

    }
}
