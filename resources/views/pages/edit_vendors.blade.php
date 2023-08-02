@extends('layouts.vendorlayout')

@section('title','edit_vendor')

@section('content')
<div class="container">
	<h1 class="text-center py-4 font-weight-bold display-4 text-primary">Edit Vendor</h1> 
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
		@if($vendor)
			<form action="{{url('/update_vendor/'.$vendor->id)}}" method="POST">
				<input type="hidden" name="_token" value="{{csrf_token()}}" />
				<div class="control-form">
					<input type="text" name="name" placeholder="Name" class="form-control my-2" value="{{$vendor->name}}" />
				</div>
				<div class="control-form">
					<input type="text" name="location" placeholder="Location" class="form-control my-2"  value="{{$vendor->location}}"/>
				</div>
				<div class="control-form">
					<input type="text" name="vendor_description" placeholder="Description" class="form-control my-2"  value="{{$vendor->vendor_description}}"/>
				</div>
				<div class="control-form">
					<input type="number" name="vendor_price" placeholder="Price" class="form-control my-2"  value="{{$vendor->vendor_price}}"/>
				</div>
				<div class="control-form">
					<button type="submit" class="btn btn-primary mt-5">
					  Submit
					</button>
					<a href="{{route('vendors')}}" class="btn btn-danger">Cancel</a>
				</div>
			</form>
		@else
			<p class="text-center">ERROR 404: Vendor Not Found</p>
		@endif
		
	</div>
</div>
@endsection