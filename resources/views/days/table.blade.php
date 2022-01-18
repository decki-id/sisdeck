<div class="table-responsive">
    <table class="table table-bordered table-hover" id="dhs_days-table">
        <thead>
            <tr>
                <th>Day</th>
                <th class="text-center" colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sisdeckDays as $sisdeckDay)
            <tr>
                <td>{{ $sisdeckDay->day }}</td>
                <td class="text-center">
                    <div class='btn-group'>
                        <a href="#" data-id="{{ $sisdeckDay->id }}" data-day="{{ $sisdeckDay->day }}" data-toggle="modal" data-target="#update-day_modal"
                           title="Update" class='btn btn-warning btn-xs text-white mr-1'><i class="fas fa-fw fa-edit"></i>
                        </a>
                        {!! Form::open(['route' => ['sisdeck.days.destroy', $sisdeckDay->id], 'method' => 'delete']) !!}
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
        $('#update-day_modal').on('show.bs.modal', function (event) {
            const
                button = $(event.relatedTarget),
                id = button.data('id'),
                day = button.data('day'),
                modal = $(this);
                
            modal.find('.modal-body #id-update').val(id);
            modal.find('.modal-body #day-update').val(day).attr('selected', 'selected');

            setTimeout(function () {
                modal.find('.modal-body #day-update').focus();
            }, 100);
        });
    </script>
@endpush