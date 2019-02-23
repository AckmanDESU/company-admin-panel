<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/companies', 'DataTableController@getAllCompanies')
    ->name('companies_all_dt');
Route::get('/employees', 'DataTableController@getAllEmployees')
    ->name('employees_all_dt');
Route::get('/companies/{company}/employees', 'DataTableController@getCompanyEmployees')
    ->name('employees_from_company_dt');
