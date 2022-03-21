<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuariosController;

Route::get('/', [UsuariosController::class, 'index']);
Route::get('/usuarios/listar', [UsuariosController::class, 'index']);
Route::get('/usuarios/create', [UsuariosController::class, 'create']);
Route::post('/usuarios/store', [UsuariosController::class, 'store']);
Route::get('/usuarios/destroy/{id}', [UsuariosController::class, 'destroy']);