<!-- Update Class Modal -->
<div class="modal fade" id="update-class_modal" tabindex="-1" role="dialog" aria-labelledby="updateClassHeaderModal" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white align-items-center">
                <h5 class="modal-title" id="updateClassHeaderModal">Update Class</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            {!! Form::open(['route' => ['sisdeck.classes.update', 'class_id'], 'method' => 'POST']) !!}
            @csrf
            @method('PATCH')
            <div class="modal-body">
                {!! Form::hidden('class_id', null, ['id' => 'class_id-update']) !!}
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('class_code', 'Class Code', ['class' => 'form-label']) !!}
                        {!! Form::text('class_code', null, ['class' => 'form-control', 'maxlength' => 191, 'id' => 'class_code-update', 'title' => 'Class Code', 'placeholder' => 'Insert class code', 'readonly']) !!}
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('class_name', 'Course Name', ['class' => 'form-label']) !!}
                        {!! Form::text('class_name', null, ['class' => 'form-control', 'maxlength' => 191, 'id' => 'class_name-update', 'title' => 'Class Name', 'placeholder' => 'Insert class name']) !!}
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
<!-- End of Update Class Modal -->