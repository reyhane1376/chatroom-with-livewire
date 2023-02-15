<?php

namespace App\Http\Livewire\Room;

use App\Events\Room\MessageAdded;
use App\Events\Room\MessageAddedNotif;
use App\Models\Room;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class NewMessage extends Component
{
    public $message;
    public $room;

    public function mount(Room $room)
    {
        $this->room = $room;
    }
    public function newMessage()
    {
        $this->validate();
        $userId = auth()->user()->id;
        if ($this->room->users()->pluck('id')->contains($userId)) {
            $message = $this->room->messages()->create([
                'body' => $this->message,
                'user_id' => auth()->user()->id,
            ]);
            $this->message = '';
            $this->emit('message.added', $message->id);
            broadcast(new MessageAdded($this->room->id, $message->id))->toOthers();
            broadcast(new MessageAddedNotif($this->room->id, $userId,$message))->toOthers();
        } else {
            abort(403);
        }
    }
    protected $rules = [
        'message' => 'required|min:2'
    ];
    public function render()
    {
        return view('livewire.room.new-message');
    }
}
