@extends('layouts.employeelayout')

@section('title','edit_employee')

@section('content')
<div class="container">
	<h1 class="text-center py-4 font-weight-bold display-4 text-primary">Edit Employee</h1> 
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
		@if($employee)
			<form action="{{url('/update_employee/'.$employee->id)}}" method="POST">
				<input type="hidden" name="_token" value="{{csrf_token()}}" />
				<div class="control-form">
					<input type="text" name="empid" placeholder="Employee ID" class="form-control my-2" value="{{$employee->empid}}" />
				</div>
				<div class="control-form">
					<input type="text" name="name" placeholder="Employee Name" class="form-control my-2"  value="{{$employee->name}}"/>
				</div>
				<div class="control-form">
					<input type="text" name="sector" placeholder="Sector" class="form-control my-2"  value="{{$employee->sector}}"/>
				</div>
				<div class="control-form">
					<input type="number" name="contact" placeholder="Contact" class="form-control my-2"  value="{{$employee->contact}}"/>
				</div>
				<div class="control-form">
					<button type="submit" class="btn btn-primary mt-5">
					  Submit
					</button>
					<a href="{{route('employees')}}" class="btn btn-danger">Cancel</a>
				</div>
			</form>
		@else
			<p class="text-center">ERROR 404: Employee Not Found</p>
		@endif
		
	</div>
</div>
@endsection