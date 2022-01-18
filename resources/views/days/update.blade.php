<!-- Update Day Modal -->
<div class="modal fade" id="update-day_modal" tabindex="-1" role="dialog" aria-labelledby="updateDayHeaderModal" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white align-items-center">
                <h5 class="modal-title" id="updateDayHeaderModal">Update Day</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            {!! Form::open(['route' => ['sisdeck.days.update', 'id'], 'method' => 'POST']) !!}
            @csrf
            @method('PATCH')
            <div class="modal-body">
                {!! Form::hidden('id', null, ['id' => 'id-update']) !!}
                <div class="row align-items-center">
                    <div class="form-group col-sm-12">
                        @php 
                            $days = [
                                'Monday' => 'Monday',
                                'Tuesday' => 'Tuesday',
                                'Wednesday' => 'Wednesday',
                                'Thursday' => 'Thursday',
                                'Friday' => 'Friday',
                                'Saturday' => 'Saturday',
                                'Sunday' => 'Sunday'
                            ]; 
                        @endphp
                        {!! Form::label('day', 'Day', ['class' => 'form-label']) !!}
                        {!! Form::select('day', $days, 'null', ['class' => 'form-control', 'maxlength' => 191, 'id' => 'day-update', 'title' => 'Day', 'placeholder' => 'Choose day']) !!}
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
<!-- End of Update Day Modal -->