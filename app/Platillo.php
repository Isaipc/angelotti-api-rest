<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Platillo extends Model
{
    protected $fillable = [
        'nombre',
        'precio',
        'imagen',
        'categoria_id'
    ];


    public function categoria()
    {
        return $this->belongsTo('App\Categoria', 'categoria_id');
    }
}
