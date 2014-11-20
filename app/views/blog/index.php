
@if($posts->count())


<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>序号</th>
        <th>标题</th>
        <th>索引</th>
        <th>评论次数</th>
        <th>更新日期</th>
        <th>显示</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($posts as $post)

    <tr>
        <td>{{$post->id}}</td>
        <td>{{$post->title}}</td>
        <td>{{$post->read_more}}</td>
        <td>{{$post->comment_count}}</td>
        <td>{{$post->updated_at}}</td>
        <td>{{link_to_route(('blog.content'),'正文',array($post->id),array('class'=>'btn btn-info')) }}</td>

    </tr>
    @endforeach

    </tbody>
</table>

@else
您还未添加任何blog,尝试<p>{{link_to_route('blog.create'),'添加'}}</p>一篇blog吧。

@endif