<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\Usuario;
use Livewire\Component;
use Livewire\WithPagination;

class IndexUsuarios extends Component
{
    use WithPagination;
    protected $paginationTheme='bootstrap';
    public $search;
    public $cargado = false;
    public function render()
    {
        $usuarios = ($this->cargado == true ) ? Usuario::where('nombre_usuario', 'LIKE','%' . $this->search . '%')
        ->orwhere('email', 'LIKE','%' . $this->search . '%')
        ->orwhere('password', 'LIKE','%' . $this->search . '%')
        ->paginate(10) : [];
        return view('livewire.usuarios.index-usuarios',compact('usuarios'));
    }
    public function cargando(){
        $this->cargado = true;
    }

    public function updatingSearch(){
        $this->resetPage();
    }

}
