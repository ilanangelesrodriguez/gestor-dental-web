@extends('adminlte::page')

@section('title', 'Panel de control')

@section('content_header')
    <h1>Crear nuevo proveedor</h1>
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
            {!! Form::open(['route' => 'admin.proveedores.store']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Inrgese el nombre del proveedor']) !!}

                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('contacto', 'Correo electrónico') !!}
                {!! Form::text('contacto', null, [
                    'class' => 'form-control',
                    'placeholder' => 'ej@gmail.com',
                ]) !!}

                @error('contacto')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('phone', 'Celular') !!}
                {!! Form::text('phone', null, [
                    'class' => 'form-control',
                    'placeholder' => '+51999999999',
                ]) !!}

                @error('phone')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            {!! Form::submit('Crear proveedor', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop


