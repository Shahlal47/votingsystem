@extends('app')

@section('content')
    <h2>{{ $voter->votername }}</h2>

        <ul>
            @foreach( $voter as $voterone )
                <li>

                    <a href="{{ route('voters.show', [$voterone->id]) }}"></a>

                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('voters.destroy', $voterone->id))) !!}

                    {!! link_to_route('voters.edit', 'Edit', array($voterone->id), array('class' => 'btn btn-info')) !!},

                    {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}

                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>

    <p>
        {!! link_to_route('voters.index', 'Back to Voter List') !!}
    </p>
@endsection