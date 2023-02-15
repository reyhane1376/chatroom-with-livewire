<div>
    {{-- The whole world belongs to you --}}
    <div class="bg-white shadow rounded-lg mt-10">
        <div class="border-b border-gray-200 p-6">
            <h2 class="text-2xl font-bold">Public Chat Rooms</h2>
        </div>
        <div class="p-6">
            @role('superAdmin')
                <livewire:room.create-room>
                    @endrole
        </div>
        <div class="p-6">
            <h3 class="text-xl font-bold pb-4 border-b mb-4">List Chat Room</h3>
            @foreach($rooms as $room)
                <div class="flex justify-between">
                    <a href="{{ $room->path() }}" class="text-lg font-medium hover:underline">{{ $room->name }}</a>
                    @role('superAdmin')
                    <a href="" wire:click.prevent="delete({{ $room->id }})" class="text-[#dc2626]">delete</a>
                    @endrole
                </div>
            @endforeach
        </div>
    </div>

</div>
