<!-- Create Batch Modal -->
<div class="modal fade" id="create-batch_modal" tabindex="-1" role="dialog" aria-labelledby="createBatchHeaderModal" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white align-items-center">
                <h5 class="modal-title" id="createBatchHeaderModal">Create Batch</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            {!! Form::open(['route' => 'sisdeck.batches.store']) !!}
            <div class="modal-body">
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        @php $yearNow = date('Y') @endphp
                        {!! Form::label('year', 'Year', ['class' => 'form-label']) !!}
                        {!! Form::selectRange('year', 1945, $yearNow, 'null', ['class' => 'form-control', 'maxlength' => 191, 'id' => 'year-create', 'title' => 'Year', 'placeholder' => 'Choose year']) !!}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-info" id="reset_button-batches">Reset</button>
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<!-- End of Create Batch Modal -->

@push('scripts')
    <script>
        $('#reset_button-batches').on('click', function (event) {
            var modal = $('#create-batch_modal');
            modal.find('.modal-body #year-create').val("");
            modal.find('.modal-body #year-create').focus();
        });
    </script>
@endpush