@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row clearfix">
        <a href="{{ route('posts.create') }}" class="btn btn-default">Tulisan baru</a> 
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Judul</th>
                </tr>
            </thead>
            <tbody>
            @forelse ($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>
						{!! Form::model($post, ['route' => ['posts.destroy', $post->id], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
							<a href="/manage/posts/{{ $post->id }}/edit">ubah</a> |
							{!! Form::submit('hapus', ['class'=>'btn btn-xs btn-danger']) !!}
							| <a href="/article/{{$post->id}}">lihat</a>
						{!! Form::close()!!}
					</td>

                </tr>
            @empty
                <tr>
                    <th scope="row" colspan=2>Belum ada data</th>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
    <div class="row text-center">
        {{ $posts->links() }}
    </div>
</div>
@endsection
