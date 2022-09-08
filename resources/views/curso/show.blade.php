@extends('layouts.app')

@section('titulo', 'Detalle Curso')

@section('contenido')
    <div class="text-">
        <div class="m-auto">
            <img width="300" src="{{Storage::url($cursito->imagen)}}" alt="">
            <p class="card-text"><b>Descripción: </b>{{$datos->descripcion}}</p>
            <p class="card-text"><b>Duración: </b>{{$datos->duracion}} horas</p>
            <div>
                <label for="materia"><b>Materias del curso</b></label>
                <select class="form-control text-center" name="materias" id="materias" style="width: 30%">
                    @foreach ($materias as $materia)
                        <option value="">{{$materia->nombreMateria}}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <a href="/curso/{{$datos->id}}/edit" class="btn btn-dark">Editar</a>
        </div>
        <br>
     
        <form class="form-group" action="/curso/{{$datos->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-dark">Eliminar</button>
        </form>
    </div>

@endsection