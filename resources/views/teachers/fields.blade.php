<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('first_name', 'First Name') !!}
        {!! Form::text('first_name', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191, 'autofocus']) !!}
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('last_name', 'Last Name') !!}
        {!! Form::text('last_name', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('birthdate', 'Birthdate') !!}
        {!! Form::text('birthdate', null, ['class' => 'form-control','id'=>'birthdate']) !!}
    </div>
    @push('scripts')
        <script type="text/javascript">
            $('#birthdate').datetimepicker({
                format: 'YYYY-MM-DD HH:mm:ss',
                useCurrent: true,
                sideBySide: true
            })
        </script>
    @endpush
    <div class="form-group col-sm-6">
        {!! Form::label('gender', 'Gender') !!}
        {!! Form::text('gender', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('phone', 'Phone') !!}
        {!! Form::text('phone', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('address', 'Address') !!}
        {!! Form::text('address', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('sub_district', 'Sub District') !!}
        {!! Form::text('sub_district', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('district', 'District') !!}
        {!! Form::text('district', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('province', 'Province') !!}
        {!! Form::text('province', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('nationality', 'Nationality') !!}
        {!! Form::text('nationality', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('post_code', 'Post Code') !!}
        {!! Form::number('post_code', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('user_id', 'User Id') !!}
        {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('semester_id', 'Semester Id') !!}
        {!! Form::number('semester_id', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-12">
        {!! Form::label('image', 'Image') !!}
        {!! Form::text('image', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-12">
        {!! Form::label('status', 'Status') !!}
        <label class="checkbox-inline">
            {!! Form::hidden('status', 0) !!}
            {!! Form::checkbox('status', '1', null) !!}
        </label>
    </div>
</div>
{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
<a href="{{ route('sisdeck.teachers.index') }}" class="btn btn-default">Cancel</a>