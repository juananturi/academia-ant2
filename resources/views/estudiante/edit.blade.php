@extends('layouts.app')

@section('titulo', 'Editar Estudiante')

@section('contenido')
    <form action="/estudiante/{{$datoestudiante->id}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <br>
        <div class="card-header">
            <span class="display-4 card-title">Editar Estudiantes</span>
        </div>
      
        <br>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="nombres">Editar Nombre</label>
                    <input id="nombres" class="form-control" type="text" name="nombres" value="{{$datoestudiante->nombres}}">
                </div>
                <div class="form-group">
                    <label for="primerApellido">Editar Primer apellido</label>
                    <input id="primerApellido" class="form-control" type="text" name="primerApellido" value="{{$datoestudiante->primerApellido}}">
                </div>
                <div class="form-group">
                    <label for="segundoApellido">Editar Segundo apellido</label>
                    <input id="segundoApellido" class="form-control" type="text" name="segundoApellido" value="{{$datoestudiante->segundoApellido}}">
                </div>
                <div class="form-group">
                    <label for="tipoDoc">Editar Tipo de documento</label>
                    <select name="tipoDoc" id="tipoDoc" class="form-control" value="{{$datoestudiante->tipoDoc}}">
                        <option value="CC">Cedula</option>
                        <option value="TI">Tarjeta de identidad</option>
                        <option value="PAS">Pasaporte</option>
                        <option value="REG">Registro civil</option>
                        <option value="CE">Cedula de extrangeria</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="numDoc">Editar Numero de documento</label>
                    <input id="numDoc" class="form-control" type="text" name="numDoc" value="{{$datoestudiante->numDoc}}">
                </div>
                <div class="form-group">
                    <label for="docIdent">Edita Archivo</label>
                    <br>
                    <input id="docIdent" type="file" name="docIdent" accept="aplication/pdf" value="{{$datoestudiante->docIdent}}">
                </div>
                <div class="form-group">
                    <label for="idPaisExp">Editar Pais de expedicion</label>
                    <select class="form-control" name="idPaisExp" id="idPaisExp" value="{{$estudiantico->idPaisExp}}">
                        @foreach ($paises as $paisExp)
                            <option value="">{{$paisExp->nombrePais}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="idDepExp">Editar Departamento de expedicion</label>
                    <select class="form-control" name="idDepExp" id="idDepExp" value="{{$estudiantico->idDepExp}}">
                        @foreach ($departamentos as $depExp)
                            <option value="">{{$depExp->nombreDepa}} </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="idMuniExp">Editar Municipio de expedicion</label>
                    <select class="form-control" name="idMuniExp" id="idMuniExp" value="{{$estudiantico->idMuniExp}}">
                        @foreach ($municipios as $munExp)
                            <option value="{{$munExp->id}}">{{$munExp->nombreMunici}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="fechaExp">Editar Fecha de expedición del documento</label>
                    <input id="fechaExp" class="form-control" type="date" name="fechaExp" value="{{$estudiantico->fechaExp}}">
                </div>
                <div class="form-group">
                    <label for="genero">Editar Genero</label>
                    <select name="genero" id="genero" class="form-control" value="{{$datoestudiante->genero}}">
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>
                        <option value="O">Otro</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="idPaisNacim">Editar Pais de nacimiento</label>
                    <select class="form-control" id="idPaisNacim" name="idPaisNacim" value="{{$datoestudiante->idPaisNacim}}">
                        @foreach ($paises as $paisNacim)
                            <option value="">{{$paisNacim->nombrePais}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="idDepNacim">Editar Departamento de nacimiento</label>
                    <select class="form-control" id="idDepNacim" name="idDepNacim" value="{{$datoestudiante->idDepNacim}}">
                        @foreach ($departamentos as $depNacim)
                            <option value="">{{$depNacim->nombreDepa}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="idMuni">Editar Municipio de nacimiento</label>
                    <select class="form-control" name="idMuni" id="idMuni" value="{{$datoestudiante->idMuni}}">
                        @foreach ($municipios as $munNacim)
                            <option value="{{$munNacim->id}}">{{$munNacim->nombreMunici}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="idCurso">Editar Curso</label>
                    <select class="form-control" name="idCurso" id="idCurso" value="{{$datoestudiante->idCurso}}">
                        @foreach ($cursito as $curso)
                            <option value="{{$curso->id}}">{{$curso->nombre}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="estrato">Editar Estrato </label>
                    <input id="estrato" class="form-control" type="number" name="estrato" value="{{$datoestudiante->estrato}}">
                </div>
            </div>
        </div>
        <br>
            <button class="btn btn-dark text-center" type="submit">Actualizar</button>
        </div>
    </form>
@endsection
