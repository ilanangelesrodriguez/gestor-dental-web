@extends('adminlte::page')

@section('title', 'Panel de control')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap5.min.css">
@endsection

@section('content_header')

    @can('admin.products.create')
        <a href="{{ route('admin.products.create') }}" class="btn btn-secondary btn-sm float-right">Crear nuevo producto</a>
    @endcan

    <h1>Lista de productos</h1>
@stop

@section('content')

    {{-- @livewire('admin.products-index') --}}


    {{-- mostrando la alerta de sesion --}}
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card">
        {{-- <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Ingrese el nombre del producto">
        </div> --}}

        <div class="card-body">
            <table id="productos" class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th class="text-uppercase">Nombre</th>
                        <th class="text-uppercase">Descripción</th>
                        <th class="text-uppercase">Stock</th>
                        <th class="text-uppercase">Estado</th>
                        <th class="text-uppercase">Imagen</th>
                        <th class="text-uppercase">Categoria</th>
                        <th class="text-uppercase">Proveedor</th>
                        @if ('admin.products.index')
                            <th class="text-uppercase">Editar</th>
                            <th class="text-uppercase">Eliminar</th>
                        @else
                            @can('admin.products.index')
                                <th class="text-uppercase"></th>
                                <th class="text-uppercase"></th>
                            @endcan
                        @endif
                    </tr>
                </thead>

                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $contador }}</td>
                            <td>{{ $product->name }}</td>
                            @if ($product->description=="")
                                <td>Sin descripción</td>
                            @else
                                <td>{!! $product->description !!}</td>
                            @endif
                            <td>{!! $product->stock !!}</td>
                            <td>
                                @if ($product->status == 1)
                                    <span>En stock</span>
                                @else
                                    <span>Agotado</span>
                                @endif
                            </td>
                            <td>
                                <img src="{{ asset('imagen/product/'.$product->image) }}" style="max-width:50px">
                            </td>
                            <td>{{ $product->category->name }}</td>
                            <td>{{ $product->proveedor->name }}</td>
                            <td width="10px" class="text-center">
                                @can('admin.products.edit')
                                    <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-warning btn-sm"><i
                                            class="fas fa-edit"></i></a>
                                @endcan
                            </td>
                            <td width="10px">
                                @can('admin.products.destroy')
                                    <form action="{{ route('admin.products.destroy', $product) }}" method="POST"
                                        class="formEliminar text-center">
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
            $('#productos').DataTable({
                responsive: true,
                autoWidth: false,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json',
                },
            });
        });
    </script>
    {{-- enviar formulario y mostrar alerta sweetalert --}}
    <script>
        (function() {
            'use strict'

            var forms = document.querySelectorAll('.formEliminar')
            Array.prototype.slice.call(forms)
                .forEach((form) => {
                    form.addEventListener('submit', function(event) {
                        event.preventDefault()
                        event.stopPropagation()
                        Swal.fire({
                            title: 'Confirma la eliminación del registro?',
                            icon: 'info',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Confirmar'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                Swal.fire(
                                    'Eliminado!',
                                    'El registro ha sido eliminado exitosamente.',
                                    'success'
                                )
                            }
                        })
                    }, false)
                });
        })
    </script>
@endsection
