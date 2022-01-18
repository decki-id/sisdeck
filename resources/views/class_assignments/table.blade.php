<div class="table-responsive">
    <table class="table table-bordered table-hover" id="dhs_classassignments-table">
        <thead>
            <tr>
                <th>Course Id</th>
                <th>Level Id</th>
                <th>Shift Id</th>
                <th>Classroom Id</th>
                <th>Batch Id</th>
                <th>Day Id</th>
                <th>Time Id</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sisdeckClassAssignments as $sisdeckClassAssignment)
            <tr>
                <td>{{ $sisdeckClassAssignment->course_id }}</td>
                <td>{{ $sisdeckClassAssignment->level_id }}</td>
                <td>{{ $sisdeckClassAssignment->shift_id }}</td>
                <td>{{ $sisdeckClassAssignment->classroom_id }}</td>
                <td>{{ $sisdeckClassAssignment->batch_id }}</td>
                <td>{{ $sisdeckClassAssignment->day_id }}</td>
                <td>{{ $sisdeckClassAssignment->time_id }}</td>
                <td>
                    <div class='btn-group'>
                        <a href="{{ route('sisdeck.class_assignments.show', [$sisdeckClassAssignment->id]) }}" class='btn btn-default btn-xs'><i class="fas fa-fw fa-eye"></i></a>
                        <a href="{{ route('sisdeck.class_assignments.edit', [$sisdeckClassAssignment->id]) }}" class='btn btn-default btn-xs'><i class="fas fa-fw fa-edit"></i></a>
                        {!! Form::open(['route' => ['sisdeck.class_assignments.destroy', $sisdeckClassAssignment->id], 'method' => 'delete']) !!}
                        {!! Form::button('<i class="fas fa-fw fa-trash"></i>', ['type' => 'submit', 'title' => 'Delete', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        {!! Form::close() !!}
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>