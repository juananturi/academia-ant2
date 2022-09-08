@extends('layouts.app')

@section('titulo', 'Añadir Estudiante')

@section('contenido')
    <form action="/estudiante/" method="POST" enctype="multipart/form-data">
        @csrf

         @if ($errors->any())
            @foreach ($errors->all() as $alerta)
                <div class="alert alert-danger" role="alert">
                    <ul>
                        <li>{{$alerta}}</li>
                    </ul>
                </div>
            @endforeach
        @endif
        <br>
        <div class="card-header">
            <span class="display-4 card-title">Crear Estudiante</span>
        </div>
        <br>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="nombres">Nombres</label>
                    <input id="nombres" class="form-control" type="text" name="nombres">
                </div>
                <div class="form-group">
                    <label for="primerApellido">Primer apellido</label>
                    <input id="primerApellido" class="form-control" type="text" name="primerApellido">
                </div>
                <div class="form-group">
                    <label for="segundoApellido">Segundo apellido</label>
                    <input id="segundoApellido" class="form-control" type="text" name="segundoApellido">
                </div>
                <div class="form-group">
                    <label for="tipoDoc">Tipo de documento</label>
                    <select name="tipoDoc" id="tipoDoc" class="form-control">
                        <option value="CC">Cedula</option>
                        <option value="TI">Tarjeta de identidad</option>
                        <option value="PAS">Pasaporte</option>
                        <option value="REG">Registro civil</option>
                        <option value="CE">Cedula de extrangeria</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="numDoc">Numero de documento</label>
                    <input id="numDoc" class="form-control" type="text" name="numDoc">
                </div>
                <div class="form-group">
                    <label for="docIdent">Documento de identidad</label>
                    <br>
                    <input id="docIdent" type="file" name="docIdent" accept="aplication/pdf">
                </div>
                <div class="form-group">
                    <label for="idPaisExp">Pais de expedicion</label>
                    <select class="form-control" name="idPaisExp" id="idPaisExp">
                        @foreach ($paises as $paisExp)
                            <option value="">{{$paisExp->nombrePais}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="idDepExp">Departamento de expedicion</label>
                    <select class="form-control" name="idDepExp" id="idDepExp">
                        @foreach ($departamentos as $depExp)
                            <option value="">{{$depExp->nombreDepa}} </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="idMuniExp">Municipio de expedicion</label>
                    <select class="form-control" name="idMuniExp" id="idMuniExp">
                        @foreach ($municipios as $munExp)
                            <option value="{{$munExp->id}}">{{$munExp->nombreMunici}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="fechaExp">Fecha de expedición </label>
                    <input id="fechaExp" class="form-control" type="date" name="fechaExp">
                </div>
                <div class="form-group">
                    <label for="genero">Genero</label>
                    <select name="genero" id="genero" class="form-control">
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>
                        <option value="O">Otro</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="idPaisNacim">Pais de nacimiento</label>
                    <select class="form-control" id="idPaisNacim" name="idPaisNacim">
                        @foreach ($paises as $paisNacim)
                            <option value="">{{$paisNacim->nombrePais}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="idDepNacim">Departamento de nacimiento</label>
                    <select class="form-control" id="idDepNacim" name="idDepNacim">
                        @foreach ($departamentos as $depNacim)
                            <option value="">{{$depNacim->nombreDepa}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="idMuni">Municipio de nacimiento</label>
                    <select class="form-control" name="idMuni" id="idMuni">
                        @foreach ($municipios as $munNacim)
                            <option value="{{$munNacim->id}}">{{$munNacim->nombreMunici}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="idCurso">Curso</label>
                    <select class="form-control" name="idCurso" id="idCurso">
                        @foreach ($datos as $curso)
                            <option value="{{$curso->id}}">{{$curso->nombre}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="estrato">Estrato Social</label>
                    <input id="estrato" class="form-control" type="number" name="estrato">
                </div>
            </div>
        </div>
        <br>
            <button class="btn btn-dark text-center" type="submit">Agregar Estudiante</button>
        </div>
    </form>
@endsection
