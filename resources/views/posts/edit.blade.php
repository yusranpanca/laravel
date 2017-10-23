@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'put']) !!}
			@include('posts._form')
		{!! Form::close() !!} 
    </div>
</div>
@endsection
