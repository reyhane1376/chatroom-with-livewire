<div class="chat-left-aside">
    <div class="open-panel"><i class="ti-angle-left"></i></div>
    <div class="chat-left-inner">
        <div class="form-material">
            <input class="form-control p-20" type="text" placeholder="Search Contact">
        </div>
        <ul class="chatonline style-none ">
            @foreach($users as $user)
            <li>
                <a href="javascript:void(0)"><img src="../plugins/images/users/varun.jpg" alt="user-img"
                        class="img-circle"> <span>{{ $user['name'] }} <small class="text-success">online</small></span></a>
            </li>
            @endforeach
            <li class="p-20"></li>
        </ul>
    </div>
</div>