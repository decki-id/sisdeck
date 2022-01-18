<div class="table-responsive">
    <table class="table table-bordered table-hover" id="dhs_attendances-table">
        <thead>
            <tr>
                <th class="text-center">Student Id</th>
                <th class="text-center">Class Id</th>
                <th class="text-center">Subject Id</th>
                <th class="text-center">Teacher Id</th>
                <th class="text-center">Status</th>
                <th class="text-center" colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sisdeckAttendances as $sisdeckAttendance)
            <tr>
                <td>{{ $sisdeckAttendance->student_id }}</td>
                <td>{{ $sisdeckAttendance->class_id }}</td>
                <td>{{ $sisdeckAttendance->subject_id }}</td>
                <td>{{ $sisdeckAttendance->teacher_id }}</td>
                <td>{{ $sisdeckAttendance->status }}</td>
                <td>
                    {!! Form::open(['route' => ['sisdeck.attendances.destroy', $sisdeckAttendance->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('sisdeck.attendances.show', [$sisdeckAttendance->id]) }}" class='btn btn-default btn-xs'><i class="fas fa-fw fa-eye"></i></a>
                        <a href="{{ route('sisdeck.attendances.edit', [$sisdeckAttendance->id]) }}" class='btn btn-default btn-xs'><i class="fas fa-fw fa-edit"></i></a>
                        {!! Form::button('<i class="fas fa-fw fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
