<!-- Create Class Schedule Modal -->
<div class="modal fade" id="create-class-schedule_modal" tabindex="-1" role="dialog" aria-labelledby="createClassScheduleHeaderModal" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white align-items-center">
                <h5 class="modal-title" id="createClassScheduleHeaderModal">Create Class Schedule</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            {!! Form::open(['route' => 'sisdeck.class_schedules.store']) !!}
            <div class="modal-body">
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        @if(!empty($course))
                        {!! Form::label('course_id', 'Course', ['class' => 'form-label']) !!}
                        {!! Form::select('course_id', $course, 'null', ['class' => 'form-control', 'maxlength' => 191, 'id' => 'schedule_course-create', 'title' => 'Course', 'placeholder' => 'Choose schedule course']) !!}
                        @endif
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        @if(!empty($class))
                        {!! Form::label('class_id', 'Class', ['class' => 'form-label']) !!}
                        {!! Form::select('class_id', $class, 'null', ['class' => 'form-control', 'maxlength' => 191, 'id' => 'schedule_class-create', 'title' => 'Class', 'placeholder' => 'Choose schedule class']) !!}
                        @endif
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        @if(!empty($level))
                        {!! Form::label('level_id', 'Level', ['class' => 'form-label']) !!}
                        {!! Form::select('level_id', $level, 'null', ['class' => 'form-control', 'maxlength' => 191, 'id' => 'schedule_level-create', 'title' => 'Level', 'placeholder' => 'Choose schedule level']) !!}
                        @endif
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        @if(!empty($shift))
                        {!! Form::label('shift_id', 'Shift', ['class' => 'form-label']) !!}
                        {!! Form::select('shift_id', $shift, 'null', ['class' => 'form-control', 'maxlength' => 191, 'id' => 'schedule_shift-create', 'title' => 'Shift', 'placeholder' => 'Choose schedule shift']) !!}
                        @endif
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        @if(!empty($classroom))
                        {!! Form::label('classroom_id', 'Classroom', ['class' => 'form-label']) !!}
                        {!! Form::select('classroom_id', $classroom, 'null', ['class' => 'form-control', 'maxlength' => 191, 'id' => 'schedule_classroom-create', 'title' => 'Classroom', 'placeholder' => 'Choose schedule classroom']) !!}
                        @endif
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        @if(!empty($semester))
                        {!! Form::label('semester_id', 'Semester', ['class' => 'form-label']) !!}
                        {!! Form::select('semester_id', $semester, 'null', ['class' => 'form-control', 'maxlength' => 191, 'id' => 'schedule_semester-create', 'title' => 'Semester', 'placeholder' => 'Choose schedule semester']) !!}
                        @endif
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        @if(!empty($batch))
                        {!! Form::label('batch_id', 'Batch', ['class' => 'form-label']) !!}
                        {!! Form::select('batch_id', $batch, 'null', ['class' => 'form-control', 'maxlength' => 191, 'id' => 'schedule_batch-create', 'title' => 'Batch', 'placeholder' => 'Choose schedule batch']) !!}
                        @endif
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        @if(!empty($day))
                        {!! Form::label('day_id', 'Day', ['class' => 'form-label']) !!}
                        {!! Form::select('day_id', $day, 'null', ['class' => 'form-control', 'maxlength' => 191, 'id' => 'schedule_day-create', 'title' => 'Day', 'placeholder' => 'Choose schedule day']) !!}
                        @endif
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        @if(!empty($time))
                        {!! Form::label('time_id', 'Time', ['class' => 'form-label']) !!}
                        {!! Form::select('time_id', $time, 'null', ['class' => 'form-control', 'maxlength' => 191, 'id' => 'schedule_time-create', 'title' => 'Time', 'placeholder' => 'Choose schedule time']) !!}
                        @endif
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('start_date', 'Start Date', ['class' => 'form-label']) !!}
                        {!! Form::date('start_date', null, ['class' => 'form-control', 'maxlength' => 191, 'id' => 'schedule_start_date-create', 'placeholder' => 'Insert schedule start date']) !!}
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('end_date', 'Start Date', ['class' => 'form-label']) !!}
                        {!! Form::date('end_date', null, ['class' => 'form-control', 'maxlength' => 191, 'id' => 'schedule_end_date-create', 'placeholder' => 'Insert schedule end date']) !!}
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        {!! Form::label('status', 'Status', ['class' => 'form-label']) !!}
                    </div>
                    <div class="form-group col-sm-12">
                        <label class="radio-inline mr-5">
                            {!! Form::radio('status', 1, false, ['id' => 'schedule_active-create', 'title' => 'Schedule Status Active']) !!}
                            {!! Form::label('status', 'Active', ['class' => 'form-label']) !!}
                        </label>
                        <label class="radio-inline">
                            {!! Form::radio('status', 0, false, ['id' => 'schedule_inactive-create', 'title' => 'Schedule Status Inactive']) !!}
                            {!! Form::label('status', 'Inactive', ['class' => 'form-label']) !!}
                        </label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-info" id="reset_button-class-schedules">Reset</button>
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<!-- End of Create Class Schedule Modal -->

@push('scripts')
    <script>
        $('#reset_button-class-schedules').on('click', function (event) {
            var modal = $('#create-class-schedule_modal');
            modal.find('.modal-body #schedule_course-create').val("");
            modal.find('.modal-body #schedule_class-create').val("");
            modal.find('.modal-body #schedule_level-create').val("");
            modal.find('.modal-body #schedule_shift-create').val("");
            modal.find('.modal-body #schedule_classroom-create').val("");
            modal.find('.modal-body #schedule_semester-create').val("");
            modal.find('.modal-body #schedule_batch-create').val("");
            modal.find('.modal-body #schedule_day-create').val("");
            modal.find('.modal-body #schedule_time-create').val("");
            modal.find('.modal-body #schedule_start_date-create').val("");
            modal.find('.modal-body #schedule_end_date-create').val("");
            modal.find('.modal-body #schedule_active-create').prop("checked", false);
            modal.find('.modal-body #schedule_inactive-create').prop("checked", false);
            modal.find('.modal-body #schedule_course-create').focus();
        });
    </script>
@endpush