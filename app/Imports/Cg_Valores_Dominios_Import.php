<?php

namespace App\Imports;

use App\cg_valores_dominio;
use Maatwebsite\Excel\Concerns\ToModel;

class Cg_Valores_Dominios_Import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new cg_valores_dominio([
            'id_dominio' => $row[0],
            'nombre' => $row[1],
            'descripcion' => $row[2],
            'tipo_estado' => $row[3],
            'estado' => $row[4],
            'id_alfanumerico' => $row[5],
            'id_vdom_padre' => $row[6],
            'id_grupo_valor_dominio' => $row[7],
        ]);
    }
}
