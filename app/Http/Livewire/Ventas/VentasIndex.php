<?php

namespace App\Http\Livewire\Ventas;

use App\Models\Venta;
use Livewire\Component;
use Livewire\WithPagination;

use function GuzzleHttp\Promise\all;

class VentasIndex extends Component
{
    use WithPagination;
    public $search;
    public $cargando = false;

     public function render()
    {
        $ventas = ($this->cargando=true) ? Venta::join('usuarios','ventas.id_usuario','=','usuarios.id')
        ->join('bicicletas','ventas.id_bicicleta', '=','bicicletas.id')
        ->select(
            'ventas.*',
            'usuarios.id as usuarios.id',
            'usuarios.nombre_usuario',
            'usuarios.email',
            'bicicletas.marca',
            'bicicletas.modelo'
        )->paginate(10) : [];
        return view('livewire.ventas.ventas-index', compact('ventas'));
    }
    public function updatingSearch(){
        $this->resetPage();
    }
    public function cargando(){
        $this->cargando=true;
    }
}
