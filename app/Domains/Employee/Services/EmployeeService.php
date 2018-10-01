<?php

namespace App\Domains\Employee\Services;

use App\Employee_tmps;

class EmployeeService
{
    public function getEmployees($employeeId = false, $companyId = false){

        return Employee_tmps::when(is_numeric($companyId), function ($query) use ($companyId) {
            $query->where('company_id', $companyId);
        })
        ->when(is_numeric($employeeId), function ($query) use ($employeeId) {
            $query->where('id', $employeeId);
        })
        ->get();
    }
}
