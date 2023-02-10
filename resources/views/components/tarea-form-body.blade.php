@csrf
        <div class="row">
            <div class="col-sm-12">
                <label for="InputNombre" class="form-label">* Nombre de la tarea</label>
                <input type="text" class="form-control" id="InputNombre" name="nombre" placeholder="..." value="{{ old('nombre', $tarea->nombre) }}">
            </div>
            <div class="col-sm-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="finalizada" id="InputFinalizada" class="form-check-input"  value="1" @checked(old('finalizada', $tarea->finalizada))>
                    <label for="InputFinalizada" class="form-check-label">Finalizada</label>
                </div>
            </div>

            <div class="col-sm-4">
                <label for="SelectUrgencia" class="form-label">* Urgencia</label>
                <select class="form-select" id="SelectUrgencia" name="urgencia" required>

                    @for ( $x = 0; $x < count($urgencias); $x++)
                        <option value="{{ $x }}"  @selected(old('urgencia', $tarea->urgencia) == $urgencias[$x] ))>{{ $urgencias[$x] }}</option>
                    @endfor
                </select>
            </div>

            <div class="col-sm-4">
                <label for="InputFechaLimite" class="form-label">* Fecha Limite</label>
                <input type="datetime-local" class="form-control" id="InputFechaLimite" name="fecha_limite" value="{{ old('fech_limite', is_null($tarea->fecha_limite) ? ' ' : $tarea->fecha_limite->format('Y-m-d\TH:i')) }}" required>
            </div>

            <div class="col-sm-12">
                <label for="TextAreaDescripcion" class="form-label">Descripción</label>
                <textarea class="form-control" id="TextAreaDescripcion" name="descripcion">{{ old('TextAreaDescripcion', $tarea->descripcion) }}</textarea>

            </div>

            <div class="col-sm-12 text-end">
                <button type="submit" class="btn btn-primary my-2">Guardar</button>
            </div>
        </div>
