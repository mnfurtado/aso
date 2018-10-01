<?php

use Illuminate\Database\Seeder;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'name' => 'Acme SA',
            'cnpj' => '99.999.999/0001-88',
            'city' => 'Londres',
            'state' => 'UK',
            'street' => 'Oxford St',
            'number' => '257',
            'complement' => '-',
            'zip_code' => '21815-124'
        ]);

        DB::table('companies')->insert([
            'name' => 'Convenia Ativ de Internet SA',
            'cnpj' => '17.484.689/0001-70',
            'city' => 'São Paulo',
            'state' => 'SP',
            'street' => 'Al Campinas',
            'number' => '977',
            'complement' => '6 andar',
            'zip_code' => '01404-001'
        ]);

    }
}
