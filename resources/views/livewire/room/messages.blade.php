@if($messages->count())
<div class="divide-y space-y-2 overflow-y-scroll" style="max-height: 500px;">
    @foreach($messages as $message)
    <div class="pt-2">
        <div>
            <span class="font-bold border-r border-gray-200 pr-2 mr-1">{{ $message->user->name }}</span>
            <span class="text-gray-400">{{ \Carbon\Carbon::parse($message->created_at)->ago() }}</span>
        </div>
        <p>
            {{ $message->body }}
        </p>
    </div>
    @endforeach
</div>
@else
<div class="text-gray-400">
    Waiting For First Message
</div>
@endif
@push('scripts')
<script>
    $(document).ready(function (){
            if (document.hasFocus()) {
                Livewire.on('notification', data => {
                    if (Notification.permission !== 'granted')
                       Notification.requestPermission();
                     else {
                       var notification = new Notification(data['userName'] + ' say in ' + data['roomName'], {
                        body: 'Hey there! You\'ve been notified!',
                         });
                    notification.onclick = function() {
                     window.open('http://stackoverflow.com/a/13328397/1269037');
  };
 }
                });

            }else{

            }
        })

</script>
@endpush