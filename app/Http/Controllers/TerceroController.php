<?php

namespace App\Http\Controllers;

use App\ter_tercero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TerceroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $TipoIdentificacion = DB::select("CALL p_dominio(18)");
        dd($TipoIdentificacion);
        return view('Dashboard.Terceros.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Dashboard.Terceros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('Dashboard.Terceros.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ter_tercero  $ter_tercero
     * @return \Illuminate\Http\Response
     */
    public function show(ter_tercero $ter_tercero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ter_tercero  $ter_tercero
     * @return \Illuminate\Http\Response
     */
    public function edit(ter_tercero $ter_tercero)
    {
        return view('Dashboard.Terceros.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ter_tercero  $ter_tercero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ter_tercero $ter_tercero)
    {

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ter_tercero  $ter_tercero
     * @return \Illuminate\Http\Response
     */
    public function destroy(ter_tercero $ter_tercero)
    {
        //
    }
}
