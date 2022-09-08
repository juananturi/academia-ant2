@extends('layouts.app')

@section('titulo', 'Sobre Nosotros')

@section('contenido')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header text-center bg-dark text-light fs-3 ">¡Somos ellos, somos aquellos, somos ANT-ACADEMY!</div>

                <div class="card-body row">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="col-4 p-3"><img src="{{asset('img1.jpg')}}" style="width: 90%" alt=""></div>
                        <div class="col-4 p-3"><img src="{{asset('img2.jpg')}}" style="width: 90%" alt=""></div>
                        <div class="col-4 p-3"><img src="{{asset('img3.jpg')}}" style="width: 90%" alt=""></div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection