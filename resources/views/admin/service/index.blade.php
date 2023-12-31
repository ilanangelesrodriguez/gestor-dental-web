@extends('adminlte::page')

@section('title', 'Panel de control')

@section('content_header')

@stop

@section('content')

    <div class="container">
        <h1>Lista de servicios</h1>
        {{-- mostrando la alerta de sesion --}}
        @if (session('info'))
            <div class="alert alert-success">
                <strong>{{ session('info') }}</strong>
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <div class="col-xl-12">
                    <a href="{{ route('admin.service.create') }}" class="btn btn-secondary">Crear nuevo servicio</a>
                </div>
            </div>

            <div class="card-body">
                <div class="col-xl-12">
                    <form action="{{ route('admin.service.index') }}" method="GET">
                        <div class="form-row">
                            <div class="col-sm-4 my-1">
                                <input type="text" class="form-control" name="texto" value="{{ $texto }}" placeholder="Buscar...">
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
                            <th class="text-uppercase">ID</th>
                            <th class="text-uppercase">Nombre</th>
                            <th class="text-uppercase">Precio</th>
                            @if ('admin.service.index')
                                <th class="text-uppercase">Editar</th>
                                <th class="text-uppercase">Eliminar</th>
                            @else
                                @can('admin.service.index')
                                    <th class="text-uppercase"></th>
                                    <th class="text-uppercase"></th>
                                @endcan
                            @endif
                        </tr>
                    </thead>

                    <tbody>
                        @if (count($services) <= 0)
                            <tr>
                                <td colspan="5">No hay registros</td>
                            </tr>
                        @else
                            @foreach ($services as $service)
                                <tr>
                                    <td>{{ $contador }}</td>
                                    <td>{{ $service->name }}</td>
                                    <td>{{ "S/. ".$service->price }}</td>
                                    <td width="10px" class="text-center">
                                        @can('admin.service.edit')
                                            <a href="{{ route('admin.service.edit', $service) }}"
                                                class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                        @endcan
                                    </td>
                                    <td width="10px">
                                        @can('admin.service.destroy')
                                            <form action="{{ route('admin.service.destroy', $service) }}" method="POST"
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
                {{ $services->links() }}
            </div>
        </div>
    </div>
@stop


@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
