@extends('layouts.app')

@section('titulo', 'Nuestros Docentes')

@section('contenido')
<div class="card-header">
        <span class="display-4 card-title">Lista de Docentes</span>
    </div>
    <a href="/docentes/create" class="m-3 btn btn-dark">Crear Docente Nuevo</a>
    <div class="row">
        @foreach ($datosdocente as $item)
                <div class="m-3 col-sm">
                    <div class="card" style="width: 18rem; height:360px">
                        <img style="height: 150px " class="card-img-top" src="{{Storage::url($item->imagen)}}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">{{$item->nombres}} {{$item->apellidos}}</h4>
                            <p class="card-text">Titulo Universitario: {{$item->titulo}}</p>
                            <a href="/docente/{{$item->id}}" class="btn btn-dark">Ver Detalle</a>
                        </div>
                    </div>
                </div>{{--cierre de col--}}
        @endforeach
    </div>
@endsection
