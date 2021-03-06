<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Freshbitsweb\Laratables\Laratables;
use App\Company;
use App\Employee;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Session;

class DataTableController extends Controller
{
    private $langs = [
        'es' => [
            "sProcessing" =>     "Procesando...",
            "sLengthMenu" =>     "Mostrar _MENU_ registros",
            "sZeroRecords" =>    "No se encontraron resultados",
            "sEmptyTable" =>     "Ningún dato disponible en esta tabla",
            "sInfo" =>           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty" =>      "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered" =>   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix" =>    "",
            "sSearch" =>         "Buscar:",
            "sUrl" =>            "",
            "sInfoThousands" =>  ",",
            "sLoadingRecords" => "Cargando...",
            "oPaginate" => [
                "sFirst" =>    "Primero",
                "sLast" =>     "Último",
                "sNext" =>     "Siguiente",
                "sPrevious" => "Anterior"
            ],
            "oAria" => [
                "sSortAscending" =>  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending" => ": Activar para ordenar la columna de manera descendente"
            ]
        ]
    ];

    public function boot()
    {
        parent::boot();

        Route::model('company', Company::class);
    }

    public function getLocale($locale = 'none')
    {
        if (empty($this->langs[$locale]))
            return [];

        return $this->langs[$locale];
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
