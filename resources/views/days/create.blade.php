<!-- Create Day Modal -->
<div class="modal fade" id="create-day_modal" tabindex="-1" role="dialog" aria-labelledby="createDayHeaderModal" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white align-items-center">
                <h5 class="modal-title" id="createDayHeaderModal">Create Day</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            {!! Form::open(['route' => 'sisdeck.days.store']) !!}
            <div class="modal-body">
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
                        {!! Form::select('day', $days, 'null', ['class' => 'form-control', 'maxlength' => 191, 'id' => 'day-create', 'title' => 'Day', 'placeholder' => 'Choose day']) !!}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-info" id="reset_button-days">Reset</button>
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<!-- End of Create Day Modal -->

@push('scripts')
    <script>
        $('#reset_button-days').on('click', function (event) {
            var modal = $('#create-day_modal');
            modal.find('.modal-body #day-create').val("");
            modal.find('.modal-body #day-create').focus();
        });
    </script>
@endpush