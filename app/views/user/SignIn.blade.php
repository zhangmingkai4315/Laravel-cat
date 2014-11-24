@extends("layout")
@section("content")
<div class="container">
<div class="row">
    <h1 style="text-align: center">欢迎注册使用喵星人小站</h1>
    <br>
</div>
<div class="row">
<div class="col-md-4 col-md-offset-1">


<div class="form-group">
    {{
    Form::open(array(
    "class"=>"form-horizontal",
    "role"=>"form",
    "route" => "user/SignIn",
    "autocomplete" => "off"
    ))}}
</div>
<div class="form-group">
    {{ Form::label("username","用户名")}}
    {{ Form::text("username",Input::old("username"),["placeholder"=>"", "class"=>"form-control" ])}}

</div>
<div class="form-group">
    {{ Form::label("email","邮箱")}}
    {{ Form::text("email",Input::old("email"),["placeholder"=>"", "class"=>"form-control" ])}}
</div>
<div class="form-group">
    {{ Form::label("password","密码")}}
    {{ Form::password("password",["placeholder"=>"", "class"=>"form-control"])}}
</div>
<div class="form-group">
    {{ Form::label("password_confirmation","确认密码")}}
    {{ Form::password("password_confirmation",["placeholder"=>"", "class"=>"form-control"])}}
</div>

<div class="form-group">
    {{ Form::submit("注册",["class"=>"btn btn-primary btn-block"])}}

    {{ Form::close()}}
</div>

@if($errors->any())
<ul>
    {{implode('',$errors->all('<li class="error">:message</li>'))}}
</ul>
@endif

</div>
<div class="col-md-6 col-md-offset-1">
    <br>
    <br>
    <a href="/">
        <img src="http://t2.qpic.cn/mblogpic/98623f254ea392d76b30/460" width="500px" height="300px" class="shadow" >
    </a>
</div>
</div>
</div>
@stop
