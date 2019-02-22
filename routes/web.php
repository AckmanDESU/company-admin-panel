<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/home');
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::resource('companies', 'CompanyController')->middleware('auth');
Route::resource('employees', 'EmployeeController')->middleware('auth');

Route::get('companies/{company}/employees', 'CompanyController@employeeList');

Route::get('/api/employees', 'EmployeeController@indexdt')->name('employees_dt');
