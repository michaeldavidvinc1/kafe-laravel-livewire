<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{

    public $email = "admin@gmail.com";
    public $password = "12345";

    public function login()
    {
        $valid = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt($valid)){
            $this->redirect(route('home'), true);
        }
    }
    public function render()
    {
        return view('livewire.auth.login');
    }
}
