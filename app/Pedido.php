<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
        'platillo_id',
        'direccion_id',
        'cuenta_id',
        'total'
    ];
}
