@extends('adminlte::page')

@section('title', 'Panel de control')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap5.min.css">
@endsection

@section('content_header')
    <h1>Lista de compras</h1>
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
            <a href="{{ route('admin.purchase.create') }}" class="btn btn-secondary">Crear nueva compra</a>
        </div>
        <div class="card-body">
            <table id="compras" class="table table-striped">
                <thead>
                    <tr>
                        <th class="text-uppercase">ID</th>
                        <th class="text-uppercase">Proveedor</th>
                        <th class="text-uppercase">Usuario</th>
                        <th class="text-uppercase">Fecha de compra</th>
                        <th class="text-uppercase">Total</th>
                        <th class="text-uppercase">Estado</th>
                        @if ('admin.purchase.index')
                            {{-- <th class="text-uppercase">Editar</th> --}}
                            {{-- <th class="text-uppercase">Eliminar</th> --}}
                        @else
                            @can('admin.purchase.index')
                                {{-- <th class="text-uppercase"></th> --}}
                                {{-- <th class="text-uppercase"></th> --}}
                            @endcan
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($purchases as $purchase)
                        <tr>
                            <td>{{ $contador }}</td>
                            <td>{{ $purchase->proveedor->name }}</td>
                            <td>{{ $purchase->user->name }}</td>
                            <td>{{ $purchase->purchase_date }}</td>
                            <td>{{ $purchase->total }}</td>
                            <td>
                                <span id="estado-{{ $purchase->id }}">{{ $purchase->status }}</span>
                                <form action="{{ route('admin.purchase.cambiar-estado',$purchase->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-success btn-sm">Cambiar estado</button>
                                </form>
                            </td>
                            {{-- <td width="10px" class="text-center">
                                @can('admin.purchase.edit')
                                    <a href="{{ route('admin.purchase.edit', $purchase) }}" class="btn btn-warning btn-sm"><i
                                            class="fas fa-edit"></i></a>
                                @endcan
                            </td> --}}
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
            $('#compras').DataTable({
                responsive: true,
                autoWidth: false,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json',
                },
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.cambiar-estado-btn').click(function() {
                var compraId = $(this).data('compra-id');
                var estadoElement = $('#estado-' + compraId);
                var otroElemento = $('#otro-elemento-' + compraId);

                $.ajax({
                    url: '/cambiar-estado/' + compraId,
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        estadoElement.text(response.status);

                        if (response.status === 'APROBADA') {
                            otroElemento.removeClass('oculto');
                        } else {
                            otroElemento.addClass('oculto');
                        }
                    },
                    error: function(error) {
                        console.error(error);
                    }
                });
            });
        });
    </script>
@endsection
