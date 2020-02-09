<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class calificacion extends Model
{
    protected $table = 'calificacion';
    protected $fillable = [
        'id_aprendiz',
        'id_materia',
        'id_calificacion',
        'nota1',
        'nota2',
        'nota3',
        'nota_final',


    ];
    protected $primaryKey = 'id_calificacion';
}
