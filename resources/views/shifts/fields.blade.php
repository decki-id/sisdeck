<div class="row">
    <div class="form-group col">
        {!! Form::label('shift', 'Shift') !!}
        {!! Form::text('shift', null, ['class' => 'form-control', 'autofocus']) !!}
    </div>
</div>
{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
<a href="{{ route('sisdeck.shifts.index') }}" class="btn btn-default">Cancel</a>
