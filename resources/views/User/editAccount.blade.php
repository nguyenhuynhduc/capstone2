@extends('masterUser')
@section('title')
    Đăng Nhập
@endsection
@section('contain')
    @if (Session()->has('message'))
        <script type="text/javascript">alert("{{ session()->get('message') }}");</script>
    @endif
    @if (isset($msg))
        <script type="text/javascript">alert("{{ $msg }}");</script>
    @endif
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script type="text/javascript">alert("{{ $error }}");</script>
            @break
        @endforeach
    @endif
    <section class="banner-bottom py-5">
        <div class="container py-md-4">
            <h3 class="tittle-w3layouts two text-center mb-lg-5">Thông tin & Bãi </h3>

            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#form1">Thông Tin</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#form2">Chỉnh Sửa</a>

                </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div id="home1" class="container tab-pane active"><br>

                    <div class="single-w3pvt-page mt-md-5 mt-4 px-lg-5" id="form1">

                        <h4>Thông tin</h4>

                        <form class="form-horizontal" action="{{ route('postEditAccount') }}" enctype="multipart/form-data" method="post">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <input id="id" name="id" type="text" value="{{$user->idUser}}" hidden>
                                <label class="col-lg-3 col-form-label form-control-label">Họ Và Tên</label>
                                <div class="col-lg-9">
                                    <input class="form-control" name="fullname" type="text" id="fullname" value=" {{$user->fullname}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Email</label>
                                <div class="col-lg-9">
                                    <input class="form-control"name="email" id="email" type="email" value=" {{$user->email}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Điện Thoại</label>
                                <div class="col-lg-9">
                                    <input class="form-control" name="phone" type="number" id="phone" value="{{$user->phone}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Biển Số Xe</label>
                                <div class="col-lg-9">
                                    <input class="form-control"name="car" type="text" id="car" value=" {{$user->car}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Giới Tính</label>
                                <div class="col-lg-9">
                                    <select id="gender" name="gender" class="form-control" size="0">
                                        <option value="1">Nam</option>
                                        <option value="0">Nữ</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Tài Khoản</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" readonly value=" {{$user->username}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Mật Khẩu</label>
                                <div class="col-lg-9">
                                    <input class="form-control"  id="password" name="password" type="password" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Nhập Lại Mật Khẩu</label>
                                <div class="col-lg-9">
                                    <input class="form-control" id="confirmpassword" name="confirmpassword" type="password" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                <div class="col-lg-9">
                                    <button type="submit" class="btn btn-info "> Save Changes</button>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>

        </div>

        </div>
    </section>

    @endsection
