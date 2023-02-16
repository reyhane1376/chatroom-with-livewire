<?php

namespace App\Http\Livewire\Chat;

use App\Models\Room as ModelsRoom;
use App\Models\User;
use Livewire\Component;

class Room extends Component
{
    public $user;
    public function render()
    {
        $this->user = auth()->user()->id;
        $rooms = User::find(auth()->user()->id)->rooms()->latest()->get();
        return view('livewire.chat.room',compact('rooms'))->layout('layouts.master-for-livewire');
    }
    public function delete($roomId)
    {
        $room = ModelsRoom::find($roomId);
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
        $roomName = ModelsRoom::find($payload['roomId'])->name;
        $data = [
            'roomName' => $roomName,
            'userName' => $payload['userName'],
            'message' => $payload['message']
        ];
        $this->emit('notification',$data);
    }
}
