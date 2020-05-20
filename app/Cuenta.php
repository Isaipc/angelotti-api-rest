<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    protected $fillable = [
        'correo',
        'password',
        'nombre',
        'apellido'
    ];
}
