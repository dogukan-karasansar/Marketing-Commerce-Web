<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
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
    return view('products');
});

//AUTH ROUTES
Auth::routes();
Route::get('register/customer', function () {
    return view('auth.customer');
})->name('customer-login');

//CUSTOMER ROUTES
Route::name('customer')->prefix('customer')->middleware('customer')->group(function () {
     Route::get('', function () {
         return view('customer.home');
     });
});

