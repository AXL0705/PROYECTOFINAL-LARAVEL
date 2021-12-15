<?php

namespace App\Http\Livewire\Bicicletas;

use App\Models\Bicicleta;
use Livewire\Component;

class DeleteBicicletas extends Component
{
    public Bicicleta $bicicleta;
    public function render()
    {
        return view('livewire.bicicletas.delete-bicicletas');
    }
    public function delete(){
        $this->bicicleta->delete();
        return redirect(route('indexBicicletas'));
    }
}
