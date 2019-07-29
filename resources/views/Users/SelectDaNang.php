<!--
Author: w3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
$city=$_GET['id'];
if($city=='HN')
{
    $city1="Ha Noi";
    $place="Hà Nội";
}
else if($city=='DN')
{
    $city1="Da Nang";
    $place="Đà Nẵng";
}else if($city=='HCM')
{
    $city1="Ho Chi Minh";
    $place="Hồ Chí Minh";
} ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Danh Sách Bãi Đỗ</title>
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
    <link href="../../../public/user/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="../../../public/user/css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="../../../public/user/css/font-awesome.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link rel="stylesheet" href="../../../public/user/css/style01.css">
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
                    <h1><a href="http://127.0.0.1:8000">Hey Park!</a></h1>
                </div>
                <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
                <input type="checkbox" id="drop" />
                <ul class="menu mt-lg-3 ml-auto">
                    <li class="active"><a href="http://127.0.0.1:8000">Home</a></li>
                    <li><a href="http://localhost/capstone2/resources/views/Users/SelectDaNang.php?id=DN">Các bãi đỗ</a></li>
                    <li><a href="http://127.0.0.1:8000/danh-sach-bai-do">Danh sách bãi</a></li>
                    <!--<li><a href="#login">Đăng ký bãi  </a></li>-->

                    <!--<li>

                        <label for="drop-2" class="toggle">Đăng ký bãi <span class="fa fa-angle-down" aria-hidden="true"></span>
                        </label>
                        <a href="#login">Đăng ký bãi <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                        <input type="checkbox" id="drop-2" />
                        <ul>
                            <li><a href="daiHan.html" class="drop-text">Dài hạn</a></li>
                            <li><a href="nganHan.html" class="drop-text">Ngắn hạn</a></li>


                        </ul>
                    </li>-->
                    <li><a href="http://127.0.0.1:8000/dang-nhap">Đăng nhập</a></li>
                    <li><a href="http://127.0.0.1:8000/dang-ky">Đăng ký</a></li>
                </ul>
            </nav>
            <!-- //nav -->
        </div>
    </header>
    <!-- //header -->
</div>
<!-- //main -->
<style type="text/css">
    .con1{
        height: 500px;
    }
    #map{
        width: 100%;
        height: 100%;
        border: 1px solid blue;
    }
    #data,#allData{
        display: none;
    }
</style>
<!-- banner-bottom -->
<section class="banner-bottom py-5" style="text-align: center">
    <div class="container py-md-4">
        <h3 class="tittle-w3layouts two text-center">Bãi Đỗ</h3>

            <div class="row my-2">
                <div class="col-lg-4 order-lg-1">
                        <?php
                        require 'db/Connect.php';
                        mysqli_set_charset($connect, 'UTF8');
                        $sql1="SELECT * FROM park WHERE city='$city1'";
                        $query1 = mysqli_query($connect,$sql1);
                        $num=mysqli_num_rows($query1);
                        if($num > 0) {
                        while ($row = mysqli_fetch_array($query1)) {
                        ?>
                        <div class="thumbnail card mt-4" style="width: 300px">
                            <div class="caption card-body">
                                <h4 class="group card-title inner list-group-item-heading">
                                    <?php echo $row['parkName']?></h4>
                                <p class="group inner list-group-item-text">
                                    <?php echo $row['address']?></p>
                                <p class="group inner list-group-item-text">
                                    <?php echo $row['price']?> VND</p>
                                <a href="http://127.0.0.1:8000/dang-ky-dai-han?id=<?php echo $row['idPark']?>" class="btn btn-info" role="button">Dài Hạn</a>
                                <a href="nganHan.html" class="btn btn-primary" role="button">Ngắn Hạn</a>

                            </div>
                        </div>

                    <?php
                    }
                    }
                    ?>
                </div>
                <?php
                require 'education.php';
                $edu = new education;
                // truyền giữ liệu vào coll
                $coll = $edu->getCollegesBlankLatLng();
                $coll = JSON_ENCODE($coll);
                //in dữ liệu;
                echo '<div id="data">'.$coll.'</div>';
                $alldata = $edu->getAllColleges($city1);
                $alldata = JSON_ENCODE($alldata);
                //in dữ liệu;
                echo '<div id="allData">'.$alldata.'</div>';
                ?>
                <div class="col-lg-8 order-lg-2 ">
                    <div class="map-fo mt-lg-5 mt-4" style="height: 500px;">
                        <div id="map"></div>
                    </div>
                </div>
            </div>

            <script type="text/javascript" src='js/test.js'></script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCokQzEb_YovAouumHZboIeA1_4aAEsx8k&callback=loadMap" async defer></script>
    </div>
</section>
<!-- //banner-bottom -->
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
