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
                        {!! Form::open(['url' => 'proyectos', 'files' => true]) !!}
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                {!! Form::label('# DE PROYECTO') !!}
                                {!! Form::number('', 0, ['class' => 'form-control','readonly']) !!}
                            </div>
                            <div class="col-sm-6 form-group">
                                {!! Form::label('NOMBRE DEL PROYECTO') !!} <span style="color: red">*</span>
                                {!! Form::text('NombreProyecto', null, ['class' => 'form-control','required']) !!}
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('CONTRATANTE') !!} <span style="color: red">*</span>
                                <select name="Contratante" class="form-control" required>
                                    <option value="" selected disabled>Seleccione la opcion</option>
                                    @foreach ($Contratante as $contratante)
                                        <option value="{{ $contratante->identificacion }}">{{ $contratante->nombres }}
                                            {{ $contratante->apellidos }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('CONTRATISTA') !!} <span style="color: red">*</span>
                                <select name="Contratista" class="form-control" required>
                                    <option value="" selected disabled>Seleccione la opcion</option>
                                    @foreach ($Contratista as $contratante)
                                        <option value="{{ $contratante->identificacion }}">{{ $contratante->nombres }}
                                            {{ $contratante->apellidos }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('INTERVENTORÍA ASIGNADA') !!} <span style="color: red">*</span>
                                <select name="Interventoria" class="form-control" required>
                                    <option value="" selected disabled>Seleccione la opcion</option>
                                    @foreach ($Intervetoria as $contratante)
                                        <option value="{{ $contratante->identificacion }}">{{ $contratante->nombres }}
                                            {{ $contratante->apellidos }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-6 form-group">
                                {!! Form::label('OBJETO CONTRACTUAL') !!} <span style="color: red">*</span>
                                {!! Form::text('ObjectoContractual', null, ['class' => 'form-control','required']) !!}
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                {!! Form::label('ETAPA DEL PROYECTO') !!} <span style="color: red">*</span>
                                <select name="EtapaProyecto" class="form-control" required>
                                    <option value="" selected disabled>Seleccione la opcion</option>
                                    @foreach ($TipoActividad as $Tipoactividad)
                                        <option value="{{ $Tipoactividad->identificador }}">{{ $Tipoactividad->nombre }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-6 form-group">
                                {!! Form::label('ACTIVIDADES') !!} <span style="color: red">*</span>
                                <select name="Actividades" class="form-control" required>
                                    <option value="" selected disabled>Seleccione la opcion</option>
                                    @foreach ($TipoActividad as $Tipoactividad)
                                        <option value="{{ $Tipoactividad->identificador }}">{{ $Tipoactividad->nombre }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-6 form-group">
                                {!! Form::label('RESPONSABLE') !!} <span style="color: red">*</span>
                                <select name="Responsable" class="form-control" required>
                                    <option value="" selected disabled>Seleccione la opcion</option>
                                    @foreach ($Responsable as $contratante)
                                        <option value="{{ $contratante->identificacion }}">{{ $contratante->nombres }}
                                            {{ $contratante->apellidos }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-6 form-group">
                                {!! Form::label('DOCUMENTO / FORMATO ASOCIADO') !!} <span style="color: red">*</span>
                                <select name="TipoDocumento" class="form-control" required>
                                    <option value="" selected disabled>Seleccione la opcion</option>
                                    @foreach ($Documentacion as $documentacion)
                                        <option value="{{ $documentacion->identificador }}">{{ $documentacion->nombre }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-6 form-group">
                                {!! Form::label('CARGAR DOCUMENTO / FORMATO EN PDF') !!} <span style="color: red">*</span>
                                {!! Form::file('Documento', ['class' => 'form-control','required', 'accept' => '.pdf, .doc, .docx']) !!}
                            </div>
                            <div class="col-sm-12 form-group">
                                {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
