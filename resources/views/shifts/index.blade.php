@extends('/sisdeck/layouts/app')

@section('title', 'SisDeck | Shifts')

@section('content')
    <div class="row align-items-center px-3 pt-3">
        <div class="col-sm-6 dhs_col-header"><h3>Shifts</h3></div>
        <div class="col-sm-6 dhs_col-button">
            <a href="{{ route('sisdeck.shifts.create') }}" class="btn btn-primary-lte dhs_button" id="create-shift_button">
                <i class="fas fa-fw fa-plus-circle mr-2"></i>Add New Shift
            </a>
        </div>
    </div>
    <div class="content">
        <div class="clearfix"></div>
        @include('flash::message')
        <div class="clearfix"></div>
        <div class="box box-primary"><div class="box-body">@include('/sisdeck/shifts/table')</div></div>
        <div class="text-center"></div>
    </div>
@endsection

