<?php

namespace App\Imports;

use App\cg_dominios;
use Maatwebsite\Excel\Concerns\ToModel;

class Cg_Dominios_Import implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new cg_dominios([
            'descripcion' => $row[0],
            'tipo_estado' => $row[1],
            'estado' => $row[1],
            'id_grupo_dominio' => $row[1],
        ]);
    }
}
