<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\Usuario;
use Livewire\Component;

class DeleteUsuario extends Component
{
    public Usuario $usuario;
    public function render()
    {
        return view('livewire.usuarios.delete-usuario');
    }
    public function delete(){
        $this->usuario->delete();
        return redirect(route('indexUsuarios'));
    }
}
