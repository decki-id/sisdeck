<div class="table-responsive">
    <table class="table table-bordered table-hover" id="sisdeckStudents-table">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Birthdate</th>
                <th>Gender</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Address</th>
                <th>Sub District</th>
                <th>District</th>
                <th>Province</th>
                <th>Nationality</th>
                <th>Post Code</th>
                <th>Current Address</th>
                <th>Guardian Name</th>
                <th>Guardian Relation</th>
                <th>Guardian Phone</th>
                <th>Status</th>
                <th>Date Registered</th>
                <th>User Id</th>
                <th>Class Id</th>
                <th>Image</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($sisdeckStudents as $sisdeckStudent)
            <tr>
                <td>{{ $sisdeckStudent->first_name }}</td>
                <td>{{ $sisdeckStudent->last_name }}</td>
                <td>{{ $sisdeckStudent->birthdate }}</td>
                <td>{{ $sisdeckStudent->gender }}</td>
                <td>{{ $sisdeckStudent->phone }}</td>
                <td>{{ $sisdeckStudent->email }}</td>
                <td>{{ $sisdeckStudent->address }}</td>
                <td>{{ $sisdeckStudent->sub_district }}</td>
                <td>{{ $sisdeckStudent->district }}</td>
                <td>{{ $sisdeckStudent->province }}</td>
                <td>{{ $sisdeckStudent->nationality }}</td>
                <td>{{ $sisdeckStudent->post_code }}</td>
                <td>{{ $sisdeckStudent->current_address }}</td>
                <td>{{ $sisdeckStudent->guardian_name }}</td>
                <td>{{ $sisdeckStudent->guardian_relation }}</td>
                <td>{{ $sisdeckStudent->guardian_phone }}</td>
                <td>{{ $sisdeckStudent->status }}</td>
                <td>{{ $sisdeckStudent->date_registered }}</td>
                <td>{{ $sisdeckStudent->user_id }}</td>
                <td>{{ $sisdeckStudent->class_id }}</td>
                <td>{{ $sisdeckStudent->image }}</td>
                <td>
                    {!! Form::open(['route' => ['sisdeckStudents.destroy', $sisdeckStudent->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('sisdeckStudents.show', [$sisdeckStudent->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('sisdeckStudents.edit', [$sisdeckStudent->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
