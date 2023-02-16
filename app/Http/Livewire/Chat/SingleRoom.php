<?php

namespace App\Http\Livewire\Chat;

use Livewire\Component;

class SingleRoom extends Component
{
    public function render()
    {
        return view('livewire.chat.single-room')->layout('layouts.master-for-livewire');
    }
}
