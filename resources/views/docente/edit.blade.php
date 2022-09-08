@extends('layouts.app')

@section('titulo', 'Editar Docente')

@section('contenido')

    <form action="/docente/{{$datosdocente->id}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <br><div class="card-header">
            <span class="display-4 card-title">Editar</span>
        </div>
           
            <div class="form-group">
                <label for="nombres">Editar Nombre</label>
                <input id="nombres" class="form-control" type="text" name="nombres" value="{{$datosdocente->nombres}}">
            </div>
            <div class="form-group">
                <label for="apellidos">Editar Apellidos</label>
                <input id="apellidos" class="form-control" type="text" name="apellidos" value="{{$datosdocente->apellidos}}">
            </div>
            <div class="form-group">
                <label for="titulo">Editar titulo universitario</label>
                <input id="titulo" class="form-control" type="text" name="titulo" value="{{$datosdocente->titulo}}">
            </div>
            <div class="form-group">
                <label for="edad">Editar Edad</label>
                <input id="edad" class="form-control" type="text" name="edad" value="{{$datosdocente->edad}}">
            </div>
            <div class="form-group">
                <label for="fecha">Editar Fecha de contratación</label>
                <input id="fecha" class="form-control" type="text" name="fecha" value="{{$datosdocente->fecha}}">
            </div>
            <div class="form-group">
                <label for="imagen">Nueva Foto</label>
                <br>
                <img width="400" src="{{Storage::url($datosdocente->imagen)}}" alt="">
                <br>
                
                <input id="imagen" type="file" name="imagen">
            </div>
            <div class="form-group">
                <label for="documento">Nuevo Documento</label>
                <br>
                <iframe width="400" src="{{Storage::url($datosdocente->documento)}}" alt=""></iframe>
                <br>
                <br>
                <input id="documento" type="file" name="documento">
            </div>
            <button class="btn btn-dark" type="submit">Actualizar</button>
        </div>
    </form>

@endsection