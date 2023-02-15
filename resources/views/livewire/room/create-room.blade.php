<form wire:submit.prevent="create" class="flex items-start space-x-2">
    Create Your Chat Room :
    <div class="flex flex-col">
        <input type="text" wire:model.defer="name" placeholder="chat room name" class="rounded-md p-2 shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        @error('name')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <section class="col-6">
        <div class="form-group">
            <label for="tags">users</label>
            <select multiple class="form-control form-control-sm w-50" id="select_users" wire:model="selectUsers">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}" >{{ $user->name }}</option>
                @endforeach
            </select>
            <button type="submit" class="inline-flex items-center p-3 bg-gray-800 rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">Create</button>

        </div>

        @error('selectUsers')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror

    </section>

</form>
@push('scripts')
    <script>
        $(document).ready(function() {
            let select_users = $('#select_users');
            select_users.select2({
                placeholder: 'لطفا یک کاربر انتخاب کنید',
                multiple: true,
                tags: true
            });
            $('#select_users').on('change', function (e) {
                var data = $('#select_users').select2("val");
            @this.set('selectUsers', data);
            });
            window.livewire.on('userStore', () => {
                $('#select_users').select2();
            });
        })
    </script>
@endpush


