<!-- Create Teacher Modal -->
<div class="modal fade" id="create-teacher_modal" tabindex="-1" role="dialog" aria-labelledby="createTeacherHeaderModal" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white align-items-center">
                <h5 class="modal-title" id="createTeacherHeaderModal">Create Teacher</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            {!! Form::open(['route' => 'sisdeck.teachers.store']) !!}
            <div class="modal-body">
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('username', 'Username', ['class' => 'form-label']) !!}
                        {!! Form::text('username', null, ['class' => 'form-control', 'maxlength' => 191, 'id' => 'teacher_username-create', 'placeholder' => 'Insert username']) !!}
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('fullname', 'Fullname', ['class' => 'form-label']) !!}
                        {!! Form::text('fullname', null, ['class' => 'form-control', 'maxlength' => 191, 'id' => 'teacher_fullname-create', 'placeholder' => 'Insert fullname']) !!}
                    </div>
                </div>
                @if(!empty($role))
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('role_id', 'Role', ['class' => 'form-label']) !!}
                        {!! Form::select('role_id', $role, 'null', ['class' => 'form-control', 'maxlength' => 191, 'id' => 'teacher_role-create', 'title' => 'User Role', 'placeholder' => 'Choose role']) !!}
                    </div>
                </div>
                @endif
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('email', 'Email', ['class' => 'form-label']) !!}
                        {!! Form::email('email', null, ['class' => 'form-control', 'maxlength' => 191, 'id' => 'teacher_email-create', 'placeholder' => 'Insert email address']) !!}
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('password', 'Password', ['class' => 'form-label']) !!}
                        {!! Form::password('password', ['class' => 'form-control', 'maxlength' => 191, 'id' => 'teacher_password-create', 'placeholder' => 'Insert password']) !!}
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('password_validation', 'Confirm Password', ['class' => 'form-label']) !!}
                        {!! Form::password('password_validation', ['class' => 'form-control', 'maxlength' => 191, 'title' => 'Confirm Password', 'id' => 'teacher_confirmpassword-create']) !!}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-info" id="reset_button-teachers">Reset</button>
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<!-- End of Create Teacher Modal -->

@push('scripts')
    <script>
        $('#reset_button-teachers').on('click', function (event) {
            var modal = $('#create-teacher_modal');
            modal.find('.modal-body #teacher_username-create').val("");
            modal.find('.modal-body #teacher_fullname-create').val("");
            modal.find('.modal-body #teacher_role-create').val("");
            modal.find('.modal-body #teacher_email-create').val("");
            modal.find('.modal-body #teacher_password-create').val("");
            modal.find('.modal-body #teacher_confirmpassword-create').val("");
            modal.find('.modal-body #teacher_username-create').focus();
        });
    </script>
@endpush