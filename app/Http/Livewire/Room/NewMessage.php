<?php

namespace App\Http\Livewire\Room;

use App\Models\Room;
use Livewire\Component;

class NewMessage extends Component
{
    public $message;
    public Room $room;
    public function newMessage()
    {
        $this->validate();
        $message = $this->room->messages()->create([
            'body' => $this->message,
            'user_id' => auth()->user()->id,
        ]);
        $this->message = '';
        $this->emit('message.added',$message->id);
    }
    protected $rules = [
        'message' => 'required|min:2'
    ];
    public function render()
    {
        return view('livewire.room.new-message');
    }
}
