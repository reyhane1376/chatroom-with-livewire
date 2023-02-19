<?php

namespace App\Http\Livewire\Chat;

use App\Models\Message;
use App\Models\Room;
use Livewire\Component;

class Messages extends Component
{
    public $messages;
    public Room $room;
    public $user;
    public function render()
    {
        $this->user = auth()->user()->id;
        return view('livewire.chat.messages');
    }
    public function getListeners()
    {
        return [
            'message.added' => 'prepandMessage',
            "echo-private:room.chat.{$this->room->id},Room\\MessageAdded" => "prependMessageFromBroadcast",
            "echo-private:room.chat.notif.{$this->user},Room\\MessageAddedNotif" => "notification"
        ];
    }

    public function prepandMessage($messageId)
    {
        $this->messages->prepend(Message::find($messageId));
    }

    public function prependMessageFromBroadcast($payload)
    {
        $this->prepandMessage($payload['messageId']);
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
