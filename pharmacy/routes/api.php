<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\CashierController;
use App\Http\Controllers\ManagerController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("add-customer", [OwnerController::class, 'addcustomer']);
Route::post("add-item", [OwnerController::class, 'additem']);

Route::post("edit-customer", [CashierController::class, 'edit']);
Route::delete("delete-customer", [CashierController::class, 'delete']);

Route::post("edit-item", [ManagerController::class, 'edit']);
Route::delete("delete-item", [ManagerController::class, 'delete']);
