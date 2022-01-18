<div class="table-responsive">
    <table class="table table-bordered table-hover" id="dhs_semesters-table">
        <thead>
            <tr>
                <th class="text-center">Code</th>
                <th>Name</th>
                <th>Duration</th>
                <th>Description</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sisdeckSemesters as $sisdeckSemester)
            <tr>
                <td class="text-center">{{ $sisdeckSemester->code }}</td>
                <td>{{ $sisdeckSemester->name }}</td>
                <td>{{ $sisdeckSemester->duration }}</td>
                <td>{{ $sisdeckSemester->description }}</td>
                <td class="text-center">
                    <div class='btn-group'>
                        <a href="#" data-id="{{ $sisdeckSemester->id }}" data-code="{{ $sisdeckSemester->code }}" data-name="{{ $sisdeckSemester->name }}"
                           data-duration="{{ $sisdeckSemester->duration }}" data-description="{{ $sisdeckSemester->description }}" data-toggle="modal"
                           data-target="#update-semester_modal" title="Update" class='btn btn-warning btn-xs text-white mr-1'><i class="fas fa-fw fa-edit"></i>
                        </a>
                        {!! Form::open(['route' => ['sisdeck.semesters.destroy', $sisdeckSemester->id], 'method' => 'delete']) !!}
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
        $('#update-semester_modal').on('show.bs.modal', function (event) {
            const
                button = $(event.relatedTarget),
                id = button.data('id'),
                code = button.data('code'),
                name = button.data('name'),
                duration = button.data('duration'),
                description = button.data('description'),
                modal = $(this);
                
            modal.find('.modal-body #semester_id-update').val(id);
            modal.find('.modal-body #semester_code-update').val(code);
            modal.find('.modal-body #semester_name-update').val(name);
            modal.find('.modal-body #semester_duration-update').val(duration);
            modal.find('.modal-body #semester_description-update').val(description);

            setTimeout(function () {
                modal.find('.modal-body #semester_name-update').focus();
            }, 100);
        });
    </script>
@endpush