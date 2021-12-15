<?php

namespace App\Http\Livewire\Bicicletas;

class rules
{
    public static function rulesBicicleta(){
        return [
            'bicicleta.marca'=> 'required',
            'bicicleta.modelo'=> 'required',
            'bicicleta.año'=>'required|numeric',
            'bicicleta.precio'=>'required|numeric',
            'foto'=>'nullable|image'
            ];
    }

}
