@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        {!! Form::open(['route' => 'posts.store']) !!}
			@include('posts._form')
		{!! Form::close() !!} 
    </div>
</div>
@endsection
