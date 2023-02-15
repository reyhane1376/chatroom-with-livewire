<?php

namespace App\Http\Livewire\Room;

use App\Models\Room;
use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public $user;
    public function render()
    {
        $this->user = auth()->user()->id;
        $rooms = User::find(auth()->user()->id)->rooms()->latest()->get();

        return view('livewire.room.index', compact('rooms'));
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
            "echo-private:room.chat.notif.{$this->user},Room\\MessageAddedNotif" => "notification"
        ];
    }
    public function notification($payload)
    {
        $roomName = Room::find($payload['roomId'])->name;
        $data = [
            'roomName' => $roomName,
            'userName' => $payload['userName'],
            'message' => $payload['message']
        ];
        $this->emit('notification',$data);
    }

}
