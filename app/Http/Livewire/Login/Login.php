<?php

namespace App\Http\Livewire\Login;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;
    public function render()
    {
        return view('livewire.login.login');
    }
    public function login(){
         $datos = $this->validate();
        if(Auth::attempt($datos))
        {
            redirect(route('indexBicicletas'));
        }else
        {
            $this->emit('error_datos','Favor de Verificar Correo o Contraseña');
        }
    }
    public function proximamente(){
        $this->emit('proximamente', '' );
    }

    public function rules(){
        return [
            'email'=>'required|email',
            'password'=>'required|string|min:6'
        ];
    }
}
