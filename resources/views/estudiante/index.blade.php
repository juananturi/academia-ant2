@extends('layouts.app')

@section('titulo', 'Nuestros Estudiantes')

@section('contenido')
<div class="card-header">
            <span class="display-4 card-title">Estudiantes</span>
</div>
    <br>
    <a href="/estudiante/create" class="btn btn-dark">Agregar estudiante</a>
    <div class="row">
        @foreach ($datoestudiante as $item)
                <div class="m-3 col-sm">
                    <div class="card" style="width: 18rem; height:250px">
                        <div class="card-body">
                            <h4 class="card-title">{{$item->nombres}} {{$item->primerApellido}} {{$item->segundoApellido}}</h4>
                            <h5 class="card-title">Numero de documento: {{$item->numDoc}}</h5>
                            <h5 class="card-title">Genero: {{$item->genero}}</h5>
                            <a href="/estudiante/{{$item->id}}" class="btn btn-dark">Ver Detalle</a>
                        </div>
                    </div>
                </div>{{--cierre de col--}}
        @endforeach
    </div>
@endsection
