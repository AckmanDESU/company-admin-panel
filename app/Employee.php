<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $guarded = ['id'];

    public function company() {
        return $this->belongsTo('App\Company');
    }

    public static function laratablesCustomEdit(Employee $employee) {
        return view('partials.datatables.employees.edit')
            ->with(compact('employee'))
            ->render();
    }

    public static function laratablesCustomDelete(Employee $employee) {
        return view('partials.datatables.employees.delete')
            ->with(compact('employee'))
            ->render();
    }
}
