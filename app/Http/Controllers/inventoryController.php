<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventorys;

class inventoryController extends Controller
{
    public function index(){
    	$inventorys = Inventorys::all();
    	return view('inventory',['inventorys'=>$inventorys]);
    }

    // add inventory

    public function add_inventory(Request $request){
    	
    	$this->validate($request,[
	        'product' => 'required|min:2|max:50',
	        'quantity' => 'required|numeric',
	        'orders' => 'required|numeric|max:' . $request->input('quantity'),
	        'availability' => 'required|min:2|max:50'
      	]);

      	$inventory = new Inventorys([
      		'product' => $request['product'],
      		'quantity' => $request['quantity'],
      		'orders' => $request['orders'],
      		'availability' => $request['availability']
      	]);
      	$inventory->save();

      	return redirect()->route('inventorys')->with('success', 'Inventory added successfully !!');
    }

    // edit inventory

    public function edit_inventory($inventory_id){
    	$inventory = Inventorys::find($inventory_id);

    	return view('pages.edit_inventorys')->with('inventory',$inventory);
    }

    // update inventory 

    public function update_inventory($inventory_id, Request $request){
    	$this->validate($request,[
	        'product' => 'required|min:2|max:50',
	        'quantity' => 'required|numeric',
	        'orders' => 'required|numeric|max:' . $request->input('quantity'),
	        'availability' => 'required|min:2|max:50'
      	]);

    	Inventorys::find($inventory_id)->update([
      		'product' => $request['product'],
      		'quantity' => $request['quantity'],
      		'orders' => $request['orders'],
      		'availability' => $request['availability']
      	]);

      	return redirect()->route('inventorys')->with('success', 'Inventory updated successfully !!');
    }

    // delete inventory 

    public function delete_inventory($id){

    	$inventory = Inventorys::find($id);

    	if($inventory){
    		$inventory->delete();
    		return redirect()->route('inventorys')->with('success', 'Inventory deleted successfully !!');
    	}else{
    		return redirect()->route('inventorys')->with('warning', 'Error 404: Inventory Not Found !!');
    	}

    }
}
