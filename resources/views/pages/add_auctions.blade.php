@extends('layouts.inventorylayout')

@section('title','add_inventory')

@section('content')
<div class="container">
	<h1 class="text-center py-4 font-weight-bold display-4 text-primary">Add Auction Details</h1>
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
		<form action="{{url('/add_auction')}}" method="POST">
			<input type="hidden" name="_token" value="{{csrf_token()}}" />
			<div class="control-form">
				<input type="text" name="auction_id" placeholder="Auction ID" class="form-control my-2" />
			</div>
			<div class="control-form">
                <select name="reason" class="form-control my-2">
                  <option value="" disabled selected>Select a reason</option>
                  <option value="Order Cancelled">Order Cancelled</option>
                  <option value="Order Went Late">Order Went Late</option>
                  <option value="Order Went To Wrong Location">Order Went To Wrong Location</option>
                </select>
              </div>              
			<div class="control-form">
				<input type="number" name="min_bid" placeholder="Minimum Bid Amount" class="form-control my-2" />
			</div>
			<div class="control-form">
				<input type="text" name="location" placeholder="Auction Location" class="form-control my-2" />
			</div>
			<div class="control-form">
				<button type="submit" class="btn btn-primary btn-block mt-5">
				  Submit
				</button>
			</div>
		</form>
	</div>
</div>
@endsection