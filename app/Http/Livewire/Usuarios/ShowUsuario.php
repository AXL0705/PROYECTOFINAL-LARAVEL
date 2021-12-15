<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\Usuario;
use Livewire\Component;

class ShowUsuario extends Component
{
    public Usuario $usuario;
    public function render()
    {
        return view('livewire.usuarios.show-usuario');
    }
}
