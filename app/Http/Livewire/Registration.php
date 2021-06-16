<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Registration extends Component
{
    public $surname;
    public $name;
    public $email;
    public $street;
    public $city;
    public $state;
    public $postal;

    public function render()
    {
        return view('livewire.registration');
    }
}
