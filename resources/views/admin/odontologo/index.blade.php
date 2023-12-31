@extends('adminlte::page')

@section('title', 'Panel de control')

@section('content_header')
    <h1>Lista de odontólogos</h1>
@stop

@section('content')
    <div class="card">

        <div class="card-header">
            <a href="{{ route('admin.odontologo.create') }}" class="btn btn-secondary">Crear nueva odontólogo</a>
        </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Especialidad</th>
                        <th>DNI</th>
                        <th>Estado</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($odontologos as $odontologo)
                        <tr>
                            <td>{{ $odontologo->id }}</td>
                            <td>{{ $odontologo->nombre }}</td>
                            <td>{{ $odontologo->especialidad }}</td>
                            <td>{{ $odontologo->dni }}</td>
                            <td>{{ $odontologo->activo }}</td>
                            <td width="10px"><a href="{{ route('admin.odontologo.edit', $odontologo) }}"
                                    class="btn btn-primary btn-sm">Editar</a></td>
                            <td width="10px">
                                <form action="{{ route('admin.odontologo.destroy', $odontologo) }}" method="POST">
                                    @csrf
                                    @method('delete')

                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
