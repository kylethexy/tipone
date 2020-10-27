<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
        return view('employee.index')->with('employees' , $employees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Form validation
        //First and Last name is required
        //Email address must be in email format and allow empty field
        //Phone must be numeric values only and allows blank values
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'email|nullable',
            'phone' => 'numeric|nullable'
        ]);

        //Generate new employee
        $employee = new Employee();

        $employee->first_name = $request->input('first_name');
        $employee->last_name = $request->input('last_name');
        $employee->company_id = $request->input('company_id');
        $employee->email = $request->input('email');
        $employee->phone = $request->input('phone');

        //SQL execute
        $employee->save();

        //Confirm message
        return redirect('/company/'.$request->input('company_id'))->with('success', 'Employee Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Find ID of employee
        $employees = Employee::find($id);

        //Redirect to show.blade.php in views
        return view('employee.show')->with('employee', $employees);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('employee.edit')->with('employee', $employee);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Form validation
        //First and Last name is required
        //Email address must be in email format and allow empty field
        //Phone must be numeric values only and allows blank values
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'email|nullable',
            'phone' => 'numeric|nullable'
        ]);

        //Find employee
        $employee = Employee::find($id);

        $employee->first_name = $request->input('first_name');
        $employee->last_name = $request->input('last_name');
        $employee->email = $request->input('email');
        $employee->phone = $request->input('phone');

        //SQL execute
        $employee->save();

        //Confirm message
        return redirect('/company/'.$request->input('company_id'))->with('success', 'Employee Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Find Employee
        $employee = Employee::find($id);
        $company_id = $employee->company_id;

        //Delete Employee
        $employee->delete();

        //Confirm message
        return redirect('/company/'.$company_id)->with('success', 'Employee Removed');
    }
}
