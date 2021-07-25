<?php

use Illuminate\Support\Facades\Route;

Route::get('/teste', 'TesteController@index')->name('teste.index');
Route::get('admin/companies', 'Admin\CompanyController@index')->name('companies.index');

Route::get('/', function () {
    return view('welcome');
});
