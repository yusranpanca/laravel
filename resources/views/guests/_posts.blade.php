<div class="row clearfix">
    @forelse ($posts as $post)
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading"><a href="/article/{{$post->id}}">{{ $post->title }}</a> oleh <a href="/authors/{{$post->author->id}}">{{$post->author->name}}</a></div>
            <div class="panel-body">{{ str_limit($post->content, 40) }}</div>
        </div>
    </div>
    @empty
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading">Boo..</div>
            <div class="panel-body">Belum ada artikel yang ditulis :(</div>
        </div>
    </div>
    @endforelse
</div>
<div class="row text-center">
{{ $posts->appends(compact('q'))->links() }}
</div>
