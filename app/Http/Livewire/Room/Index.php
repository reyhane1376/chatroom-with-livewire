<?php

namespace App\Http\Livewire\Room;

use App\Models\Room;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $rooms = Room::latest()->paginate(50);
        return view('livewire.room.index',compact('rooms'));
    }
    protected $listeners = [
        'room.added' => '$refresh'
    ];
}
