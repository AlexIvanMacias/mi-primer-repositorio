<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    protected $table = 'status';
    protected $fillable = [
        
        'descripcion',
        'id_status',
        

    ];
    protected $primaryKey = 'id_status';
}
