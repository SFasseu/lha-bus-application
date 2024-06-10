<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AgenceController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\NotificationController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('user', UserController::class);

Route::resource('role', RoleController::class);

Route::resource('agence', AgenceController::class);

Route::resource('reservation', ReservationController::class);

Route::resource('payment', PaymentController::class);

Route::resource('client', ClientController::class);

Route::resource('notification', NotificationController::class);
