@extends('/sisdeck/layouts/app')

@section('title', 'SisDeck | Transactions')

@section('content')
    <div class="row align-items-center px-3 pt-3">
        <div class="col-sm-6 dhs_col-header"><h3>Transactions</h3></div>
        <div class="col-sm-6 dhs_col-button">
            <a href="{{ route('sisdeck.transactions.create') }}" class="btn btn-primary-lte dhs_button" id="create-transaction_button">
                <i class="fas fa-fw fa-plus-circle mr-2"></i>Add New Transaction
            </a>
        </div>
    </div>
    <div class="content">
        <div class="clearfix"></div>
        @include('flash::message')
        <div class="clearfix"></div>
        <div class="box box-primary"><div class="box-body">@include('/sisdeck/transactions/table')</div></div>
        <div class="text-center"></div>
    </div>
@endsection