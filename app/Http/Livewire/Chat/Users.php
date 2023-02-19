<?php

namespace App\Http\Livewire\Chat;

use App\Models\Room;
use Livewire\Component;

class Users extends Component
{
    public $users;
    public $room;
    public function mount(Room $room)
    {
        $this->room = $room;
        $this->users = collect();
    }

    public function getListeners()
    {
        return [
            "echo-presence:room.chat.{$this->room->id},here" => 'setUsersHere',
            "echo-presence:room.chat.{$this->room->id},joining" => 'setUserJoining',
            "echo-presence:room.chat.{$this->room->id},leaving" => 'setUserLeaving',
        ];
    }

    public function setUsersHere($users)
    {
        $this->users = collect($users);
    }

    public function setUserJoining($user)
    {
        $this->users->push($user);
    }

    public function setUserLeaving($user)
    {
        $this->users = $this->users->filter(function ($u) use($user){
            return $u['id'] != $user['id'];
        });
    }
    public function render()
    {
        return view('livewire.chat.users');
    }
}
