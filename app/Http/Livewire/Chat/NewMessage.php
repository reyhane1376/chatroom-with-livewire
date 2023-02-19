<?php

namespace App\Http\Livewire\Chat;

use App\Events\Room\MessageAdded;
use App\Events\Room\MessageAddedNotif;
use App\Models\Room;
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
            $users = $this->room->users()->get();
            broadcast(new MessageAdded($this->room->id, $message->id))->toOthers();
            foreach ($users as $userSend) {
                broadcast(new MessageAddedNotif($this->room->id, $userId, $message, $userSend->id))->toOthers();
            }
        } else {
            abort(403);
        }
    }
    protected $rules = [
        'message' => 'required|min:2'
    ];
    public function render()
    {
        return view('livewire.chat.new-message');
    }
}
