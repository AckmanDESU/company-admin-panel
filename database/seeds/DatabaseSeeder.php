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
        App\User::unguard();
        App\Company::unguard();
        App\Employee::unguard();

        $this->call([
            UsersTableSeeder::class,
            CompaniesTableSeeder::class,
            /* EmployeesTableSeeder::class, */
        ]);

        /* App\User::guard(); */
        /* App\Company::guard(); */
        /* App\Employee::guard(); */
    }
}
