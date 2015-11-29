@extends('app')

@section('content')
    <h1>Add a Citizen</h1>
    <hr/>

    {!! Form::open() !!}
    <div class="form-group">
            {!! Form::label('firstname', 'First Name:') !!}
                {!! Form::text('firstname', null, ['class' => 'form-control']) !!}
            {!! Form::label('lastname', 'Last Name:') !!}
                {!! Form::text('lastname', null, ['class' => 'form-control']) !!}
            {!! Form::label('middlename', 'Middle Name:') !!}
                {!! Form::text('middlename', null, ['class' => 'form-control']) !!}
            {!! Form::label('gender', 'Gender:') !!}
                {!! Form::text('gender', null, ['class' => 'form-control']) !!}
            {!! Form::label('mobile', 'Mobile Number:') !!}
                {!! Form::text('mobile', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Add Citizen', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    
    {!! Form::close() !!}
@stop