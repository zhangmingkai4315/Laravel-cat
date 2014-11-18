@extends("layout")
@section("content")
<div class="container">
<script src=""></script>
    <div class="row">
        <div class="col-md-3 col-md-offset-1">
           <div class="panel panel-default">
               <div class="panel-body">
                   {{ Form::label("password_confirmation","此部分需要结合JS 产生一系列的选择器")}}
               </div>
           </div>
        </div>
    </div>
</div>
@stop