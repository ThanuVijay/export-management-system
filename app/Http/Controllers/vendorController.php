<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendors;

class vendorController extends Controller
{
    public function index(){
    	$vendors = Vendors::all();
    	return view('vendor',['vendors'=>$vendors]);
    }

    // add vendor

    public function add_vendor(Request $request){
    	
    	$this->validate($request,[
	        'name' => 'required|min:2|max:50',
	        'location' => 'required|min:2|max:50',
	        'vendor_description' => 'required|min:2|max:50',
	        'vendor_price' => 'required|numeric'
      	]);

      	$vendor = new Vendors([
      		'name' => $request['name'],
      		'location' => $request['location'],
      		'vendor_description' => $request['vendor_description'],
      		'vendor_price' => $request['vendor_price']
      	]);
      	$vendor->save();

      	return redirect()->route('vendors')->with('success', 'Vendor added successfully !!');
    }

    // edit vendor

    public function edit_vendor($vendor_id){
    	$vendor = Vendors::find($vendor_id);

    	return view('pages.edit_vendors')->with('vendor',$vendor);
    }

    // update vendor 

    public function update_vendor($vendor_id, Request $request){
    	$this->validate($request,[
	        'name' => 'required|min:2|max:50',
	        'location' => 'required|min:2|max:50',
	        'vendor_description' => 'required|min:2|max:50',
	        'vendor_price' => 'required|numeric'
      	]);

    	Vendors::find($vendor_id)->update([
      		'name' => $request['name'],
      		'location' => $request['location'],
      		'vendor_description' => $request['vendor_description'],
      		'vendor_price' => $request['vendor_price']
      	]);

      	return redirect()->route('vendors')->with('success', 'Vendor updated successfully !!');
    }

    // delete vendor 

    public function delete_vendor($vendor_id){

    	$vendor = Vendors::find($vendor_id);

    	if($vendor){
    		$vendor->delete();
    		return redirect()->route('vendors')->with('success', 'Vendor deleted successfully !!');
    	}else{
    		return redirect()->route('vendors')->with('warning', 'Error 404: Vendor Not Found !!');
    	}

    }
}
