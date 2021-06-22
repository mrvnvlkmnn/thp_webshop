<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $password;
    public $email;

    public function login()
    {
        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        if(Auth::attempt($credentials)){
            return redirect(route('home'));
        }
    }

    public function render()
    {
        return view('livewire.login');
    }
}
