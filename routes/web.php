<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('trincket'); 
});

Route::get('/registro', function () {
    return view('registro'); 
});

Route::get('/inicio', function () {
    return view('inicio'); 
});
