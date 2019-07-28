<!--
Author: w3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Provision Education Category Bootstrap Responsive web Template | Home :: W3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Provision Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- Custom Theme files -->
    <link href="{!! asset('user/css/bootstrap.css') !!}" type="text/css" rel="stylesheet" media="all">
    <link href="{!! asset('user/css/style.css" type="text/css') !!}" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="{!! asset('user/css/font-awesome.min.css') !!}" rel="stylesheet">
    <!-- //Custom Theme files -->
    <link rel="stylesheet" href="{!! asset('user/css/style01.css') !!}">
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link rel="stylesheet" href="{!! asset('user/MDB-Free_4.8.7/css/mdb.css') !!}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="{!! asset('user/MDB-Free_4.8.7/css/mdb.lite.css') !!}">

    <!-- //online-fonts -->
</head>

<body>
<!-- main -->
<div class="main-content" id="home">
    <!-- header -->
    <header>
        <div class="container-fluid">
            <!-- nav -->
            <nav class="py-md-4 py-3 d-lg-flex nav_w3pvt">
                <div id="logo">
                    <h1><a href="{{route('home')}}">Hey Park!</a></h1>
                </div>
                <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
                <input type="checkbox" id="drop" />
                <ul class="menu mt-lg-3 ml-auto">
                    <li class="active"><a href="{{route('home')}}">Home</a></li>
                    <li><a href="http://localhost/capstone2/resources/views/Users/SelectDaNang.php?id=DN">Các bãi đỗ</a></li>
                    <li><a href="{{route('selectPark')}}?id=all">Danh sách bãi</a></li>
                    <!--<li><a href="#login">Đăng ký bãi  </a></li>-->

                    {{--<li>
                        <!-- First Tier Drop Down -->
                        <label for="drop-2" class="toggle">Đăng ký bãi <span class="fa fa-angle-down" aria-hidden="true"></span>
                        </label>
                        <a href="#login">Đăng ký bãi <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                        <input type="checkbox" id="drop-2" />
                        <ul>
                            <li><a href="daiHan.html" class="drop-text">Dài hạn</a></li>
                            <li><a href="nganHan.html" class="drop-text">Ngắn hạn</a></li>


                        </ul>
                    </li>--}}
                    <li><a href="{{route('getLogin')}}">Đăng nhập</a></li>
                    <li><a href="{{route('getRegister')}}">Đăng ký</a></li>
                </ul>
            </nav>
            <!-- //nav -->
        </div>
    </header>
    <!-- //header -->

    <!-- banner -->
    <div class="banner-content-w3pvt">
        <div class="banner-w3layouts-info text-center">
            <h3>Tìm nơi bạn muốn đến</h3>
            <!--<form class="banner-form" method="post" action="#">-->
            <!--<input type="search" class="form-control" id="search" placeholder="Nhập nơi muốn đến" name="search" required="">-->
            <!--<button type="submit" class="btn btn-default btn-find">Tìm  </button>-->
            <!--</form>-->
            <form class="form-inline active-cyan-4" action="">
                <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search"
                       aria-label="Search">
                <i class="fas fa-search" aria-hidden="true"></i>
            </form>

        </div>
    </div>

    <!-- //banner -->
</div>
<!-- //main -->
<!-- /entry -->
<div class="entry-w3pvt-main py-5">
    <div class="container px-lg-5 py-md-3">
        <div class="entry-w3layouts-info">
            <h4>Về chúng tôi</h4>
            <p>Hey Park là một websites tìm kiếm bãi đỗ xe trực tuyến </p>
        </div>
    </div>
</div>
<!-- //entry -->
<!-- banner-bottom -->

<!-- //banner-bottom -->
<!-- /team-content -->

<!-- //team-content -->
<!-- banner-bottom -->

<!-- //banner-bottom -->
<!--/last-content-->
<section class="last-content text py-5">
    <div class="container py-md-3 text-center">
        <div class="last-w3pvt-inner-content px-lg-5">
            <h3 class="mb-4 tittle-w3layouts" id="login">Đăng Ký <span>Dài Hạn & </span> Ngắn  !</h3>

            <div class="buttons mt-md-4 mt-3">
                <a href="daiHan.html" class="btn btn-default">Dài Hạn </a>
                <a href="nganHan.html" class="btn btn1"> Ngắn Hạn </a>
            </div>
        </div>
    </div>
</section>
<!--//last-content-->
<section class="ab-info-main py-5">
    <div class="container py-md-4">
        <h3 class="tittle-w3layouts two text-center">Một số bãi đổ xe</h3>
        <!--Them Gia-->
        <div id="products" class="row view-group my-lg-5 my-4">
            @php $i=1 @endphp
            @foreach($park as $item)
                @if($i<=3)
                    <div class="item col-lg-4 mt-3">
                        <div class="thumbnail card">
                            <div class="thumbnail card mt-4">
                                <div class="img-event">
                                    <img class="group list-group-image img-fluid" style="width: 300px;height: 300px" src="{!! asset('img/'.$item->img) !!}" alt="" />
                                </div>
                                <div class="caption card-body" style="height: auto;width: auto">
                                    <h4 class="group card-title inner list-group-item-heading">
                                        {{$item->parkName}}</h4>
                                    <p class="group inner list-group-item-text">
                                        Bãi xe nằm ở vị trí 02 Bạch Đằng bên cạnh bờ sông Hàn .</p>
                                    <p class="group inner list-group-item-text">
                                        {{$item->price}} VNĐ</p>


                                </div>
                            </div>
                        </div>
                    </div>
                    @php $i=$i+1 @endphp
                @endif
            @endforeach

        </div>

    </div>
</section>
<!--//-->
<!--/testimonials-->

<!--//testimonials-->
<!-- footer -->
<footer class="footer-content text-center py-5">
    <div class="container py-md-3">
        <!-- logo -->
        <h2 class="logo2 text-center">
            <a href="index.html">
                Hey Park!
            </a>
        </h2>
        <!-- //logo -->
        <!-- address -->

        <!-- //address -->
        <!-- social icons -->
        <div class="footer-w3pvt-copy-social my-4">
            <ul>

                <a href="#">
                    <span class="fa fa-rss-square"></span>
                </a>
                </li>

            </ul>
        </div>
        <!-- //social icons -->
        <!-- copyright -->

        <!-- //copyright -->
        <!-- move top icon -->
        <div class="move-top text-center mt-3">
            <a href="#home" class="move-top"><span class="fa fa-angle-double-up" aria-hidden="true"></span></a>
        </div>
        <!-- //move top icon -->
    </div>
</footer>
<!-- //footer -->




</body>

</html>
