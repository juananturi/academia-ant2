@extends('layouts.app')

@section('titulo', 'Detalle Docente')

@section('contenido')
    <div class="text-">
        <div class="m-auto">
        <div class="card-header">
        <span class="display-4 card-title">Docente</span>
    </div>
            <p class="card-text">Nombres: {{$datosdocente->nombres}}</p>
            <p class="card-text">Apellidos: {{$datosdocente->apellidos}}</p>
            <p class="card-text">Titulo Universitario: {{$datosdocente->titulo}}</p>
            <p class="card-text">Edad: {{$datosdocente->edad}}</p>
            <p class="card-text">Fecha de contratación: {{$datosdocente->fecha}}</p>
            <img width="400" src="{{Storage::url($datosdocente->imagen)}}" alt="">
            <br>
            <br>
            <p>Documento:</p>
            <iframe width="400" height="400" src="{{Storage::url($datosdocente->documento)}}"></iframe>
        </div>
        <br>
        <a href="/docentes/{{$datosdocente->id}}/edit" class="btn btn-dark">Editar Docente</a>
        <br>
        <br>
       
        <form class="form-group" action="/docente/{{$datosdocente->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-dark">Eliminar Docente</button>
        </form>


    </div>

@endsection