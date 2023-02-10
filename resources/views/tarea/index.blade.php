@extends('tema.app')

@section('title', 'Listar tareas')
@section('contenido')
    <div class="col-sm-12">
        <h1>Listar tareas</h1>
    </div>

    @livewire('tarea-index')
@endsection
