<?php

namespace App\Livewire;

use Livewire\Component;

class AddUser extends Component
{


    public $name;
    public $email;
    public $password;


    public function render()
    {
        return view('livewire.add-user');
    }
}
