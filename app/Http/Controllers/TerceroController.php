<?php

namespace App\Http\Controllers;

use App\Paises;
use App\ter_tercero;
use App\Terceros;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TerceroController extends Controller
{

    public function index()
    {
        $Terceros = Terceros::all();
        return view('Dashboard.Terceros.index', compact("Terceros"));
    }

    public function create()
    {
        $TipoIdentificacion = DB::select("CALL p_dominio(18)");
        $Nacionalidad = DB::select("CALL p_dominio(19)");
        $Idioma = DB::select("CALL p_dominio(20)");
        $EstadoCivil = DB::select("CALL p_dominio(21)");
        $Profesion = DB::select("CALL p_dominio(22)");
        $Ocupacion = DB::select("CALL p_dominio(22)");
        //$Empresa = DB::select("CALL p_dominio()");
        $TipoTercero = DB::select("CALL p_dominio(24)");
        $CategoriaTerceo = DB::select("CALL p_dominio(33)");
        $SegmentoTercero = DB::select("CALL p_dominio(34)");
        $Moneda = DB::select("CALL p_dominio(32)");
        $Estado = DB::select("SELECT * FROM sg_estados WHERE tipo_estado=20");
        $paises = Paises::select("codigo", "nombre")->get();

        return view('Dashboard.Terceros.create', compact(
            'TipoIdentificacion',
            'Nacionalidad',
            'Idioma',
            'EstadoCivil',
            'Profesion',
            'Ocupacion',
            'TipoTercero',
            'CategoriaTerceo',
            'SegmentoTercero',
            'Moneda',
            'Estado',
            'paises'
        ));
    }

    public function store(Request $request)
    {

        $validatedData = Validator::make($request->all(), [
            "tipo_identificacion" => "required",
            "identificacion" => "required",
            "fecha_expedicion" => "required",
            "nombres" => "required",
            "apellidos" => "required",
            "direccion" => "required",
            "correo_electronico" => "required",
            "telefono" => "required",
            "fecha_nacimiento" => "required",
            "nacionalidad" => "required",
            "idioma" => "required",
            "estado_civil" => "required",
            "profesion" => "required",
            "ocupacion" => "required",
            "empresa" => "required",
            "tipo_tercero" => "required",
            "categoria_terceo" => "required",
            "segmento_tercero" => "required",
            "moneda" => "required",
            "tipo_estado" => "required",
            "estado" => "required",
        ]);
        if ($validatedData->fails()) {
            toastr()->error('Error verifica los datos !');
            return redirect()->back()->withErrors($validatedData)->withInput();
        } else {

            $autoIncrements = DB::table('ter_terceros')->increment('id_tercero');

            $Terceros = new Terceros();
            $Terceros->identificacion = $request->identificacion;
            $Terceros->vdom_tipo_identificacion = $request->tipo_identificacion;
            $Terceros->fecha_expedicion = $request->fecha_expedicion;
            $Terceros->pais_expedicion = $request->pais_expedicion;
            $Terceros->departamento_expedicion = $request->departamento_expedicion;
            $Terceros->ciudad_expedicion = $request->ciudad_expedicion;
            $Terceros->nombres = $request->nombres;
            $Terceros->apellidos = $request->apellidos;
            $Terceros->vdom_nacionalidad = $request->nacionalidad;
            $Terceros->vdom_idioma = $request->idioma;
            $Terceros->fecha_nacimiento = $request->fecha_nacimiento;
            $Terceros->vdom_estado_civil = $request->estado_civil;
            $Terceros->vdom_profesion = $request->profesion;
            $Terceros->vdom_ocupacion = $request->ocupacion;
            $Terceros->id_empresa = $request->empresa;
            $Terceros->vdom_tipo_tercero = $request->tipo_tercero;
            $Terceros->vdom_categoria_terceo = $request->categoria_terceo;
            $Terceros->vdom_segmento_tercero = $request->segmento_tercero;
            $Terceros->id_moneda = $request->moneda;
            $Terceros->tipo_estado = $request->tipo_estado;
            $Terceros->estado = $request->estado;
            $Terceros->id_tercero = $autoIncrements;
            $Terceros->numero_identificacion = $request->identificacion;
            $Terceros->pais = $request->pais;
            $Terceros->departamento = $request->departamento;
            $Terceros->ciudad = $request->ciudad;
            $Terceros->direccion = $request->direccion;
            $Terceros->correo_electronico = $request->correo_electronico;
            $Terceros->telefono = $request->telefono;
            $Terceros->save();
        }
        toastr()->success('¡Los datos se han guardado con éxito!');
        return view('Dashboard.Terceros.index');
    }

    public function show($id)
    {
        $TipoIdentificacion = DB::select("CALL p_dominio(18)");
        $Nacionalidad = DB::select("CALL p_dominio(19)");
        $Idioma = DB::select("CALL p_dominio(20)");
        $EstadoCivil = DB::select("CALL p_dominio(21)");
        $Profesion = DB::select("CALL p_dominio(22)");
        $Ocupacion = DB::select("CALL p_dominio(22)");
        //$Empresa = DB::select("CALL p_dominio()");
        $TipoTercero = DB::select("CALL p_dominio(24)");
        $CategoriaTerceo = DB::select("CALL p_dominio(33)");
        $SegmentoTercero = DB::select("CALL p_dominio(34)");
        $Moneda = DB::select("CALL p_dominio(32)");
        $Estado = DB::select("SELECT * FROM sg_estados WHERE tipo_estado=20");
        $paises = Paises::select("codigo", "nombre")->get();

        $Terceros = Terceros::where("identificacion", $id)->first();
        return view('Dashboard.Terceros.show', compact(
            'Terceros',
            'TipoIdentificacion',
            'Nacionalidad',
            'Idioma',
            'EstadoCivil',
            'Profesion',
            'Ocupacion',
            'TipoTercero',
            'CategoriaTerceo',
            'SegmentoTercero',
            'Moneda',
            'Estado',
            'paises'
        ));
    }

    public function edit($id)
    {

        $TipoIdentificacion = DB::select("CALL p_dominio(18)");
        $Nacionalidad = DB::select("CALL p_dominio(19)");
        $Idioma = DB::select("CALL p_dominio(20)");
        $EstadoCivil = DB::select("CALL p_dominio(21)");
        $Profesion = DB::select("CALL p_dominio(22)");
        $Ocupacion = DB::select("CALL p_dominio(22)");
        //$Empresa = DB::select("CALL p_dominio()");
        $TipoTercero = DB::select("CALL p_dominio(24)");
        $CategoriaTerceo = DB::select("CALL p_dominio(33)");
        $SegmentoTercero = DB::select("CALL p_dominio(34)");
        $Moneda = DB::select("CALL p_dominio(32)");
        $Estado = DB::select("SELECT * FROM sg_estados WHERE tipo_estado=20");
        $paises = Paises::select("codigo", "nombre")->get();

        $Terceros = Terceros::where("identificacion", $id)->first();
        return view('Dashboard.Terceros.edit', compact(
            'Terceros',
            'TipoIdentificacion',
            'Nacionalidad',
            'Idioma',
            'EstadoCivil',
            'Profesion',
            'Ocupacion',
            'TipoTercero',
            'CategoriaTerceo',
            'SegmentoTercero',
            'Moneda',
            'Estado',
            'paises'
        ));
    }

    public function update(Request $request, $id)
    {

        $validatedData = Validator::make($request->all(), [
            "tipo_identificacion" => "required",
            "identificacion" => "required",
            "fecha_expedicion" => "required",
            "nombres" => "required",
            "apellidos" => "required",
            "direccion" => "required",
            "correo_electronico" => "required",
            "telefono" => "required",
            "fecha_nacimiento" => "required",
            "nacionalidad" => "required",
            "idioma" => "required",
            "estado_civil" => "required",
            "profesion" => "required",
            "ocupacion" => "required",
            "empresa" => "required",
            "tipo_tercero" => "required",
            "categoria_terceo" => "required",
            "segmento_tercero" => "required",
            "moneda" => "required",
            "tipo_estado" => "required",
            "estado" => "required",
        ]);
        if ($validatedData->fails()) {
            toastr()->error('Error verifica los datos !');
            return redirect()->back()->withErrors($validatedData)->withInput();
        } else {
            Terceros::where("identificacion", $request->identificacion)->update([
                'vdom_tipo_identificacion' => $request->tipo_identificacion,
                'fecha_expedicion' => $request->fecha_expedicion,
                'pais_expedicion' => $request->pais_expedicion,
                'departamento_expedicion' => $request->departamento_expedicion,
                'ciudad_expedicion' => $request->ciudad_expedicion,
                'nombres' => $request->nombres,
                'apellidos' => $request->apellidos,
                'vdom_nacionalidad' => $request->nacionalidad,
                'vdom_idioma' => $request->idioma,
                'fecha_nacimiento' => $request->fecha_nacimiento,
                'vdom_estado_civil' => $request->estado_civil,
                'vdom_profesion' => $request->profesion,
                'vdom_ocupacion' => $request->ocupacion,
                'id_empresa' => $request->empresa,
                'vdom_tipo_tercero' => $request->tipo_tercero,
                'vdom_categoria_terceo' => $request->categoria_terceo,
                'vdom_segmento_tercero' => $request->segmento_tercero,
                'id_moneda' => $request->moneda,
                'tipo_estado' => $request->tipo_estado,
                'estado' => $request->estado,
                'id_tercero' => $request->id_tercero,
                'numero_identificacion' => $request->identificacion,
                'pais' => $request->pais,
                'departamento' => $request->departamento,
                'ciudad' => $request->ciudad,
                'direccion' => $request->direccion,
                'correo_electronico' => $request->correo_electronico,
                'telefono' => $request->telefono,
            ]);
        }
        toastr()->success('¡Los datos se han actualizado con éxito!');
        return redirect('tercero');
    }
}
