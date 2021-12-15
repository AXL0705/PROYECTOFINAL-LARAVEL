<?php

namespace App\Http\Livewire\Ventas;

class rules
{
    public static function rulesVentas()
    {
        return [
            'venta.id_usuario' =>'required',
            'venta.id_bicicleta' => 'required'
        ];
    }
}
