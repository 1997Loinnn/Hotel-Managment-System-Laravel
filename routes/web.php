<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomtypeController;
use App\Http\Controllers\RoomController;
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
    return view('home');
});
// Dashboard
Route::get('dashboard', function() {
    return view('dashboard');
});

// RoomType Routes
Route::get('dashboard/roomtype/{id}/delete',[RoomtypeController::class,'destroy']);
Route::resource('dashboard/roomtype',RoomtypeController::class);

// Room Master
Route::get('dashboard/room/{id}/delete',[RoomController::class,'destroy']);
Route::resource('dashboard/rooms',RoomController::class);

// Customer
Route::get('dashboard/customer/{id}/delete', [CustomerController::class, 'destroy']);
ROute::resource('dashboard/customer',CustomerController::class);