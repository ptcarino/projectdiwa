@extends('app')

@section('content')
    <h1>Add a City</h1>
    <hr/>
    {!! Form::open() !!}
    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Add City', ['class' => 'btn btn-primary form-control']) !!}
    </div>
@stop