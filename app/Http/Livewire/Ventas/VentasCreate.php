<?php

namespace App\Http\Livewire\Ventas;

use App\Models\Bicicleta;
use App\Models\Usuario;
use App\Models\Venta;
use Livewire\Component;

class VentasCreate extends Component
{
    public Venta $venta;
    public function mount(){
        $this->venta =  new Venta();
    }
     public function render()
    {
        $usuarios = Usuario::all();
        $bicicletas = Bicicleta::all();
        return view('livewire.ventas.ventas-create',compact('usuarios','bicicletas'));
    }public function crear(){
        $this->validate();
        $this->venta->save();
        $this->emit('exito-venta','Ventra realizada con exito.');
        return redirect(route('indexVentas'));
    }
    public function rules(){
        return rules::rulesVentas();
    }
}
