<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee_tmps extends Model
{
    public function exams()
    {
        return $this->hasMany('App\Aso_exams', 'employee_id');
    }

    public function aso()
    {
        return $this->hasOne('App\Aso_employees', 'employee_id');
    }
}
