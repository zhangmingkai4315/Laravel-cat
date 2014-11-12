@extends("layout")
@section("content")

<div class="container">
<div class="row">
    <div class="col-md-5 col-md-offset-1">
@if (Session::has('error'))
{{ trans(Session::get('reason')) }}
@elseif (Session::has('success'))
An e-mail with the password reset has been sent.
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
{{Form::label("email","Email")}}
{{Form::text("email",Input::get("email"),
["placeholder"=>"john@example.com"]
)}}
{{Form::submit("reset",["class"=>"btn btn-primary btn-block"])}}
{{Form::close()}}


            </div>
        </div>
    </div>
   </div>


@stop
