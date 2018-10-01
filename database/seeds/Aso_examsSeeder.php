<?php

use Illuminate\Database\Seeder;

class Aso_examsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aso_exams')->insert([
            'name' => 'Exame Periódico',
            'issuance_date' => '2018-06-30',
            'due_date' => '2019-06-30',
            'file' => 'https://goo.gl/sTtBzS',
            'employee_id' => '2',
            'aso_provider_id' => '2'
        ]);

       DB::table('aso_exams')->insert([
            'name' => 'Exame Periódico',
            'issuance_date' => '2016-06-30',
            'due_date' => '2017-06-30',
            'file' => 'https://goo.gl/sTtBzS',
            'employee_id' => '3',
            'aso_provider_id' => '1'
        ]);

       DB::table('aso_exams')->insert([
            'name' => 'Exame Periódico',
            'issuance_date' => '2017-06-30',
            'due_date' => '2018-06-30',
            'file' => 'https://goo.gl/sTtBzS',
            'employee_id' => '3',
            'aso_provider_id' => '2'
        ]);

       DB::table('aso_employees')->insert([
            'aso_due_date' => '2013-12-12',
            'aso_days_left' => '-600',
            'due' => '1',
            'employee_id' => '1',
        ]);

       DB::table('aso_employees')->insert([
            'aso_due_date' => '2019-07-01',
            'aso_days_left' => '240',
            'due' => '0',
            'employee_id' => '2',
        ]);

       DB::table('aso_employees')->insert([
            'aso_due_date' => '2018-07-05',
            'aso_days_left' => '-100',
            'due' => '1',
            'employee_id' => '3',
        ]);
        
       DB::table('aso_employees')->insert([
            'aso_due_date' => '2017-11-01',
            'aso_days_left' => '-400',
            'due' => '0',
            'employee_id' => '4',
        ]);
        
        
        
    }
}

