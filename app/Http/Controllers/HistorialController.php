<?php

namespace App\Http\Controllers;

use App\Models\Historial;
use Illuminate\Http\Request;

class HistorialController extends Controller
{
    public static function registrarAccion($tarea_id, $accion)
    {
        $tarea = Tarea::find($tarea_id);
        
        if($tarea) {
            Historial::create([
                'titulo_tarea' => $tarea->titulo,
                'accion' => $accion,
                'usuario_id' => $tarea->autor_id
            ]);
        }
    }

    public function listar()
    {
        return Historial::all();
    }
}
