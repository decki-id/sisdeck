<div class="table-responsive">
    <table class="table table-bordered table-hover" id="dhs_levels-table">
        <thead>
            <tr>
                <th class="text-center">Course ID</th>
                <th class="text-center">Level</th>
                <th class="text-center">Description</th>
                <th class="text-center" colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sisdeckLevels as $sisdeckLevel)
            <tr>
                <td>{{ $sisdeckLevel->course_id }}</td>
                <td>{{ $sisdeckLevel->level }}</td>
                <td>{{ $sisdeckLevel->description }}</td>
                <td>
                    {!! Form::open(['route' => ['sisdeck.levels.destroy', $sisdeckLevel->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('sisdeck.levels.show', [$sisdeckLevel->id]) }}" class='btn btn-default btn-xs'><i class="fas fa-fw fa-eye"></i></a>
                        <a href="{{ route('sisdeck.levels.edit', [$sisdeckLevel->id]) }}" class='btn btn-default btn-xs'><i class="fas fa-fw fa-edit"></i></a>
                        {!! Form::button('<i class="fas fa-fw fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
