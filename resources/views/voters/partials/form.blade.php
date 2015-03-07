<div class="form-group">
    {!! Form::label('votername', 'Voter Name:') !!}
    {!! Form::text('votername') !!}
</div>
<div class="form-group">
    {!! Form::label('voterid', 'Voter ID:') !!}
    {!! Form::text('voterid') !!}
</div>
<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
</div>