@extends('layouts.orderlayout')

@section('title','edit_order')

@section('content')
<div class="container">
	<h1 class="text-center py-4 font-weight-bold display-4 text-primary">Edit Order</h1> 
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
		@if($order)
			<form action="{{url('/update_order/'.$order->id)}}" method="POST">
				<input type="hidden" name="_token" value="{{csrf_token()}}" />
				<div class="control-form">
					<input type="text" name="order_id" placeholder="Order ID" class="form-control my-2" value="{{$order->order_id}}" />
				</div>
				<div class="control-form">
					<input type="text" name="address" placeholder="Address" class="form-control my-2"  value="{{$order->address}}"/>
				</div>
				<div class="control-form">
					<input type="text" name="products" placeholder="Products" class="form-control my-2"  value="{{$order->products}}"/>
				</div>
				<div class="control-form">
					<input type="number" name="total" placeholder="Total" class="form-control my-2"  value="{{$order->total}}"/>
				</div>
				<div class="control-form">
					<button type="submit" class="btn btn-primary mt-5">
					  Submit
					</button>
					<a href="{{route('orders')}}" class="btn btn-danger">Cancel</a>
				</div>
			</form>
		@else
			<p class="text-center">ERROR 404: Order Not Found</p>
		@endif
		
	</div>
</div>
@endsection