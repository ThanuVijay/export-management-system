<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employees;

class employeeController extends Controller
{
    public function index(){
    	$employees = Employees::all();
    	return view('employee',['employees'=>$employees]);
    }

    // add employee

    public function add_employee(Request $request){
    	
    	$this->validate($request,[
	        'empid' => 'required|min:2|max:50',
	        'name' => 'required|min:2|max:50',
	        'sector' => 'required|min:2|max:50',
	        'contact' => 'required|numeric'
      	]);

      	$employee = new Employees([
      		'empid' => $request['empid'],
      		'name' => $request['name'],
      		'sector' => $request['sector'],
      		'contact' => $request['contact']
      	]);
      	$employee->save();

      	return redirect()->route('employees')->with('success', 'Employee added successfully !!');
    }

    // edit employee

    public function edit_employee($employee_id){
    	$employee = Employees::find($employee_id);

    	return view('pages.edit_employees')->with('employee',$employee);
    }

    // update employee 

    public function update_employee($employee_id, Request $request){
    	$this->validate($request,[
	        'empid' => 'required|min:2|max:50',
	        'name' => 'required|min:2|max:50',
	        'sector' => 'required|min:2|max:50',
	        'contact' => 'required|numeric'
      	]);

    	Employees::find($employee_id)->update([
      		'empid' => $request['empid'],
      		'name' => $request['name'],
      		'sector' => $request['sector'],
      		'contact' => $request['contact']
      	]);

      	return redirect()->route('employees')->with('success', 'Employee updated successfully !!');
    }

    // delete employee 

    public function delete_employee($id){

    	$employee = Employees::find($id);

    	if($employee){
    		$employee->delete();
    		return redirect()->route('employees')->with('success', 'Employee deleted successfully !!');
    	}else{
    		return redirect()->route('employees')->with('warning', 'Error 404: Employee Not Found !!');
    	}

    }
}
