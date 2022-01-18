<div class="table-responsive">
    <table class="table table-bordered table-hover" id="dhs_users-table">
        <thead>
            <tr>
                <th>Username</th>
                <th>Fullname</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sisdeckUsers as $sisdeckUser)
            <tr>
                <td>{{ $sisdeckUser->username }}</td>
                <td>{{ $sisdeckUser->fullname }}</td>
                <td class="text-center">
                    <div class="btn-group">
                        @php $roleName = $sisdeckUser->roleName->role_name @endphp
                        <a href="#" data-user_id="{{ $sisdeckUser->id }}" data-username="{{ $sisdeckUser->username }}"
                           data-fullname="{{ $sisdeckUser->fullname }}" data-role_id="{{ $roleName }}" data-email="{{ $sisdeckUser->email }}"
                           data-toggle="modal" data-target="#read-user_modal" title="Detail" class="btn btn-success btn-xs mr-1">
                           <i class="fas fa-fw fa-eye"></i>
                        </a>
                        <a href="#" data-user_id="{{ $sisdeckUser->id }}" data-username="{{ $sisdeckUser->username }}"
                           data-fullname="{{ $sisdeckUser->fullname }}" data-role_id="{{ $sisdeckUser->role_id }}"
                           data-email="{{ $sisdeckUser->email }}"data-toggle="modal" data-target="#update-user_modal" title="Update"
                           class="btn btn-warning btn-xs text-white mr-1"><i class="fas fa-fw fa-edit"></i>
                        </a>
                        {!! Form::open(['route' => ['sisdeck.users.destroy', $sisdeckUser->id], 'method' => 'delete']) !!}
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
        $('#read-user_modal').on('show.bs.modal', function (event) {
            const
                button = $(event.relatedTarget),
                user_id = button.data('user_id'),
                username = button.data('username'),
                fullname = button.data('fullname'),
                role_id = button.data('role_id'),
                email = button.data('email'),
                modal = $(this);

            modal.find('.modal-body table tbody tr #user-id_value').text(user_id);
            modal.find('.modal-body table tbody tr #user-username_value').text(username);
            modal.find('.modal-body table tbody tr #user-fullname_value').text(fullname);
            modal.find('.modal-body table tbody tr #user-role_name_value').text(role_id);
            modal.find('.modal-body table tbody tr #user-email_value').text(email);
        });

        $('#update-user_modal').on('show.bs.modal', function (event) {
            const
                button = $(event.relatedTarget),
                user_id = button.data('user_id'),
                username = button.data('username'),
                fullname = button.data('fullname'),
                role_id = button.data('role_id'),
                email = button.data('email'),
                modal = $(this);

            modal.find('.modal-body #id').val(user_id);
            modal.find('.modal-body #username-update').val(username);
            modal.find('.modal-body #fullname-update').val(fullname);
            modal.find('.modal-body #role-update').val(role_id).attr('selected', 'selected');
            modal.find('.modal-body #email-update').val(email);

            setTimeout(function () {
                modal.find('.modal-body #username-update').focus();
            }, 100);
        });
    </script>
@endpush