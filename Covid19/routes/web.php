<?php

use Illuminate\Support\Facades\Route;

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

Route::get('covid19', 'Covid19Controller@list');
Route::get('employees', 'EmployeesController@index');

// Route::get('covidData', 'Covid19Controller@getData');

Route::get('/', function () {
    return view('welcome');
});
