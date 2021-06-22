<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class Registration extends Component
{

    public $surname;
    public $name;
    public $email;
    public $street;
    public $city;
    public $state;
    public $postal;
    public $password;
    public $password_confirm;

    protected $rules = [
        'surname' => 'required',
        'name' => 'required',
        'email' => 'unique:users,email|required|email',
        'street' => 'required',
        'city' => 'required',
        'state' => 'required',
        'postal' => 'required|max:5',
        'password' => 'required|min:6|same:password_confirm',
        'password_confirm' => 'required',
    ];

    public function validateData()
    {
        if($this->validate()){
            $this->addUser();
        }else{
            $this->addError('surnameGer', 'Gebe bitte einen Namen ein');
        }

    }

    protected function addUser(){
        $user = User::create([
            'surname' => $this->surname,
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        $user->addresses()->create([
            'street_address' => $this->street,
            'city' => $this->city,
            'state' => $this->state,
            'postal' => $this->postal,
        ]);
    }

    public function render()
    {
        return view('livewire.registration');
    }
}
