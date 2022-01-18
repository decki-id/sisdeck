<div class="table-responsive">
    <table class="table table-bordered table-hover" id="dhs_teachers-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th class="text-center">Status</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sisdeckTeachers as $teacher)
            @if($teacher->status == 1)
                @php $status = "Active" @endphp
            @else
                @php $status = "Inactive" @endphp
            @endif
            <tr>
                <td>{{ $teacher->first_name }} . " " . {{ $teacher->last_name }}</td>
                <td>{{ $teacher->phone }}</td>
                <td>{{ $teacher->email }}</td>
                <td class="text-center">{{ $status }}</td>
                <td class="text-center">
                    <div class="btn-group">
                        <a href="#" class="btn btn-success btn-xs mr-1"><i class="fas fa-fw fa-eye"></i></a>
                        <a href="#" class="btn btn-warning btn-xs text-white mr-1"><i class="fas fa-fw fa-edit"></i></a>
                        {!! Form::open(['route' => ['sisdeck.teachers.destroy', $teacher->id], 'method' => 'delete']) !!}
                        {!! Form::button('<i class="fas fa-fw fa-trash"></i>', ['type' => 'submit', 'title' => 'Delete', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        {!! Form::close() !!}
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>