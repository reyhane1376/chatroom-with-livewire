<?php

namespace App\Http\Livewire\Chat;

use App\Events\Room\RoomAdded;
use App\Events\Room\RoomAddedNotif;
use App\Models\Room;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateChat extends Component
{
    public $name;
    public $users;
    public $public;
    

    public $selectUsers = [];
    public function render()
    {
        $this->emit('userStore');
        $users = $this->users = User::all()->except(Auth::id());
        return view('livewire.chat.create-chat',compact('users'));
    }
    public function create()
    {
        // dd($this->selectUsers);
        $this->validate();
        // check
        $room = Room::create([
           'name' => $this->name,
            'slug' => str_replace(' ', '-',$this->name),
            'user_id' => auth()->user()->id,
        ]);
        array_push($this->selectUsers,auth()->user()->id);

        $room->users()->sync($this->selectUsers);
        $this->name = '';
        $this->selectUsers = '';
        $this->emit('room.added');
        broadcast(new RoomAdded())->toOthers();
            broadcast(new RoomAddedNotif($room->id))->toOthers();

    }
    protected $rules = [
        'name' => 'required|min:2|unique:rooms,name',
        'selectUsers' => 'required',
    ];
}
