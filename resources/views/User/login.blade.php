@extends('masterUser')
@section('title')
    Đăng Nhập
@endsection
@section('contain')
    <section class="banner-bottom py-5">
        <div class="container py-md-4">
            <h3 class="tittle-w3layouts two text-center mb-lg-5">Đăng Nhập</h3>
            @if (Session()->has('message'))
                <script type="text/javascript">alert("{{ session()->get('message') }}");</script>
            @endif
            <!-- Nav tabs -->
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Sign In</h5>
                    <form class="form-horizontal" action="{{ route('postLogin') }}" enctype="multipart/form-data" method="post">
                        {{ csrf_field() }}
                        <div class="form-label-group">
                            <input type="text" id="inputEmail" name="user" class="form-control" placeholder="Tài Khoản" required autofocus>
                            <label for="inputEmail">Tài Khoản</label>
                        </div>
                        <div class="form-label-group">
                            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                            <label for="inputPassword">Password</label>
                        </div>

                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Remember password</label>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
                        <hr class="my-4">
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection