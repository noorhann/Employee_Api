<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Resources\Employee as EmployeeResource;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {

        $employee = Employee::paginate(5);

        return EmployeeResource::collection($employee);

    }

    public function show($id)
    {

        $employee = Employee::findOrFail($id);

        return new EmployeeResource($employee);

    }

    public function store(Request $request)
    {
        $employee              = $request->isMethod('put') ? Employee::findOrFail($request->id) : new Employee();
        $employee->name        = $request->input('name');
        $employee->salary      = $request->input('salary');
        $employee->birthdate   = $request->input('birthdate');
        $employee->postion     = $request->input('postion');
        $employee->department  = $request->input('department');
        $employee->phone       = $request->input('phone');
        $employee->email       = $request->input('email');
        $employee->address     = $request->input('address');
        $employee->gender      = $request->input('gender');
        $employee->nationality = $request->input('nationality');
        $employee->image       = $request->input('image');
        $employee->marital_Status = $request->input('marital_Status');
        $employee->religion    = $request->input('religion');
        $employee->Bank_name   = $request->input('Bank_name');
        $employee->Bank_accountNo = $request->input('Bank_accountNo');

        
        if ($employee->save()) {
            return new EmployeeResource($employee);
        }
    }


    public function destroy($id)
    {
        
        $employee = Employee::findOrFail($id);
        
        if ($employee->delete()) {
            return new EmployeeResource($employee);
        }
        
    }

}
