@extends("layout")
@section("content")
<div class="container">
    <div class="row">
         <h1 style="text-align: center">欢迎来到喵星人小站！</h1>
    </div>
    <div class="row">
         <h3 style="text-align: center">晒照片，领养喵星人，救助流浪喵</h3>

    </div>
    <br>
    <div class="row">

             <div class="col-md-5 col-md-offset-0">

                 <br>
                 <div class="bs-example">
                     <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                         <ol class="carousel-indicators">

                             <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                             <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
                             <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                         </ol>
                         <div class="carousel-inner" role="listbox">

                             <div class="item active">

                                 <img class="shadow" alt="First slide [900x500]" src="http://zhangmingkai2014.qiniudn.com/cat-002.jpg" data-holder-rendered="true">
                             </div>
                             <div class="item">
                                 <img  class="shadow" alt="Second slide [900x500]" src="http://zhangmingkai2014.qiniudn.com/123.jpg" data-holder-rendered="true">
                             </div>
                             <div class="item">
                                 <img   alt="Third slide [900x500]" src="http://zhangmingkai2014.qiniudn.com/DSC_0374.JPG" data-holder-rendered="true">
                             </div>
                         </div>
                         <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                             <span class="glyphicon glyphicon-chevron-left"></span>
                             <span class="sr-only">Previous</span>
                         </a>
                         <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                             <span class="glyphicon glyphicon-chevron-right"></span>
                             <span class="sr-only">Next</span>
                         </a>
                     </div>
                 </div>


             </div>


             <div class="col-md-5 col-md-offset-1">
                    <div class="form-group">
                    {{
                     Form::open(array(
                    "class"=>"form-horizontal",
                    "role"=>"form",
                    "route" => "user/login",
                    "autocomplete" => "off"
                       ))}}
                     </div>
                <div class="form-group">
                    {{ Form::label("username","用户名")}}
                    {{ Form::text("username",Input::old("username"),["placeholder"=>"username", "class"=>"form-control" ])}}
                </div>
                 <div class="form-group">
                    {{ Form::label("password","密码")}}
                    {{ Form::password("password",["placeholder"=>"password", "class"=>"form-control"])}}
                 </div>

                <div class="form-group">
                    {{ Form::submit("登录",["class"=>"btn btn-primary btn-block"])}}
                    {{ Form::close()}}
                </div>
                <div class="form-group">
                <a href="/SignIn">{{ Form::button("注册",["class"=>"btn btn-primary btn-block"])}}</a>

                <h4><small>注意:您可以直接<a href="/guest">匿名登录</a>，查看附近的喵星人，如果想发布喵星人信息或者评论其他喵星人，请点击注册按钮。谢谢使用</small>
                </h4>
                </div>

                @if($error=$errors->first("password"))
                <div class="error">
                 {{$error}}
                </div>
                @endif
             </div>
    </div>
</div>
@stop
