<?php

use Illuminate\Support\Facades\Route;

Route::any('admin/companies/search', 'Admin\CompanyController@search')->name('companies.search');
Route::get('admin/companies/create', 'Admin\CompanyController@create')->name('companies.create');
Route::delete('admin/companies/{url_company}', 'Admin\CompanyController@destroy')->name('companies.destroy');
Route::get('admin/companies/{url_company}', 'Admin\CompanyController@show')->name('companies.show');
Route::post('admin/companies', 'Admin\CompanyController@store')->name('companies.store');
Route::get('admin/companies', 'Admin\CompanyController@index')->name('companies.index');

Route::get('admin', 'Admin\CompanyController@index')->name('admin.index');


Route::get('/', function () {
    return view('welcome');
});
