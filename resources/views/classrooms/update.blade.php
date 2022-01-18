<!-- Update Classroom Modal -->
<div class="modal fade" id="update-classroom_modal" tabindex="-1" role="dialog" aria-labelledby="updateClassroomHeaderModal" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white align-items-center">
                <h5 class="modal-title" id="updateClassroomHeaderModal">Update Classroom</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            {!! Form::open(['route' => ['sisdeck.classrooms.update', 'id'], 'method' => 'POST']) !!}
            @csrf
            @method('PATCH')
            <div class="modal-body">
                {!! Form::hidden('id', null, ['id' => 'cr_id-update']) !!}
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('code', 'Classroom Code', ['class' => 'form-label']) !!}
                        {!! Form::text('code', null, ['class' => 'form-control', 'maxlength' => 191, 'id' => 'code-update', 'title' => 'Classroom Code', 'placeholder' => 'Insert classroom code', 'readonly']) !!}
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('name', 'Classroom Name', ['class' => 'form-label']) !!}
                        {!! Form::text('name', null, ['class' => 'form-control', 'maxlength' => 191, 'id' => 'name-update', 'title' => 'Classroom Name', 'placeholder' => 'Insert classroom name']) !!}
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('description', 'Classroom Description', ['class' => 'form-label']) !!}
                        {!! Form::textarea('description', null, ['class' => 'form-control', 'maxlength' => 191, 'rows' => 3, 'id' => 'description-update', 'title' => 'Classroom Description', 'placeholder' => 'Insert classroom description']) !!}
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        {!! Form::label('status', 'Classroom Status', ['class' => 'form-label']) !!}
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="radio-inline mr-5">
                            {!! Form::radio('status', 1, false, ['id' => 'status_active-update', 'title' => 'Classroom Status Active']) !!}
                            {!! Form::label('status', 'Active', ['class' => 'form-label']) !!}
                        </label>
                        <label class="radio-inline">
                            {!! Form::radio('status', 0, false, ['id' => 'status_inactive-update', 'title' => 'Classroom Status Inactive']) !!}
                            {!! Form::label('status', 'Inactive', ['class' => 'form-label']) !!}
                        </label>
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
<!-- End of Update Classroom Modal -->