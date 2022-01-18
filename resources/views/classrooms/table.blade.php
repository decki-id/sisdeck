<div class="table-responsive">
    <table class="table table-bordered table-hover" id="dhs_classrooms-table">
        <thead>
            <tr>
                <th class="text-center">Code</th>
                <th>Classroom</th>
                <th>Description</th>
                <th class="text-center">Status</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sisdeckClassrooms as $classroom)
            @if($classroom->status == 1)
                @php $status = "Active" @endphp
            @else
                @php $status = "Inactive" @endphp
            @endif
            <tr>
                <td class="text-center">{{ $classroom->code }}</td>
                <td>{{ $classroom->name }}</td>
                <td>{{ $classroom->description }}</td>
                <td class="text-center">{{ $status }}</td>
                <td class="text-center">
                    <div class='btn-group'>
                        <a href="#" data-id="{{ $classroom->id }}" data-code="{{ $classroom->code }}" data-name="{{ $classroom->name }}"
                           data-description="{{ $classroom->description }}" data-status="{{ $classroom->status }}" data-toggle="modal"
                           data-target="#update-classroom_modal" title="Update" class='btn btn-warning btn-xs text-white mr-1'>
                           <i class="fas fa-fw fa-edit"></i>
                        </a>
                        {!! Form::open(['route' => ['sisdeck.classrooms.destroy', $classroom->id], 'method' => 'delete']) !!}
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
        $('#update-classroom_modal').on('show.bs.modal', function (event) {
            const
                button = $(event.relatedTarget),
                id = button.data('id'),
                code = button.data('code'),
                name = button.data('name'),
                description = button.data('description'),
                status = button.data('status'),
                modal = $(this);
                
            modal.find('.modal-body #cr_id-update').val(id);
            modal.find('.modal-body #code-update').val(code);
            modal.find('.modal-body #name-update').val(name);
            modal.find('.modal-body #description-update').val(description);
            if (status == 1) {
                modal.find('.modal-body #status_active-update').prop('checked', true);
            } else {
                modal.find('.modal-body #status_inactive-update').prop('checked', true);
            }

            setTimeout(function () {
                modal.find('.modal-body #name-update').focus();
            }, 100);
        });
    </script>
@endpush