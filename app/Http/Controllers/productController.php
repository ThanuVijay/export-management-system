<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class productController extends Controller
{
    public function index(){
    	$products = Products::all();
    	return view('welcome',['products'=>$products]);
    }

    // add product

    public function add_product(Request $request){
    	
    	$this->validate($request,[
	        'item_name' => 'required|min:2|max:50',
	        'item_type' => 'required|min:2|max:50',
	        'description' => 'required|min:2|max:50',
	        'price' => 'required|numeric'
      	]);

      	$product = new Products([
      		'item_name' => $request['item_name'],
      		'item_type' => $request['item_type'],
      		'description' => $request['description'],
      		'price' => $request['price']
      	]);
      	$product->save();

      	return redirect()->route('products')->with('success', 'Product added successfully !!');
    }

    // edit product

    public function edit_product($id){
    	$product = Products::find($id);

    	return view('pages.edit_products')->with('product',$product);
    }

    // update product 

    public function update_product($id, Request $request){
    	$this->validate($request,[
	        'item_name' => 'required|min:2|max:50',
	        'item_type' => 'required|min:2|max:50',
	        'description' => 'required|min:2|max:50',
	        'price' => 'required|numeric'
      	]);

    	Products::find($id)->update([
      		'item_name' => $request['item_name'],
      		'item_type' => $request['item_type'],
      		'description' => $request['description'],
      		'price' => $request['price']
      	]);

      	return redirect()->route('products')->with('success', 'Product updated successfully !!');
    }

    // delete product 

    public function delete_product($id){

    	$product = Products::find($id);

    	if($product){
    		$product->delete();
    		return redirect()->route('products')->with('success', 'Product deleted successfully !!');
    	}else{
    		return redirect()->route('products')->with('warning', 'Error 404: Product Not Found !!');
    	}

    }
}
