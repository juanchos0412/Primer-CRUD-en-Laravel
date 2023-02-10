@extends('tema.app')

@section('title', 'Editar tarea')
@section('contenido')
    <div class="col-sm-12">
        <h1>Editar tarea {{ $tarea->nombre }}</h1>
    </div>

    <form action="{{ route('tarea.update', $tarea) }}" method="POST">
        @method('PUT')
        <x-tarea-form-body :tarea="$tarea"/>
    </form>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection
