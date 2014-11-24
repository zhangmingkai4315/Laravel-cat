@extends("layout")
@section("content")






<div class="container">

    <div class="row">
        <div class="col-md-9 col-md-offset-0">
            <div class="panel panel-info">
                <div class="panel-heading">


            <h3 class="panel-title"><a href="/blog/{{$post->id}}">{{$post->title}}</a></h3>
           </div>
                <div class="panel-body">
             <p>{{$post->content}}</p>

            <p>评论数:{{$post->comment_count}} 更新于:{{$post->updated_at}}<p>
                </div>

                </div>
            </div>
        <div class="col-md-8 col-md-offset-0">
            <h4>好友评论</h4>
            @foreach($comments as $comment)
             <hr>
             <p>{{$comment->commenter}} 评论于：{{$comment->updated_at}}</p>
             <p>{{$comment->comment}}</p>
            @endforeach
            @include('blog.commentZone')
        </div>
        </div>
    </div>

</div>



@stop