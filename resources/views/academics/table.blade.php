<div class="table-responsive">
    <table class="table table-bordered table-hover" id="dhs_academics-table">
        <thead>
            <tr>
                <th class="text-center">Academic Year</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sisdeckAcademics as $sisdeckAcademic)
            <tr>
                <td class="text-center">{{ $sisdeckAcademic->from }} - {{ $sisdeckAcademic->until }}</td>
                <td class="text-center">
                    <div class='btn-group'>
                        <a href="#" data-ac_id="{{ $sisdeckAcademic->id }}" data-from="{{ $sisdeckAcademic->from }}" data-until="{{ $sisdeckAcademic->until }}"
                           data-toggle="modal" data-target="#update-academic_modal" title="Update" class='btn btn-warning btn-xs text-white mr-1'>
                           <i class="fas fa-fw fa-edit"></i>
                        </a>
                        {!! Form::open(['route' => ['sisdeck.academics.destroy', $sisdeckAcademic->id], 'method' => 'delete']) !!}
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
        $('#update-academic_modal').on('show.bs.modal', function (event) {
            const
                button = $(event.relatedTarget),
                ac_id = button.data('ac_id'),
                from = button.data('from'),
                until = button.data('until'),
                modal = $(this);
                
            modal.find('.modal-body #ac_id-update').val(ac_id);
            modal.find('.modal-body #ac_from-update').val(from).attr('selected', 'selected');
            modal.find('.modal-body #ac_until-update').val(until).attr('selected', 'selected');

            setTimeout(function () {
                modal.find('.modal-body #ac_from-update').focus();
            }, 100);
        });
    </script>
@endpush