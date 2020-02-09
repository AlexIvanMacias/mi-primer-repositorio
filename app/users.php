<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $table = 'users';
    protected $fillable = [
        'id_user',
        'id_rol',
        'nombre',
        'apellido',
        'cedula',
        'correo',
        'contraseña',
        'id_status',
        'celular',

    ];
    protected $primaryKey = 'id_user';
}
