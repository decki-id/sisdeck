<div class="table-responsive">
    <table class="table table-bordered table-hover" id="dhs_times-table">
        <thead>
            <tr>
                <th class="text-center">Time</th>
                <th class="text-center" colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sisdeckTimes as $sisdeckTime)
            <tr>
                <td>{{ $sisdeckTime->time }}</td>
                <td>
                    {!! Form::open(['route' => ['sisdeck.times.destroy', $sisdeckTime->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('sisdeck.times.show', [$sisdeckTime->id]) }}" class='btn btn-default btn-xs'><i class="fas fa-fw fa-eye"></i></a>
                        <a href="{{ route('sisdeck.times.edit', [$sisdeckTime->id]) }}" class='btn btn-default btn-xs'><i class="fas fa-fw fa-edit"></i></a>
                        {!! Form::button('<i class="fas fa-fw fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
