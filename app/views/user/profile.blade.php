@extends("layout")

@section("content")
<div class="container">

<h1>您好 {{Auth::user()->username}}</h1>
<p>欢迎来到喵星人的小站!，先来<a href="/updateprofile">完善资料</a>吧!</p>

</div>
@stop