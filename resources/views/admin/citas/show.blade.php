@extends('adminlte::page')

@section('title', 'Panel de control')

@section('content_header')
    <h1>Detalles de la Cita</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <h5>ID: {{ $cita->id }}</h5>
            <p>Fecha: {{ $cita->fecha }}</p>
            <p>Hora: {{ $cita->hora }}</p>
            <p>Descripción: {{ $cita->descripcion }}</p>
            
        </div>
    </div>
@stop
