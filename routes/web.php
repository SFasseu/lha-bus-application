<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AgenceController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AvisController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('user', UserController::class);

Route::resource('agence', AgenceController::class);

Route::resource('reservation', ReservationController::class);

Route::resource('payment', PaiementController::class);

Route::resource('client', ClientController::class);

Route::resource('notification', AvisController::class);
