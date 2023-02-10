<div>
    <div class="row">
        <div class="col-sm-12 mb-3">
            <input type="text" placeholder="Buscar..." class="form-control" wire:model="busqueda">
        </div>
        <div class="col-sm-3 mb-3">
            <label for="paginacion-edit"  class="form-label"> Editar paginación </label>
            <input type="number" name="" id="paginacion-edit" class="form-control" wire:model="paginacion" min="1" max="100">
        </div>
    </div>

    <table class="table table-stripped table-hover">
        <thead>
            <tr>
                <th>
                    Nombre
                </th>
                <th>
                    Estado
                </th>
                <th>
                    Fecha limite
                </th>
                <th>
                    Descripción
                </th>
                <th>
                    Urgencia
                </th>
                <th>
                    Acciones
                </th>
            </tr>
        </thead>

        <tbody>
            @foreach ($tareas as $tarea)
                <tr>
                    <td>
                        {{ $tarea->nombre }}
                    </td>
                    <td>
                        {{ $tarea->estaFinalizada() }}
                    </td>
                    <td>
                        {{ $tarea->fecha_limite->format('H:i d/m/y') }}
                    </td>
                    <td>
                        {{ $tarea->descripcion }}
                    </td>
                    <td>
                        {{ $tarea->urgencia() }}
                    </td>
                    <td>
                        <a href="{{ route('tarea.edit', $tarea) }}" class="btn btn-primary">Editar</a>
                        <a href="{{ route('tarea.show', $tarea) }}" class="btn btn-primary">Ver</a>
                        <form action="{{ route('tarea.destroy', $tarea) }}" method="POST" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>

        {{ $tareas->links() }}
    </table>
</div>
