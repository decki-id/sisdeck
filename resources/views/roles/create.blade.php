<!-- Create Role Modal -->
<div class="modal fade" id="create-role_modal" tabindex="-1" role="dialog" aria-labelledby="createRoleHeaderModal" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white align-items-center">
                <h5 class="modal-title" id="createRoleHeaderModal">Create Role</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            {!! Form::open(['route' => 'sisdeck.roles.store']) !!}
            <div class="modal-body">
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('role_name', 'Role Name', ['class' => 'form-label']) !!}
                        {!! Form::text('role_name', null, ['class' => 'form-control', 'maxlength' => 191, 'id' => 'role_name-create', 'title' => 'Role Name', 'placeholder' => 'Insert role name']) !!}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-info" id="reset_button-roles">Reset</button>
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<!-- End of Create Role Modal -->

@push('scripts')
    <script>
        $('#reset_button-roles').on('click', function (event) {
            var modal = $('#create-role_modal');
            modal.find('.modal-body #role_name-create').val("");
            modal.find('.modal-body #role_name-create').focus();
        });
    </script>
@endpush