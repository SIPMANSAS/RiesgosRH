<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudades extends Model
{
    public $timestamps = false;
    protected $table = 'rg_ciudades';
    protected $fillable = [
        'codigo_pais', 'codigo_departamento', 'codigo','nombre','estado'
    ];
}
