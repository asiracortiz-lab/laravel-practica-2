<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\UsuarioController;
Route::get('/', [UsuarioController::class, 'formulario']);
Route::post('/procesar', [UsuarioController::class, 'procesar']);
