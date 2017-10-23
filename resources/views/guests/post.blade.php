@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $post->title }}</div>
                <div class="panel-body">
                    {{ $post->content }}
                </div>
            </div>
        </div>
</div>
@endsection
