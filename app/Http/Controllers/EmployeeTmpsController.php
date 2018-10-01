<?php

namespace App\Http\Controllers;


use App\Employee_tmps;
use App\Aso_exams;
use DB;

use Illuminate\Http\Request;

class EmployeeTmpsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $employees = DB::table('employee_tmps')
           ->join('aso_employees', 'aso_employees.employee_id', '=', 'employee_tmps.id')
           //->join('companies', 'companies.id', '=', 'employee_tmps.company_id')
           ->select('employee_tmps.*', 'aso_employees.*')
           ->where('company_id','2')
           ->get();

        $companies = DB::table('employee_tmps')
           ->join('companies', 'companies.id', '=', 'employee_tmps.company_id')
           //->join('companies', 'companies.id', '=', 'employee_tmps.company_id')
           ->select('employee_tmps.*', 'companies.*')
           ->where('company_id','2')
           ->first();
        
        

        return view('aso', compact('employees', 'companies'));

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function employeeDetails($id)
    { 
        $employees = Employee_tmps::find($id);
        
        $aso_employee = DB::table('employee_tmps')
           ->join('aso_employees', 'aso_employees.employee_id', '=', 'employee_tmps.id')
           ->select('aso_employees.aso_due_date', 'aso_employees.aso_days_left')
           ->where('employee_id',$id)
           ->first();

    
        $exams = DB::table('aso_exams')
            ->where('employee_id', $id)
            ->orderBy('issuance_date', 'asc')
            ->get();
        
        return view('employeedetails', compact('employees', 'exams', 'aso_employee'));
    }


}
