<!-- Create Course Modal -->
<div class="modal fade" id="create-course_modal" tabindex="-1" role="dialog" aria-labelledby="createCourseHeaderModal" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white align-items-center">
                <h5 class="modal-title" id="createCourseHeaderModal">Create Course</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            {!! Form::open(['route' => 'sisdeck.courses.store']) !!}
            <div class="modal-body">
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('course_code', 'Course Code', ['class' => 'form-label']) !!}
                        {!! Form::text('course_code', null, ['class' => 'form-control', 'maxlength' => 191, 'id' => 'course_code-create', 'title' => 'Course Code', 'placeholder' => 'Insert course name to generate course code', 'readonly']) !!}
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('course_name', 'Course Name', ['class' => 'form-label']) !!}
                        {!! Form::text('course_name', null, ['class' => 'form-control', 'maxlength' => 191, 'id' => 'course_name-create', 'title' => 'Course Name', 'placeholder' => 'Insert course name', 'oninput' => "courseCodeValue()"]) !!}
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('course_description', 'Course Description', ['class' => 'form-label']) !!}
                        {!! Form::textarea('course_description', null, ['class' => 'form-control', 'maxlength' => 191, 'rows' => 3, 'id' => 'course_description-create', 'title' => 'Course Description', 'placeholder' => 'Insert course description']) !!}
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        {!! Form::label('course_status', 'Course Status', ['class' => 'form-label']) !!}
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="radio-inline mr-5">
                            {!! Form::radio('course_status', 1, false, ['id' => 'course_status_active-create', 'title' => 'Course Status Active']) !!}
                            {!! Form::label('course_status', 'Active', ['class' => 'form-label']) !!}
                        </label>
                        <label class="radio-inline">
                            {!! Form::radio('course_status', 0, false, ['id' => 'course_status_inactive-create', 'title' => 'Course Status Inactive']) !!}
                            {!! Form::label('course_status', 'Inactive', ['class' => 'form-label']) !!}
                        </label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-info" id="reset_button-courses">Reset</button>
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<!-- End of Create Course Modal -->

@push('scripts')
    <script>
        $('#reset_button-courses').on('click', function (event) {
            var modal = $('#create-course_modal');
            modal.find('.modal-body #course_code-create').val("");
            modal.find('.modal-body #course_name-create').val("");
            modal.find('.modal-body #course_description-create').val("");
            modal.find('.modal-body #course_status_active-create').prop('checked', false);
            modal.find('.modal-body #course_status_inactive-create').prop('checked', false);
            modal.find('.modal-body #course_name-create').focus();
        });
    </script>
@endpush