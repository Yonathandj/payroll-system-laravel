<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use App\Models\employee;

class EmployeeController extends Controller {
    
    public function index() : View {
        $employees = employee::all();
        return view('employee-list',['employees' => $employees]);
    }

    public function createView(): View {
        return view('employee-create');
    }


    public function createLogic(Request $request): RedirectResponse
    {
        $request->validate([
            'full_name'       => 'required|min:3',
            'email'           => 'required|min:13',
            'phone_number'    => 'required|min:10',
            'address'         => 'required|min:3',
            'position'        => 'required|min:2',
            'hire_date'       => 'required'
        ]);

        employee::create([
            'full_name'         => $request->full_name,
            'email'             => $request->email,
            'phone_number'      => $request->phone_number,
            'address'           => $request->address,
            'position'          => $request->position,
            'hire_date'         => $request->hire_date
        ]);

        return redirect("/");
    }
}