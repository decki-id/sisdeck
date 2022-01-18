<div class="table-responsive">
    <table class="table table-bordered table-hover" id="dhs_courses-table">
        <thead>
            <tr>
                <th class="text-center">Course Code</th>
                <th>Course Name</th>
                <th>Course Description</th>
                <th class="text-center">Course Status</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sisdeckCourses as $sisdeckCourse)
            @if($sisdeckCourse->course_status == 1)
                @php $status = "Active" @endphp
            @else
                @php $status = "Inactive" @endphp
            @endif
            <tr>
                <td class="text-center">{{ $sisdeckCourse->course_code }}</td>
                <td>{{ $sisdeckCourse->course_name }}</td>
                <td>{{ $sisdeckCourse->course_description }}</td>
                <td class="text-center">{{ $status }}</td>
                <td class="text-center">
                    <div class='btn-group'>
                        <a href="#" data-course_id="{{ $sisdeckCourse->course_id }}" data-course_code="{{ $sisdeckCourse->course_code }}"
                           data-course_name="{{ $sisdeckCourse->course_name }}" data-course_description="{{ $sisdeckCourse->course_description }}"
                           data-course_status="{{ $sisdeckCourse->course_status }}" data-toggle="modal" data-target="#update-course_modal" title="Update"
                           class='btn btn-warning btn-xs text-white mr-1'><i class="fas fa-fw fa-edit"></i>
                        </a>
                        {!! Form::open(['route' => ['sisdeck.courses.destroy', $sisdeckCourse->course_id], 'method' => 'delete']) !!}
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
        $('#update-course_modal').on('show.bs.modal', function (event) {
            const
                button = $(event.relatedTarget),
                course_id = button.data('course_id'),
                course_code = button.data('course_code'),
                course_name = button.data('course_name'),
                course_description = button.data('course_description'),
                course_status = button.data('course_status'),
                modal = $(this);
                
            modal.find('.modal-body #course_id-update').val(course_id);
            modal.find('.modal-body #course_code-update').val(course_code);
            modal.find('.modal-body #course_name-update').val(course_name);
            modal.find('.modal-body #course_description-update').val(course_description);
            if (course_status == 1) {
                modal.find('.modal-body #course_status_active-update').prop('checked', true);
            } else {
                modal.find('.modal-body #course_status_inactive-update').prop('checked', true);
            }

            setTimeout(function () {
                modal.find('.modal-body #course_name-update').focus();
            }, 100);
        });
    </script>
@endpush