@extends('layout/layout')
@section('barra-superior')
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
        <h2 class="text-white pb-2 fw-bold">Administrar Regiones</h2>
    </div>
@endsection
@section('contenido')
    <div class="page-inner mt--5">
        <div class="row mt--2">
            <div class="col-md-12">
                <div class="card full-height">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="multi-filter-select" class="display table table-striped table-hover">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th>Código</th>
                                        <th>Nombre</th>
                                        <th>Tipo Estado</th>
                                        <th>Estado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><a class="btn btn-primary"
                                                href="{{ url('Administrar/regiones/pais') }}">COLOMBIA</a></td>
                                        <td>PAISES</td>
                                        <td>ACTIVO</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
