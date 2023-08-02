@extends('layouts.orderlayout')

@section('title','orders')

@section('content')
<style>
	@media print {
		.no-print {
			display: none;
		}
	}
</style>
<div class="container">
	<div class="row">	
		@if(session()->has('success'))
			<div class="alert alert-success alert-dismissible my-2 d-flex align-items-center justify-content-between fade show" role="alert">
			  <strong>{{ session()->get('success') }}</strong> 
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
		@endif
		@if(session()->has('warning'))
			<div class="alert alert-warning alert-dismissible my-2 d-flex align-items-center justify-content-between fade show" role="alert">
			  <strong>{{ session()->get('warning') }}</strong> 
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
		@endif

		<div class="col-md-12 my-5">
			<div class="d-flex justify-content-end mb-3">
				<button class="btn btn-primary no-print" onclick="window.print()"><i class="fas fa-print"></i> Print</button>
			</div>
			<table class="table border">
			  <thead class="thead-dark bg-primary text-white shadow">
			    <tr>
			      <th scope="col">Id</th>
			      <th scope="col">Order Id</th>
			      <th scope="col">Address</th>
			      <th scope="col">Products</th>
			      <th scope="col">Total</th>
			      <th scope="col"></th>
			    </tr>
			  </thead>
			  <tbody>
			  	@if(count($orders) > 0)
			  		<?php $id = 1; ?>
			  		@foreach ($orders as $order)
			  			<tr>
					      <th scope="row">{{$id}}</th>
					      <td>{{$order->order_id}}</td>
					      <td>{{$order->address}}</td>
					      <td>{{$order->products}}</td>
					      <td>{{$order->total}}</td>
					      <td class="d-flex align-items-center justify-content-around">
					      	<a href="{{url('/edit_order/'.$order->id)}}" class="btn btn-primary no-print">
					      		<i class="fas fa-pencil text-white d-flex align-items-center justify-content-between">  Edit</i>
					      	</a>
					      	<a href="{{url('/delete_order/'.$order->id)}}" class="btn btn-danger no-print">
					      		<i class="fas fa-trash text-white d-flex align-items-center justify-content-between">  Delete</i>
					      	</a>
					      </td>
					    </tr>
					    <?php $id++; ?>
			  		@endforeach
			  	@endif
			    
			  </tbody>
			</table>
		</div>
	</div>
</div>
<footer class="footer-section">
	<div class="col-md-12 text-center">
		<p class="mb-0">&copy; 2023 Autoaum Logistics. All rights reserved.</p>
	</div>
</footer>
@endsection



