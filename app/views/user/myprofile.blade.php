@extends("layout")

@section("content")

<style type="text/css">
    #allmap {width:800px; height: 400px; overflow: hidden;margin:0;font-family:"微软雅黑";}
    /* Custom Styles */
    ul.nav-tabs{
        width: 140px;
        margin-top: 20px;
        border-radius: 4px;
        border: 1px solid #ddd;
        box-shadow: 0 1px 4px rgba(0, 0, 0, 0.067);
    }
    ul.nav-tabs li{
        margin: 0;
        border-top: 1px solid #ddd;
    }
    ul.nav-tabs li:first-child{
        border-top: none;
    }
    ul.nav-tabs li a{
        margin: 0;
        padding: 8px 16px;
        border-radius: 0;
    }
    ul.nav-tabs li.active a, ul.nav-tabs li.active a:hover{
        color: #fff;
        background: #0088cc;
        border: 1px solid #0088cc;
    }
    ul.nav-tabs li:first-child a{
        border-radius: 4px 4px 0 0;
    }
    ul.nav-tabs li:last-child a{
        border-radius: 0 0 4px 4px;
    }
    ul.nav-tabs.affix{
        top: 30px; /* Set the top position of pinned element */
    }
</style>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=A4749739227af1618f7b0d1b588c0e85"></script>

<div class="container">
    <?php
    $region=UserInformation::where('username','=',Auth::user()->username)->firstOrFail()->region;
    $community=UserInformation::where('username','=',Auth::user()->username)->firstOrFail()->community;
    $city=UserInformation::where('username','=',Auth::user()->username)->firstOrFail()->city;
    ?>
    <h3>您好 {{Auth::user()->username}},</h3>
    <h4>您居住在：<?php echo "$region,$community"; ?>附近,您可以通过<a href="#allmap">我的地图</a>查看附近猫友。
    </h4>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-md-1">

                    <div class="bs-docs-sidebar hidden-print hidden-xs hidden-sm affix" role="complementary">
                        <ul class="nav nav-pills nav-stacked" role="tablist">

                            <li class="">
                                <a href="#allmap">我的地图</a>
                            </li>
                            <li class="">
                                <a href="#myblog">我的日志</a>
                            </li>
                            <li class="">
                                <a href="#mypet">我的宠物</a>
                            </li>
                            <li class="">
                                <a href="#friend'sBlog">我的好友</a>
                            </li>
                            <li class="">
                                <a href="#myplan">我的计划</a>
                            </li>
                        </ul>
                    </div>


            </div>
            <div class="col-md-10 col-md-offset-1">
                <div id="allmap"></div>
                <script type="text/javascript">
                    // 百度地图API功能
                    var map = new BMap.Map("allmap");
                    map.addControl(new BMap.NavigationControl());
                    var point = new BMap.Point(116.331398,39.897445);
                    map.centerAndZoom(point,12);
                    // 创建地址解析器实例
                    var myGeo = new BMap.Geocoder();
                    // 将地址解析结果显示在地图上,并调整地图视野
                    myGeo.getPoint("<?php echo "$region$community" ?>", function(point){
                        if (point) {
                            map.centerAndZoom(point, 14);
                            map.addOverlay(new BMap.Marker(point));
                        }
                    }, "<?php echo $city?>");
                </script>

            <div class="col-md-9 col-md-offset-0">
                <div id="myblog">
                <h3>我的日志</h3>
                    <?php echo $blog ;?>

                </div>
            </div>


            <div class="col-md-9 col-md-offset-0">
                <div id="mypet">
                <h3>我的宠物</h3>
                </div>
            </div>

                <div class="col-md-9 col-md-offset-0">
                    <div id="friend'sBlog">
                        <h3>我的好友</h3>
                    </div>
                </div>

            <div class="col-md-9 col-md-offset-0">
                <div id="myplan">
                <h3>我的计划</h3>
                </div>
            </div>

        </div>
        <hr>
    </div>

</div>
</div>

@stop