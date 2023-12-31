@extends('adminlte::page')

@section('title', 'Panel de control')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap5.min.css">
@endsection

@section('content_header')

    <a href="{{ route('admin.patients.create') }}" class="btn btn-secondary btn-sm float-right">Crear nuevo paciente</a>

    <h1>Lista de pacientes</h1>
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
            <table id="tratamientos" class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Phone</th>
                        <th>Email</th>
                        @if ('admin.patients.index')
                            <th class="text-uppercase">PDF</th>
                            <th class="text-uppercase">Editar</th>
                            <th class="text-uppercase">Eliminar</th>
                        @else
                            @can('admin.patients.index')
                                <th class="text-uppercase"></th>
                                <th class="text-uppercase"></th>
                            @endcan
                        @endif
                    </tr>
                </thead>

                <tbody>
                    @foreach ($patients as $patient)
                        <tr>
                            <td>{{ $patient->id }}</td>
                            <td>{{ $patient->name }}</td>
                            <td>{{ $patient->phone }}</td>
                            <td>{{ $patient->email }}</td>

                            <td width="10px" class="text-center">
                                @can('admin.patients.edit')
                                    <a href="{{ route('paciente.pdf', $patient) }}" class="btn btn-success btn-sm"><i class="fa-light fa-file-pdf"></i>
                                    </a>
                                @endcan
                            </td>
                            <td width="10px" class="text-center">
                                @can('admin.patients.edit')
                                    <a href="{{ route('admin.patients.edit', $patient) }}" class="btn btn-warning btn-sm"><i
                                            class="fas fa-edit"></i></a>
                                @endcan
                            </td>
                            <td width="10px">
                                @can('admin.patients.destroy')
                                    <form action="{{ route('admin.patients.destroy', $patient) }}" method="POST"
                                        class="text-center">
                                        @csrf
                                        @method('delete')

                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                class="fas fa-trash"></i></button>
                                    </form>
                                @endcan
                            </td>
                        </tr>
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
            $('#tratamientos').DataTable({
                responsive: true,
                autoWidth: false,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json',
                },
            });
        });
    </script>
@endsection
