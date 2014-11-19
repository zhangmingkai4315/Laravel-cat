@extends("layout")

@section("content")
<div class="container">


    <div class="jumbotron">
        <h2>您好 {{Auth::user()->username}}</h2>
        <p>欢迎来到喵星人的小站!，先来<a href="/updateprofile">完善资料</a>吧,如果已经更新完了资料，点击下面按钮进入个人空间，小伙伴们都在等你呢🐱</p>
        <p><a class="btn btn-primary btn-lg" href="/myprofile" role="button">进入空间</a></p>
    </div>



</div>
@stop