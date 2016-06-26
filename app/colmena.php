<?php

namespace apilogic;

use Illuminate\Database\Eloquent\Model;

class colmena extends Model
{
    protected $table = "colmenas";
    protected $fillable = ['apiario_id', 'estado', 'fecha', 'techo', 'techo_interno', 'miel', 'propoleo', 'polen', 'cuadros_cera_cria', 'cuadros_sin_cera_cria', 'cuadros_abierto_cria', 'cuadros_operculado_cria', 'cuadros_cera_alza', 'cuadros_sin_cera_alza', 'cuadros_abierto_alza', 'cuadros_operculado_alza'];

    public function apiarios()
    {
        return $this->belongsTo('app/apiario');
    }
}
