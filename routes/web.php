<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('companies','Admin\CompanyController');
Route::resource('operators','Admin\OperatorController');
Route::resource('clients','Admin\ClientController');
Route::resource('drivers','Admin\DriverController');
Route::resource('restaurants','Admin\RestaurantController');