<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class ListUsers extends Component
{
    // search
    public $search = '';
    public $users = [];

    public function mount()
    {
        $this->users = User::all();
    }

    public function render()
    {
        return view('livewire.list-users' );
    }
}
