<div class="table-responsive">
    <table class="table table-bordered table-hover" id="dhs_classschedules-table">
        <thead>
            <tr>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Status</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sisdeckClassSchedules as $sisdeckClassSchedule)
            <tr>
                <td>{{ $sisdeckClassSchedule->start_time }}</td>
                <td>{{ $sisdeckClassSchedule->end_time }}</td>
                <td>{{ $sisdeckClassSchedule->status }}</td>
                <td class="text-center">
                    <div class='btn-group'>
                        @php
                            $course = $sisdeckClassSchedule->course->course_name;
                            $class = $sisdeckClassSchedule->class->class_name;
                            $level = $sisdeckClassSchedule->level->level;
                            $shift = $sisdeckClassSchedule->shift->shift;
                            $classroom = $sisdeckClassSchedule->classroom->name;
                            $semester = $sisdeckClassSchedule->semester->name;
                            $batch = $sisdeckClassSchedule->batch->year;
                            $day = $sisdeckClassSchedule->day->day;
                            $time = $sisdeckClassSchedule->time->time;
                        @endphp
                        <a href="#" data-id="{{ $sisdeckClassSchedule->id }}" data-course="{{ $course }}" data-class="{{ $class }}"
                           data-level="{{ $level }}" data-shift="{{ $shift }}" data-classroom="{{ $classroom }}" data-semester="{{ $semester }}"
                           data-batch="{{ $batch }}" data-day="{{ $day }}" data-time="{{ $time }}" data-start_time="{{ $sisdeckClassSchedule->start_time }}"
                           data-end_time="{{ $sisdeckClassSchedule->end_time }}" data-status="{{ $sisdeckClassSchedule->status }}" data-toggle="modal"
                           data-target="#read-class-schedule_modal" title="Detail" class="btn btn-success btn-xs mr-1"><i class="fas fa-fw fa-eye"></i>
                        </a>
                        <a href="#" data-id="{{ $sisdeckClassSchedule->id }}" data-course_id="{{ $sisdeckClassSchedule->course_id }}"
                           data-class_id="{{ $sisdeckClassSchedule->class_id }}" data-level_id="{{ $sisdeckClassSchedule->level_id }}"
                           data-shift_id="{{ $sisdeckClassSchedule->shift_id }}" data-classroom_id="{{ $sisdeckClassSchedule->classroom_id }}"
                           data-semester_id="{{ $sisdeckClassSchedule->semester_id }}" data-batch_id="{{ $sisdeckClassSchedule->batch_id }}"
                           data-day_id="{{ $sisdeckClassSchedule->day_id }}" data-time_id="{{ $sisdeckClassSchedule->time_id }}"
                           data-start_time="{{ $sisdeckClassSchedule->start_time }}" data-end_time="{{ $sisdeckClassSchedule->end_time }}"
                           data-status="{{ $sisdeckClassSchedule->status }}" data-toggle="modal" data-target="#update-user_modal" title="Update"
                           class="btn btn-warning btn-xs text-white mr-1"><i class="fas fa-fw fa-edit"></i>
                        </a>
                        {!! Form::open(['route' => ['sisdeck.class_schedules.destroy', $sisdeckClassSchedule->id], 'method' => 'delete']) !!}
                        {!! Form::button('<i class="fas fa-fw fa-trash"></i>', ['type' => 'submit', 'title' => 'Delete', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        {!! Form::close() !!}
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@push('scripts')
    <script>
        $('#read-class-schedule_modal').on('show.bs.modal', function (event) {
            const
                button = $(event.relatedTarget),
                id = button.data('id'),
                course = button.data('course'),
                class = button.data('class'),
                level = button.data('level'),
                shift = button.data('shift'),
                classroom = button.data('classroom'),
                semester = button.data('semester'),
                batch = button.data('batch'),
                day = button.data('day'),
                time = button.data('time'),
                start_time = button.data('start_time'),
                end_time = button.data('end_time'),
                status = button.data('status'),
                modal = $(this);

            modal.find('.modal-body table tbody tr #class-schedule-id_value').text(id);
            modal.find('.modal-body table tbody tr #class-schedule-course_value').text(course);
            modal.find('.modal-body table tbody tr #class-schedule-class_value').text(class);
            modal.find('.modal-body table tbody tr #class-schedule-level_value').text(level);
            modal.find('.modal-body table tbody tr #class-schedule-shift_value').text(shift);
            modal.find('.modal-body table tbody tr #class-schedule-classroom_value').text(classroom);
            modal.find('.modal-body table tbody tr #class-schedule-semester_value').text(semester);
            modal.find('.modal-body table tbody tr #class-schedule-batch_value').text(batch);
            modal.find('.modal-body table tbody tr #class-schedule-day_value').text(day);
            modal.find('.modal-body table tbody tr #class-schedule-time_value').text(time);
            modal.find('.modal-body table tbody tr #class-schedule-start-time_value').text(start_time);
            modal.find('.modal-body table tbody tr #class-schedule-end-time_value').text(end_time);
            modal.find('.modal-body table tbody tr #class-schedule-status_value').text(status);
        });

        $('#update-class-schedule_modal').on('show.bs.modal', function (event) {
            const
                button = $(event.relatedTarget),
                id = button.data('id'),
                course_id = button.data('course_id'),
                class_id = button.data('class_id'),
                level_id = button.data('level_id'),
                shift_id = button.data('shift_id'),
                classroom_id = button.data('classroom_id'),
                semester_id = button.data('semester_id'),
                batch_id = button.data('batch_id'),
                day_id = button.data('day_id'),
                time_id = button.data('time_id'),
                start_time = button.data('start_time'),
                end_time = button.data('end_time'),
                status = button.data('status'),
                modal = $(this);

            modal.find('.modal-body #class_schedule_id-update').val(id);
            modal.find('.modal-body #class_schedule_course-update').val(course_id).attr('selected', 'selected');
            modal.find('.modal-body #class_schedule_class-update').val(class_id).attr('selected', 'selected');
            modal.find('.modal-body #class_schedule_level-update').val(level_id).attr('selected', 'selected');
            modal.find('.modal-body #class_schedule_shift-update').val(shift_id).attr('selected', 'selected');
            modal.find('.modal-body #class_schedule_classroom-update').val(classroom_id).attr('selected', 'selected');
            modal.find('.modal-body #class_schedule_semester-update').val(semester_id).attr('selected', 'selected');
            modal.find('.modal-body #class_schedule_batch-update').val(batch_id).attr('selected', 'selected');
            modal.find('.modal-body #class_schedule_day-update').val(day_id).attr('selected', 'selected');
            modal.find('.modal-body #class_schedule_time-update').val(time_id).attr('selected', 'selected');
            modal.find('.modal-body #class_schedule_start_time-update').val(start_time);
            modal.find('.modal-body #class_schedule_end_time-update').val(end_time);
            modal.find('.modal-body #class_schedule_status-update').val(status);

            setTimeout(function () {
                modal.find('.modal-body #class_schedule_course-update').focus();
            }, 100);
        });
    </script>
@endpush