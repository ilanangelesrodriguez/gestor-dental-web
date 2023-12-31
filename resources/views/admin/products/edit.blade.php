@extends('adminlte::page')

@section('title', 'Panel de control')

@section('content_header')

@stop

@section('content')
    <div class="container">
        {{-- mostrando la alerta de sesion --}}
        @if (session('info'))
            <div class="alert alert-success">
                <strong>{{ session('info') }}</strong>
            </div>
        @endif
        <h1>Editar datos del producto</h1>
        <div class="card">
            <div class="card-body">
                {!! Form::model($product, ['route' => ['admin.products.update', $product], 'files' => true, 'method' => 'put']) !!}
                <div class="d-flex">
                    <div class="col mb-3">
                        {!! Form::label('name', 'Nombre:') !!}
                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del producto']) !!}

                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col mb-3">
                        {!! Form::label('slug', 'Slug:') !!}
                        {!! Form::text('slug', null, [
                            'class' => 'form-control',
                            'placeholder' => 'Inrgese el slug del producto',
                            'readonly',
                        ]) !!}

                        @error('slug')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    {!! Form::label('description', 'Descripción:') !!}
                    {!! Form::textarea('description', null, [
                        'class' => 'form-control',
                        'placeholder' => 'Ingrese el nombre del producto',
                    ]) !!}

                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="d-flex">
                    <div class="col-2">
                        {!! Form::label('imagenActual', 'Imagen actual:') !!}
                        <br>
                        <img src="{{ asset('imagen/product/'.$product->image) }}" name="image" id="imagenActual" class="img-fluid rounded-top">
                    </div>
                    <div class="col mb-3">
                        {!! Form::label('new_image', 'Seleccionar nueva imagen:') !!}
                        {!! Form::file('new_image', [
                            'class' => 'form-control',
                        ]) !!}

                        @error('new_image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="d-flex">
                    <div class="col mb-3">
                        {!! Form::label('category_id', 'Categoria:') !!}
                        {!! Form::select('category_id', $categories, $product->category_id, [
                            'class' => 'form-control',
                        ]) !!}

                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col mb-3">
                        {!! Form::label('proveedor_id', 'Proveedor:') !!}
                        {!! Form::select('proveedor_id', $proveedores, $product->proveedor_id, [
                            'class' => 'form-control',
                        ]) !!}

                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <br>
                {!! Form::submit('Actualizar producto', ['class' => 'btn btn-success']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop

@section('js')
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min') }}"></script>

    {{-- CK EDITOR --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>

    <script>
        $(document).ready(function() {
            $("#name").on('input', function() {
                var slug = $(this).val()
                    .toLowerCase()
                    .replace(/\s+/g, '-')
                    .replace(/[^a-z0-9\-]+/g, '');
                $("#slug").val(slug);
            });

            ClassicEditor
                .create(document.querySelector('#description'))
                .catch(error => {
                    console.error(error);
                });
        });
    </script>

<script>
    $(document).ready(function (e) {
        $('#new_image').change(function (e) { 
            let reader=new FileReader();
            reader.onload=(e)=>{
                $('#imagenActual').attr('src',e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });
    });
</script>
@stop
