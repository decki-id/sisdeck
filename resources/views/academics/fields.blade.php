<div class="row">
    <div class="form-group col">
        {!! Form::label('academic_year', 'Academic Year') !!}
        {!! Form::text('academic_year', null, ['class' => 'form-control', 'autofocus']) !!}
    </div>
</div>
{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
<a href="{{ route('sisdeck.academics.index') }}" class="btn btn-default">Cancel</a>
