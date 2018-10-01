<?php

use Illuminate\Database\Seeder;

class Aso_companiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aso_companies')->insert([
            'name' => 'PCMSO inicial',
            'issuance_date' => '2017-12-01',
            'due_date' => '2018-12-01',
            'due' => 'false',
            'file' => 'https://goo.gl/sTtBzS',
            'company_id' => '1',
            'aso_provider_id' => '1'
        ]);

        DB::table('aso_companies')->insert([
            'name' => 'PCMSO inicial',
            'issuance_date' => '2017-02-01',
            'due_date' => '2018-02-01',
            'due' => 'true',
            'file' => 'https://goo.gl/sTtBzS',
            'company_id' => '2',
            'aso_provider_id' => '2'
        ]);
 
    }
}
