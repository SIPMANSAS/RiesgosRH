@extends('Layout/layout')
@section('barra-superior')
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
        <div>
            <h2 class="text-white pb-2 fw-bold">Administrar Dominios</h2>
        </div>
        <div class="ml-md-auto py-2 py-md-0">
            <a href="{{ url('Administrar/dominios') }}" class="btn btn-danger btn-round">Volver</a>
        </div>
    </div>
@endsection
@section('contenido')
    <div class="page-inner mt--5">
        <div class="row row-card-no-pd mt--2">
            <div class="col-sm-6 col-md-6">
                <div class="card card-stats card-primary card-round">
                    <div class="card-body">
                        <div class="numbers" style="text-align: center;">
                            <p class="card-category">Identificación</p>
                            <h4 class="card-title">{{ $DominiosPadre[0]->identificacion }}</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6">
                <div class="card card-stats card-primary card-round">
                    <div class="card-body">
                        <div class="numbers" style="text-align: center;">
                            <p class="card-category">Nombre</p>
                            <h4 class="card-title">{{ $DominiosPadre[0]->nombre }}</h4>
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
                                        <th>Grupo</th>
                                        <th>Grupo Dominio</th>
                                        <th>Clasificación</th>
                                        <th>Nombre</th>
                                        <th>Descripción</th>
                                        <th>Id Alfanumérico</th>
                                        <th>Valor Padre</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Dominios as $item)
                                        <tr>
                                            <td><a class="btn btn-primary"
                                                    href="{{ url('#') }}">{{ $item->grupo }}</a>
                                            </td>
                                            <td>{{ $item->grupo_dominio }}</td>
                                            <td>{{ $item->clasificacion }}</td>
                                            <td>{{ $item->nombre }}</td>
                                            <td>{{ $item->descripcion }}</td>
                                            <td>{{ $item->id_alfanumerico }}</td>
                                            <td>{{ $item->valor_padre }}</td>
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
