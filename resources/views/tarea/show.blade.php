@extends('tema.app')

@section('title', 'Tarea')
@section('contenido')
    <div class="col-sm-12">
        <h1>{{ $tarea->nombre }}</h1>
    </div>
    <ul class="mb-2">
        <li class="mb-2">
            <strong class="d-block mb-2">Finalizado:</strong> {{ $tarea->estaFinalizada() }}
        </li>
        <li class="mb-2">
            <strong class="d-block mb-2">Fecha límite:</strong> {{ $tarea->fecha_limite->format('H:i d/m/y') }}
        </li>
        <li class="mb-2">
            <strong class="d-block mb-2">Urgencia:</strong> {{ $tarea->urgencia() }}
        </li>
        <li class="mb-2">
            <strong class="d-block mb-2">Descripción:</strong> {{ $tarea->descripcion }}
        </li>
    </ul>

    <div class="row">
        <div class="col-sm-1">
            <a href="{{ route('tarea.edit', $tarea) }}" class="btn btn-primary">Editar</a>
        </div>
        <div class="col-sm-1">
            <form action="{{ route( 'tarea.destroy', $tarea ) }}" method="POST" class="d-inline">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
@endsection
