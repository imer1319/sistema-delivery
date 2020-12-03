<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('companies','Admin\CompanyController');
Route::resource('clients','Admin\ClientController');
Route::resource('drivers','Admin\DriverController');
Route::resource('restaurants','Admin\RestaurantController');
Route::resource('invoces','Admin\InvoceController');


Route::get('operators/password', 'Admin\OperatorController@password')->name('operators.password');
Route::post('operators/updatepassword', 'Admin\OperatorController@updatePassword')->name('operators.updatepassword');

Route::resource('operators','Admin\OperatorController');