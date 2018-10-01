<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aso_exams;
use App\Employee_tmps;
use DB;
use Carbon\Carbon;
use App\Aso_employees;

class AsoExamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $employeeaso = new Aso_exams();
        $employeeaso->name = $request->input('name');
        $employeeaso->issuance_date = $request->input('issuanceDate');
        $employeeaso->due_date = $request->input('dueDate');
        $employeeaso->file = $request->input('file');
        $employeeaso->employee_id = $request->input('employeeId');
        $employeeaso->aso_provider_id = $request->input('providerId');
        $employeeaso->save();
        
        $latestaso = DB::table('aso_exams')
                        ->where('employee_id', $request->input('employeeId'))
                        ->latest('due_date')
                        ->first();

        if (isset($latestaso)){
                    DB::table('aso_employees')
                        ->where('employee_id', $request->input('employeeId'))
                        ->update(['aso_due_date' => $latestaso->due_date]);       
            }

        return $this->updateAsoemployees();
        
        return redirect('/aso');

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
        $aso = Aso_exams::find($id);
        
        $employee_id = $aso->employee_id;
        
        if (isset($aso)) {

            $aso->delete();
        }

        $latestaso = DB::table('aso_exams')
                        ->where('employee_id', $employee_id)
                        ->latest('due_date')
                        ->first();

        if (isset($latestaso)){
                    DB::table('aso_employees')
                        ->where('employee_id', $employee_id)
                        ->update(['aso_due_date' => $latestaso->due_date]);       
            }
        
        
        return redirect('/aso');
    }
    
    
    public function examsDetails($id)
    {
       $exams = DB::table('aso_exams')
           ->join('employee_tmps', 'employee_tmps.id', '=', 'aso_exams.employee_id')
           ->select('aso_exams.*', 'employee_tmps.*')
           ->where('employee_tmps.id', '=', $id)
           ->first();
        
        return view('novoaso', compact('exams'));
           

    }

    public function updateAsoemployees()
    {
     
        //Função que atualiza diferença de dias desde a data de vencimento e atualiza se está vencido ou não
        
        $asos = Aso_employees::all();
        $current = Carbon::now();
                
        
        foreach ($asos as $aso){
        
            $aso_date = $aso->aso_due_date;
            $id = $aso->id;
            $daysleft = $current->diffInDays($aso_date, false);
                        
            if($daysleft<0){
                
                DB::table('aso_employees')
                ->where('id', $id)
                ->update(['aso_days_left' => $daysleft,
                          'due' => '1'
                         ]);                                
            }
            else {
                
                DB::table('aso_employees')
                ->where('id', $id)
                ->update(['aso_days_left' => $daysleft,
                          'due' => '0'
                         ]);                
                
            }
            
        }
        
        //return 'Sucesso! Tabela "aso_employees" atualizada.';
        return redirect('/aso');


    }
    
    
    public function updateEmployeeDueDate()
    {
        
            $latestaso = DB::table('aso_exams')
                    ->where('employee_id', '2')
                    ->latest('due_date')
                    ->first();

            if (isset($latestaso)){
                DB::table('aso_employees')
                    ->where('employee_id', '2')
                    ->update(['aso_due_date' => $latestaso->due_date]);       
            }
        
            print_r ($latestaso);
           
    }



}

