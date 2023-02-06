@extends('Layout/layout')
@section('barra-superior')
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
        <div>
            <h2 class="text-white pb-2 fw-bold">Administrar Regiones</h2>
        </div>
        <div class="ml-md-auto py-2 py-md-0">
            <a href="{{ route('proyectos.create') }}" class="btn btn-secondary btn-round">Crear</a>
        </div>
    </div>
@endsection
@section('contenido')
    <div class="page-inner">
        <div class="row mt--2">
            <div class="col-md-12">
                <div class="card full-height">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="multi-filter-select" class="display table table-striped table-hover">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th>identificacion</th>
                                        <th>nombre completo</th>
                                        <th>correo electronico</th>
                                        <th>Aciones</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>2</td>
                                        <td>1</td>
                                        <td></td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown" aria-expanded="false">
                                                    acciones
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item"
                                                        href="{{ route('tercero.show', 1) }}">Visualizar</a>
                                                    <a class="dropdown-item" href="{{ route('tercero.edit', 2) }}">Editar</a>
                                                </div>
                                            </div>
                                        </td>
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
