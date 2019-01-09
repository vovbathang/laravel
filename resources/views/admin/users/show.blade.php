@extends("admin.master")
@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <a href="{{route("admin.user.index")}}" class="btn btn-primary">List of Users</a>
                </div>
                <br/>
                <div class="panel panel-default">
                    <div class="panel-heading">Update User</div>
                    <div class="panel-body">
                        <form action="{{ route('admin.user.update', ["id" => $user->id]) }}" method="POST">
                            {{ csrf_field() }}
                            {{method_field("put")}}
                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                <label for="name">Họ tên</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Họ tên"
                                       value="{{ $user->name }}">
                                <span class="help-block">{{ $errors->first('name') }}</span>
                            </div>
                            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                <label for="email">Địa chỉ Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                       placeholder="Địa chỉ Email"
                                       value="{{ $user->email }}">
                                <span class="help-block">{{ $errors->first('email') }}</span>
                            </div>
                            <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                                <label for="password">Mật khẩu</label>
                                <input type="password" class="form-control" id="password" name="password"
                                       placeholder="Mật khẩu">
                                <span class="help-block">{{ $errors->first('password') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Xác nhận mật khẩu</label>
                                <input type="password" class="form-control" id="password_confirmation"
                                       name="password_confirmation" placeholder="Xác nhận mật khẩu">
                            </div>
                            <button type="submit" class="btn btn-success">Cập nhật người dùng</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection