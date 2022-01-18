<!-- Update Academic Modal -->
<div class="modal fade" id="update-academic_modal" tabindex="-1" role="dialog" aria-labelledby="updateAcademicHeaderModal" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white align-items-center">
                <h5 class="modal-title" id="updateAcademicHeaderModal">Update Academic</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            {!! Form::open(['route' => ['sisdeck.academics.update', 'id'], 'method' => 'POST']) !!}
            @csrf
            @method('PATCH')
            <div class="modal-body">
                {!! Form::hidden('id', null, ['id' => 'ac_id-update']) !!}
                <div class="row align-items-center">
                    <div class="form-group col-sm-6">
                        @php $yearNow = date('Y') @endphp
                        {!! Form::label('from', 'From', ['class' => 'form-label']) !!}
                        {!! Form::selectRange('from', 1945, $yearNow, 'null', ['class' => 'form-control', 'maxlength' => 191, 'id' => 'ac_from-update', 'title' => 'From', 'placeholder' => 'Choose year from']) !!}
                    </div>
                    <div class="form-group col-sm-6">
                        @php $yearNow = date('Y') @endphp
                        {!! Form::label('until', 'Until', ['class' => 'form-label']) !!}
                        {!! Form::selectRange('until', 1945, $yearNow, 'null', ['class' => 'form-control', 'maxlength' => 191, 'id' => 'ac_until-update', 'title' => 'Until', 'placeholder' => 'Choose year until']) !!}
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
<!-- End of Update Academic Modal -->