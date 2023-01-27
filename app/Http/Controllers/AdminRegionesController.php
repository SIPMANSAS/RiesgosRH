<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminRegionesController extends Controller
{

    public function index()
    {
        return view("Dashboard.AdminRegiones.index");
    }

    public function ShowPais()
    {
        return view("Dashboard.AdminRegiones.AdminRegionesDepart.index");
    }
    public function ShowEstado()
    {
        return view("Dashboard.AdminRegiones.AdminRegionesDepart.AdminRegionesCiudad.index");
    }

}
