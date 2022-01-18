<div class="table-responsive">
    <table class="table table-bordered table-hover" id="dhs_faculties-table">
        <thead>
            <tr>
                <th class="text-center">Name</th>
                <th class="text-center">Code</th>
                <th class="text-center">Description</th>
                <th class="text-center">Status</th>
                <th class="text-center" colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sisdeckFaculties as $sisdeckFaculty)
            <tr>
                <td>{{ $sisdeckFaculty->name }}</td>
                <td>{{ $sisdeckFaculty->code }}</td>
                <td>{{ $sisdeckFaculty->description }}</td>
                <td>{{ $sisdeckFaculty->status }}</td>
                <td>
                    {!! Form::open(['route' => ['sisdeck.faculties.destroy', $sisdeckFaculty->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('sisdeck.faculties.show', [$sisdeckFaculty->id]) }}" class='btn btn-default btn-xs'><i class="fas fa-fw fa-eye"></i></a>
                        <a href="{{ route('sisdeck.faculties.edit', [$sisdeckFaculty->id]) }}" class='btn btn-default btn-xs'><i class="fas fa-fw fa-edit"></i></a>
                        {!! Form::button('<i class="fas fa-fw fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
