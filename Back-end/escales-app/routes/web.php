<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\EscaleController;
use App\Http\Controllers\PiloteController;
use App\Http\Controllers\VedetteController;


Route::get('/', function () {
    return view('dashboard');
});

Route::get('/escales', [EscaleController::class, 'index']);
Route::resource('escales', EscaleController::class);
Route::get('/escales/create', [EscaleController::class, 'create'])->name('escales.create');
Route::post('/escales', [EscaleController::class, 'store'])->name('escales.store');
Route::resource('pilotes', PiloteController::class);
Route::resource('vedettes', VedetteController::class);
