<div class="row send-chat-box">
    <div class="col-sm-12">
        <form action="" wire:submit.prevent="newMessage">
            <textarea wire:model="message" class="form-control" placeholder="Type your message"></textarea>
            @error('message')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
            <div class="custom-send"><a href="javacript:void(0)" class="cst-icon" data-toggle="tooltip"
                    title="Insert Emojis"><i class="ti-face-smile"></i></a> <a href="javacript:void(0)"
                    class="cst-icon" data-toggle="tooltip" title="File Attachment"><i
                        class="fa fa-paperclip"></i></a>
                <button type="submit" class="btn btn-danger btn-rounded" type="button">Send</button>
            </div>
        </form>
  
    </div>
</div>