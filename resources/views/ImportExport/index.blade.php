@extends('Layout/layout')
@section('barra-superior')
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
        <div>
            <h2 class="text-white pb-2 fw-bold">Modulo De Importacion</h2>
            <h5 class="text-white op-7 mb-2">En este Modulo puedes Realizar cargas masivas</h5>
        </div>
    </div>
@endsection
@section('contenido')
    <div class="dropdown-divider"></div>
    <h1 style="text-align: center">IMPORTAR DATOS</h1>
    <div class="dropdown-divider"></div>
    <div class="page-inner">
        <div class="row mt--2">
            <div class="col-md-6">
                <div class="card full-height">
                    <div class="card-body text-center">
                        <div class="card-title">IMPORTAR DATOS PARA LA TABLA <br>(CG DOMINIOS)</div>
                        <div class="card-category">formato de importacion Excel</div>
                        {!! Form::model(null, [
                            'method' => 'POST',
                        'route' => ['import.cg.dominios', 1/*auth()->user()->id*/],
                            'files' => true,
                            'enctype' => 'multipart/form-data',
                        ]) !!}
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>Importar datos</label>
                                {!! Form::file('CgDominios', ['class' => 'form-control','accept' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel', 'required']) !!}
                            </div>
                            <div class="col-sm-12 form-group">
                                {!! Form::submit('Importar', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card full-height">
                    <div class="card-body text-center">
                        <div class="card-title">IMPORTAR DATOS PARA LA TABLA <br>(CG GRUPO DOMINIOS)</div>
                        <div class="card-category">formato de importacion Excel</div>
                        {!! Form::model(null, [
                            'method' => 'POST',
                            'route' => ['import.cg.grupo.dominios', 1],
                            'files' => true,
                            'enctype' => 'multipart/form-data',
                        ]) !!}
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>Importar datos</label>
                                {!! Form::file('CgGruposDominios', ['class' => 'form-control','accept' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel', 'required']) !!}
                            </div>
                            <div class="col-sm-12 form-group">
                                {!! Form::submit('Importar', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card full-height">
                    <div class="card-body text-center">
                        <div class="card-title">IMPORTAR DATOS PARA LA TABLA <br>(CG VALORES DOMINIOS)</div>
                        <div class="card-category">formato de importacion Excel</div>
                        {!! Form::model(null, [
                            'method' => 'POST',
                            'route' => ['import.cg.valores.dominios', 1],
                            'files' => true,
                            'enctype' => 'multipart/form-data',
                        ]) !!}
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>Importar datos</label>
                                {!! Form::file('CgValoresDominios', ['class' => 'form-control','accept' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel', 'required']) !!}
                            </div>
                            <div class="col-sm-12 form-group">
                                {!! Form::submit('Importar', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
