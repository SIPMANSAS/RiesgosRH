@extends('Layout/layout')
@section('barra-superior')
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
        <div>
            <h2 class="text-white pb-2 fw-bold">Administrar Proyectos</h2>
        </div>
        <div class="ml-md-auto py-2 py-md-0">
            <a href="{{ url('proyectos') }}" class="btn btn-danger btn-round">Volver</a>
        </div>
    </div>
@endsection
@section('contenido')
    <div class="page-inner">
        <div class="row mt--2">
            <div class="col-md-12">
                <div class="card full-height">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                {!! Form::label('# DE PROYECTO') !!}
                                {!! Form::number('', $Proyectos->id_proyecto, ['class' => 'form-control', 'readonly']) !!}
                            </div>
                            <div class="col-sm-6 form-group">
                                {!! Form::label('NOMBRE DEL PROYECTO') !!}
                                {!! Form::text('NombreProyecto', $Proyectos->nombre, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('CONTRATANTE') !!}
                                <select name="Contratante" class="form-control">
                                    <option value="" selected disabled>Seleccione la opcion</option>
                                    @foreach ($Contratante as $contratante)
                                        <option value="{{ $contratante->identificacion }}"
                                            @if ($Proyectos->id_contratista == $contratante->identificacion) selected @endif>{{ $contratante->nombres }}
                                            {{ $contratante->apellidos }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('CONTRATISTA') !!}
                                <select name="Contratista" class="form-control">
                                    <option value="" selected disabled>Seleccione la opcion</option>
                                    @foreach ($Contratante as $contratante)
                                        <option value="{{ $contratante->identificacion }}"
                                            @if ($Proyectos->id_contratista == $contratante->identificacion) selected @endif>{{ $contratante->nombres }}
                                            {{ $contratante->apellidos }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('INTERVENTORÍA ASIGNADA') !!}
                                <select name="Interventoria" class="form-control">
                                    <option value="" selected disabled>Seleccione la opcion</option>
                                    @foreach ($Contratante as $contratante)
                                        <option value="{{ $contratante->identificacion }}"
                                            @if ($Proyectos->id_interventoria == $contratante->identificacion) selected @endif>{{ $contratante->nombres }}
                                            {{ $contratante->apellidos }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-6 form-group">
                                {!! Form::label('OBJETO CONTRACTUAL') !!}
                                {!! Form::text('ObjectoContractual', $Proyectos->objeto_contraactual, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                {!! Form::label('ETAPA DEL PROYECTO') !!}
                                <select name="EtapaProyecto" class="form-control">
                                    <option value="" selected disabled>Seleccione la opcion</option>
                                    @foreach ($TipoActividad as $Tipoactividad)
                                        <option value="{{ $Tipoactividad->identificador }}"
                                            @if ($Proyectos->id_etapa_proyecto == $Tipoactividad->identificador) selected @endif>{{ $Tipoactividad->nombre }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-6 form-group">
                                {!! Form::label('ACTIVIDADES') !!}
                                <select name="Actividades" class="form-control">
                                    <option value="" selected disabled>Seleccione la opcion</option>
                                    @foreach ($TipoActividad as $Tipoactividad)
                                        <option value="{{ $Tipoactividad->identificador }}"
                                            @if ($Proyectos->id_actividad == $Tipoactividad->identificador) selected @endif>{{ $Tipoactividad->nombre }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-6 form-group">
                                {!! Form::label('RESPONSABLE') !!}
                                <select name="Responsable" class="form-control">
                                    <option value="" selected disabled>Seleccione la opcion</option>
                                    @foreach ($Contratante as $contratante)
                                        <option value="{{ $contratante->identificacion }}"
                                            @if ($Proyectos->id_responsable == $contratante->identificacion) selected @endif>{{ $contratante->nombres }}
                                            {{ $contratante->apellidos }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-6 form-group">
                                {!! Form::label('DOCUMENTO / FORMATO ASOCIADO') !!}
                                <select name="TipoDocumento" class="form-control">
                                    <option value="" selected disabled>Seleccione la opcion</option>
                                    @foreach ($Documentacion as $documentacion)
                                        <option value="{{ $documentacion->identificador }}"
                                            @if ($Proyectos->id_tipo_contratacion == $documentacion->identificador) selected @endif>{{ $documentacion->nombre }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-6 form-group">
                                {!! Form::label('CARGAR DOCUMENTO / FORMATO EN PDF') !!}
                                <a href="/{{ $Proyectos->archivos }}" target="_blank" class="btn btn-primary">Visualizar
                                    Documento Adjuntado</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
