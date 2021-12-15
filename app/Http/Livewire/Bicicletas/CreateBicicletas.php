<?php

namespace App\Http\Livewire\Bicicletas;

use App\Models\Bicicleta;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateBicicletas extends Component
{
    public function mount(){
        $this->bicicleta = new Bicicleta();
    }
    use WithFileUploads;
    public Bicicleta $bicicleta;
    public $foto;

    public function render()
        {
            return view('livewire.bicicletas.create-bicicletas');
        }
    public function create()
    {
        $this->validate();
        if($this->foto != null){
        $this->bicicleta->foto = Storage::disk('public')->put('images/bicicletas',$this->foto);
        }
        $this->bicicleta->save();
        return redirect(route('indexBicicletas'));

    }
    protected function rules(){

        return rules::rulesBicicleta();
    }

}
