<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CompaniesSeeder::class);
        $this->call(EmployeesSeeder::class);
        $this->call(Aso_providersSeeder::class);
        $this->call(Aso_companiesSeeder::class);
        $this->call(Aso_examsSeeder::class);
    }
}
