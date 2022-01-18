<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('course_id', 'Course ID') !!}
        {!! Form::number('course_id', null, ['class' => 'form-control', 'autofocus']) !!}
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('level', 'Level') !!}
        {!! Form::text('level', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-12 col-lg-12">
        {!! Form::label('description', 'Description') !!}
        {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => 3]) !!}
    </div>
</div>
{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
<a href="{{ route('sisdeck.levels.index') }}" class="btn btn-default">Cancel</a>
