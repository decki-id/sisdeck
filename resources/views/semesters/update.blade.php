<!-- Update Semester Modal -->
<div class="modal fade" id="update-semester_modal" tabindex="-1" role="dialog" aria-labelledby="updateSemesterHeaderModal" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white align-items-center">
                <h5 class="modal-title" id="updateSemesterHeaderModal">Update Semester</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            {!! Form::open(['route' => ['sisdeck.semesters.update', 'id'], 'method' => 'POST']) !!}
            @csrf
            @method('PATCH')
            <div class="modal-body">
                {!! Form::hidden('id', null, ['id' => 'semester_id-update']) !!}
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('code', 'Code', ['class' => 'form-label']) !!}
                        {!! Form::text('code', null, ['class' => 'form-control', 'maxlength' => 191, 'id' => 'semester_code-update', 'title' => 'Code', 'placeholder' => 'Insert code', 'readonly']) !!}
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('name', 'Name', ['class' => 'form-label']) !!}
                        {!! Form::text('name', null, ['class' => 'form-control', 'maxlength' => 191, 'id' => 'semester_name-update', 'title' => 'Name', 'placeholder' => 'Insert name']) !!}
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('duration', 'Duration', ['class' => 'form-label']) !!}
                        {!! Form::text('duration', null, ['class' => 'form-control', 'maxlength' => 191, 'id' => 'semester_duration-update', 'title' => 'Duration', 'placeholder' => 'Insert duration']) !!}
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('description', 'Description', ['class' => 'form-label']) !!}
                        {!! Form::textarea('description', null, ['class' => 'form-control', 'maxlength' => 191, 'rows' => 3, 'id' => 'semester_description-update', 'title' => 'Description', 'placeholder' => 'Insert description']) !!}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                {!! Form::submit('Update', ['class' => 'btn btn-warning text-white']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<!-- End of Update Semester Modal -->