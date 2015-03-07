

{{--All the Voters will be listed here with the Action property (Create, Delete, View, Edit).--}}


@extends('app')

@section('content')
    <h2>All the Voters</h2>

    @if ( !$projects->count() )
        You have no Voter
    @else

        <table class="table">
            <thead>
                <tr>
                    <th>Serial Number</th>
                    <th>Voter Name</th>
                    <th>Voter ID</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach( $projects as $voter )
                <tr>
                    <td>{{ $voter->id }}</td>
                    <td>{{ $voter->votername }}</td>
                    <td>{{ $voter->voterid }}</td>
                    <td>
                        {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('voters.destroy', $voter->id))) !!}
                        {!! link_to_route('voters.show', 'View', array($voter->id), array('class' => 'btn btn-info')) !!}
                        {!! link_to_route('voters.edit', 'Edit', array($voter->id), array('class' => 'btn btn-info')) !!}
                        {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                    </td>
                    {!! Form::close() !!}
                </tr>
            @endforeach
            </tbody>
        </table>

    @endif

    <p>
        {!! link_to_route('voters.create', 'Create New Voter', array('class' => 'btn btn-primary')) !!}
    </p>
@endsection


