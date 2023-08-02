@extends('layouts.auctionlayout')

@section('title','edit_auction')

@section('content')
<div class="container">
	<h1 class="text-center py-4 font-weight-bold display-4 text-primary">Edit Auction</h1> 
	@if (count($errors) > 0)
		<div class="col-md-3 my-1 position-absolute right-0 top-5">
			@foreach ($errors->all() as $error)
	            <div class="alert alert-warning alert-dismissible d-flex align-items-center justify-content-between fade show" role="alert">
				  <strong>{{$error}}</strong> 
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>
	        @endforeach
		</div>  
	@endif
	<div class="col-md-6 text-center shadow p-5 mx-auto">
		@if($auction)
			<form action="{{url('/update_auction/'.$auction->id)}}" method="POST">
				<input type="hidden" name="_token" value="{{csrf_token()}}" />
				<div class="control-form">
					<input type="text" name="auction_id" placeholder="Auction ID" class="form-control my-2" value="{{$auction->auction_id}}" />
				</div>
                <div class="control-form">
                    <select name="reason" class="form-control my-2" value="{{$auction->reason}}">
                      <option value="" disabled selected>Select a reason</option>
                      <option value="Order Cancelled">Order Cancelled</option>
                      <option value="Order Went Late">Order Went Late</option>
                      <option value="Order Went To Wrong Location">Order Went To Wrong Location</option>
                    </select>
                  </div>   
				<div class="control-form">
					<input type="number" name="min_bid" placeholder="Minimum Bid" class="form-control my-2"  value="{{$auction->min_bid}}"/>
				</div>
				<div class="control-form">
					<input type="text" name="location" placeholder="Auction Location" class="form-control my-2"  value="{{$auction->location}}"/>
				</div>
				<div class="control-form">
					<button type="submit" class="btn btn-primary mt-5">
					  Submit
					</button>
					<a href="{{route('auctions')}}" class="btn btn-danger">Cancel</a>
				</div>
			</form>
		@else
			<p class="text-center">ERROR 404: Auction Not Found</p>
		@endif
		
	</div>
</div>
@endsection