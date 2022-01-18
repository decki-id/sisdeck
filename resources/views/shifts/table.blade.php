<div class="table-responsive">
    <table class="table table-bordered table-hover" id="dhs_shifts-table">
        <thead>
            <tr>
                <th class="text-center">Shift</th>
                <th class="text-center" colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sisdeckShifts as $sisdeckShift)
            <tr>
                <td>{{ $sisdeckShift->shift }}</td>
                <td>
                    {!! Form::open(['route' => ['sisdeck.shifts.destroy', $sisdeckShift->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('sisdeck.shifts.show', [$sisdeckShift->id]) }}" class='btn btn-default btn-xs'><i class="fas fa-fw fa-eye"></i></a>
                        <a href="{{ route('sisdeck.shifts.edit', [$sisdeckShift->id]) }}" class='btn btn-default btn-xs'><i class="fas fa-fw fa-edit"></i></a>
                        {!! Form::button('<i class="fas fa-fw fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
