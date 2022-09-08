@extends('layouts.app')

@section('titulo', 'Editar Curso')

@section('contenido')

    <div class="card-body">
        <form action="/curso/{{$datos->id}}" method="POST" enctype="multipart/form-data">
    </div>
    @method('PUT')
    @csrf
    <br>
    <div class="card-header">
        <span class="display-4 card-title">Actualizar Curso</span>
    </div>
        <div class="form-group">
            <label for="nombre">Editar Nombre</label>
            <input id="nombre" class="form-control" type="text" name="nombre" value="{{$cursito->nombre}}">
        </div>
        <div class="form-group">
            <label for="descripcion">Editar Descripción</label>
            <input id="descripcion" class="form-control" type="text" name="descripcion" value="{{$cursito->descripcion}}">
        </div>
        <div class="form-group">
            <label for="duracion">Editar Duración</label>
            <input id="duracion" class="form-control" type="text" name="duracion" value="{{$cursito->duracion}}">
        </div>
        <div class="form-group">
            <label for="imagen">Nueva Imagen</label>
            <br>
            <img width="200" src="{{Storage::url($datos->imagen)}}" alt="">
            <br>
            <br>
            <input id="imagen" type="file" name="imagen">
        </div>
        <button class="btn btn-dark" type="submit">Actualizar</button>
    </div>
    </div>

</form>
@endsection