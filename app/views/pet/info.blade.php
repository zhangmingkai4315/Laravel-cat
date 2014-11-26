@extends("layout")
@section("content")
<style type="text/css">
    #allmap {width:830px; height: 400px; overflow: hidden;margin:0;font-family:"微软雅黑";}
    #waimap{overflow: hidden;width:100%; height: 100%;}
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
    <div class="row">
        <div class="col-md-3 col-md-offset-0">
        <h3>宠物个人信息</h3>

    </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-md-offset-0">
                <img class="img-thumbnail" src="http://wenwen.soso.com/p/20111105/20111105171750-1158493236.jpg" data-holder-rendered="true" style="height: 180px; width: 70%; display: block;">
        </div>
        <div class="col-md-4 col-md-offset-0">
        <ul class="list-group">
            <li class="list-group-item list-group-item-info">名称:{{$pet}}</li>
            <li class="list-group-item list-group-item-info">所属星球:<a href="#">{{$petType}}</a></li>
            <li class="list-group-item list-group-item-info">所属品种:<a href="#">{{$petPinzhong}}</a></li>
            <li class="list-group-item list-group-item-info">年龄: {{$petAge}}周岁</li>
        </ul>
        </div>
        <div class="col-md-3 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">它的好友</div>
                <div class="panel-body">
                   好友列表
                   各种头像，image
                </div>
            </div>

        </div>
       </div>
    <div class="row">
        <h3 id="mymaplocation">寻找星球人</h3>
        <div class="col-md-8 col-md-offset-0">
            <div id="mymap">



                <div id="waimap">
                    <div  id="allmap"></div>
                    <script type="text/javascript">
                        // 百度地图API功能
                        var map = new BMap.Map("allmap");
                        map.addControl(new BMap.NavigationControl());
                        var point = new BMap.Point(116.331398,39.897445);
                        map.centerAndZoom(point,12);
                        // 创建地址解析器实例
                        var myGeo = new BMap.Geocoder();
                        // 将地址解析结果显示在地图上,并调整地图视野
                        myGeo.getPoint("{{$region}}{{$community}}", function(point){
                            if (point) {
                                map.centerAndZoom(point, 14);
                                map.addOverlay(new BMap.Marker(point));
                            }
                        }, "{{$city}}");
                    </script>
                </div>
               </div>
            </div>
        <div class="col-md-3 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">星球数据统计</div>
                <div class="panel-body">
                    <p>北京地区：0只 同类</p>
                    <p>五公里范围内:0 只 同类</p>
                    <p>附近可购买食物的地方: <a href="#">0 所</a></p>
                    <p>附近可寄养的场地: <a href="#">0 所</a></p>
                    <p>附近较好的宠物医院: <a href="#">0 所</a></p>
                </div>
            </div>
        </div>
        </div>


    </div>



@stop