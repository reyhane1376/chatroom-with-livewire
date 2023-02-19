<div>
    <ul class="chat-list slimscroll p-t-30">
        @if($messages->count())
        @foreach($messages as $message)
        <li class="@if($message->user_id !== auth()->user()->id) odd @endif">
            {{-- <div class="chat-image"> <img alt="male" src="../plugins/images/users/ritesh.jpg">
            </div> --}}
            <div class="chat-body">
                <div class="chat-text">
                    <h4>{{ $message->user->name }}</h4>
                    <p>     {{ $message->body }} </p> <b>{{ \Carbon\Carbon::parse($message->created_at)->ago() }}</b>
                </div>
            </div>
        </li>
        @endforeach
        @else
<div class="text-gray-400">
    Waiting For First Message
</div>
@endif
    </ul>
</div>
