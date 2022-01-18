<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('student_id', 'Student ID') !!}
        {!! Form::number('student_id', null, ['class' => 'form-control', 'autofocus']) !!}
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('class_id', 'Class ID') !!}
        {!! Form::number('class_id', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('subject_id', 'Subject ID') !!}
        {!! Form::number('subject_id', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('teacher_id', 'Teacher ID') !!}
        {!! Form::number('teacher_id', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-6 mb-1">
        {!! Form::label('status', 'Status') !!}
        <label class="checkbox-inline">
            {!! Form::hidden('status', 0) !!}
            {!! Form::checkbox('status', '1', null) !!}
        </label>
    </div>
</div>
{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
<a href="{{ route('sisdeck.attendances.index') }}" class="btn btn-default">Cancel</a>
