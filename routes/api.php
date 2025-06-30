<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HistorialController;

Route::post('/historial/registrar', [HistorialController::class, 'registrar']);
Route::get('/historial', [HistorialController::class, 'listar']);
