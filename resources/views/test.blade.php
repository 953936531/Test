@extends('layouts.layout')
@section('css')
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="fileStyle/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="fileStyle/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="fileStyle/css/style.css" rel="stylesheet">
    <style>
        body{
        }

        .nav li{
            text-align: center;
            float:left;
            width:10%;
            height:80px;
            line-height: 80px;
            list-style-type:none;
        }
        .product{
            position:absolute;
            top:70%;
        }
        .product li{
            list-style-type:none;
            float:left;
            margin-left:5px;
            margin-top:5px;
        }
        .productList{
            width:500px;
            height:500px;
            margin-left:45%;
            overflow-x: hidden;
            overflow-y: scroll;
        }
        .productList li{
            list-style-type:none;
            text-align: center;
        }
        .productList::-webkit-scrollbar {
            display: none;
        }
        .musicPeople{
            width:850px;
            margin:auto;
        }
        .musicPeople li{
            list-style-type:none;
            float:left;
            margin-left:20px;
            margin-top:40px;
        }
    </style>
@stop
@section('content')
    <div>
        <ul class="nav">
            <li style="color:green">LOGO</li>
            <li style="color:green">首页</li>
            <li>歌曲租用</li>
            <li>版权出售</li>
            <li>采样包</li>
            <li>关于我们</li>
        </ul>
    </div>
    <div  style="clear:both; height:600px;">
        <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
            <!--Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                <li data-target="#carousel-example-1z" data-slide-to="2"></li>
            </ol>
            <!--/.Indicators-->
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
                <!--First slide-->
                <div class="carousel-item active">
                    <img class="d-block w-100" style="height:100%;height:100%;" src="/images/banner.jpg"
                         alt="First slide">
                </div>
                <!--/First slide-->
                <!--Second slide-->
                <div class="carousel-item">
                    <img class="d-block w-100" style="height:100%;height:100%;" src="/images/banner.jpg"
                         alt="Second slide">
                </div>
                <!--/Second slide-->
                <!--Third slide-->
                <div class="carousel-item">
                    <img class="d-block w-100" style="height:100%;height:100%;" src="/images/banner.jpg"
                         alt="Third slide">
                </div>
                <!--/Third slide-->
            </div>
            <!--/.Slides-->
            <!--Controls-->
            <a style="font-size:50px;" class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                <span  class="carousel-control-prev-icon" style="width:100px;height:100px;" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                <span class="carousel-control-next-icon" style="width:100px;height:100px;" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!--/.Controls-->
        </div>
    </div>


    <div style="clear: both; height:500px;">

    </div>
    <div>
        <h1><span style="margin-left:15%;color:#F6d762">最新上传</span></h1>
    </div>
    <div style="position:absolute; left:30%; margin-top:100px;z-index:20;width:22%;height:200px;background-image: url(images/pianon.jpg?t=55555)">
        <audio style="z-index: 200;width:150px;margin-left:300px;margin-top:40px;border-radius: 40%;" src="/music/music.mp3" controls="controls"></audio>
    </div>
    <div style="position:absolute; left:55%; margin-top:20px;z-index:20;width:19%;height:200px;">
        <div style="margin-top:150px;">
            <p style="color:#fff;">REPLY</p>
            <p style="color:#fff;">(NEO SOUL TYPE BEAT 2019)</p>
            <p style="color:#fff;font-size:8px; margin-left:140px;">作者:YOCHO</p>
            <p style="color:#F6d762;"><strong>歌曲租用: 500元</strong> <img style="margin-left:40px;margin-top:10px;" src="/images/gouwu.jpg?t=555" alt=""></p>

        </div>
    </div>
    <div style="position:relative; margin-left: 35%; width:36%;height:600px; background-image: url(images/pian.jpg?t=55555)">
        <ul class="product" style="width:80%;">
            <li>
                <div style="width:160px;height:160px;">
                    <img style="width:100%;height:100%;" src="/images/2.jpg?t=55555" alt="">
                </div>
            </li>
            <li>
                <div style="width:160px;height:160px;">
                    <img style="width:100%;height:100%;" src="/images/3.jpg?t=55555" alt="">
                </div>
            </li>
            <li>
                <div style="width:160px;height:160px;">

                </div>
            </li>
            <li>
                <div style="width:160px;height:160px;">
                    <img style="width:100%;height:100%;" src="/images/4.jpg?t=55555" alt="">
                </div>
            </li>
            <li>
                <div style="width:160px;height:160px;">
                    <img style="width:100%;height:100%;" src="/images/5.jpg?t=55555" alt="">
                </div>
            </li>
            <li>
                <div style="width:160px;height:160px;">
                    <img style="width:100%;height:100%;" src="/images/6.jpg?t=55555" alt="">
                </div>
            </li>
            <li>
                <div style="width:160px;height:160px;">

                </div>
            </li>
            <li>
                <div style="width:160px;height:160px;">
                    <img style="width:100%;height:100%;" src="/images/7.jpg?t=55555" alt="">
                </div>
            </li>
            <li>
                <div style="width:160px;height:160px;">
                    <img style="width:100%;height:100%;" src="/images/1.jpg?t=55555" alt="">
                </div>
            </li>

        </ul>
    </div>
    <div style="height:400px;clear:both;">

    </div>
    <div>
            <div style="">
                <h1><span style="margin-left:15%;color:#F6d762">入驻音乐</span></h1>
            </div>

        <ul class="musicPeople">
            <li>
                <div style="width:380px;height:150px;background-color:black;">
                    <div style="float:left; width:35%;margin-left:2px;margin-top:7px;height:90%;border:1px solid #333;background-image: url(images/person_4.jpg?t=55555)">

                    </div>
                    <div style="float:right;width:63%;height:100%;border:1px solid #333;">
                        <p style="color:#fff; font-size:12px;"><strong>作者 : 一个人</strong></p>
                        <p style="color:#fff;font-size:12px;">介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍</p>
                    </div>
                </div>
            </li>
            <li>
                <div style="width:380px;height:150px;background-color:black;">
                    <div style="float:left; width:35%;margin-left:2px;margin-top:7px;height:90%;border:1px solid #333;background-image: url(images/person_4.jpg?t=55555)">

                    </div>
                    <div style="float:right;width:63%;height:100%;border:1px solid #333;">
                        <p style="color:#fff; font-size:12px;"><strong>作者 : 一个人</strong></p>
                        <p style="color:#fff;font-size:12px;">介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍</p>
                    </div>
                </div>
            </li>
            <li>
                <div style="width:380px;height:150px;background-color:black;">
                    <div style="float:left; width:35%;margin-left:2px;margin-top:7px;height:90%;border:1px solid #333;background-image: url(images/person_4.jpg?t=55555)">

                    </div>
                    <div style="float:right;width:63%;height:100%;border:1px solid #333;">
                        <p style="color:#fff; font-size:12px;"><strong>作者 : 一个人</strong></p>
                        <p style="color:#fff;font-size:12px;">介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍</p>
                    </div>
                </div>
            </li>
            <li>
                <div style="width:380px;height:150px;background-color:black;">
                    <div style="float:left; width:35%;margin-left:2px;margin-top:7px;height:90%;border:1px solid #333;background-image: url(images/person_4.jpg?t=55555)">

                    </div>
                    <div style="float:right;width:63%;height:100%;border:1px solid #333;">
                        <p style="color:#fff; font-size:12px;"><strong>作者 : 一个人</strong></p>
                        <p style="color:#fff;font-size:12px;">介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍</p>
                    </div>
                </div>
            </li>
            <li>
                <div style="width:380px;height:150px;background-color:black;">
                    <div style="float:left; width:35%;margin-left:2px;margin-top:7px;height:90%;border:1px solid #333;background-image: url(images/person_4.jpg?t=55555)">

                    </div>
                    <div style="float:right;width:63%;height:100%;border:1px solid #333;">
                        <p style="color:#fff; font-size:12px;"><strong>作者 : 一个人</strong></p>
                        <p style="color:#fff;font-size:12px;">介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍</p>
                    </div>
                </div>
            </li>
            <li>
                <div style="width:380px;height:150px;background-color:black;">
                    <div style="float:left; width:35%;margin-left:2px;margin-top:7px;height:90%;border:1px solid #333;background-image: url(images/person_4.jpg?t=55555)">

                    </div>
                    <div style="float:right;width:63%;height:100%;border:1px solid #333;">
                        <p style="color:#fff; font-size:12px;"><strong>作者 : 一个人</strong></p>
                        <p style="color:#fff;font-size:12px;">介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍介绍</p>
                    </div>
                </div>
            </li>

        </ul>


    </div>

    <div style="clear:both;height:20px;">

    </div>
    <div>
        <div style="float:left;">

        <div style="">
            <h1><span style="margin-left:50%;color:#F6d762">热门歌曲</span></h1>
        </div>
        <div style="">
                <ul class="productList">
                    <li><h3>歌曲名  &nbsp;&nbsp;&nbsp;&nbsp;歌曲租用:200元</h3></li>
                    <li><h3>歌曲名  &nbsp;&nbsp;&nbsp;&nbsp;歌曲租用:200元</h3></li>
                    <li><h3>歌曲名  &nbsp;&nbsp;&nbsp;&nbsp;歌曲租用:200元</h3></li>
                    <li><h3>歌曲名  &nbsp;&nbsp;&nbsp;&nbsp;歌曲租用:200元</h3></li>
                    <li style="color:greenyellow"><h2>歌曲名  &nbsp;&nbsp;&nbsp;&nbsp;歌曲租用:200元</h2></li>
                    <li><h3>歌曲名  &nbsp;&nbsp;&nbsp;&nbsp;歌曲租用:200元</h3></li>
                    <li><h3>歌曲名  &nbsp;&nbsp;&nbsp;&nbsp;歌曲租用:200元</h3></li>
                    <li><h3>歌曲名  &nbsp;&nbsp;&nbsp;&nbsp;歌曲租用:200元</h3></li>
                    <li><h3>歌曲名  &nbsp;&nbsp;&nbsp;&nbsp;歌曲租用:200元</h3></li>
                    <li><h3>歌曲名  &nbsp;&nbsp;&nbsp;&nbsp;歌曲租用:200元</h3></li>
                    <li><h3>歌曲名  &nbsp;&nbsp;&nbsp;&nbsp;歌曲租用:200元</h3></li>
                    <li><h3>歌曲名  &nbsp;&nbsp;&nbsp;&nbsp;歌曲租用:200元</h3></li>
                    <li><h3>歌曲名  &nbsp;&nbsp;&nbsp;&nbsp;歌曲租用:200元</h3></li>
                    <li><h3>歌曲名  &nbsp;&nbsp;&nbsp;&nbsp;歌曲租用:200元</h3></li>
                    <li><h3>歌曲名  &nbsp;&nbsp;&nbsp;&nbsp;歌曲租用:200元</h3></li>
                    <li><h3>歌曲名  &nbsp;&nbsp;&nbsp;&nbsp;歌曲租用:200元</h3></li>
                </ul>
            </div>


        </div>

        <div style="float:right; margin-right:150px;width:600px;height:600px; border-radius:50%;background-image: url(images/p6.jpg?t=55555)">

        </div>
    </div>

    <div style="clear:both;height:40px;">

    </div>
    <div style="width:100%; height:250px;">
        <img src="/images/buttom.jpg?t=55555" style="width:100%;height:250px;" alt="">
    </div>


@stop

@section('script')
    <!-- JQuery -->
    <script type="text/javascript" src="fileStyle/js/jquery-3.4.0.min.js"></script>
    <script src="jquery.blockUI.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="fileStyle/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="fileStyle/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="fileStyle/js/mdb.min.js"></script>
@stop