@extends('layouts.mainlayout')

@section('title','welcome')

@section('content')
<div class="container">
	<h1 class="text-center py-4 font-weight-bold display-4 text-primary">Edit Product</h1>
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
		@if($product)
			<form action="{{url('/update/'.$product->id)}}" method="POST">
				<input type="hidden" name="_token" value="{{csrf_token()}}" />
				<div class="control-form">
					<input type="text" name="item_name" placeholder="Item name" class="form-control my-2" value="{{$product->item_name}}" />
				</div>
				<div class="control-form">
					<input type="text" name="item_type" placeholder="Item type" class="form-control my-2"  value="{{$product->item_type}}"/>
				</div>
				<div class="control-form">
					<input type="text" name="description" placeholder="Description" class="form-control my-2"  value="{{$product->description}}"/>
				</div>
				<div class="control-form">
					<input type="number" name="price" placeholder="Price" class="form-control my-2"  value="{{$product->price}}"/>
				</div>
				<div class="control-form">
					<button type="submit" class="btn btn-primary mt-5">
					  Submit
					</button>
					<a href="{{route('products')}}" class="btn btn-danger">Cancel</a>
				</div>
			</form>
		@else
			<p class="text-center">ERROR 404: Product Not Found</p>
		@endif
		
	</div>
</div>
@endsection