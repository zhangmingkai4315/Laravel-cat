@extends("layout")

@section("content")

<style type="text/css">
    #allmap {width:900px; height: 500px; overflow: hidden;margin:0;font-family:"微软雅黑";}
</style>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=A4749739227af1618f7b0d1b588c0e85"></script>

<div class="container">
    <?php
    $region=UserInformation::where('username','=',Auth::user()->username)->firstOrFail()->region;
    $community=UserInformation::where('username','=',Auth::user()->username)->firstOrFail()->community;
    $city=UserInformation::where('username','=',Auth::user()->username)->firstOrFail()->city;
    ?>
    <h3>您好 {{Auth::user()->username}}</h3>
    <h4>您居住在：<?php echo "$region,$community"; ?>附近
    </h4>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div id="allmap"></div>
                <script type="text/javascript">
                    // 百度地图API功能
                    var map = new BMap.Map("allmap");
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
        </div>
    </div>

    </div>

</div>

@stop