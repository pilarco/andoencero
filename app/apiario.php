<?php

namespace apilogic;

use Illuminate\Database\Eloquent\Model;

class apiario extends Model
{
    protected $table = 'apiarios';
  
    protected $fillable = [
        'nombre_apiario', 'cantidad_colmenas', 'municipio'
    ];

    public function apiario()
    {
        return $this->hasMany('apilogic\apiario');
    }

    public function colmena()
    {
        return $this->hasMany('apilogic\colmenas');
    }
    
}
