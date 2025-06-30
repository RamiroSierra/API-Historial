<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Historial extends Model
{
    protected $table = 'historials';
    
    protected $fillable = [
        'tarea_id',
        'titulo_tarea',
        'accion',
        'usuario_id'
    ];
}
