<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = ['nombre'];

    public function platillos()
    {
        return $this->hasMany('App\Platillo');
    }
}
