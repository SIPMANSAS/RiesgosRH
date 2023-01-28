<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cg_valores_dominio extends Model
{
    public $timestamps = false;
    protected $table = 'cg_valores_dominio';
    protected $fillable = [
        'id_dominio', 'nombre', 'descripcion', 'tipo_estado', 'estado'
        , 'id_alfanumerico', 'id_vdom_padre', 'id_grupo_valor_dominio'
    ];
}
