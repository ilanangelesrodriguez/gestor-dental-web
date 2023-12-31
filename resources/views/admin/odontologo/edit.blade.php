@extends('adminlte::page')

@section('title', 'Panel de control')

@section('content_header')
    <h1>Crear nueva odontólogo</h1>
@stop


@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => ['admin.odontologo.update', $odontologo->id]]) !!}
            @method('PUT')
            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', $odontologo->nombre, [
                    'class' => 'form-control',
                    'placeholder' => 'Ingrese el nombre del odontológo',
                ]) !!}
            </div>
            <div class="form-group">
                {!! Form::label('especialidad', 'Especialidad') !!}
                {!! Form::text('especialidad', $odontologo->especialidad, [
                    'class' => 'form-control',
                    'placeholder' => 'Ingrese la especialidad del odontologo',
                ]) !!}
            </div>
            <div class="form-group">
                {!! Form::label('activo', 'Activo') !!}
                <select class="form-control" name="activo">
                    <option value="Activo">Activo</option>
                    <option value="Inactivo">Inactivo</option>

                </select>
            </div>
            <div class="form-group">
                {!! Form::label('dni', 'DNI') !!}
                {!! Form::text('dni', $odontologo->dni, [
                    'class' => 'form-control',
                    'placeholder' => 'Ingrese el DNI del odontologo',
                ]) !!}
            </div>

            {!! Form::submit('Actualizar odontólogo', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop
