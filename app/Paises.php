<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paises extends Model
{
    public $timestamps = false;
    protected $table = 'rg_paises';
    protected $fillable = [
        'codigo', 'nombre', 'tipo_estado',
        'estado'
    ];
}
