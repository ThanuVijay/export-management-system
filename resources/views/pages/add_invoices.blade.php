@extends('layouts.invoicelayout')

@section('title','add_invoice')

@section('content')
<div class="container">
	<h1 class="text-center py-4 font-weight-bold display-4 text-primary">Add Invoice Details</h1>
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
		<form action="{{url('/add_invoice')}}" method="POST">
			<input type="hidden" name="_token" value="{{csrf_token()}}" />
			<div class="control-form">
				<input type="text" name="invoice_id" placeholder="Invoice ID" class="form-control my-2" />
			</div>
			<div class="control-form">
				<input type="text" name="order" placeholder="Order ID" class="form-control my-2" />
			</div>
			<div class="control-form">
				<input type="text" name="status" placeholder="Status" class="form-control my-2" />
			</div>
			<div class="control-form">
				<input type="number" name="amount" placeholder="Amount" class="form-control my-2" />
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