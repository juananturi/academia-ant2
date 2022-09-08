@extends('layouts.app')

@section('titulo', 'Eliminado')

@section('contenido')
    <div class="text-center">
        <div class="alert alert-danger" role="alert">
            El estudiante ha sido eliminado...
        </div>
        <a href="/estudiante" class="m-5 btn btn-dark">Volver</a>
    </div>
@endsection