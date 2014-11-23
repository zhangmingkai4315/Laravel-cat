@extends("layout")
@section("content")

<div class="container">

    <div class="row">
        <div class="col-md-9 col-md-offset-0">
            <div class="alert alert-success" role="alert">
            <h3><a href="/blog/{{$post->id}}">{{$post->title}}</a></h3>
            <p>{{$post->content}}</p>
            <p>评论数:{{$post->comment_count}} 更新于:{{$post->updated_at}}<p>
            <hr>
                </div>
            </div>
        <div class="col-md-6 col-md-offset-0">
            <h4>好友评论</h4>
            @foreach($comments as $comment)
             <div class="alert alert-info" role="alert">
             <p>{{$comment->commenter}} 评论于：{{$comment->updated_at}}</p>
             <p>{{$comment->comment}}</p>
             </div>

            @endforeach
        </div>
    </div>
</div>





@stop