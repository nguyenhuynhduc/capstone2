@extends('masterUser')
@section('title')
    Đăng Nhập
@endsection
@section('contain')
    @if (Session()->has('message'))
        <script type="text/javascript">alert("{{ session()->get('message') }}");</script>
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
                    <a class="nav-link active" data-toggle="tab" href="{{route('getEditAccount')}}">Chỉnh Sửa</a>
                </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div id="home1" class="container tab-pane active"><br>

                    <div class="single-w3pvt-page mt-md-5 mt-4 px-lg-5" id="form1">

                        <h4>Thông tin</h4>

                        <form action="#" method="post">
                            <div class="form-group row">

                                <label for="staticEmail" class="col-sm-2 col-form-label">Họ và tên</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$user->fullname}}">
                                </div>

                                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$user->email}}">
                                </div>

                                <label for="staticEmail" class="col-sm-2 col-form-label">Số điện thoại</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$user->phone}}">
                                </div>

                                <label for="staticEmail" class="col-sm-2 col-form-label">Giới tính </label>
                                <div class="col-sm-10">
                                    @if($user->gender==1)
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Nam">
                                        @else
                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Nữ">
                                    @endif
                                </div>

                                <label for="staticEmail" class="col-sm-2 col-form-label">Biển số xe</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$user->car}}">
                                </div>

                                <label for="staticEmail" class="col-sm-2 col-form-label">Tiền dư</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$user->cost}} VNĐ">
                                </div>
                            </div>
                        </form>
                        <h4>Danh sách bãi đỗ đã đăng ký</h4>
                        <div class="footer-w3pvt-copy-social my-4 text-center">

                            <table class="table">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">Tên bãi</th>
                                    <th scope="col">Thành phố </th>
                                    <th scope="col">Địa chỉ </th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($history as $item)
                                <tr>
                                    <th scope="row">{{$item->parkName}}</th>
                                    <td>{{$item->city}} </td>
                                    <td>{{$item->address}}</td>

                                </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="comment-bottom w3pvt_mail_grid_right p-0 my-lg-5 my-4">
                            </form>
                        </div>

                    </div>
                </div>
            </div>


        </div>



        </div>
    </section>
@endsection