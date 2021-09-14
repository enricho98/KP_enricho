<?php

namespace App\Http\Livewire;

use App\Models\Manusia;
use Livewire\Component;

class Home extends Component
{
    public $users;

    public function render()
    {
        $this->users=Manusia::all();
        return view('livewire.home');
    }
}
