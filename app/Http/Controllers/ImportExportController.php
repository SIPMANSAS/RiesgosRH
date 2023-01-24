<?php

namespace App\Http\Controllers;
use App\Imports\Cg_Dominios_Import;
use App\Imports\Cg_Grupo_Dominios_Import;
use App\Imports\Cg_Valores_Dominios_Import;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
class ImportExportController extends Controller
{
    public function index()
    {
        return view('ImportExport.index');
    }
    public function Import_CG_Dominios(Request $request)
    {
        $file = $request->file('CgDominios');
        Excel::import(new Cg_Dominios_Import, $file);
        return redirect()->back();
    }
    public function Import_CG_Grupo_Dominios(Request $request)
    {
        $file = $request->file('CgGruposDominios');
        Excel::import(new Cg_Grupo_Dominios_Import, $file);
        return redirect()->back();
    }
    public function Import_CG_Valores_Dominio(Request $request)
    {
        $file = $request->file('CgValoresDominios');
        Excel::import(new Cg_Valores_Dominios_Import, $file);
        return redirect()->back();
    }
}
