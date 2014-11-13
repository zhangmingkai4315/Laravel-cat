@extends("layout")
@section("content")

<div class="container">
<div class="row">
    <div class="col-md-3 col-md-offset-1">
@if (Session::has('error'))
{{ trans(Session::get('reason')) }}
@elseif (Session::has('success'))
<p>重置密码邮件已发送，请尽快查收您的邮箱！</p>
@endif

{{
Form::open([
    "class"=>"form-horizontal",
    "role"=>"form",
    "route"=>"user/request",
    "autocomlete"=>"off"
])
}}


<div class="form-group">
{{Form::label("email","请输入个人注册使用邮箱：")}}
{{Form::text("email",Input::get("email"),
["placeholder"=>"个人邮箱","class"=>"form-control"
]
)}}
</div>
<div class="form-group">
{{Form::submit("reset",["class"=>"btn btn-primary btn-block"])}}
{{Form::close()}}


            </div>
        </div>
    </div>
   </div>


@stop
