<?php

namespace App\Events\Room;

use App\Models\Room;
use App\Models\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MessageAddedNotif implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $userSelected;
    public $userName;
    public $message;
    public $roomId;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($roomId, $userId, $message, $userSelected)
    {
        $this->message = $message->body;
        $this->userName = User::find($userId)->name;
        $this->userSelected = $userSelected;
        $this->roomId = $roomId;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel("room.chat.notif.{$this->userSelected}");
    }
}
