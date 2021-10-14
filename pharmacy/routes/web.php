<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OwnerController;
use App\Http\Controllers\CashierController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('login');
});


Route::post('/create-user', 'RegisterController@index');
Route::post('/login', 'LoginController@index');
Route::get('/logout', 'LoginController@logout');
Route::view('/register', 'register');

Route::get('/owner', 'OwnerController@index');
Route::view('/addcustomer', 'owner.add-customer');
Route::view('/additem', 'owner.add-items');
Route::post('/add-customer', 'OwnerController@addcustomer');
Route::post('/add-item', 'OwnerController@additem');

Route::get('/cashier', 'CashierController@index');
Route::get('/delete-item/{id}', 'CashierController@delete');
Route::get('/edit-item-form/{id}', 'CashierController@editform');
Route::post('/edit-item', 'CashierController@edit');

Route::get('/manager', 'ManagerController@index');
Route::get('/delete-customer/{id}', 'ManagerController@delete');
Route::get('/edit-customer-form/{id}', 'ManagerController@editform');
Route::post('/edit-customer', 'ManagerController@edit');