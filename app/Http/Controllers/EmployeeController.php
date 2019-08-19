<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::paginate(3);
        return view('employee.list', compact('employees'));
    }

    public function create()
    {
        $employees = Employee::all();
        return view('employee.create', compact('employees'));
    }

    public function store(Request $request)
    {
        $employee = new Employee();
        $employee->gruop = $request->tenphongban;
        $employee->name = $request->input('name');
        $employee->dob = $request->input('dob');
        $employee->sex = $request->sex;
        $employee->phone = $request->input('phone');
        $employee->identification = $request->input('identification');
        $employee->email = $request->input('email');
        $employee->address = $request->input('address');
        $employee->save();
        return redirect()->route('employees.index');
    }

    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employee.edit', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->gruop = $request->tenphongban;
        $employee->name = $request->input('name');
        $employee->dob = $request->input('dob');
        $employee->sex = $request->sex;
        $employee->phone = $request->input('phone');
        $employee->identification = $request->input('identification');
        $employee->email = $request->input('email');
        $employee->address = $request->input('address');
        $employee->save();
        return redirect()->route('employees.index');
    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return redirect()->route('employees.index');
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        if (!$keyword) {
            return redirect()->route('employees.index');
        }
        $employees = Employee::where('name', 'LIKE', '%' . $keyword . '%')->get();
        dd($employees);
        return view('employee.list', compact('employees'));
    }


}
