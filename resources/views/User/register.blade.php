@extends('masterUser')
@section('title')
    Đăng Ký Tài Khoản
@endsection
@section('contain')
    <div class="container" style="margin-left: 400px">
            <h3 class="tittle-w3layouts two mb-lg-5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Đăng Ký </h3>
            <!-- Nav tabs -->
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <script type="text/javascript">alert("{{ $error }}");</script>
                    @break
                @endforeach
            @endif
            @if (Session()->has('message'))
                <script type="text/javascript">alert("{{ session()->get('message') }}");</script>
            @endif
            <div class="signup-form"  style="width: 500px">
                <form action="{{route('postRegister')}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" class="form-control" name="fullname" placeholder="Họ Và Tên" required="required">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="phone" placeholder="Số Điện Thoại" required="required">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="car" placeholder="Biển Số Xe" required="required">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="user" placeholder="Tài Khoản" required="required">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Mật Khẩu" required="required">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="repassword" placeholder="Nhập Lại Mật Khẩu" required="required">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-lg btn-block">Đăng Ký</button>
                    </div>
                </form>
                <span id='message'></span>
            </div>
        </div>
    </div>
@endsection