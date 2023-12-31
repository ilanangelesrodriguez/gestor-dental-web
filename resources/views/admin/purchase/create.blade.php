@extends('adminlte::page')

@section('title', 'Panel de control')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap5.min.css">
@endsection

@section('content_header')
    <h1>Registro de compra</h1>
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
            {!! Form::open(['route' => 'admin.purchase.store', 'method' => 'POST']) !!}
            <div class="mb-3">
                <label class="form-label" for="proveedor_id">Proveedor:</label>
                <select class="form-select" name="proveedor_id" id="proveedor_id">
                    @foreach ($proveedores as $proveedor)
                        <option selected value="{{ $proveedor->id }}">{{ $proveedor->name }}</option>
                    @endforeach
                </select>
                @error('proveedor_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label" for="tax">Impuesto:</label>
                <input class="form-control form-control-plaintext" type="number" name="tax" id="tax"
                    placeholder="18%" value="18">
                @error('tax')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label" for="total">Total:</label>
                <input class="form-control form-control-lg" type="number" name="total" id="total" placeholder="00.00"
                    readonly>
            </div>
        </div>
        <div class="card-footer">
            <h2>Detalles de compra</h2>

            <div id="detalles-container">
                <div class="detalle">
                    <label for="producto-0">Producto:</label>
                    <select id="producto-0" name="purchaseDetails[0][product_id]">
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                        @endforeach
                    </select>

                    <label for="cantidad-0">Cantidad:</label>
                    <input type="number" id="cantidad-0" name="purchaseDetails[0][quantity]" required>

                    <label for="precio-0">Precio:</label>
                    <input type="number" id="precio-0" name="purchaseDetails[0][price]" step="0.01" required>
                </div>
            </div>

            <br>
            <div class="row">
                <div class="col">
                    <button type="button" onclick="agregarDetalle()" class="btn btn-success float-right">Agregar nuevo
                        producto</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                    {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
                </div>
                <div class="col-md-1">
                    <a class="btn btn-outline-secondary" href="{{ route('admin.purchase.index') }}"
                        role="button">Cancelar</a>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
        <div class="form-group">

            {{-- <div class="table-responsive col-md-12">
                <table id="detalleCompra" class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Eliminar</th>
                            <th scope="col">Producto</th>
                            <th scope="col">Precio(PEN)</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Subtotal(PEN)</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr class="">
                            <th colspan="4">
                                <p align="right">TOTAL:</p>
                            </th>
                            <th>
                                <p align="right"><span id="total">PEN 0.00</span></p>
                            </th>
                        </tr>
                        <tr id="dvOcultar">
                            <th colspan="4">
                                <p align="right">TOTAL IMPUESTO (18%):</p>
                            </th>
                            <th>
                                <p align="right"><span id="total_impuesto">PEN 0.00</span></p>
                            </th>
                        </tr>
                        <tr>
                            <th colspan="4">
                                <p align="right">TOTAL A PAGAR:</p>
                            </th>
                            <th>
                                <p align="right"><span align="right" id="total_pagar_html">PEN 0.00</span><input
                                        type="hidden" name="total" id="total_pagar"></p>
                            </th>
                        </tr>
                    </tfoot>
                    <tbody>
                    </tbody>
                </table>
            </div> --}}
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
            $('#detalleCompra').DataTable({
                responsive: true,
                autoWidth: false,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json',
                },
            });
        });
    </script>

    <script>
        let detalleIndex = 1;

        function agregarDetalle() {
            const detallesContainer = document.getElementById('detalles-container');

            const nuevoDetalle = document.createElement('div');
            nuevoDetalle.classList.add('detalle');

            nuevoDetalle.innerHTML = `
        <label for="producto-${detalleIndex}">Producto:</label>
        <select id="producto-${detalleIndex}" name="purchaseDetails[${detalleIndex}][product_id]">
            @foreach ($products as $product)
                <option value="{{ $product->id }}">{{ $product->name }}</option>
            @endforeach
        </select>

        <label for="cantidad-${detalleIndex}">Cantidad:</label>
        <input type="number" id="cantidad-${detalleIndex}" name="purchaseDetails[${detalleIndex}][quantity]">

        <label for="precio-${detalleIndex}">Precio:</label>
        <input type="number" id="precio-${detalleIndex}" name="purchaseDetails[${detalleIndex}][price]" step="0.01">

        <button type="button" onclick="eliminarDetalle(this)">Eliminar</button>
    `;

            detallesContainer.appendChild(nuevoDetalle);

            detalleIndex++;
        }

        function eliminarDetalle(elemento) {
            const detalle = elemento.parentNode;
            detalle.remove();

            // Recalcular el total
            recalcularTotal();
        }

        function recalcularTotal() {
            const detalles = document.getElementsByClassName('detalle');

            let total = 0;

            for (let i = 0; i < detalles.length; i++) {
                const detalle = detalles[i];
                const precioElemento = detalle.querySelector(`#precio-${i}`);

                if (precioElemento) {
                    const precio = parseFloat(precioElemento.value);
                    total += precio;
                }
            }

            // Actualizar el valor del campo de total en el formulario
            const totalElemento = document.getElementById('total');
            if (totalElemento) {
                totalElemento.value = total.toFixed(2);
            }
        }
    </script>

    <script>
        function calcularTotal() {
            const detalles = document.querySelectorAll('.detalle');
            let subtotal = 0;

            detalles.forEach((detalle) => {
                const cantidad = detalle.querySelector('input[name^="purchaseDetails"][name$="[quantity]"]').value;
                const precio = detalle.querySelector('input[name^="purchaseDetails"][name$="[price]"]').value;

                subtotal += cantidad * precio;
            });

            const impuesto = parseFloat(document.getElementById('tax').value);
            const total = subtotal + (subtotal * impuesto / 100);

            document.getElementById('total').value = total.toFixed(2);
        }

        // Escucha los cambios en los detalles de compra y recalcula el total
        document.addEventListener('change', calcularTotal);
    </script>

@endsection
