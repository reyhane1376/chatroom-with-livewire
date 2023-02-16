<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Chat Page</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i
                    class="ti-settings text-white"></i></button>
            <a href="javascript:void(0)" target="_blank"
                class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Buy
                Admin Now</a>
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li class="active">Chat Page</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        @role('superAdmin')
        <livewire:chat.create-chat>
            @endrole
            <div class="col-sm-12">
                <div class="white-box">
                    <div class="panel-heading">لیست چت روم ها</div>
                    <div class="table-responsive">
                        <table class="table table-hover manage-u-table">
                            <thead>
                                <tr>
                                    <th style="width: 70px;" class="text-center">#</th>
                                    <th>نام چت</th>
                                    <th>لیست کاربران</th>
                                    <th>مدیریت</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($rooms as $key => $room)
                                <tr>
                                    <td class="text-center">{{ $key += 1 }}</td>
                                    <td><span class="font-medium">{{ $room->name }}</span></td>
                                    <td>
                                        <select class="form-control">
                                            @foreach ($room->users()->get() as $user)
                                            <option>{{ $user->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        @role('superAdmin')
                                        <a wire:click.prevent="delete({{ $room->id }})"
                                            class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i
                                                class="icon-trash"></i></a>
                                        <button type="button"
                                            class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i
                                                class="ti-pencil-alt"></i></button>
                                                @endrole
                                        <a href="{{ $room->path() }}" type="button"
                                            class="btn btn-info btn-outline btn-circle btn-lg m-r-5"><i
                                                class="ti-comment-alt"></i></a>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </div>
</div>
<!-- /.chat-row -->
<!-- ============================================================== -->
<!-- Right sidebar -->
</div>