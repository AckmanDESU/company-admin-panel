<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Freshbitsweb\Laratables\Laratables;
use App\Company;
use App\Employee;
use Illuminate\Database\Query\Builder;

class DataTableController extends Controller
{
    public function boot()
    {
        parent::boot();

        Route::model('company', Company::class);
    }

    public function getAllCompanies()
    {
        return Laratables::recordsOf(Company::class);
    }


    public function getAllEmployees()
    {
        return Laratables::recordsOf(Employee::class);
    }

    public function getCompanyEmployees(Company $company)
    {
        return Laratables::recordsOf(Employee::class, function(Employee $query) use($company)
        {
            return $query->where('company_id', $company->id);
        });
    }
}
