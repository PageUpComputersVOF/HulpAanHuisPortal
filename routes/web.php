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

Route::get('/', function () {
    return view('layouts.app');
});

Route::get('/klanttoevoegen', function () {
    return view('addcustomer');
});


Route::get('/klantaanpassen', 'CustomerController@editCustomer');
Route::get('/klanten', 'CustomerController@getAllCustomers');
Route::get('/klantinformatie', 'CustomerController@getCustomerByID');
Route::get('/klantverwijderen', 'CustomerController@deleteCustomer');
Route::post('/klantopslaan', 'CustomerController@saveCustomer');
Route::post('/klantaanpassenopslaan', 'CustomerController@saveEditedCustomer');
