<div class="row">
    <div class="form-group col">
        {!! Form::label('time', 'Time') !!}
        {!! Form::text('time', null, ['class' => 'form-control', 'autofocus']) !!}
    </div>
</div>
{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
<a href="{{ route('sisdeck.times.index') }}" class="btn btn-default">Cancel</a>
