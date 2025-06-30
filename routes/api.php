<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/historial/registrar', [HistorialController::class, 'registrar']);
Route::get('/historial', [HistorialController::class, 'listar']);
