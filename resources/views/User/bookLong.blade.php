@extends('masterUser')
@section('title')
    Đăng Ký Dài Hạn
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
    <form class="form-horizontal" autocomplete="off" action="{{ route('postBookLong') }}" enctype="multipart/form-data" method="post">
        {{ csrf_field() }}
    <section class="banner-bottom py-5">
        <div class="container py-md-4">
            <h3 class="tittle-w3layouts two text-center mb-lg-5">Đăng Ký Dài Hạn   </h3>
            <div class="comment-top mt-5 row">

                <div class="col-lg-7 comment-bottom w3pvt_mail_grid_right">
                    <h3>Thông tin người dùng </h3>
                    <br>
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <label>Họ và tên</label>
                                <input class="form-control" type="text" name="fullname" readonly placeholder="" value="{{$user->fullname}}" required="">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Số điện thoại</label>
                                <input class="form-control" type="text" name="phone" value="{{$user->phone}}" readonly placeholder="" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <label>Biển số xe</label>
                                <input class="form-control" type="text" name="car" value="{{$user->car}}" readonly placeholder="" required="">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Tiền hiện có  </label>
                                <div class="input-group-prepend">

                                    <input class="form-control" type="text" id="cost" name="cost" value="{{$user->cost}}" readonly placeholder="" >
                                    <div class="input-group-text">VND</div>
                                </div>
                            </div>


                        </div>




                    <h3>Thông tin bãi xe  </h3>
                    <br>

                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <label>Tên bãi đổ</label>
                                <input class="form-control" type="text" readonly value="{{$park->parkName}}" name="parkName" placeholder="" required="">
                                <input class="form-control" type="text" readonly value="{{$park->idPark}}" hidden name="idPark" placeholder="" required="">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Thành phố</label>
                                <input class="form-control" type="text" name="city" readonly value="{{$park->city}}" placeholder="" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <label>Địa chỉ </label>
                                <input class="form-control" type="text" name="address" readonly value="{{$park->address}}" placeholder="" required="">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label>Tiền  </label>
                                <div class="input-group-prepend">
                                    <input class="form-control" type="text" id="price" readonly value="{{$park->price}}" name="price" placeholder="" required="">
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
                                <label>Tháng Đăng Ký</label>
                                <select class="form-control" onchange="tongtien();" id="checkin" name="checkin">
                                    @for ($i =$month; $i <= 12; $i++)
                                        <option  value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <label>Biển số xe</label>


                                <div class="col-sm-10">
                                    <label>Mặc Định <br> <input type="radio" name="radio1"  value="1" checked /></label>
                                    <input class="form-control" type="" readonly name="car1" value="{{$user->car}}" placeholder="" >
                                    <br>
                                <input type="radio" name="radio1"  value="2"  /> <label>Mới</label>
                                <input class="form-control" type="" name="car2" placeholder="" >
                                </div>
                            </div>
                        </div>
                        <div >
                            <label id="pricetong" for="txt206451" class="swatch_text" >Tổng Tiền: {{$price}} VNĐ </label>
                            <input value="{{$price}}" hidden name="price1"  id="price1">
                        </div>
                        <button type="submit" class="btn submit mt-3">Đặt </button>
                    </form>
                </div>
            </div>

        </div>
    </section>
    <script >
        function tongtien() {
            var x=document.getElementById("price").value;
            const y = Number(x);
            const month = new  Date();
            const date2=Number(month.getDate());
            const month2=Number(month.getMonth()+1);
            const year2=Number(month.getFullYear());
            var e = document.getElementById("checkin");
            var month1 = e.options[e.selectedIndex].value;
            var date=0;
            if ((year2 % 4) == 0 && ((year2 % 100) != 0 || (year2 % 400) == 0) )
            {
                if (month1==2)
                {
                    date=29;
                }
                else if(month1==1||month1==3||month1==5||month1==7||month1==8||month1==10||month1==12)
                    date=31;
                else date=30;
            }
            else {
                if (month1==2)
                {
                    date=28;
                }
                else if(month1==1||month1==3||month1==5||month1==7||month1==8||month1==10||month1==12)
                    date=31;
                else date=30;

            }
            if (month1==month2)
            {
                const number1=date-date2+1;
                var tien=number1*y*24;
                document.getElementById(
                    "price").innerHTML = "Tổng Tiền: "+tien+" VNĐ";
            }
            else {
                var tien=date*y*24;
                document.getElementById(
                    "pricetong").innerHTML = "Tổng Tiền: "+tien+" VNĐ";
                $("#price1").val(tien);
            }
        }

    </script>
@endsection