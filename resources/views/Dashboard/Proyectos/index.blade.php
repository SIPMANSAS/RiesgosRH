@extends('Layout/layout')
@section('barra-superior')
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
        <div>
            <h2 class="text-white pb-2 fw-bold">Administrar Proyectos</h2>
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
                                        <th>Objecto Contractual</th>
                                        <th>Documento Soporte</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Proyectos as $item)
                                        <tr>
                                            <td>{{ $item->id_proyecto }}</td>
                                            <td>{{ $item->nombre }}</td>
                                            <td>{{ $item->objeto_contraactual }}</td>
                                            <td>{{ $item->archivos }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        Acciones
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="{{ $item->archivos }}"
                                                            target="_blank">Descargar Documento</a>
                                                        <a class="dropdown-item"
                                                            href="{{ route('proyectos.show', $item->id_proyecto) }}">Visualizar</a>
                                                        <a class="dropdown-item"
                                                            href="{{ route('proyectos.edit', $item->id_proyecto) }}">Editar</a>
                                                    </div>
                                                </div>
                                            </td>
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
