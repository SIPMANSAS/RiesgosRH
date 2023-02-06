<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProyectosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('Dashboard.Proyectos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Contratante = DB::table('ter_terceros')->where('vdom_tipo_tercero', 772)->get();
        $Contratista = DB::table('ter_terceros')->where('vdom_tipo_tercero', 774)->get();
        $Intervetoria = DB::table('ter_terceros')->where('vdom_tipo_tercero', 773)->get();
        $TipoActividad = DB::select("CALL p_dominio(13)");
        $Documentacion = DB::select("CALL p_dominio(3)");
        $Responsable = DB::table('ter_terceros')->where('vdom_tipo_tercero', 770)->where('vdom_tipo_tercero', 771)->get();

        /*$asd = collect(DB::table('ter_terceros'))->filter(function ($value, $key) {
            return $value->identificador >= 770 && $value->identificador <= 771;
        });*/
        return view('Dashboard.Proyectos.create', compact(
        'Contratante', 'Contratista', 'Intervetoria',
        'TipoActividad', 'Documentacion', 'Responsable'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
