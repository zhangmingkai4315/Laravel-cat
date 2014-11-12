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
                <a href="/"><img src="http://t2.qpic.cn/mblogpic/98623f254ea392d76b30/460" width="500px" height="300px" class="shadow" >
                </a>
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
