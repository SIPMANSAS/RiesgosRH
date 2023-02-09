<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyectos extends Model
{
    public $timestamps = false;
    protected $table = 'pro_proyectos';
    protected $fillable = [
        'id_proyecto', 'nombre', 'id_contratista',
        'id_contratante', 'id_interventoria', 'objeto_contraactual',
        'id_etapa_proyecto', 'id_actividad', 'id_responsable',
        'id_formato', 'archivos', 'id_tipo_contratacion'
    ];
}
