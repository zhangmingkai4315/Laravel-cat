@extends("layout")
@section("content")






<div class="container">

    <div class="row">
        <div class="col-md-9 col-md-offset-0">

            <h2 class="new-post">
                新的日志

            </h2>
            <hr>
            <div class="form-group">
            {{ Form::open(['route'=>['post.save']]) }}
                    {{ Form::label('title','标题:') }}
                    {{ Form::text('title',Input::old('title'),['class'=>'form-control']) }}
                    {{ Form::label('content','正文:') }}
                    {{ Form::textarea('content',Input::old('content'),['class'=>'form-control','rows'=>5]) }}

            @if($errors->has())
            @foreach($errors->all() as $error)
            <div data-alert class="alert-box warning round">
                {{$error}}
                <a href="#" class="close">&times;</a>
            </div>
            @endforeach
            @endif
                </div>
                <div class="form-group">
            {{ Form::submit('保存',['class'=>'btn btn-info']) }}
            {{ Form::close() }}
           </div>


    </div>
</div>
</div>

@stop