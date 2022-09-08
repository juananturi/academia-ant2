@extends('layouts.app')

@section('titulo', 'Eliminado')

@section('contenido')
    <div class="text-center">
        <div class="alert alert-danger" role="alert">
            El curso ha sido eliminado...
        </div>
        <a href="/cursos" class="m-5 btn btn-primary">Volver</a>
    </div>
@endsection
