
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>@yield('title')</title>
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
<div class="main-content inner" id="home">
    <!-- header -->
    <header>
        <div class="container-fluid">
            <!-- nav -->
            <nav class="py-md-4 py-3 d-lg-flex nav_w3pvt">
                <div id="logo">
                    <h1><a href="">Hey Park!</a></h1>
                </div>
                <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
                <input type="checkbox" id="drop" />
                <ul class="menu mt-lg-3 ml-auto">
                    <li class="active"><a href="{{route('home')}}">Home</a></li>
                    <li><a href="http://localhost/capstone2/resources/views/Users/SelectDaNang.php?id=DN">Các bãi đỗ</a></li>
                    <li><a href="{{route('selectPark')}}">Danh sách bãi</a></li>
                    <!--<li><a href="#login">Đăng ký bãi  </a></li>-->

                    {{--<li>
                        <!-- First Tier Drop Down -->
                        <label for="drop-2" class="toggle">Đăng ký bãi <span class="fa fa-angle-down" aria-hidden="true"></span>
                        </label>
                        <a href="{{route('selectPark')}}">Đăng ký bãi <span class="fa fa-angle-down" aria-hidden="true"></span></a>
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
</div>