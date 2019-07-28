@extends('masterUser')
@section('title')
    Đăng Ký Dài Hạn
@endsection
@section('contain')
    <section class="banner-bottom py-5">
        <div class="container py-md-4">
            <h3 class="tittle-w3layouts two text-center mb-lg-5">Đăng Ký Dài Hạn   </h3>
            <div class="comment-top mt-5 row">

                <div class="col-lg-7 comment-bottom w3pvt_mail_grid_right">
                    <h3>Thông tin người dùng </h3>
                    <br>
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <label>Họ và tên</label>
                                <input class="form-control" type="text" name="Name" placeholder="" required="">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Số điện thoại</label>
                                <input class="form-control" type="text" name="number" placeholder="" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <label>Biển số xe</label>
                                <input class="form-control" type="text" name="text" placeholder="" required="">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Tiền hiện có  </label>
                                <div class="input-group-prepend">

                                    <input class="form-control" type="text" name="text" placeholder="" required="">
                                    <div class="input-group-text">VND</div>
                                </div>
                            </div>


                        </div>

                    </form>



                    <h3>Thông tin bãi xe  </h3>
                    <br>
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <label>Tên bãi đổ</label>
                                <input class="form-control" type="text" name="Name" placeholder="" required="">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Thành phố</label>
                                <input class="form-control" type="text" name="Name" placeholder="" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <label>Địa chỉ </label>
                                <input class="form-control" type="text" name="Name" placeholder="" required="">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Tiền  </label>
                                <div class="input-group-prepend">

                                    <input class="form-control" type="text" name="text" placeholder="" required="">
                                    <div class="input-group-text">VND</div>
                                </div>
                            </div>


                        </div>

                    </form>
                </div>

                <div class="col-lg-5 comment-bottom w3pvt_mail_grid-img">
                    <h3>Chi tiết đăng ký </h3>
                    <br>
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <label>Ngày Đăng Ký</label>
                                <input class="form-control" type="date" name="Date" placeholder="" required="">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Ngày Kết Thúc</label>
                                <input class="form-control" type="date" name="Date" placeholder="" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <label>Biển số xe</label>


                                <div class="col-sm-10">
                                    <label>Mặc Định <br> <input type="radio" name="imgsel"  value="" checked /> 43D1-61320</label>
                                </div>


                                <label>Mới <input type="radio" name="imgsel"  value="" checked="checked" /></label>
                                <input class="form-control" type="text" name="number" placeholder="" required="">
                            </div>


                        </div>

                        <button formaction="user.html" type="submit" class="btn submit mt-3">Đặt </button>
                    </form>
                </div>
            </div>

        </div>
    </section>
@endsection