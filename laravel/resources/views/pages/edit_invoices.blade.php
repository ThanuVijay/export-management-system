@extends('layouts.invoicelayout')

@section('title','edit_invoice')

@section('content')
<div class="container">
	<h1 class="text-center py-4 font-weight-bold display-4 text-primary">Edit Invoice</h1> 
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
		@if($invoice)
			<form action="{{url('/update_invoice/'.$invoice->id)}}" method="POST">
				<input type="hidden" name="_token" value="{{csrf_token()}}" />
				<div class="control-form">
					<input type="text" name="invoice_id" placeholder="Invoice ID" class="form-control my-2" value="{{$invoice->invoice_id}}" />
				</div>
				<div class="control-form">
					<input type="text" name="order" placeholder="Order ID" class="form-control my-2"  value="{{$invoice->order}}"/>
				</div>
				<div class="control-form">
					<input type="text" name="status" placeholder="Status" class="form-control my-2"  value="{{$invoice->status}}"/>
				</div>
				<div class="control-form">
					<input type="number" name="amount" placeholder="Amount" class="form-control my-2"  value="{{$invoice->amount}}"/>
				</div>
				<div class="control-form">
					<button type="submit" class="btn btn-primary mt-5">
					  Submit
					</button>
					<a href="{{route('invoices')}}" class="btn btn-danger">Cancel</a>
				</div>
			</form>
		@else
			<p class="text-center">ERROR 404: Invoice Not Found</p>
		@endif
		
	</div>
</div>
@endsection