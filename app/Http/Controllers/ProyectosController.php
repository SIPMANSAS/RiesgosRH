<?php

namespace App\Http\Controllers;

use App\Proyectos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProyectosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Proyectos = Proyectos::all();
        return view('Dashboard.Proyectos.index', compact('Proyectos'));
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

        return view('Dashboard.Proyectos.create', compact(
            'Contratante',
            'Contratista',
            'Intervetoria',
            'TipoActividad',
            'Documentacion',
            'Responsable'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = Validator::make($request->all(), [
            "NombreProyecto" => "required",
            "Contratante" => "required",
            "Contratista" => "required",
            "Interventoria" => "required",
            "ObjectoContractual" => "required",
            "EtapaProyecto" => "required",
            "Actividades" => "required",
            "Responsable" => "required",
            "TipoDocumento" => "required",
            "Documento" => "required",
        ]);
        if ($validatedData->fails()) {
            toastr()->error('Error verifica los datos !');
            return redirect()->back()->withErrors($validatedData)->withInput();
        } else {
            if ($request->file('Documento')) {

                $image = $request->file('Documento');
                $brochure = 'storage/Soporte_' . $request->NombreProyecto . '/' . $image->getClientOriginalName();
                Storage::disk('public')->putFileAs('Soporte_' . $request->NombreProyecto, $request->file('Documento'), $image->getClientOriginalName());

                $autoIncrements = DB::table('pro_proyectos')->increment('id_proyecto');

                $proyectos = new Proyectos();
                $proyectos->id_proyecto = $autoIncrements;
                $proyectos->nombre = $request->NombreProyecto;
                $proyectos->id_contratante = $request->Contratante;
                $proyectos->id_contratista = $request->Contratista;
                $proyectos->id_interventoria = $request->Interventoria;
                $proyectos->objeto_contraactual = $request->ObjectoContractual;
                $proyectos->id_etapa_proyecto = $request->EtapaProyecto;
                $proyectos->id_actividad = $request->Actividades;
                $proyectos->id_formato = $request->TipoDocumento;
                $proyectos->id_responsable = $request->Responsable;
                $proyectos->id_tipo_contratacion = $request->TipoDocumento;
                $proyectos->archivos = $brochure;
                $proyectos->save();
            } else {
                $autoIncrements = DB::table('pro_proyectos')->increment('id_proyecto');

                $proyectos = new Proyectos();
                $proyectos->id_proyecto = $autoIncrements;
                $proyectos->nombre = $request->NombreProyecto;
                $proyectos->id_contratante = $request->Contratante;
                $proyectos->id_contratista = $request->Contratista;
                $proyectos->id_interventoria = $request->Interventoria;
                $proyectos->objeto_contraactual = $request->ObjectoContractual;
                $proyectos->id_etapa_proyecto = $request->EtapaProyecto;
                $proyectos->id_actividad = $request->Actividades;
                $proyectos->id_formato = $request->TipoDocumento;
                $proyectos->id_responsable = $request->Responsable;
                $proyectos->id_tipo_contratacion = $request->TipoDocumento;
                $proyectos->archivos = null;
                $proyectos->save();
            }
        }
        toastr()->success('Se Creo el Registro exitosamente !');
        return redirect('proyectos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Contratante = DB::table('ter_terceros')->where('vdom_tipo_tercero', 772)->get();
        $Contratista = DB::table('ter_terceros')->where('vdom_tipo_tercero', 774)->get();
        $Intervetoria = DB::table('ter_terceros')->where('vdom_tipo_tercero', 773)->get();
        $TipoActividad = DB::select("CALL p_dominio(13)");
        $Documentacion = DB::select("CALL p_dominio(3)");
        $Responsable = DB::table('ter_terceros')->where('vdom_tipo_tercero', 770)->where('vdom_tipo_tercero', 771)->get();
        $Proyectos = Proyectos::where("id_proyecto", $id)->first();
        return view('Dashboard.Proyectos.show', compact(
            'Proyectos',
            'Contratante',
            'Contratista',
            'Intervetoria',
            'TipoActividad',
            'Documentacion',
            'Responsable'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Contratante = DB::table('ter_terceros')->where('vdom_tipo_tercero', 772)->get();
        $Contratista = DB::table('ter_terceros')->where('vdom_tipo_tercero', 774)->get();
        $Intervetoria = DB::table('ter_terceros')->where('vdom_tipo_tercero', 773)->get();
        $TipoActividad = DB::select("CALL p_dominio(13)");
        $Documentacion = DB::select("CALL p_dominio(3)");
        $Responsable = DB::table('ter_terceros')->where('vdom_tipo_tercero', 770)->where('vdom_tipo_tercero', 771)->get();
        $Proyectos = Proyectos::where("id_proyecto", $id)->first();
        return view('Dashboard.Proyectos.edit', compact(
            'Proyectos',
            'Contratante',
            'Contratista',
            'Intervetoria',
            'TipoActividad',
            'Documentacion',
            'Responsable'
        ));
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
        $validatedData = Validator::make($request->all(), [
            "NombreProyecto" => "required",
            "Contratante" => "required",
            "Contratista" => "required",
            "Interventoria" => "required",
            "ObjectoContractual" => "required",
            "EtapaProyecto" => "required",
            "Actividades" => "required",
            "Responsable" => "required",
            "TipoDocumento" => "required",
            "Documento" => "required",
        ]);
        if ($validatedData->fails()) {
            toastr()->error('Error verifica los datos !');
            return redirect()->back()->withErrors($validatedData)->withInput();
        } else {
            if ($request->file('Documento')) {

                $image = $request->file('Documento');

                Storage::deleteDirectory('brochure_' . $request->NombreProyecto);

                //Storage::deleteDirectory('Soporte_' . $request->Contratante . '/' . $image->getClientOriginalName());

                $brochure = 'storage/Soporte_' . $request->NombreProyecto . '/' . $image->getClientOriginalName();
                Storage::disk('public')->putFileAs('Soporte_' . $request->Contratante, $request->file('Documento'), $image->getClientOriginalName());


                Proyectos::where('id_proyecto', $id)->update([
                    'nombre' => $request->NombreProyecto,
                    'id_contratante' => $request->Contratante,
                    'id_contratista' => $request->Contratista,
                    'id_interventoria' => $request->Interventoria,
                    'objeto_contraactual' => $request->ObjectoContractual,
                    'id_etapa_proyecto' => $request->EtapaProyecto,
                    'id_actividad' => $request->Actividades,
                    'id_formato' => $request->TipoDocumento,
                    'id_responsable' => $request->Responsable,
                    'id_tipo_contratacion' => $request->TipoDocumento,
                    'archivos' => $brochure
                ]);
            } else {
                Proyectos::where('id_proyecto', $id)->update([
                    'nombre' => $request->NombreProyecto,
                    'id_contratante' => $request->Contratante,
                    'id_contratista' => $request->Contratista,
                    'id_interventoria' => $request->Interventoria,
                    'objeto_contraactual' => $request->ObjectoContractual,
                    'id_etapa_proyecto' => $request->EtapaProyecto,
                    'id_actividad' => $request->Actividades,
                    'id_formato' => $request->TipoDocumento,
                    'id_responsable' => $request->Responsable,
                    'id_tipo_contratacion' => $request->TipoDocumento,
                    'archivos' => null
                ]);
            }
        }
        toastr()->success('Se Actualizo el Registro exitosamente !');
        return redirect('proyectos');
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
