@extends('adminlte::page')

@section('title', 'Panel de control')

@section('content_header')
    <h1>Crear nueva odontólogo</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.odontologo.store']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', null, [
                    'class' => 'form-control',
                    'placeholder' => 'Ingrese el nombre del odontologo',
                ]) !!}
            </div>
            <div class="form-group">
                {!! Form::label('especialidad', 'Especialidad') !!}
                {!! Form::text('especialidad', null, [
                    'class' => 'form-control',
                    'placeholder' => 'Ingrese la especialidad del odontologo',
                ]) !!}
            </div>
            <div class="form-group">
                {!! Form::label('dni', 'DNI') !!}
                {!! Form::text('dni', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el DNI del odontologo']) !!}
            </div>

            {!! Form::submit('Crear odontólogo', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop
