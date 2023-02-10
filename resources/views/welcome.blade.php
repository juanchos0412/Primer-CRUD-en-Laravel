@extends('tema.app')

@section('title', 'Inicio')
@section('contenido')
    <div class="col-sm-12">
        <h1>Inicio</h1>

        <img src="{{URL::asset('img/welcome.jpg')}}" alt="welcome" class="img-fluid" width="70%">
    </div>
@endsection
