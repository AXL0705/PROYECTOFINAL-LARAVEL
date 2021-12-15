<?php

namespace App\Http\Livewire\Bicicletas;

use App\Models\Bicicleta;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditBicicletas extends Component
{
    use WithFileUploads;
    public Bicicleta $bicicleta;
    public $foto;

    public function render()
    {
        return view('livewire.bicicletas.edit-bicicletas');
    }
    public function edit(){
        $this->validate();
        if($this->foto != null){
            if($this->bicicleta->foto !=null){
                Storage::disk('public')->delete($this->bicicleta->foto);
            }
            $this->bicicleta->foto = Storage::disk('public')->put('images/bicicletas',$this->foto);
        }
        $this->bicicleta->save();
        return redirect(route('indexBicicletas'));
    }
    protected function rules(){
        return rules::rulesBicicleta();
    }
}
