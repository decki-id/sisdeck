<!-- Create Academic Modal -->
<div class="modal fade" id="create-academic_modal" tabindex="-1" role="dialog" aria-labelledby="createAcademicHeaderModal" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white align-items-center">
                <h5 class="modal-title" id="createAcademicHeaderModal">Create Batch</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            {!! Form::open(['route' => 'sisdeck.academics.store']) !!}
            <div class="modal-body">
                <div class="row align-items-center">
                    <div class="form-group col-sm-6">
                        @php $yearNow = date('Y') @endphp
                        {!! Form::label('from', 'From', ['class' => 'form-label']) !!}
                        {!! Form::selectRange('from', 1945, $yearNow, 'null', ['class' => 'form-control', 'maxlength' => 191, 'id' => 'ac_from-create', 'title' => 'From', 'placeholder' => 'Choose year from']) !!}
                    </div>
                    <div class="form-group col-sm-6">
                        @php $yearNow = date('Y') @endphp
                        {!! Form::label('until', 'Until', ['class' => 'form-label']) !!}
                        {!! Form::selectRange('until', 1945, $yearNow, 'null', ['class' => 'form-control', 'maxlength' => 191, 'id' => 'ac_until-create', 'title' => 'Until', 'placeholder' => 'Choose year until']) !!}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-info" id="reset_button-academics">Reset</button>
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<!-- End of Create Academic Modal -->

@push('scripts')
    <script>
        $('#reset_button-academics').on('click', function (event) {
            var modal = $('#create-academic_modal');
            modal.find('.modal-body #ac_from-create').val("");
            modal.find('.modal-body #ac_until-create').val("");
            modal.find('.modal-body #ac_from-create').focus();
        });
    </script>
@endpush