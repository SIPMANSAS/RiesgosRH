<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamentos extends Model
{
    public $timestamps = false;
    protected $table = 'rg_departamentos';
    protected $fillable = [
        'codigo_pais', 'codigo', 'nombre','tipo_estado','estado'
    ];
}
