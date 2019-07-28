@extends('masterUser')
@section('title')
    Đăng Ký Dài Hạn
@endsection
@section('contain')
    <section class="banner-bottom py-5">
        <div class="container py-md-4">
            <h3 class="tittle-w3layouts two text-center">Các bãi đỗ trong thành phố </h3>
            <div id="products" class="row view-group mt-md-4 mt-4">

                @foreach($park as $item)

                <div class="item col-lg-4">
                    <div class="thumbnail card mt-4">
                        <div class="img-event">
                            <img class="group list-group-image img-fluid" src="{!! asset('img/'.$item->img) !!}" alt="" />
                        </div>
                        <div class="caption card-body">
                            <h4 class="group card-title inner list-group-item-heading">
                                {{$item->parkName}}</h4>
                            <p class="group inner list-group-item-text">
                                Bãi xe nằm ở vị trí 02 Bạch Đằng bên cạnh bờ sông Hàn .</p>
                            <div class="row course-des mt-4">
                                <div class="col-6">
                                    <p class="lead">
                                        {{$item->price}} VNĐ</p>
                                </div>
                                <div class="col-6 ban-buttons">
                                    <a class="btn btn-course" href="daiHan.html">Dài Hạn </a>

                                    <a class="btn btn-course" href="nganHan.html">Ngắn Hạn </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                    @endforeach
            </div>
        </div>
    </section>
@endsection