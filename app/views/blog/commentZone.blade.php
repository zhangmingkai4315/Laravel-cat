


    <?php /*
    @if(Session::has('success'))
    <div data-alert class="alert-box round">
        {{Session::get('success')}}
        <a href="#" class="close">&times;</a>
    </div>
    @endif

    {{ Form::open(['route'=>['comment.new',$post->id]]) }}
    <div class="row">
        <div class="small-5 large-5 column">
            {{ Form::label('commenter','Name:') }}
            {{ Form::text('commenter',Input::old('commenter')) }}
        </div>
    </div>
    <div class="row">
        <div class="small-5 large-5 column">
            {{ Form::label('email','Email:') }}
            {{ Form::text('email',Input::old('email')) }}
        </div>
    </div>

    */
    ?>


     <div class="form-group">
    {{ Form::open(array('route' => array('comment.new', $post)))}}
    {{ Form::textarea('comment',Input::old('comment'),['class'=>'form-control','rows'=>4]) }}
    {{ Form::hidden('post_id',$post->id)}}

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
    {{ Form::submit('提交评论',['class'=>'btn btn-info']) }}
    {{ Form::close() }}
            </div>
