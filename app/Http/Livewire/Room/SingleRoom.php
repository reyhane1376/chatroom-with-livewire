<?php

namespace App\Http\Livewire\Room;

use App\Models\Room;
use Livewire\Component;

class SingleRoom extends Component
{
    public Room $room;
    public function render()
    {
        return view('livewire.room.single-room');
    }
}
