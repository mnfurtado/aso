<?php

use Illuminate\Database\Seeder;

class Aso_providersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aso_providers')->insert([
            'name' => 'Clínica da Saúde',
            'cnpj' => '88.888.999/0002-01',
            'site' => 'http://www.saude.com.br',
            'contact_name' => 'Fulano Médico',
            'contact_number' => '11-3811-5599',
            'contact_email' => 'medico@clinicadasaude.com.br',
            'company_id' => '1'
        ]);
        
        DB::table('aso_providers')->insert([
            'name' => 'Clínica da Saúde',
            'cnpj' => '88.888.999/0002-01',
            'site' => 'http://www.saude.com.br',
            'contact_name' => 'Fulano Médico',
            'contact_number' => '11-3811-5599',
            'contact_email' => 'medico@clinicadasaude.com.br',
            'company_id' => '2'
        ]);

    }
}
