<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tarea extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'tareas';
    protected $fillable = [
        'nombre',
        'descripcion',
        'finalizada',
        'fecha_limite',
        'urgencia',
    ];

    protected $dates = ['fecha_limite'];
    public const Urgencias = ['Baja', 'Media', 'Alta',];

    public function urgencia()
    {
        return self::Urgencias[$this->urgencia];
    }

    public function estaFinalizada(){
        return $this->finalizada == 1 ? 'Completada' : 'Pendiente';
    }
}
