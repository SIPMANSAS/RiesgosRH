@extends('Layout/layout')
@push('scripts')
    <script>
        $("select#pais_expedicion").change(function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "/ajax/getCountry/response/" + this.value,
                data: {
                    _token: $('input[name="_token"]').val()
                },
                beforeSend: function() {
                    $('select#departamento_expedicion').empty();
                },
                success: function(response) {
                    $('select#departamento_expedicion').append(
                        '<option value="" selected disabled>Seleccione una opcion</option>');
                    $.each(response, function(key, result) {
                        $('select#departamento_expedicion').append($('<option>', {
                            value: result["codigo"],
                            text: result["nombre"]
                        }));
                    });
                },
                error: function(xhr) {
                    alert("Ocurrió un error. Vuelva a intentarlo.");
                },
            });
        });
        $("select#departamento_expedicion").change(function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "/ajax/getdepartments/response/pais/" + $("select#pais_expedicion").val() +
                    "/departam/" + this.value,
                data: {
                    _token: $('input[name="_token"]').val()
                },
                beforeSend: function() {
                    $('select#ciudad_expedicion').empty();
                },
                success: function(response) {
                    $('select#ciudad_expedicion').append(
                        '<option value="" selected disabled>Seleccione una opcion</option>');
                    $.each(response, function(key, result) {
                        $('select#ciudad_expedicion').append($('<option>', {
                            value: result["codigo"],
                            text: result["nombre"]
                        }));
                    });
                },
                error: function(xhr) {
                    alert("Ocurrió un error. Vuelva a intentarlo.");
                },
            });
        });

        $("select#pais").change(function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "/ajax/getCountry/response/" + this.value,
                data: {
                    _token: $('input[name="_token"]').val()
                },
                beforeSend: function() {
                    $('select#departamento').empty();
                },
                success: function(response) {
                    $('select#departamento').append(
                        '<option value="" selected disabled>Seleccione una opcion</option>');
                    $.each(response, function(key, result) {
                        $('select#departamento').append($('<option>', {
                            value: result["codigo"],
                            text: result["nombre"]
                        }));
                    });
                },
                error: function(xhr) {
                    alert("Ocurrió un error. Vuelva a intentarlo.");
                },
            });
        });
        $("select#departamento").change(function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "/ajax/getdepartments/response/pais/" + $("select#pais").val() +
                    "/departam/" + this.value,
                data: {
                    _token: $('input[name="_token"]').val()
                },
                beforeSend: function() {
                    $('select#ciudad').empty();
                },
                success: function(response) {
                    $('select#ciudad').append(
                        '<option value="" selected disabled>Seleccione una opcion</option>');
                    $.each(response, function(key, result) {
                        $('select#ciudad').append($('<option>', {
                            value: result["codigo"],
                            text: result["nombre"]
                        }));
                    });
                },
                error: function(xhr) {
                    alert("Ocurrió un error. Vuelva a intentarlo.");
                },
            });
        });
    </script>
@endpush
@section('barra-superior')
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
        <div>
            <h2 class="text-white pb-2 fw-bold">Administrar Tercero</h2>
        </div>
        <div class="ml-md-auto py-2 py-md-0">
            <a href="{{ route('tercero.index') }}" class="btn btn-danger btn-round">volver</a>
        </div>
    </div>
@endsection
@section('contenido')
    <div class="page-inner">
        <div class="row mt--2">
            <div class="col-md-12">
                <div class="card full-height">
                    <div class="card-body">
                        {!! Form::open(['url' => 'tercero']) !!}
                        <h1 class="text-center">Identificacion</h1>
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                {!! Form::label('tipo_identificacion') !!} <span style="color: red">*</span>
                                <select name="tipo_identificacion" class='form-control' required>
                                    <option value="" selected disabled>Seleccione una opcion</option>
                                    @foreach ($TipoIdentificacion as $item)
                                        <option value="{{ $item->identificador }}">{{ $item->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('identificacion') !!} <span style="color: red">*</span>
                                {!! Form::number('identificacion', null, [
                                    'class' => 'form-control',
                                    'min' => 0,
                                    'oninput' => "this.value = this.value.replace(/\D+/g, '')",
                                    'required',
                                ]) !!}
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('fecha_expedicion') !!} <span style="color: red">*</span>
                                {!! Form::date('fecha_expedicion', null, ['class' => 'form-control', 'required']) !!}
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('pais_expedicion') !!} <span style="color: red">*</span>
                                <select name="pais_expedicion" id="pais_expedicion" class='form-control' required>
                                    <option value="" selected disabled>Seleccione una opcion</option>
                                    @foreach ($paises as $item)
                                        <option value="{{ $item->codigo }}">{{ $item->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('departamento_expedicion') !!} <span style="color: red">*</span>
                                <select name="departamento_expedicion" id="departamento_expedicion" class='form-control'
                                    required>
                                    <option value="" selected disabled>Seleccione una opcion</option>
                                </select>
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('ciudad_expedicion') !!} <span style="color: red">*</span>
                                <select name="ciudad_expedicion" id="ciudad_expedicion" class='form-control' required>
                                    <option value="" selected disabled>Seleccione una opcion</option>
                                </select>
                            </div>
                            <div class="col-sm-6 form-group">
                                {!! Form::label('nombres') !!} <span style="color: red">*</span>
                                {!! Form::text('nombres', null, ['class' => 'form-control', 'required']) !!}
                            </div>
                            <div class="col-sm-6 form-group">
                                {!! Form::label('apellidos') !!} <span style="color: red">*</span>
                                {!! Form::text('apellidos', null, ['class' => 'form-control', 'required']) !!}
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('pais') !!} <span style="color: red">*</span>
                                <select name="pais" id="pais" class='form-control' required>
                                    <option value="" selected disabled>Seleccione una opcion</option>
                                    @foreach ($paises as $item)
                                        <option value="{{ $item->codigo }}">{{ $item->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('departamento') !!} <span style="color: red">*</span>
                                <select name="departamento" id="departamento" class='form-control' required>
                                    <option value="" selected disabled>Seleccione una opcion</option>
                                </select>
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('ciudad') !!} <span style="color: red">*</span>
                                <select name="ciudad" id="ciudad" class='form-control' required>
                                    <option value="" selected disabled>Seleccione una opcion</option>
                                </select>
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('direccion') !!} <span style="color: red">*</span>
                                {!! Form::text('direccion', null, ['class' => 'form-control', 'required']) !!}
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('correo electronico') !!} <span style="color: red">*</span>
                                {!! Form::email('correo_electronico', null, ['class' => 'form-control', 'required']) !!}
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('telefono') !!} <span style="color: red">*</span>
                                {!! Form::number('telefono', null, [
                                    'class' => 'form-control',
                                    'min' => 0,
                                    'oninput' => "this.value = this.value.replace(/\D+/g, '')",
                                    'required',
                                ]) !!}
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('fecha_nacimiento') !!} <span style="color: red">*</span>
                                {!! Form::date('fecha_nacimiento', null, ['class' => 'form-control', 'required']) !!}
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <h1 class="text-center">Características</h1>
                        <div class="dropdown-divider"></div>
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                {!! Form::label('nacionalidad') !!} <span style="color: red">*</span>
                                <select name="nacionalidad" class='form-control' required>
                                    <option value="" selected disabled>Seleccione una opcion</option>
                                    @foreach ($Nacionalidad as $item)
                                        <option value="{{ $item->identificador }}">{{ $item->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('idioma') !!} <span style="color: red">*</span>
                                <select name="idioma" class='form-control' required>
                                    <option value="" selected disabled>Seleccione una opcion</option>
                                    @foreach ($Idioma as $item)
                                        <option value="{{ $item->identificador }}">{{ $item->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('estado_civil') !!} <span style="color: red">*</span>
                                <select name="estado_civil" class='form-control' required>
                                    <option value="" selected disabled>Seleccione una opcion</option>
                                    @foreach ($EstadoCivil as $item)
                                        <option value="{{ $item->identificador }}">{{ $item->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('profesion') !!} <span style="color: red">*</span>
                                <select name="profesion" class='form-control' required>
                                    <option value="" selected disabled>Seleccione una opcion</option>
                                    @foreach ($Profesion as $item)
                                        <option value="{{ $item->identificador }}">{{ $item->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('ocupacion') !!} <span style="color: red">*</span>
                                <select name="ocupacion" class='form-control' required>
                                    <option value="" selected disabled>Seleccione una opcion</option>
                                    @foreach ($Ocupacion as $item)
                                        <option value="{{ $item->identificador }}">{{ $item->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('empresa') !!} <span style="color: red">*</span>
                                <select name="empresa" class='form-control' required>
                                    <option value="" selected disabled>Seleccione una opcion</option>
                                    @foreach ($TipoIdentificacion as $item)
                                        <option value="{{ $item->identificador }}">{{ $item->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('tipo tercero') !!} <span style="color: red">*</span>
                                <select name="tipo_tercero" class='form-control' required>
                                    <option value="" selected disabled>Seleccione una opcion</option>
                                    @foreach ($TipoTercero as $item)
                                        <option value="{{ $item->identificador }}">{{ $item->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('categoria terceo') !!} <span style="color: red">*</span>
                                <select name="categoria_terceo" class='form-control' required>
                                    <option value="" selected disabled>Seleccione una opcion</option>
                                    @foreach ($CategoriaTerceo as $item)
                                        <option value="{{ $item->identificador }}">{{ $item->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('segmento tercero') !!} <span style="color: red">*</span>
                                <select name="segmento_tercero" class='form-control' required>
                                    <option value="" selected disabled>Seleccione una opcion</option>
                                    @foreach ($SegmentoTercero as $item)
                                        <option value="{{ $item->identificador }}">{{ $item->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('moneda') !!} <span style="color: red">*</span>
                                <select name="moneda" class='form-control' required>
                                    <option value="" selected disabled>Seleccione una opcion</option>
                                    @foreach ($Moneda as $item)
                                        <option value="{{ $item->identificador }}">{{ $item->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-4 form-group">
                                {!! Form::label('estado') !!} <span style="color: red">*</span>
                                {!! Form::hidden('tipo_estado', 20, ['class' => 'form-control']) !!}
                                <select name="estado" class='form-control' required>
                                    <option value="" selected disabled>Seleccione una opcion</option>
                                    @foreach ($Estado as $item)
                                        <option value="{{ $item->identificador }}">{{ $item->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-12 form-group">
                                {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
