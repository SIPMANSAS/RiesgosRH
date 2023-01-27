<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cg_dominios extends Model
{
    public $timestamps = false;
    protected $table = 'cg_dominios';
    protected $fillable = [
        'descripcion','tipo_estado','estado','id_grupo_dominio'
    ];
}
