@extends('adminlte::page')

@section('title', 'Panel de control')

@section('content_header')
@stop

@section('content')
    <div class="container">
        <h1>Crear nuevo servicio</h1>
        <div class="card">
            <div class="card-body">
                {!! Form::open(['route' => 'admin.service.store', 'files' => true]) !!}
                <div class="d-flex">
                    <div class="col mb-3">
                        <label for="name" class="form-label">Nombre:</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control"
                            placeholder="Escribe el nombre del servicio" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Ingrese el nombre del servicio porfavor</small>
                        @error('name')
                            <strong class="text-danger"> {{ $message }} </strong>
                        @enderror
                    </div>
                    <div class="col mb-3">
                        <label for="slug" class="form-label">Slug:</label>
                        <input type="text" name="slug" id="slug" value="{{ old('slug') }}" class="form-control"
                            aria-describedby="helpId" readonly>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="description" class="form-label">Descripción</label>
                    <textarea class="form-control" name="description" id="description" value="{{ old('description') }}" rows="3"
                        aria-describedby="helpId"></textarea>
                    <small id="helpId" class="text-muted">(Opcional) Ingrese la descripción del servicio porfavor</small>
                    @error('description')
                        <strong class="text-danger"> {{ $message }} </strong>
                    @enderror
                </div>
                <div class="d-flex">
                    <div class="col-3 mb-3">
                        <label for="price" class="form-label">Precio:</label>
                        <input type="number" class="form-control" name="price" id="price" value="{{ old('price') }}"
                            aria-describedby="helpId" placeholder="S/.00.00" min="0">
                        <small id="helpId" class="form-text text-muted">Ingrese el precio del servicio porfavor</small>
                        @error('price')
                            <strong class="text-danger"> {{ $message }} </strong>
                        @enderror
                    </div>
                    <div class="col mb-3">
                        <label for="image" class="form-label">Seleccionar imagen:</label>
                        <input type="file" class="form-control" name="image" id="image" value="{{ old('image') }}"
                            aria-describedby="fileHelpId">
                        <small id="helpId" class="form-text text-muted">Seleccione una imagen porfavor</small>
                        @error('image')
                            <strong class="text-danger"> {{ $message }} </strong>
                        @enderror
                        {{-- @if (old('image'))
                        <img src="{{ asset('imagen/service' . old('image')) }}" alt="Imagen previa">
                    @endif --}}
                    </div>
                </div>
                {!! Form::submit('Crear servicio', ['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}
                </form>
            </div>
        </div>
    </div>

@stop


@section('js')
    <script>
        $(document).ready(function() {
            $("#name").on('input', function() {
                var slug = $(this).val()
                    .toLowerCase()
                    .replace(/\s+/g, '-')
                    .replace(/[^a-z0-9\-]+/g, '');
                $("#slug").val(slug);
            });
        });
    </script>
@stop
