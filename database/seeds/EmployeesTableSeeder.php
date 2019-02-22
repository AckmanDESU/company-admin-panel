<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = (int)$this->command->ask('How many employees?', 10);

        $this->command->info("Creating {$count} employees.");
        $genres = factory(App\Employee::class, $count)->create();

        $this->command->info('Employees Created!');
    }
}
