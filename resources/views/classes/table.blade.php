<div class="table-responsive">
    <table class="table table-bordered table-hover" id="dhs_classes-table">
        <thead>
            <tr>
                <th class="text-center">Class Code</th>
                <th>Class Name</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sisdeckClasses as $class)
            <tr>
                <td class="text-center">{{ $class->class_code }}</td>
                <td>{{ $class->class_name }}</td>
                <td class="text-center">
                    <div class='btn-group'>
                        <a href="#" data-class_id="{{ $class->class_id }}" data-class_code="{{ $class->class_code }}"
                           data-class_name="{{ $class->class_name }}" data-toggle="modal" data-target="#update-class_modal" title="Update"
                           class='btn btn-warning btn-xs text-white mr-1'><i class="fas fa-fw fa-edit"></i>
                        </a>
                        {!! Form::open(['route' => ['sisdeck.classes.destroy', $class->class_id], 'method' => 'delete']) !!}
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
        $('#update-class_modal').on('show.bs.modal', function (event) {
            const
                button = $(event.relatedTarget),
                class_id = button.data('class_id'),
                class_code = button.data('class_code'),
                class_name = button.data('class_name'),
                modal = $(this);
                
            modal.find('.modal-body #class_id-update').val(class_id);
            modal.find('.modal-body #class_code-update').val(class_code);
            modal.find('.modal-body #class_name-update').val(class_name);

            setTimeout(function () {
                modal.find('.modal-body #class_name-update').focus();
            }, 100);
        });
    </script>
@endpush