<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
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
    return view('welcome');
});

Route::get('/api/v1/customers',[CustomerController::class,'customers'])->name('customer.customers');
Route::post('/api/v1/newCustomers',[CustomerController::class,'newCustomers'])->name('customer');
Route::post('/api/v1/addCustomers',[CustomerController::class,'addCustomers'])->name('customer.add');
