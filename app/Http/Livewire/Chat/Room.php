<?php

namespace App\Http\Livewire\Chat;

use Livewire\Component;

class Room extends Component
{
    public function render()
    {
        return view('livewire.chat.room')->layout('layouts.master-for-livewire');;
    }
}
