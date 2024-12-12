<?php

use App\Http\Controllers\UsuarioController;

Route::get('/usuarios', [UsuarioController::class, 'index']);
Route::get('/usuarios/criar', [UsuarioController::class, 'create']);
Route::post('/usuarios', [UsuarioController::class, 'store']);
