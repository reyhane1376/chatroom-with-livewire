<?php

namespace App\Http\Livewire\Chat;

use App\Models\Room;
use Livewire\Component;

class SingleRoom extends Component
{
    public Room $room;
    public function render()
    {
        $messages = $this->room->messages()->with('user')->oldest()->get();
        return view('livewire.chat.single-room', compact('messages'))->layout('layouts.master-for-livewire');
    }
}
