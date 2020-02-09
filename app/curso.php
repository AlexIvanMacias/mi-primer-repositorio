<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class curso extends Model
{
    protected $table = 'curso';
    protected $fillable = [
        'id_curso',
        'nombre_curso',
        'id_aprendiz',
        'id_docente',


    ];
    protected $primaryKey = 'id_curso';
}
