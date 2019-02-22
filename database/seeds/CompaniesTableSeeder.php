<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = (int)$this->command->ask('How many companies?', 5);

        $r = 0 . '-' . 30;
        $range = $this->command->ask('How many employees per company?', $r);

        $this->command->info("Creating {$count} companies each having {$range} employees.");

        $companies = factory(App\Company::class, $count)->create();

        $companies->each(function($company) use ($range){
            factory(App\Employee::class, $this->count($range))
                    ->create(['company_id' => $company->id]);
        });

        $this->command->info('Companies and Users Created!');
    }

    function count($range)
    {
        return rand(...explode('-', $range));
    }
}
