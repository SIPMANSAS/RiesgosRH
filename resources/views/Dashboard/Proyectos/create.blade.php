@extends('Layout/layout')
@section('barra-superior')
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
        <div>
            <h2 class="text-white pb-2 fw-bold">Administrar Regiones</h2>
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
                        {!! Form::open(['url' => 'proeyctos']) !!}
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                {!! Form::label('# DE PROYECTO') !!}
                                {!! Form::number('null', 0, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-sm-6 form-group">
                                {!! Form::label('NOMBRE DEL PROYECTO') !!}
                                {!! Form::text('null', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('CONTRATANTE') !!}
                                <select name="" class="form-control">
                                    <option value="" selected disabled>Seleccione la opcion</option>
                                    @foreach ($Contratante as $contratante)
                                        <option value="{{ $contratante->identificacion }}">{{ $contratante->nombres }}
                                            {{ $contratante->apellidos }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('CONTRATISTA') !!}
                                <select name="" class="form-control">
                                    <option value="" selected disabled>Seleccione la opcion</option>
                                    @foreach ($Contratista as $contratista)
                                        <option value="{{ $contratista->identificacion }}">{{ $contratista->nombres }}
                                            {{ $contratista->apellidos }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('INTERVENTORÍA ASIGNADA') !!}
                                <select name="" class="form-control">
                                    <option value="" selected disabled>Seleccione la opcion</option>
                                    @foreach ($Intervetoria as $intervetoria)
                                        <option value="{{ $intervetoria->identificacion }}">{{ $intervetoria->nombres }}
                                            {{ $intervetoria->apellidos }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-6 form-group">
                                {!! Form::label('OBJETO CONTRACTUAL') !!}
                                {!! Form::text('null', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                {!! Form::label('ETAPA DEL PROYECTO') !!}
                                {!! Form::text('null', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-sm-6 form-group">
                                {!! Form::label('ÁREA') !!}
                                {!! Form::text('null', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-sm-6 form-group">
                                {!! Form::label('ACTIVIDADES') !!}
                                <select name="" class="form-control">
                                    <option value="" selected disabled>Seleccione la opcion</option>
                                    @foreach ($TipoActividad as $Tipoactividad)
                                        <option value="{{ $Tipoactividad->identificador }}">{{ $Tipoactividad->nombre }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-6 form-group">
                                {!! Form::label('FASES - SUBFASES') !!}
                                <select name="" class="form-control">
                                    <option value="" selected disabled>Seleccione la opcion</option>
                                    @foreach ($TipoActividad as $Tipoactividad)
                                        <option value="{{ $Tipoactividad->identificador }}">{{ $Tipoactividad->nombre }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-6 form-group">
                                {!! Form::label('RESPONSABLE') !!}
                                <select name="" class="form-control">
                                    <option value="" selected disabled>Seleccione la opcion</option>
                                    @foreach ($Responsable as $responsable)
                                        <option value="{{ $responsable->identificador }}">{{ $responsable->nombre }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-6 form-group">
                                {!! Form::label('DOCUMENTO / FORMATO ASOCIADO') !!}
                                <select name="" class="form-control">
                                    <option value="" selected disabled>Seleccione la opcion</option>
                                    @foreach ($Documentacion as $documentacion)
                                        <option value="{{ $documentacion->identificador }}">{{ $documentacion->nombre }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-6 form-group">
                                {!! Form::label('CARGAR DOCUMENTO / FORMATO EN PDF') !!}
                                {!! Form::file('null', null, ['class' => 'form-control', 'accept' => '.doc, .docx,.pdf']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
