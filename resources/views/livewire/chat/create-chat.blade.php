<div class="col-sm-12">
    <div class="white-box">
        <form action="" wire:submit.prevent="create">
            <h3 class="box-title m-b-0">ساخت چت روم</h3>
            <div class="row">
                <div class="col-md-4">
                    <label for="name-room" class="m-t-20">نام چت روم</label>
                    <input type="text" class="form-control" id="name-room" placeholder="نام چت روم"
                        wire:model.defer="name">
                    @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-10">
                            <label class="m-t-20">لیست کاربران</label>
                                <select multiple class="form-control form-control-sm w-50" id="select_users" wire:model="selectUsers">
                                @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                            @error('selectUsers')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-2">
                            <label class="m-t-30" for="public">public</label>
                            <input id="public" type="checkbox" name="test" class="js-switch" data-color="#f96262"
                                data-size="small" />
                        </div>
                    </div>


                </div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-success waves-effect waves-light m-t-40">ساخت</button>
                </div>
            </div>
        </form>
    </div>
</div>
@push('styles')
<link rel="stylesheet" href="{{ asset('admin-assets/select2/css/select2.min.css') }}">
<link href="{{ asset('admin-assets/css/switchery/dist/switchery.min.css') }}" rel="stylesheet" />
@endpush
@push('scripts')
<script src="{{ asset('admin-assets/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('admin-assets/css/switchery/dist/switchery.min.js') }}"></script>
<script>
    jQuery(document).ready(function() {
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
                   // Switchery
            var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
            $('.js-switch').each(function() {
                new Switchery($(this)[0], $(this).data());
            });
            });
   


</script>
@endpush