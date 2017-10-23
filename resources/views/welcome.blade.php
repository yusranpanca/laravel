@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            {!! Form::open(['url' => '/', 'method' => 'get', 'class' => 'form-inline']) !!}
                <div class="form-group">
                    {!! Form::text('q', null, ['class' => 'form-control', 'placeholder' => 'Cari tulisan']) !!}
                </div>
                {!! Form::submit('Cari', ['class' => 'btn btn-default']) !!}
            {!! Form::close() !!} 
        </div>
    </div>
    @include('guests._posts', compact('posts', 'q'))
</div>
@endsection
