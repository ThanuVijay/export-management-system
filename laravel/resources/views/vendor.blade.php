@extends('layouts.vendorlayout')

@section('title','vendors')

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
			      <th scope="col">Name</th>
			      <th scope="col">Location</th>
			      <th scope="col">Description</th>
			      <th scope="col">Price</th>
			      <th scope="col"></th>
			    </tr>
			  </thead>
			  <tbody>
			  	@if(count($vendors) > 0)
			  		<?php $id = 1; ?>
			  		@foreach ($vendors as $vendor)
			  			<tr>
					      <th scope="row">{{$id}}</th>
					      <td>{{$vendor->name}}</td>
					      <td>{{$vendor->location}}</td>
					      <td>{{$vendor->vendor_description}}</td>
					      <td>{{$vendor->vendor_price}}</td>
					      <td class="d-flex align-items-center justify-content-around">
					      	<a href="{{url('/edit_vendor/'.$vendor->id)}}" class="btn btn-primary no-print">
					      		<i class="fas fa-pencil text-white d-flex align-items-center justify-content-between">  Edit</i>
					      	</a>
					      	<a href="{{url('/delete_vendor/'.$vendor->id)}}" class="btn btn-danger no-print">
					      		<i class="fas fa-trash text-white  d-flex align-items-center justify-content-between">  Delete</i>
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



