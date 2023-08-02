@extends('layouts.inventorylayout')

@section('title','add_inventory')

@section('content')
<div class="container">
	<h1 class="text-center py-4 font-weight-bold display-4 text-primary">Add Inventory Details</h1>
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
		<form action="{{url('/add_inventory')}}" method="POST">
			<input type="hidden" name="_token" value="{{csrf_token()}}" />
			<div class="control-form">
				<input type="text" name="product" placeholder="Product" class="form-control my-2" />
			</div>
			<div class="control-form">
				<input type="number" name="quantity" placeholder="Quantity" class="form-control my-2" />
			</div>
			<div class="control-form">
				<input type="number" name="orders" placeholder="Orders" class="form-control my-2" />
			</div>
			<div class="control-form">
				<select name="availability" class="form-control my-2">
				  <option value="" disabled selected>Select an Availability</option>
				  <option value="available">Available</option>
				  <option value="unavailable">Unavailable</option>
				</select>
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