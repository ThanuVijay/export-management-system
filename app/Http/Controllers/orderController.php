<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders;

class orderController extends Controller
{
    public function index(){
    	$orders = Orders::all();
    	return view('order',['orders'=>$orders]);
    }

    // add order

    public function add_order(Request $request){
    	
    	$this->validate($request,[
	        'order_id' => 'required|min:2|max:50',
	        'address' => 'required|min:2|max:50',
	        'products' => 'required|min:2|max:50',
	        'total' => 'required|numeric'
      	]);

      	$order = new Orders([
      		'order_id' => $request['order_id'],
      		'address' => $request['address'],
      		'products' => $request['products'],
      		'total' => $request['total']
      	]);
      	$order->save();

      	return redirect()->route('orders')->with('success', 'Order added successfully !!');
    }

    // edit order

    public function edit_order($order_id){
    	$order = Orders::find($order_id);

    	return view('pages.edit_orders')->with('order',$order);
    }

    // update order 

    public function update_order($order_id, Request $request){
    	$this->validate($request,[
	        'order_id' => 'required|min:2|max:50',
	        'address' => 'required|min:2|max:50',
	        'products' => 'required|min:2|max:50',
	        'total' => 'required|numeric'
      	]);

    	Orders::find($order_id)->update([
      		'order_id' => $request['order_id'],
      		'address' => $request['address'],
      		'products' => $request['products'],
      		'total' => $request['total']
      	]);

      	return redirect()->route('orders')->with('success', 'Order updated successfully !!');
    }

    // delete order 

    public function delete_order($id){

    	$order = Orders::find($id);

    	if($order){
    		$order->delete();
    		return redirect()->route('orders')->with('success', 'Order deleted successfully !!');
    	}else{
    		return redirect()->route('orders')->with('warning', 'Error 404: Order Not Found !!');
    	}

    }
}
