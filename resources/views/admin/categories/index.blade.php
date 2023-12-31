@extends('adminlte::page')

@section('title', 'Panel de control')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap5.min.css">
@endsection

@section('content_header')
    <h1>Lista de categorias</h1>
@stop

@section('content')

    {{-- mostrando la alerta de sesion --}}
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card">

        <div class="card-header">
            <a href="{{ route('admin.categories.create') }}" class="btn btn-secondary">Crear nueva categoria</a>
        </div>

        <div class="card-body">
            <table id="categorias" class="table table-striped">
                <thead>
                    <tr>
                        <th class="text-uppercase">ID</th>
                        <th class="text-uppercase">Nombre</th>
                        @if ('admin.categories.index')
                            <th class="text-uppercase">Editar</th>
                            <th class="text-uppercase">Eliminar</th>
                        @else
                            @can('admin.categories.index')
                                <th class="text-uppercase"></th>
                                <th class="text-uppercase"></th>
                            @endcan
                        @endif
                    </tr>
                </thead>

                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $contador }}</td>
                            <td>{{ $category->name }}</td>
                            <td width="10px" class="text-center">
                                @can('admin.categories.edit')
                                    <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-warning btn-sm"><i
                                            class="fas fa-edit"></i></a>
                                @endcan
                            </td>
                            <td width="10px">
                                @can('admin.categories.destroy')
                                    <form action="{{ route('admin.categories.destroy', $category) }}" method="POST"
                                        class="text-center">
                                        @csrf
                                        @method('delete')

                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                class="fas fa-trash"></i></button>
                                    </form>
                                @endcan
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
            $('#categorias').DataTable({
                responsive: true,
                autoWidth: false,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json',
                },
            });
        });
    </script>
@endsection
