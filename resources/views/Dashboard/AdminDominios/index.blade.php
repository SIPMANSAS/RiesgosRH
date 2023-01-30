@extends('Layout/layout')
@push('scripts')
    <script>
        $(document).ready(function() {
            $('table').DataTable({
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.11.5/i18n/es-ES.json"
                },
                "lengthMenu": [
                    [5, 10, -1],
                    [5, 10, "Todos"]
                ]
            });
        });
    </script>
@endpush
@section('barra-superior')
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
        <h2 class="text-white pb-2 fw-bold">Administrar Dominios</h2>
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
                                        <th>Identificación</th>
                                        <th>Nombre</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Dominios as $item)
                                        <tr>
                                            <td><a class="btn btn-primary"
                                                    href="{{ url('Administrar/dominios/show', $item->identificacion) }}">{{ $item->identificacion }}</a>
                                            </td>
                                            <td>{{ $item->nombre }}</td>
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
