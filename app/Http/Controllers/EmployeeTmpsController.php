<?php

namespace App\Http\Controllers;

use App\Domains\Employee\Services\EmployeeService;
use Illuminate\Http\Request;

class EmployeeTmpsController extends Controller
{
    public $employee;

    public function __construct(EmployeeService $employee)
    {
        $this->employee = $employee;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = $this->employee->getEmployees();
        return view('aso', compact('employees'));
    }

    public function employeeDetails($id)
    {
        $employees = $this->employee->getEmployees($id)->first();
        return view('employeedetails', compact('employees'));
    }
}
