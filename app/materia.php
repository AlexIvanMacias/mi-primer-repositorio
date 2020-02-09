<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class materia extends Model
{
    protected $table = 'materia';
    protected $fillable = [
        'id_materia',
        'nombre_materia',
        'id_aprendiz',
        'id_curso',
    ];
    protected $primaryKey = 'id_materia';
}
