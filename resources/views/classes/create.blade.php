<!-- Create Class Modal -->
<div class="modal fade" id="create-class_modal" tabindex="-1" role="dialog" aria-labelledby="createClassHeaderModal" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white align-items-center">
                <h5 class="modal-title" id="createClassHeaderModal">Create Class</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            {!! Form::open(['route' => 'sisdeck.classes.store']) !!}
            <div class="modal-body">
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('class_code', 'Class Code', ['class' => 'form-label']) !!}
                        {!! Form::text('class_code', null, ['class' => 'form-control', 'maxlength' => 191, 'id' => 'class_code-create', 'title' => 'Class Code', 'placeholder' => 'Insert class name to generate class code', 'readonly']) !!}
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        {!! Form::label('class_name', 'Class Name', ['class' => 'form-label']) !!}
                        {!! Form::text('class_name', null, ['class' => 'form-control', 'maxlength' => 191, 'id' => 'class_name-create', 'title' => 'Class Name', 'placeholder' => 'Insert class name', 'oninput' => "classCodeValue()"]) !!}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-info" id="reset_button-classes">Reset</button>
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<!-- End of Create Class Modal -->

@push('scripts')
    <script>
        $('#reset_button-classes').on('click', function (event) {
            var modal = $('#create-class_modal');
            modal.find('.modal-body #class_code-create').val("");
            modal.find('.modal-body #class_name-create').val("");
            modal.find('.modal-body #class_name-create').focus();
        });
    </script>
@endpush