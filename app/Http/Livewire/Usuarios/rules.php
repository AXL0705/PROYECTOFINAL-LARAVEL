<?php
namespace App\Http\Livewire\Usuarios;

class rules
{
    public static function rulesUsuario($id = null){
        $validarPassword = ($id) ? 'nullable|min:6' : 'required|min:6';
        return [
            'usuario.nombre_usuario'=> 'required',
            'usuario.email'=> 'required|email|unique:usuarios,email,'. $id,
            'password'=> $validarPassword,
            'confirmpassword'=>'same:password',
            'foto'=>'nullable|image'
            ];
    }

}
