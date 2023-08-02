@extends('layouts.inventorylayout')

@section('title','edit_inventory')

@section('content')
<div class="container">
	<h1 class="text-center py-4 font-weight-bold display-4 text-primary">Edit Inventory</h1> 
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
		@if($inventory)
			<form action="{{url('/update_inventory/'.$inventory->id)}}" method="POST">
				<input type="hidden" name="_token" value="{{csrf_token()}}" />
				<div class="control-form">
					<input type="text" name="product" placeholder="Product" class="form-control my-2" value="{{$inventory->product}}" />
				</div>
				<div class="control-form">
					<input type="number" name="quantity" placeholder="Quantity" class="form-control my-2"  value="{{$inventory->quantity}}"/>
				</div>
				<div class="control-form">
					<input type="number" name="orders" placeholder="Orders" class="form-control my-2"  value="{{$inventory->orders}}"/>
				</div>
				<div class="control-form">
					<select name="availability" class="form-control my-2" value="{{$inventory->availability}}">
					  <option value="" disabled selected>Select an Availability</option>
					  <option value="available">Available</option>
					  <option value="unavailable">Unavailable</option>
					</select>
				  </div>
				<div class="control-form">
					<button type="submit" class="btn btn-primary mt-5">
					  Submit
					</button>
					<a href="{{route('inventorys')}}" class="btn btn-danger">Cancel</a>
				</div>
			</form>
		@else
			<p class="text-center">ERROR 404: Invoice Not Found</p>
		@endif
		
	</div>
</div>
@endsection