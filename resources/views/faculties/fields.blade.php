<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('name', 'Faculty Name') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'autofocus']) !!}
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('code', 'Faculty Code') !!}
        {!! Form::text('code', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-12 col-lg-12">
        {!! Form::label('description', 'Description') !!}
        {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => 3]) !!}
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
<a href="{{ route('sisdeck.faculties.index') }}" class="btn btn-default">Cancel</a>
