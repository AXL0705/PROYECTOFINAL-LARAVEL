<?php

namespace App\Http\Livewire\Ventas;

use App\Models\Venta;
use Livewire\Component;

class VentasDelete extends Component
{
    public Venta $venta;
    public function render()
    {
        return view('livewire.ventas.ventas-delete');
    }
    public function borrar(){
        $this->venta->delete();
        return redirect(route('indexVentas'));
    }
}
