<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;
use App\Models\Tarea;
use Livewire\Component;

class TareaIndex extends Component
{
    use WithPagination;

    public $busqueda = '';
    public $paginacion = 2;

    public $paginationTheme = 'bootstrap';

    protected $queryString = [
        'busqueda' => ['except' => '', 'as' => 'busqueda'],
        'paginacion' => ['except' => 2, 'as' => 'p'],
    ];

    public function render()
    {
        $tareas = $this->consulta();
        $tareas = $tareas->paginate($this->paginacion);

        if ($tareas->currentPage() > $tareas->lastPage()) {
            $this->resetPage();
            $tareas = $this->consulta();
            $tareas->paginate($this->paginacion);
        }
        $params = [
            'tareas' => $tareas,
        ];
        return view('livewire.tarea-index', $params);
    }

    private function consulta(){
        $query = Tarea::OrderByDesc('id');
        if ($this->busqueda != '') {
            $query->where('nombre', 'like', '%' . $this->busqueda . '%');
        }
        return $query;
    }
}
