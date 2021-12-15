<?php

namespace App\Http\Livewire\Bicicletas;

use App\Models\Bicicleta;
use Livewire\Component;

class ShowBicicletas extends Component
{
    public Bicicleta $bicicleta;
    public function render()
    {
        return view('livewire.bicicletas.show-bicicletas');
    }
}
