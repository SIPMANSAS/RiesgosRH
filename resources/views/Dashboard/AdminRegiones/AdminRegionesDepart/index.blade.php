@extends('Layout/layout')
@section('barra-superior')
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
        <div>
            <h2 class="text-white pb-2 fw-bold">Administrar Regiones</h2>
        </div>
        <div class="ml-md-auto py-2 py-md-0">
            <a href="{{ url('Administrar/regiones') }}" class="btn btn-danger btn-round">Volver</a>
        </div>
    </div>
@endsection
@section('contenido')
    <div class="page-inner mt--5">
        <div class="row row-card-no-pd mt--2">
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-primary card-round">
                    <div class="card-body">
                        <div class="numbers" style="text-align: center;">
                            <p class="card-category">Código</p>
                            <h4 class="card-title">{{ $DominiosPais[0]->codigo }}</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-primary card-round">
                    <div class="card-body">
                        <div class="numbers" style="text-align: center;">
                            <p class="card-category">Nombre</p>
                            <h4 class="card-title">{{ $DominiosPais[0]->nombre }}</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-primary card-round">
                    <div class="card-body">
                        <div class="numbers" style="text-align: center;">
                            <p class="card-category">Tipo Estado</p>
                            <h4 class="card-title">{{ $DominiosPais[0]->tipo_estado }}</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-primary card-round">
                    <div class="card-body">
                        <div class="numbers" style="text-align: center;">
                            <p class="card-category">Estado</p>
                            <h4 class="card-title">{{ $DominiosPais[0]->estado }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                                            <td><a class="btn btn-primary"
                                                    href="{{ url('Administrar/regiones/pais/' . $DominiosPais[0]->codigo . '/estado/' . $item->codigo) }}">{{ $item->codigo }}</a>
                                            </td>
                                            <td>{{ $item->nombre }}</td>
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
