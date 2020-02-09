<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rol extends Model
{
    protected $table = 'rol';
    protected $fillable = [
        'descripcion',
        'id_rol',
        

    ];
    protected $primaryKey = 'id_rol';
}
