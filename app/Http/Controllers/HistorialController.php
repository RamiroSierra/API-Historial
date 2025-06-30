<?php

namespace App\Http\Controllers;

use App\Models\Historial;
use Illuminate\Http\Request;

class HistorialController extends Controller
{
    public function registrar(Request $request)
    {
        $historial = new Historial();
        $historial->tarea_id = $request->tarea_id;
        $historial->titulo_tarea = $request->titulo_tarea;
        $historial->accion = $request->accion;
        $historial->usuario_id = $request->usuario_id;
        $historial->save();

        return response()->json(['success' => true]);
    }

    public function listar()
    {
        return Historial::all();
    }
}
