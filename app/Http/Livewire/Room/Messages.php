<?php

namespace App\Http\Livewire\Room;

use App\Models\Message;
use Livewire\Component;

class Messages extends Component
{
    public $messages;
    public function render()
    {
        return view('livewire.room.messages');
    }
    protected $listeners = [
        'message.added' => 'prepandMessage'
    ];

    public function prepandMessage($messageId)
    {
        $this->messages->prepend(Message::find($messageId));
    }

}
