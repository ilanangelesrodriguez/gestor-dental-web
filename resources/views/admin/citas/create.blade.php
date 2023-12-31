@extends('adminlte::page')

@section('title', 'Panel de control')

@section('content_header')
    <h1>Crear nueva Cita</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.citas.store']) !!}
            {{-- <div class="form-group">
                {!! Form::label('id', 'ID') !!}
                {!! Form::text('id', null, [
                    'class' => 'form-control',
                    'placeholder' => 'Ingrese el id',
                    ]) !!}
            </div> --}}
            <div class="form-group">
                {!! Form::label('fecha', 'Fecha') !!}
                {!! Form::date('fecha', null, [
                    'class' => 'form-control',
                    'placeholder' => 'Ingrese la fecha',
                    ]) !!}
            </div>
            <div class="form-group">
                {!! Form::label('hora', 'Hora') !!}
                {!! Form::time('hora', null, [
                    'class' => 'form-control',
                    'placeholder' => 'Ingrese la Hora',
                    ]) !!}
            </div>
            <div class="form-group">
                {!! Form::label('descripcion', 'Descripción') !!}
                {!! Form::textarea('descripcion', null, [
                    'class' => 'form-control',
                    'placeholder' => 'Ingrese  una Descripcion',
                    ]) !!}
            </div>

            {!! Form::submit('Crear Cita', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop
