<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\CarController;

// Route::get('/home', function () {
//     return view('home');
// });
Route::get('/', function () {
    return view('welcome');
});
Route::resource('items', ItemController::class);
Route::resource('clients', ClientsController::class);
Route::resource('cars', CarController::class);
