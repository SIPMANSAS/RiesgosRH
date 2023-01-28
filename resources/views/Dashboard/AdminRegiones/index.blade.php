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
                                    @foreach ($Dominios as $item)
                                        <tr>
                                            <td>{{ $item->codigo }}</td>
                                            <td><a class="btn btn-primary"
                                                    href="{{ url('Administrar/regiones/pais', $item->codigo) }}">{{ $item->nombre }}</a>
                                            </td>
                                            <td>{{ $item->tipo_estado }}</td>
                                            <td>{{ $item->estado }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
