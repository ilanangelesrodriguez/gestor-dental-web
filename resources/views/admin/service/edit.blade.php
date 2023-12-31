@extends('adminlte::page')

@section('title', 'Panel de control')

@section('content_header')
@stop

@section('content')
    <div class="container">
        <h1>Editar datos del servicio</h1>
        <div class="card">
            <div class="card-body">
                {!! Form::model($service, ['route' => ['admin.service.update', $service], 'files' => true, 'method'=>'put']) !!}
                <div class="d-flex">
                    <div class="col mb-3">
                        <label for="name" class="form-label">Nombre:</label>
                        <input type="text" name="name" id="name" value="{{ old('name', $service->name) }}"
                            class="form-control" placeholder="Escribe el nombre del servicio" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Ingrese el nombre del servicio porfavor</small>
                        @error('name')
                            <strong class="text-danger"> {{ $message }} </strong>
                        @enderror
                    </div>
                    <div class="col mb-3">
                        <label for="slug" class="form-label">Slug:</label>
                        <input type="text" name="slug" id="slug" value="{{ old('slug', $service->slug) }}"
                            class="form-control" aria-describedby="helpId" readonly>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="description" class="form-label">Descripción</label>
                    <textarea class="form-control" name="description" id="description" value="{{ old('description') }}" rows="3"
                        aria-describedby="helpId">{{ $service->description }}</textarea>
                    <small id="helpId" class="text-muted">(Opcional) Ingrese la descripción del servicio porfavor</small>
                    @error('description')
                        <strong class="text-danger"> {{ $message }} </strong>
                    @enderror
                </div>
                <div class="d-flex">
                    <div class="col-3 mb-3">
                        <label for="price" class="form-label">Precio:</label>
                        <input type="number" class="form-control" name="price" id="price"
                            value="{{ old('price', $service->price) }}" aria-describedby="helpId" placeholder="S/.00.00"
                            min="0">
                        <small id="helpId" class="form-text text-muted">Ingrese el precio del servicio porfavor</small>
                        @error('price')
                            <strong class="text-danger"> {{ $message }} </strong>
                        @enderror
                    </div>
                    <div class="col-2">
                        <label for="imagenActual"></label>
                        <img src="{{ asset('imagen/service/'.$service->image) }}" name="image" id="imagenActual" class="img-fluid rounded-top">
                    </div>
                    <div class="col mb-3">
                        <label for="new_image" class="form-label">Seleccionar nueva imagen:</label>
                        <input type="file" class="form-control" name="new_image" id="new_image" aria-describedby="fileHelpId">
                        <small id="helpId" class="form-text text-muted">Seleccione una imagen porfavor</small>
                        @error('new_image')
                            <strong class="text-danger"> {{ $message }} </strong>
                        @enderror
                    </div>
                </div>
                {!! Form::submit('Actualizar servicio', ['class' => 'btn btn-success']) !!}
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
