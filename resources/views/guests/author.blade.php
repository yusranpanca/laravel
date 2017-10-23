@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-12">
        <h1>Semua tulisan oleh {{ $author->name }}</h1>
    </div>
    @include('guests._posts', compact('posts', 'q'))
</div>
@endsection
