@extends('adminlte::page')

@section('title', 'Panel de control')

@section('content_header')
@stop

@section('content')
    {{-- <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Descripción</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($citas as $cita)
                        <tr>
                            <td>{{ $cita->id }}</td>
                            <td>{{ $cita->fecha }}</td>
                            <td>{{ $cita->hora }}</td>
                            <td>{{ $cita->descripcion }}</td>

                            <td>
                                <a href="{{ route('admin.citas.edit', $cita->id) }}" class="btn btn-primary">Editar</a>
                                <form action="{{ route('admin.citas.destroy', $cita->id) }}" method="POST"
                                    style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div> --}}
    <div class="container">
        <h1>Lista de citas</h1>
        {{-- mostrando la alerta de sesion --}}
        @if (session('info'))
            <div class="alert alert-success">
                <strong>{{ session('info') }}</strong>
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <div class="col-xl-12">
                    <a href="{{ route('admin.citas.create') }}" class="btn btn-secondary">Crear nueva cita</a>
                </div>
            </div>

            <div class="card-body">
                <div class="col-xl-12">
                    <form action="{{ route('admin.citas.index') }}" method="GET">
                        <div class="form-row">
                            <div class="col-sm-4 my-1">
                                <input type="text" class="form-control" name="texto" value="{{ $texto }}"
                                    placeholder="Buscar...">
                            </div>
                            <div class="col-auto my-1">
                                <input type="submit" class="btn btn-primary" value="Buscar">
                            </div>
                        </div>
                    </form>
                </div>
                <table id="services" class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Descripción</th>
                            @if ('admin.citas.index')
                                <th class="text-uppercase">Editar</th>
                                <th class="text-uppercase">Eliminar</th>
                            @else
                                @can('admin.citas.index')
                                    <th class="text-uppercase"></th>
                                    <th class="text-uppercase"></th>
                                @endcan
                            @endif
                        </tr>
                    </thead>

                    <tbody>
                        @if (count($citas) <= 0)
                            <tr>
                                <td colspan="5">No hay registros</td>
                            </tr>
                        @else
                            @foreach ($citas as $cita)
                                <tr>
                                    <td>{{ $contador }}</td>
                                    <td>{{ $cita->fecha }}</td>
                                    <td>{{ $cita->hora }}</td>
                                    <td>{{ $cita->descripcion }}</td>
                                    <td width="10px" class="text-center">
                                        @can('admin.citas.edit')
                                            <a href="{{ route('admin.citas.edit', $cita) }}" class="btn btn-warning btn-sm"><i
                                                    class="fas fa-edit"></i></a>
                                        @endcan
                                    </td>
                                    <td width="10px">
                                        @can('admin.citas.destroy')
                                            <form action="{{ route('admin.citas.destroy', $cita) }}" method="POST"
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
                        @endif
                    </tbody>
                </table>
                <br>
                {{ $citas->links() }}
            </div>
        </div>
    </div>
@stop
