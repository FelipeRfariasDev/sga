<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuarioController;

Route::get('/', [UsuarioController::class, 'index']);
Route::get('/usuarios/listar', [UsuarioController::class, 'index']);
Route::get('/usuarios/create', [UsuarioController::class, 'create']);
Route::post('/usuarios/store', [UsuarioController::class, 'store']);
