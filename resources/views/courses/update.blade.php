<!-- Update Course Modal -->
<div class="modal fade" id="update-course_modal" tabindex="-1" role="dialog" aria-labelledby="updateCourseHeaderModal" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white align-items-center">
                <h5 class="modal-title" id="updateCourseHeaderModal">Update Course</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            {!! Form::open(['route' => ['sisdeck.courses.update', 'course_id'], 'method' => 'POST']) !!}
            @csrf
            @method('PATCH')
            <div class="modal-body">
                {!! Form::hidden('course_id', null, ['id' => 'course_id-update']) !!}
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('course_code', 'Course Code', ['class' => 'form-label']) !!}
                        {!! Form::text('course_code', null, ['class' => 'form-control', 'maxlength' => 191, 'id' => 'course_code-update', 'title' => 'Course Code', 'placeholder' => 'Insert course code', 'readonly']) !!}
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('course_name', 'Course Name', ['class' => 'form-label']) !!}
                        {!! Form::text('course_name', null, ['class' => 'form-control', 'maxlength' => 191, 'id' => 'course_name-update', 'title' => 'Course Name', 'placeholder' => 'Insert course name']) !!}
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('course_description', 'Course Description', ['class' => 'form-label']) !!}
                        {!! Form::textarea('course_description', null, ['class' => 'form-control', 'maxlength' => 191, 'rows' => 3, 'id' => 'course_description-update', 'title' => 'Course Description', 'placeholder' => 'Insert course description']) !!}
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        {!! Form::label('course_status', 'Course Status', ['class' => 'form-label']) !!}
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="radio-inline mr-5">
                            {!! Form::radio('course_status', 1, false, ['id' => 'course_status_active-update', 'title' => 'Course Status Active']) !!}
                            {!! Form::label('course_status', 'Active', ['class' => 'form-label']) !!}
                        </label>
                        <label class="radio-inline">
                            {!! Form::radio('course_status', 0, false, ['id' => 'course_status_inactive-update', 'title' => 'Course Status Inactive']) !!}
                            {!! Form::label('course_status', 'Inactive', ['class' => 'form-label']) !!}
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
<!-- End of Update Course Modal -->