@extends("layout")
@section("content")
<div class="container">

    <div class="row">
        <div class="col-md-9 col-md-offset-0">
            <h3>{{$username}}的Blog</h3>
            @if($count=Post::where('username','=',$username)->count())

            <h4>您已经完成了{{$count}}篇日志了🐱！</h4>

            @foreach ($posts as $post)


            <div class="panel panel-info">
                <div class="panel-heading">

                <h4><a href="/blog/{{$post->id}}">{{$post->title}}</a></h4>
                </div>
                <div class="panel-body">
                <p>{{$post->read_more}}</p>
                <p>评论数:{{$post->comment_count}} 更新于:{{$post->updated_at}}<p>

               </p>
               </div>
            </div>


            @endforeach
            </div>
            <div class="col-md-2 col-md-offset-0">

                <div class="aw-mod">
                    <div class="mod-head">
                        <h4>所有的博客</h4>
                    </div>
                    <div class="mod-body font-size-12">
                        <ul>

                            @foreach ($posts as $post)

                            <li><a href="/blog/{{$post->id}}">{{$post->title}}</a></li>

                            @endforeach
                        </ul>
                    </div>
                </div>

            </div>

            @else

               <h1>您还没有添加任何的Blog,写一篇Blog分享给好友吧!</h1>



            @endif

        </div>





        </div>
    </div>
</div>


@stop