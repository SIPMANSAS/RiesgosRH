@extends('layout/layout')
@section('barra-superior')
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
        <h2 class="text-white pb-2 fw-bold">Administrar Regiones</h2>
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
                            <h4 class="card-title">1</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-primary card-round">
                    <div class="card-body">
                        <div class="numbers" style="text-align: center;">
                            <p class="card-category">Nombre</p>
                            <h4 class="card-title">COLOMBIA</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-primary card-round">
                    <div class="card-body">
                        <div class="numbers" style="text-align: center;">
                            <p class="card-category">Tipo Estado</p>
                            <h4 class="card-title">PAISES</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-primary card-round">
                    <div class="card-body">
                        <div class="numbers" style="text-align: center;">
                            <p class="card-category">Estado</p>
                            <h4 class="card-title">ACTIVO</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-inner mt--5">
        <div class="row row-card-no-pd mt--2">
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-primary card-round">
                    <div class="card-body">
                        <div class="numbers" style="text-align: center;">
                            <p class="card-category">Código</p>
                            <h4 class="card-title">1</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-primary card-round">
                    <div class="card-body">
                        <div class="numbers" style="text-align: center;">
                            <p class="card-category">Nombre</p>
                            <h4 class="card-title">Antioquia</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-primary card-round">
                    <div class="card-body">
                        <div class="numbers" style="text-align: center;">
                            <p class="card-category">Tipo Estado</p>
                            <h4 class="card-title">DEPARTAMENTO</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-primary card-round">
                    <div class="card-body">
                        <div class="numbers" style="text-align: center;">
                            <p class="card-category">Estado</p>
                            <h4 class="card-title">ACTIVO</h4>
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
                                        <th>Es Capital?</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>MEDELLIN</td>
                                        <td>CUIDADES</td>
                                        <td>ACTIVO</td>
                                        <td>S</td>
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
