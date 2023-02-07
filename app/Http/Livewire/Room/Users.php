<?php

namespace App\Http\Livewire\Room;

use Livewire\Component;

class Users extends Component
{
    public $users;

    public function mount()
    {
        $this->users = collect([]);
    }
    public function render()
    {
        return view('livewire.room.users');
    }
}
