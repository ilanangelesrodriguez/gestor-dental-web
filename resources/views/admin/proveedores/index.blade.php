@extends('adminlte::page')

@section('title', 'Panel de control')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap5.min.css">
@endsection

@section('content_header')

    <a href="{{ route('admin.proveedores.create') }}" class="btn btn-secondary btn-sm float-right">Crear nuevo proveedor</a>

    <h1>Lista de proveedores</h1>
@stop

@section('content')

    {{-- mostrando la alerta de sesion --}}
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card">

        <div class="card-body">
            <table id="proveedores" class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Contácto</th>
                        <th>Celular</th>
                        @if ('admin.proveedores.index')
                            <th class="text-uppercase">Editar</th>
                            <th class="text-uppercase">Eliminar</th>
                        @else
                            @can('admin.proveedores.index')
                                <th class="text-uppercase"></th>
                                <th class="text-uppercase"></th>
                            @endcan
                        @endif
                    </tr>
                </thead>

                <tbody>
                    @foreach ($proveedores as $proveedore)
                        <tr>
                            <td>{{ $contador }}</td>
                            <td>{{ $proveedore->name }}</td>
                            <td>{{ $proveedore->contacto }}</td>
                            <td>{{ $proveedore->phone }}</td>
                            <td width="10px" class="text-center">
                                @can('admin.proveedores.edit')
                                    <a href="{{ route('admin.proveedores.edit', $proveedore) }}"
                                        class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                @endcan
                            </td>
                            <td width="10px">
                                @can('admin.proveedores.destroy')
                                @endcan
                                <form action="{{ route('admin.proveedores.destroy', $proveedore) }}" method="POST" class="text-center">
                                    @csrf
                                    @method('delete')

                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                            class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @php
                            $contador++;
                        @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop


@section('js')
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/responsive.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#proveedores').DataTable({
                responsive: true,
                autoWidth: false,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json',
                },
            });
        });
    </script>
@endsection
