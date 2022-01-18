<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('student_id', 'Student Id') !!}
        {!! Form::number('student_id', null, ['class' => 'form-control', 'autofocus']) !!}
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('fee_id', 'Fee Id') !!}
        {!! Form::number('fee_id', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('user_id', 'User Id') !!}
        {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('paid', 'Paid') !!}
        {!! Form::number('paid', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="row">
    <div class="form-group col-sm-12">
        {!! Form::label('transaction_date', 'Transaction Date') !!}
        {!! Form::text('transaction_date', null, ['class' => 'form-control','id'=>'transaction_date']) !!}
    </div>
</div>

@push('scripts')
    <script type="text/javascript">
        $('#transaction_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<div class="row">
    <div class="form-group col-sm-6 col-lg-6">
        {!! Form::label('remark', 'Remark') !!}
        {!! Form::textarea('remark', null, ['class' => 'form-control', 'rows' => 3]) !!}
    </div>
    <div class="form-group col-sm-6 col-lg-6">
        {!! Form::label('description', 'Description') !!}
        {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => 3]) !!}
    </div>
</div>

{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
<a href="{{ route('sisdeck.transactions.index') }}" class="btn btn-default">Cancel</a>