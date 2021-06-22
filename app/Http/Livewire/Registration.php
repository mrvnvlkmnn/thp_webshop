<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class Registration extends Component
{

    public $first_name;
    public $last_name;
    public $email;
    public $street;
    public $city;
    public $state;
    public $postal;
    public $password;
    public $password_confirmation;

    protected $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'unique:users,email|required|email',
        'street' => 'required',
        'city' => 'required',
        'state' => 'required',
        'postal' => 'required|max:5',
        'password' => 'required|min:6|confirmed',
        'password_confirmation' => 'required|same:password',
    ];

    public function validateData()
    {
        if($this->validate()){
            $this->addUser();
        }
    }

    protected function addUser(){
        $user = User::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
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
