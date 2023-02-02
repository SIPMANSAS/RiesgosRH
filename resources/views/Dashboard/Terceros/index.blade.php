@extends('Layout/layout')
@section('barra-superior')
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
        <div>
            <h2 class="text-white pb-2 fw-bold">Administrar Tercero</h2>
        </div>
        <div class="ml-md-auto py-2 py-md-0">
            <a href="{{ route('tercero.create') }}" class="btn btn-secondary btn-round">Crear</a>
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
                                    @foreach ($Terceros as $tercero)
                                    <tr>
                                        <td>{{$tercero->identificacion}}</td>
                                        <td>{{$tercero->nombres}} {{$tercero->apellidos}}</td>
                                        <td>{{$tercero->correo_electronico}}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary dropdown-toggle"
                                                    data-toggle="dropdown" aria-expanded="false">
                                                    acciones
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ route('tercero.show',$tercero->identificacion) }}">Visualizar</a>
                                                    <a class="dropdown-item" href="{{ route('tercero.edit',$tercero->identificacion) }}">Editar</a>
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
