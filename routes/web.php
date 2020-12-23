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

Route::get('/employee','employeeController@index');


