@extends('layouts.app')
@section('content')
<h3>Contact</h3>

{!! Form::open(['url' => 'contact/submit']) !!}

<div class="form-group">
    {!! Form::label('name', 'Your Name') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('email', 'E-mail Address') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::textarea('message', null, ['class' => 'form-control']) !!}
</div>

@include('inc.messages')


{!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}


@endsection