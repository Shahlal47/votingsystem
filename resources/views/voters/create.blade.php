@extends('app')

@section('content')
    <h2>Create Voter</h2>

    {!! Form::model(new App\Voter, ['route' => ['voter.store']]) !!}

    <div class="form-group">
        {!! Form::label('name', 'Voter Name:') !!}
        {!! Form::text('name') !!}
    </div>
    <div class="form-group">
        {!! Form::label('id', 'Voter ID:') !!}
        {!! Form::text('voterid') !!}
    </div>
    <div class="form-group">
        {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
    </div>

    @include(['submit_text' => 'Save'])
    {!! Form::close() !!}

@endsection