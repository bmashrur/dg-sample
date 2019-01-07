<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    private $allEmployees;

    public function __construct()
    {

    }

    public function searchEmployees()
    {
        $data['employees'] = Employee::all()->pluck('name', 'id');

        return view('employees', $data);
    }

    public function getEmployees(Request $request)
    {
        dd($request->all());
    }
}
