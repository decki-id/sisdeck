<!-- Create Classroom Modal -->
<div class="modal fade" id="create-classroom_modal" tabindex="-1" role="dialog" aria-labelledby="createClassroomHeaderModal" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white align-items-center">
                <h5 class="modal-title" id="createClassroomHeaderModal">Create Course</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            {!! Form::open(['route' => 'sisdeck.classrooms.store']) !!}
            <div class="modal-body">
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('code', 'Classroom Code', ['class' => 'form-label']) !!}
                        {!! Form::text('code', null, ['class' => 'form-control', 'maxlength' => 191, 'id' => 'code-create', 'title' => 'Classroom Code', 'placeholder' => 'Insert classroom name to generate classroom code', 'readonly']) !!}
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('name', 'Classroom Name', ['class' => 'form-label']) !!}
                        {!! Form::text('name', null, ['class' => 'form-control', 'maxlength' => 191, 'id' => 'name-create', 'title' => 'Classroom Name', 'placeholder' => 'Insert classroom name', 'oninput' => "classroomCodeValue()"]) !!}
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('description', 'Classroom Description', ['class' => 'form-label']) !!}
                        {!! Form::textarea('description', null, ['class' => 'form-control', 'maxlength' => 191, 'rows' => 3, 'id' => 'description-create', 'title' => 'Classroom Description', 'placeholder' => 'Insert classroom description']) !!}
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        {!! Form::label('status', 'Classroom Status', ['class' => 'form-label']) !!}
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="radio-inline mr-5">
                            {!! Form::radio('status', 1, false, ['id' => 'status_active-create', 'title' => 'Classroom Status Active']) !!}
                            {!! Form::label('status', 'Active', ['class' => 'form-label']) !!}
                        </label>
                        <label class="radio-inline">
                            {!! Form::radio('status', 0, false, ['id' => 'status_inactive-create', 'title' => 'Classroom Status Inactive']) !!}
                            {!! Form::label('status', 'Inactive', ['class' => 'form-label']) !!}
                        </label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-info" id="reset_button-classrooms">Reset</button>
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<!-- End of Create Classroom Modal -->

@push('scripts')
    <script>
        $('#reset_button-classrooms').on('click', function (event) {
            var modal = $('#create-classroom_modal');
            modal.find('.modal-body #code-create').val("");
            modal.find('.modal-body #name-create').val("");
            modal.find('.modal-body #description-create').val("");
            modal.find('.modal-body #status_active-create').prop('checked', false);
            modal.find('.modal-body #status_inactive-create').prop('checked', false);
            modal.find('.modal-body #name-create').focus();
        });
    </script>
@endpush