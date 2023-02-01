@extends('Layout/layout')
@section('barra-superior')
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
        <div>
            <h2 class="text-white pb-2 fw-bold">Administrar Tercero</h2>
        </div>
    </div>
@endsection
@section('contenido')
    <div class="page-inner">
        <div class="row mt--2">
            <div class="col-md-12">
                <div class="card full-height">
                    <div class="card-body">
                        {!! Form::open(['url' => 'tercero', 'files' => true]) !!}
                        <h1 class="text-center">Titulo Superior</h1>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                {!! Form::label('vdom_tipo_identificacion') !!}
                                {{var_dump($TipoIdentificacion)}}
                                <select name="" id="">
                                        <option value=""></option>
                                </select>
                                {!! Form::select('asdas', null, null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-sm-6 form-group">
                                {!! Form::label('identificacion') !!}
                                {!! Form::number('asdas', null, [
                                    'class' => 'form-control',
                                    'min' => 0,
                                    'oninput' => "this.value = this.value.replace(/\D+/g, '')",
                                ]) !!}
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('nombres') !!}
                                {!! Form::text('asdas', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('apellidos') !!}
                                {!! Form::text('asdas', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('fecha_nacimiento') !!}
                                {!! Form::date('asdas', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('fecha_expedicion') !!}
                                {!! Form::date('asdas', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('pais_expedicion') !!}
                                {!! Form::text('asdas', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('departamento_expedicion') !!}
                                {!! Form::text('asdas', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('ciudad_expedicion') !!}
                                {!! Form::text('asdas', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <h1 class="text-center">Titulo Superior</h1>
                        <div class="dropdown-divider"></div>
                        <div class="row">

                            <div class="col-sm-4 form-group">
                                {!! Form::label('vdom_nacionalidad') !!}
                                {!! Form::select('asdas', ['S' => 0], null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('vdom_idioma') !!}
                                {!! Form::select('asdas', ['S' => 0], null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <h1 class="text-center">Titulo Superior</h1>
                        <div class="dropdown-divider"></div>
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                {!! Form::label('vdom_estado_civil') !!}
                                {!! Form::select('asdas', ['S' => 0], null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('vdom_profesion') !!}
                                {!! Form::select('asdas', ['S' => 0], null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('vdom_ocupacion') !!}
                                {!! Form::select('asdas', ['S' => 0], null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('id_empresa') !!}
                                {!! Form::select('asdas', ['S' => 0], null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('vdom_tipo_tercero') !!}
                                {!! Form::select('asdas', ['S' => 0], null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <h1 class="text-center">Titulo Superior</h1>
                        <div class="dropdown-divider"></div>
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                {!! Form::label('vdom_categoria_terceo') !!}
                                {!! Form::select('asdas', ['S' => 0], null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('vdom_segmento_tercero') !!}
                                {!! Form::select('asdas', ['S' => 0], null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('id_moneda') !!}
                                {!! Form::select('asdas', ['S' => 0], null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('tipo_estado') !!}
                                {!! Form::select('asdas', ['S' => 0], null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('estado') !!}
                                {!! Form::text('asdas', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <h1 class="text-center">Titulo Superior</h1>
                        <div class="dropdown-divider"></div>
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                {!! Form::label('id_tercero') !!}
                                {!! Form::select('asdas', ['S' => 0], null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('numero_identificacion') !!}
                                {!! Form::number('asdas', null, [
                                    'class' => 'form-control',
                                    'min' => 0,
                                    'oninput' => "this.value = this.value.replace(/\D+/g, '')",
                                ]) !!}
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('pais') !!}
                                {!! Form::text('asdas', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('departamento') !!}
                                {!! Form::text('asdas', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('ciudad') !!}
                                {!! Form::text('asdas', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('direccion') !!}
                                {!! Form::text('asdas', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('correo_electronico') !!}
                                {!! Form::email('asdas', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('telefono') !!}
                                {!! Form::number('asdas', null, [
                                    'class' => 'form-control',
                                    'min' => 0,
                                    'oninput' => "this.value = this.value.replace(/\D+/g, '')",
                                ]) !!}
                            </div>
                            <div class="col-sm-12 form-group">
                                {!! Form::submit('Guardar', [
                                    'class' => 'btn btn-primary',
                                    'min' => 0,
                                    'oninput' => "this.value = this.value.replace(/\D+/g, '')",
                                ]) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
