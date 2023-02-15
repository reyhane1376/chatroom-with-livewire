<?php

namespace App\Http\Livewire\Room;

use App\Models\Room;
use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $rooms = User::find(auth()->user()->id)->rooms()->latest()->get();

        return view('livewire.room.index',compact('rooms'));
    }

    public function delete($roomId)
    {
        $room = Room::find($roomId);
        $room->delete();
    }
    public function getListeners()
    {
        return [
            'room.added' => '$refresh',
            'echo-private:room.added,Room\\RoomAdded' => '$refresh',
            "echo-private:room.added.notif,Room\\RoomAddedNotif" => 'test'
        ];
    }

    public function test()
    {
//        dd('hi');
    }
}
