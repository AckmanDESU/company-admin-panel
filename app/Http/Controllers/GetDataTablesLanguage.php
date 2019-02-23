<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class GetDataTablesLanguage extends Controller
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

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $locale = $request->session()->get('locale');

        dump('locale: ' .$locale);

        if (!empty($this->langs[$locale]))
            return $this->langs[$locale];
        else
            return;
    }
}
