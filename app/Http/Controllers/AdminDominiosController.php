<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminDominiosController extends Controller
{
    public function index()
    {
        $Dominios = DB::select("select identificacion, nombre from cg_grupo_dominios");
        return view("Dashboard.AdminDominios.index", compact("Dominios"));
    }

    public function ShowDominiosGroup($id)
    {
        $DominiosPadre = DB::select("select identificacion, nombre from cg_grupo_dominios WHERE cg_grupo_dominios.identificacion=" . $id . "");
        $Dominios = DB::select("select * from v_tipos_dominio where grupo =" . $id . " order by clasificacion, valor_padre, valor, id_alfanumerico, nombre;");
        return view("Dashboard.AdminDominios.AdminDominiosGrupo.index", compact("DominiosPadre", "Dominios"));
    }
}
