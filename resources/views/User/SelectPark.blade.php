@extends('masterUser')
@section('title')
    Đăng Nhập
@endsection
@section('contain')
    <style type="text/css">
        .con1{
            height: 500px;
        }
        #map{
            width: 100%;
            height: 100%;
            border: 1px solid blue;
        }
        #data{
            display: none;
        }
    </style>
    <section class="banner-bottom py-5" style="text-align: center">
        <div class="container py-md-4">
            <h3 class="tittle-w3layouts two text-center">Bãi Đỗ</h3>

            <div class="row my-2">
                <div class="col-lg-4 order-lg-1">
                </div>
            </div>
        </div>
        <div class="col-lg-8 order-lg-2 ">
            <div id="data">{{$park}}</div>
            <div id="allData">{{$park}}</div>
            <div class="map-fo mt-lg-5 mt-4" style="height: 500px;">

                <div id="map"></div>
            </div>
        </div>
        <script type="text/javascript" src='{!! asset('user/test.js') !!}'></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCokQzEb_YovAouumHZboIeA1_4aAEsx8k&callback=loadMap" async defer></script>

    </section>
    @endsection