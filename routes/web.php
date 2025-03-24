<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[DashboardController::class,'index'])->name('dashboard');
Route::get('/customers',[DashboardController::class,'index'])->name('customers');
Route::get('/suppliers',[DashboardController::class,'index'])->name('suppliers');
Route::get('/products',[DashboardController::class,'prod'])->name('products');

// Route::resource()