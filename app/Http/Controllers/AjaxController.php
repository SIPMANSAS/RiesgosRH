<?php

namespace App\Http\Controllers;

use App\Ciudades;
use App\Departamentos;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function getCountry($id)
    {
        $Departamentos = Departamentos::select('codigo', 'nombre')->where('codigo_pais', $id)->get();

        return $Departamentos;
    }
    public function getDepartments($idCountry,$idDepart)
    {
        $Ciudades = Ciudades::select('codigo', 'nombre')->where('codigo_pais', $idCountry)->where('codigo_departamento', $idDepart)->where('estado', 1)->get();

        return $Ciudades;
    }
}
