<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Chat Page</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i
                    class="ti-settings text-white"></i></button>
            <a href="javascript:void(0)" target="_blank"
                class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Buy Admin Now</a>
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li class="active">Chat Page</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- .chat-row -->
    <div class="chat-main-box">
        <!-- .chat-left-panel -->
        <livewire:chat.users :room="$room">
            <!-- .chat-left-panel -->
            <!-- .chat-right-panel -->
          
                <div class="chat-right-aside">
                    <div class="chat-main-header">
                        <div class="p-20 b-b">
                            <h3 class="box-title">Chat Message</h3>
                        </div>
                    </div>
                    <div class="chat-box">
                        <livewire:chat.messages :room="$room" :messages="$messages">

                        <livewire:chat.new-message :room="$room">
                    </div>
                </div>
                <!-- .chat-right-panel -->
    </div>
    <!-- /.chat-row -->
</div>