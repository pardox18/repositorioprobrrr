<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Ruta principal
Route::view('/', 'trincket')->name('home');

// Grupo de rutas de autenticación
Route::prefix('auth')->group(function () {
    Route::view('/registro', 'registro')->name('registro');
    Route::view('/inicio', 'inicio')->name('inicio');
});
