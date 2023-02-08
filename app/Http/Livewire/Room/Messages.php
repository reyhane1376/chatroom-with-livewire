<?php

namespace App\Http\Livewire\Room;

use App\Models\Message;
use App\Models\Room;
use Livewire\Component;

class Messages extends Component
{
    public $messages;
    public Room $room;
    public function render()
    {
        return view('livewire.room.messages');
    }
    public function getListeners()
    {
       return [
            'message.added' => 'prepandMessage',
           "echo-private:room.chat.{$this->room->id},Room\\MessageAdded" => "prependMessageFromBroadcast"
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

}
