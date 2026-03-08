<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\EscaleController;

Route::get('/escales', [EscaleController::class, 'index']);
Route::get('/escales/create', [EscaleController::class, 'create'])->name('escales.create');
Route::post('/escales', [EscaleController::class, 'store'])->name('escales.store');