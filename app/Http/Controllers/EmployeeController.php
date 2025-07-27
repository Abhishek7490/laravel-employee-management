<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Validation\Rule;
use App\Notifications\EmpcreatedNotification;
use App\Notifications\EmpupdatedNotification;
use Illuminate\Support\Facades\Notification;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $emp = Employee::all();

        return view('list_employee',compact('emp'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('add_employee');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // echo"<pre>";print_r($request->all());echo"</pre>";exit;

        $data = $request->validate([
            "full_name" => "required",
            "email" => "required|email|unique:employees,email",
            "phone" => "required|regex:/^[0-9]{10}$/",
            "designation" => "required",
        ]);

        $emp = Employee::create([
            'full_name'=> $request->full_name,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'designation'=> $request->designation,
        ]);

        Notification::route('slack', env('SLACK_WEBHOOK_URL'))->notify(new EmpcreatedNotification($emp));

        return redirect()->route('admin.employees.index')->with('success','Employee Added Successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {   
        $emp = Employee::findorfail($employee->id);

        return view('edit_employee',compact('emp'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        $data = $request->validate([
            "full_name" => "required",
            "email" => ["required","email",Rule::unique('employees', 'email')->ignore($employee->id)],
            "phone" => "required|regex:/^[0-9]{10}$/",
            "designation" => "required",
        ]);
        
        $employee->update($data);

        Notification::route('slack', env('SLACK_WEBHOOK_URL'))->notify(new EmpupdatedNotification($employee));

        return redirect()->route('admin.employees.index')->with('success','Employee Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('admin.employees.index')->with('success','Employee Deleted Successfully');
    }
}
