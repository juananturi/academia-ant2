@extends('layouts.app')

@section('titulo', 'Detalle Estudiante')

@section('contenido')
    <div class="text-">
        <div class="m-auto">
                <h2>Destalles del Estudiante</h2>
                <br>
                <p class="card-text"><b>Nombres: </b>{{$datoestudiante->nombres}}</p>
                <p class="card-text"><b>Primer Apellido: </b>{{$datoestudiante->primerApellido}}</p>
                <p class="card-text"><b>Segundo Apellido: </b>{{$datoestudiante->segundoApellido}}</p>
                @foreach ($query2 as $consulta)
                    <p><b>Pais de nacimiento: </b>{{$consulta->nomPais}}</p>
                    <p><b>Departamento de nacimiento: </b>{{$consulta->nombreDepart}}</p>
                    <p><b>Municipio de nacimiento: </b>{{$consulta->nombreMuni}}</p>
                @endforeach
                <p class="card-text"><b>Tipo de documento: </b>{{$datoestudiante->tipoDoc}}</p>
                <p class="card-text"><b>Numero de documento: </b>{{$datoestudiante->numDoc}}</p><br>
                <iframe width="400" height="400" src="{{Storage::url($datoestudiante->docIdent)}}"></iframe><br><br>
                <p class="card-text"><b>Fecha de expedición del documento: </b>{{$datoestudiante->fechaExp}}</p>
                @foreach ($query1 as $consulta)
                    <p><b>Pais de expedicion: </b>{{$consulta->nomPais}}</p>
                    <p><b>Departamento de expedición: </b>{{$consulta->nombreDepart}}</p>
                    <p><b>Municipio de expedición: </b>{{$consulta->nombreMuni}}</p>
                @endforeach
                <p class="card-text"><b>Genero: </b>{{$datoestudiante->genero}}</p>
                <p class="card-text"><b>Curso: </b>{{$datoestudiante->idCurso}}</p>
                <p class="card-text"><b>Estrato social: </b>{{$datoestudiante->estrato}}</p>

        </div>
        <br>
        <a href="/estudiante/{{$datoestudiante->id}}/edit" class="btn btn-dark">Editar Estudiante</a>
        <br>
        <br>
        
        <form class="form-group" action="/estudiante/{{$datoestudiante->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-dark">Eliminar Estudiante</button>
        </form>
    </div>
</div>
@endsection
