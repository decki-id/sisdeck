<!-- Create Semester Modal -->
<div class="modal fade" id="create-semester_modal" tabindex="-1" role="dialog" aria-labelledby="createSemesterHeaderModal" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white align-items-center">
                <h5 class="modal-title" id="createSemesterHeaderModal">Create Semester</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            {!! Form::open(['route' => 'sisdeck.semesters.store']) !!}
            <div class="modal-body">
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('code', 'Code', ['class' => 'form-label']) !!}
                        {!! Form::text('code', null, ['class' => 'form-control', 'maxlength' => 191, 'id' => 'semester_code-create', 'title' => 'Code', 'placeholder' => 'Insert name to generate code', 'readonly']) !!}
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('name', 'Name', ['class' => 'form-label']) !!}
                        {!! Form::text('name', null, ['class' => 'form-control', 'maxlength' => 191, 'id' => 'semester_name-create', 'title' => 'Name', 'placeholder' => 'Insert name', 'oninput' => "semesterCodeValue()"]) !!}
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('duration', 'Duration', ['class' => 'form-label']) !!}
                        {!! Form::text('duration', null, ['class' => 'form-control', 'maxlength' => 191, 'id' => 'semester_duration-create', 'title' => 'Duration', 'placeholder' => 'Insert duration']) !!}
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('description', 'Description', ['class' => 'form-label']) !!}
                        {!! Form::textarea('description', null, ['class' => 'form-control', 'maxlength' => 191, 'rows' => 3, 'id' => 'semester_description-create', 'title' => 'Description', 'placeholder' => 'Insert description']) !!}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-info" id="reset_button-semesters">Reset</button>
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<!-- End of Create Semester Modal -->

@push('scripts')
    <script>
        $('#reset_button-semesters').on('click', function (event) {
            var modal = $('#create-semester_modal');
            modal.find('.modal-body #semester_code-create').val("");
            modal.find('.modal-body #semester_name-create').val("");
            modal.find('.modal-body #semester_duration-create').val("");
            modal.find('.modal-body #semester_description-create').val("");
            modal.find('.modal-body #semester_name-create').focus();
        });
    </script>
@endpush