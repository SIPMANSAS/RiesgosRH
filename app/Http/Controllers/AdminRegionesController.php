<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminRegionesController extends Controller
{

    public function index()
    {
        $Dominios = DB::select("select p.codigo, p.nombre nombre, t.nombre tipo_estado, e.nombre estado from rg_paises p, sg_tipos_estado t, sg_estados e where p.tipo_estado = t.identificador and p.tipo_estado = e.tipo_estado and p.estado = e.identificador order by 1");
        return view("Dashboard.AdminRegiones.index", compact("Dominios"));
    }

    public function ShowPais($id)
    {
        $DominiosPais = DB::select("select p.codigo, p.nombre nombre, t.nombre tipo_estado, e.nombre estado from rg_paises p, sg_tipos_estado t, sg_estados e where p.tipo_estado = t.identificador and p.tipo_estado = e.tipo_estado and p.estado = e.identificador and p.codigo=" . $id . " order by 1 ");
        $Dominios = DB::select("select d.codigo, d.nombre nombre, t.nombre tipo_estado, e.nombre estado from rg_departamentos d, sg_tipos_estado t, sg_estados e where d.tipo_estado = t.identificador and d.tipo_estado = e.tipo_estado and d.estado = e.identificador and d.codigo_pais = " . $id . " order by 1 ");
        return view("Dashboard.AdminRegiones.AdminRegionesDepart.index", compact("Dominios", "DominiosPais"));
    }
    public function ShowEstado($idCountry, $idDepart)
    {
        $DominiosPais = DB::select("select p.codigo, p.nombre nombre, t.nombre tipo_estado, e.nombre estado from rg_paises p, sg_tipos_estado t, sg_estados e where p.tipo_estado = t.identificador and p.tipo_estado = e.tipo_estado and p.estado = e.identificador and p.codigo=" . $idCountry . " order by 1");
        $DominiosDepart = DB::select("select d.codigo, d.nombre nombre, t.nombre tipo_estado, e.nombre estado from rg_departamentos d, sg_tipos_estado t, sg_estados e where d.tipo_estado = t.identificador and d.tipo_estado = e.tipo_estado and d.estado = e.identificador and d.codigo_pais =" . $idCountry . " and d.codigo=" . $idDepart . " order by 1;");
        $DominiosEstado = DB::select("select c.codigo, c.nombre nombre, es_capital, t.nombre tipo_estado, e.nombre estado from rg_ciudades c, rg_departamentos d, rg_paises p, sg_tipos_estado t, sg_estados e where c.tipo_estado = t.identificador and c.tipo_estado = e.tipo_estado and c.estado = e.identificador and d.codigo_pais = p.codigo and c.codigo_pais = d.codigo_pais and c.codigo_departamento = d.codigo and d.codigo_pais = " . $idCountry . " and c.codigo_departamento = " . $idDepart . " order by c.codigo");
        return view("Dashboard.AdminRegiones.AdminRegionesDepart.AdminRegionesCiudad.index", compact("DominiosEstado", "DominiosPais", "DominiosDepart"));
    }
}
