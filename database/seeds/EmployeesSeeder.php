<?php

use Illuminate\Database\Seeder;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employee_tmps')->insert([
            'name' => 'Fulano de Tal',
            'hiring_date' => '2012-12-12',
            'birth_date' => '1982-07-23',
            'company_id' => '1'
        ]);

        DB::table('employee_tmps')->insert([
            'name' => 'João Amoedo',
            'hiring_date' => '2018-07-01',
            'birth_date' => '1968-04-20',
            'company_id' => '2'
        ]);

        DB::table('employee_tmps')->insert([
            'name' => 'Ciro Gomes',
            'hiring_date' => '2017-07-05',
            'birth_date' => '1988-08-15',
            'company_id' => '2'
        ]);

        DB::table('employee_tmps')->insert([
            'name' => 'Jair Bolsonaro',
            'hiring_date' => '2016-11-01',
            'birth_date' => '2001-07-23',
            'company_id' => '2'
        ]);

    }
}
