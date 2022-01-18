<!-- Update Batch Modal -->
<div class="modal fade" id="update-batch_modal" tabindex="-1" role="dialog" aria-labelledby="updateBatchHeaderModal" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white align-items-center">
                <h5 class="modal-title" id="updateBatchHeaderModal">Update Batch</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            {!! Form::open(['route' => ['sisdeck.batches.update', 'batch_id'], 'method' => 'POST']) !!}
            @csrf
            @method('PATCH')
            <div class="modal-body">
                {!! Form::hidden('batch_id', null, ['id' => 'batch_id-update']) !!}
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        @php $yearNow = date('Y') @endphp
                        {!! Form::label('year', 'Year', ['class' => 'form-label']) !!}
                        {!! Form::selectRange('year', 1945, $yearNow, 'null', ['class' => 'form-control', 'maxlength' => 191, 'id' => 'year-update', 'title' => 'Year', 'placeholder' => 'Choose year']) !!}
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
<!-- End of Update Batch Modal -->