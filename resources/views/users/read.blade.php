<!-- User Read Modal -->
<div class="modal fade" id="read-user_modal" tabindex="-1" role="dialog" aria-labelledby="readUserHeaderModal" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success text-white align-items-center">
                <h5 class="modal-title" id="readUserHeaderModal">User Detail</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <tbody>
                        <tr>
                            <th scope="row">User ID</th>
                            <td id="user-id_value"></td>
                        </tr>
                        <tr>
                            <th scope="row">Username</th>
                            <td id="user-username_value"></td>
                        </tr>
                        <tr>
                            <th scope="row">Fullname</th>
                            <td id="user-fullname_value"></td>
                        </tr>
                        <tr>
                            <th scope="row">Role</th>
                            <td id="user-role_name_value"></td>
                        </tr>
                        <tr>
                            <th scope="row">Email</th>
                            <td id="user-email_value"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>
        </div>
    </div>
</div>
<!-- End of User Read Modal -->