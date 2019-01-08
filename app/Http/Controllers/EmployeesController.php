<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    private $allEmployees;

    public function __construct()
    {
        $this->allEmployees = [];
    }

    public function searchEmployees()
    {
        $data['employees'] = Employee::all()->pluck('name', 'id');

        return view('employees', $data);
    }

    public function getEmployees(Request $request)
    {
        $selectedEmployeeId = $request->input('employee_id');
        $this->findEmployees($selectedEmployeeId);

        dd($this->allEmployees);

    }

    private function findEmployees($selectedEmployeeId)
    {
        $employees = Employee::where('reports_to', $selectedEmployeeId)->pluck('name', 'id')->toArray();

        if(count($employees) > 0) {

            foreach($employees as $key => $employee) {
                array_push($this->allEmployees, $employee);
                $this->findEmployees($key);
            }

        }
    }
}
