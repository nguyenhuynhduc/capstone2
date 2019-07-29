@extends('masterUser')
@section('title')
    Đăng Ký Ngắn Hạn
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
            <h3 class="tittle-w3layouts two text-center mb-lg-5">Đăng Ký Ngắn Hạn   </h3>
            <div class="comment-top mt-5 row">

                <div class="col-lg-7 comment-bottom w3pvt_mail_grid_right">
                    <form class="form-horizontal" autocomplete="off" action="{{ route('postBookShort') }}" enctype="multipart/form-data" method="post">
                        {{ csrf_field() }}
                    <h3>Thông tin bãi xe  </h3>
                    <br>
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <label>Tên bãi đổ</label>
                                <input class="form-control" type="text" readonly value="{{$park->parkName}}" name="Name" placeholder="" required="">
                                <input class="form-control" type="text" readonly value="{{$park->idPark}}" hidden name="idPark" placeholder="" required="">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Thành phố</label>
                                <input class="form-control" type="text" readonly value="{{$park->city}}" name="Name" placeholder="" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <label>Địa chỉ </label>
                                <input class="form-control" type="text" readonly value="{{$park->address}}" name="Name" placeholder="" required="">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Tiền  </label>
                                <div class="input-group-prepend">
                                    <input class="form-control" type="text" id="price" name="price" readonly value="{{$park->price}}" placeholder="" required="">
                                    <div class="input-group-text">VND</div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-lg-5 comment-bottom w3pvt_mail_grid-img">
                    <h3>Chi tiết đăng ký </h3>
                    <br>
                        <div class="row">

                            <div class="col-lg-6 form-group">
                                <label>Số điện thoại</label>
                                <input class="form-control" type="number" name="phone" placeholder="" required="">
                            </div>

                            <div class="col-lg-6 form-group">
                                <label>Biển số xe</label>

                                <input class="form-control" type="text" name="car" placeholder="" required="">
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <label>Ngày Đăng Ký</label>
                                <input class="form-control" type="date" id="date" name="date" placeholder="" required="">
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-lg-6 form-group">
                                <label>Giờ vào </label>
                                <select class="form-control" onchange="TongTien();"  id="checkin" name="checkin">
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                </select>
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Giờ ra</label>
                                <select class="form-control"  onchange="TongTien();" id="checkout" name="checkout">
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                </select>
                            </div>
                        </div>
                        <div >
                            <label id="pricetong" for="txt206451" class="swatch_text" >Tổng Tiền: {{$price}} VNĐ </label>
                            <input value="{{$price}}" hidden name="price1"  id="price1">
                        </div>
                        <button  type="submit" class="btn submit mt-3" >Đặt </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script >
        function TongTien() {
            var e = document.getElementById("checkin");
            const timecheckin = Number(e.options[e.selectedIndex].value);

            var v = document.getElementById("checkout");
            const timecheckout = Number(v.options[v.selectedIndex].value);
            const cost=Number(document.getElementById("price").value);
            const tien=(timecheckout-timecheckin+1)*cost;
            if(timecheckout<timecheckin)
                alert('Vui Lòng Nhập Chính Xác Thời Gian');
            else {
                document.getElementById(
                    "pricetong").innerHTML = "Tổng Tiền: "+tien+" VNĐ";
                $("#price1").val(tien);
            }
        }
    </script>
    @endsection