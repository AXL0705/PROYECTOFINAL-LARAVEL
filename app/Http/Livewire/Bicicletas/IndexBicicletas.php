<?php

namespace App\Http\Livewire\Bicicletas;

use App\Models\Bicicleta;
use Livewire\Component;
use Livewire\WithPagination;

class IndexBicicletas extends Component
{
    use WithPagination;
    protected $paginationTheme='bootstrap';
    public $search;
    public $cargado = false;
    public function render()
    {

        $bicicletas = ($this->cargado == true ) ? Bicicleta::where('marca', 'LIKE','%' . $this->search . '%')
        ->orwhere('modelo', 'LIKE','%' . $this->search . '%')
        ->orwhere('año', 'LIKE','%' . $this->search . '%')
        ->orwhere('precio', 'LIKE','%' . $this->search . '%')
        ->paginate(10) : [];
        return view('livewire.bicicletas.index-bicicletas', compact('bicicletas'));
    }
    public function cargando(){
        $this->cargado = true;
    }

    public function updatingSearch(){
        $this->resetPage();
    }
}
