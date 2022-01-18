<!-- Update Role Modal -->
<div class="modal fade" id="update-role_modal" tabindex="-1" role="dialog" aria-labelledby="updateRoleHeaderModal" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white align-items-center">
                <h5 class="modal-title" id="updateRoleHeaderModal">Update Role</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            {!! Form::open(['route' => ['sisdeck.roles.update', 'role_id'], 'method' => 'POST']) !!}
            @csrf
            @method('PATCH')
            <div class="modal-body">
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('role_id', 'Role ID', ['class' => 'form-label']) !!}
                        {!! Form::text('role_id', null, ['class' => 'form-control', 'maxlength' => 191, 'id' => 'role_id-update', 'title' => 'Role ID', 'placeholder' => 'Insert role id', 'readonly']) !!}
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('role_name', 'Role Name', ['class' => 'form-label']) !!}
                        {!! Form::text('role_name', null, ['class' => 'form-control', 'maxlength' => 191, 'id' => 'role_name-update', 'title' => 'Role Name', 'placeholder' => 'Insert role name']) !!}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                {!! Form::submit('Update', ['class' => 'btn btn-warning text-white']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<!-- End of Update Role Modal -->