<?php

namespace App\Http\Controllers;

use Auth;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use App\Models\employee;
use App\Models\salary;

class EmployeeController extends Controller {
    
    public function index() {
        if(!Auth::check()) return redirect("/login");

        $employees = employee::select('employees.*', 'salaries.salary_amount')->leftJoin('salaries', 'employees.id', '=', 'salaries.employee_id')->get();

        return view('employee-list',['employees' => $employees]);
    }

    public function createView(): View {
        if(!Auth::check()) return redirect("/login");

        return view('employee-create');
    }


    public function createLogic(Request $request): RedirectResponse {
        if(!Auth::check()) return redirect("/login");

        $request->validate([
            'full_name'       => 'required|min:3',
            'email'           => 'required|min:13',
            'phone_number'    => 'required|min:10',
            'address'         => 'required|min:3',
            'position'        => 'required|min:2',
            'hire_date'       => 'required',
            'salary_amount'   => 'required'
        ]);

        $currentEmployee = employee::create([
            'full_name'         => $request->full_name,
            'email'             => $request->email,
            'phone_number'      => $request->phone_number,
            'address'           => $request->address,
            'position'          => $request->position,
            'hire_date'         => $request->hire_date
        ]);

        salary::create([
            'employee_id'       => $currentEmployee->id,
            'salary_amount'     => $request->salary_amount,
        ]);

        return redirect("/");
    }

    public function updateView($id): View {
        if(!Auth::check()) return redirect("/login");

        $employee = employee::leftJoin('salaries', 'employees.id', '=', 'salaries.employee_id')
        ->select('employees.*', 'salaries.salary_amount')
        ->where('employees.id',$id)
        ->first();

        return view('employee-update',['employee' => $employee]);
    }

    public function updateLogic(Request $request, $id): RedirectResponse {
        if(!Auth::check()) return redirect("/login");

        $request->validate([
            'full_name'       => 'required|min:3',
            'email'           => 'required|min:13',
            'phone_number'    => 'required|min:10',
            'address'         => 'required|min:3',
            'position'        => 'required|min:2',
            'hire_date'       => 'required'
        ]);

        $employee = employee::findOrFail($id);
        $employee->update($request->all());

        $salary = salary::select('salaries.*')->where("employee_id", $id)->first();

        salary::where('id', '=', $salary->id)
            ->update([
              'salary_amount' => $request->salary_amount,
            ]);

        return redirect("/");
    }

    public function deleteLogic($id): RedirectResponse {
        if(!Auth::check()) return redirect("/login");

        $employee = employee::findOrFail($id);
        $employee->delete();
        
        return redirect("/");
    }
}