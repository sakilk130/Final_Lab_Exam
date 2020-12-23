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

Route::get('/','loginController@login');
Route::post('/','loginController@verify');

Route::get('/home','homeController@index');

Route::get('/home/create','homeController@create');
Route::post('/home/create','homeController@register');

Route::get('/home/employee_list','homeController@employee_list');

Route::get('/home/edit/{id}','homeController@edit_employee_list');
Route::post('/home/edit/{id}','homeController@edit_employee_list_p');

Route::get('/home/delete/{id}','homeController@delete_employee_list');
Route::post('/home/delete/{id}','homeController@delete_employee_list_p');

Route::get('/logout','logoutController@logout');

Route::get('/employee','employeeController@index');

Route::get('/employee/create_job','employeeController@create');
Route::post('/employee/create_job','employeeController@create_p');

Route::get('/employee/job_list','employeeController@job_list');

Route::get('/employee/edit_job/{id}','employeeController@edit_job');
Route::post('/employee/edit_job/{id}','employeeController@edit_job_p');

Route::get('/employee/delete_job/{id}','employeeController@delete_job');
Route::post('/employee/delete_job/{id}','employeeController@delete_job_p');

Route::post('/home/search_employee','homeController@search_employee');

