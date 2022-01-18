<div class="table-responsive">
    <table class="table table-bordered table-hover" id="dhs_batches-table">
        <thead>
            <tr>
                <th class="text-center">Batch Year</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sisdeckBatches as $sisdeckBatch)
            <tr>
                <td class="text-center">{{ $sisdeckBatch->year }}</td>
                <td class="text-center">
                    <div class='btn-group'>
                        <a href="#" data-batch_id="{{ $sisdeckBatch->batch_id }}" data-year="{{ $sisdeckBatch->year }}" data-toggle="modal"
                           data-target="#update-batch_modal" title="Update" class='btn btn-warning btn-xs text-white mr-1'>
                           <i class="fas fa-fw fa-edit"></i>
                        </a>
                        {!! Form::open(['route' => ['sisdeck.batches.destroy', $sisdeckBatch->batch_id], 'method' => 'delete']) !!}
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
        $('#update-batch_modal').on('show.bs.modal', function (event) {
            const
                button = $(event.relatedTarget),
                batch_id = button.data('batch_id'),
                year = button.data('year'),
                modal = $(this);
                
            modal.find('.modal-body #batch_id-update').val(batch_id);
            modal.find('.modal-body #year-update').val(year).attr('selected', 'selected');

            setTimeout(function () {
                modal.find('.modal-body #year-update').focus();
            }, 100);
        });
    </script>
@endpush