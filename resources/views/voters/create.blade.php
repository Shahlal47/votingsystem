@extends('app')

@section('content')

    <h2>Create Voter</h2>

    {!! Form::model(new App\Voter, ['route' => ['voters.store']]) !!}
    <ul>
        @foreach( $errors->all() as $error )
            <li>{{$error}}</li>
        @endforeach
    </ul>

    @include('voters/partials/form', ['submit_text' => 'Create New Voter'])

    {!! Form::close() !!}

@endsection
