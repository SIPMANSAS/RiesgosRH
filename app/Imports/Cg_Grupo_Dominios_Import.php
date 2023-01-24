<?php

namespace App\Imports;

use App\cg_grupo_dominios;
use Maatwebsite\Excel\Concerns\ToModel;

class Cg_Grupo_Dominios_Import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new cg_grupo_dominios([
            'nombre' => $row[0],
        ]);
    }
}
