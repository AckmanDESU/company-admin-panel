<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded = ['id'];

    public function employees() {
        return $this->hasMany('App\Employee');
    }

    public static function laratablesCustomListEmployees(Company $company) {
        return view('partials.datatables.companies.listEmployees')
            ->with(compact('company'))
            ->render();
    }

    public static function laratablesCustomEdit(Company $company) {
        return view('partials.datatables.companies.edit')
            ->with(compact('company'))
            ->render();
    }

    public static function laratablesCustomDelete(Company $company) {
        return view('partials.datatables.companies.delete')
            ->with(compact('company'))
            ->render();
    }
}
