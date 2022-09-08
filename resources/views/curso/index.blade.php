@extends('layouts.app')

@section('titulo', 'Lista Cursos')

@section('contenido')
    <div class="card-header">
        <span class="display-4 card-title">Lista de Cursos</span>
    </div>
    

    {{--Foreach sirve para iterar arrays. Es decir permite ciclos en listas--}}
    <div class="row">
        @foreach ($datos as $item)
                <div class="col-sm m-3">
                    <div class="card" style="width: 18rem;">
                        <img style="height: 150px " class="card-img-top" src="{{Storage::url($item->imagen)}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$item->nombre}}</h5>
                            {{-- <p class="card-text">Descripción: {{$item->descripcion}}</p>
                            <p class="card-text">Duración: {{$item->duracion}} horas</p> --}}
                            <a href="/curso/{{$item->id}}" class="btn btn-dark btn-sm float-right">Ver Detalle</a>
                        </div>
                    </div>
                </div>{{--cierre de col--}}
        @endforeach
    </div>{{--cierre de row--}}
@endsection
