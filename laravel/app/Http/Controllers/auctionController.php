<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Auctions;

class auctionController extends Controller
{
    public function index(){
    	$auctions = Auctions::all();
    	return view('auction',['auctions'=>$auctions]);
    }

    // add auction

    public function add_auction(Request $request){
    	
    	$this->validate($request,[
	        'auction_id' => 'required|min:2|max:50',
	        'reason' => 'required|min:2|max:50',
	        'min_bid' => 'required|numeric',
	        'location' => 'required|min:2|max:50'
      	]);

      	$auction = new Auctions([
      		'auction_id' => $request['auction_id'],
      		'reason' => $request['reason'],
      		'min_bid' => $request['min_bid'],
      		'location' => $request['location']
      	]);
      	$auction->save();

      	return redirect()->route('auctions')->with('success', 'Auction added successfully !!');
    }

    // edit auction

    public function edit_auction($auction_id){
    	$auction = Auctions::find($auction_id);

    	return view('pages.edit_auctions')->with('auction',$auction);
    }

    // update auction 

    public function update_auction($auction_id, Request $request){
    	$this->validate($request,[
	        'auction_id' => 'required|min:2|max:50',
	        'reason' => 'required|min:2|max:50',
	        'min_bid' => 'required|numeric',
	        'location' => 'required|min:2|max:50'
      	]);

    	Auctions::find($auction_id)->update([
      		'auction_id' => $request['auction_id'],
      		'reason' => $request['reason'],
      		'min_bid' => $request['min_bid'],
      		'location' => $request['location']
      	]);

      	return redirect()->route('auctions')->with('success', 'Auction updated successfully !!');
    }

    // delete auction 

    public function delete_auction($id){

    	$auction = Auctions::find($id);

    	if($auction){
    		$auction->delete();
    		return redirect()->route('auctions')->with('success', 'Auction deleted successfully !!');
    	}else{
    		return redirect()->route('auctions')->with('warning', 'Error 404: Auction Not Found !!');
    	}

    }
}
