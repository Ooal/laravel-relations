<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'EmployeeController@index') -> name('index');
Route::get('/employee/{id}', 'EmployeeController@show') -> name('show_epm');
Route::get('/task/{id}', 'TaskController@show') -> name('show_tas');
Route::get('/delete/{id}', 'EmployeeController@destroy') -> name('delete');
Route::get('/edit/{id}', 'EmployeeController@edit') -> name('edit');
Route::get('/create', 'EmployeeController@create') -> name('create');
Route::post('/create', 'EmployeeController@store') -> name('store');
