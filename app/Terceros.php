<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Terceros extends Model
{
    public $timestamps = false;
    protected $table = 'ter_terceros';
    protected $fillable = [
        'identificacion', 'vdom_tipo_identificacion', 'fecha_expedicion',
        'pais_expedicion', 'departamento_expedicion', 'ciudad_expedicion',
        'nombres', 'apellidos', 'vdom_nacionalidad',
        'vdom_idioma', 'fecha_nacimiento', 'vdom_estado_civil',
        'vdom_profesion', 'vdom_ocupacion', 'id_empresa',
        'vdom_tipo_tercero', 'vdom_categoria_terceo', 'vdom_segmento_tercero',
        'id_moneda', 'tipo_estado', 'estado',
        'id_tercero', 'numero_identificacion', 'pais',
        'departamento', 'ciudad', 'direccion',
        'correo_electronico', 'telefono'
    ];
}
