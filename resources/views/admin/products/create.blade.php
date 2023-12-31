@extends('adminlte::page')

@section('title', 'Panel de control')

@section('content_header')
    <h1>Crear nuevo producto</h1>
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
            {!! Form::open(['route' => 'admin.products.store', 'files' => true, 'autocomplete' => 'off']) !!}
            <div class="row">
                <div class="col">
                    {!! Form::label('name', 'Nombre:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del producto']) !!}

                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col">
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
            <div class="form-group">
                {!! Form::label('description', 'Descripción:') !!}
                {!! Form::textarea('description', null, [
                    'class' => 'form-control',
                    'placeholder' => 'Ingrese el nombre del producto',
                ]) !!}

                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="row">

                <div class="col">
                    {!! Form::label('image', 'Imagen:') !!}
                    {!! Form::file('image', [
                        'class' => 'form-control',
                    ]) !!}

                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col">
                    {!! Form::label('category_id', 'Categoria:') !!}
                    {!! Form::select('category_id', $categories, $product->category_id, [
                        'class' => 'form-control',
                    ]) !!}

                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col">
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
            {!! Form::submit('Crear producto', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
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
@stop
