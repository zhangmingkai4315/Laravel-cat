@extends("layout")
@section("content")
<div class="container">
    <div class="row">
        <h1 style="text-align: center">欢迎来到喵星人小站！</h1>
    </div>
    <div class="row">
        <h3 style="text-align: center">请更新以下信息，我们将提供您更好的服务！</h3>

    </div>
    <br>
    <div class="row">

        <div class="col-md-4 col-md-offset-3">
            <div class="form-group">
                {{
                Form::open(array(
                "class"=>"form-horizontal",
                "role"=>"form",
                "route" => "user/myprofile",
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