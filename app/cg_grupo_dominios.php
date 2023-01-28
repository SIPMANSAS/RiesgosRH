<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cg_grupo_dominios extends Model
{
    public $timestamps = false;
    protected $table = 'cg_grupo_dominios';
    protected $fillable = [
        'nombre'
    ];
}
