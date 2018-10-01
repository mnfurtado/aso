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
    return view('index');
});

Route::get('/aso', 'EmployeeTmpsController@Index');

Route::get('/aso/employee/{id}', 'EmployeeTmpsController@employeeDetails');

//Route::get('/novoaso/{id}', function ($id) {
//    return view('novoaso');
//});

Route::get('/novoaso/{id}', 'AsoExamsController@examsDetails');

Route::post('/rest/newaso', 'AsoExamsController@store');

Route::post('/rest/deleteaso/{id}', 'AsoExamsController@destroy');


Route::get('/cron/days', 'AsoExamsController@updateAsoemployees');


Route::get('/cron/asodate', 'AsoExamsController@updateEmployeeDueDate');