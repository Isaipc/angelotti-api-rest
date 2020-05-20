<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    protected $fillable = [
        'calle',
        'colonia',
        'cp',
        'num_ext',
        'num_int',
        'referencia'
    ];
}
