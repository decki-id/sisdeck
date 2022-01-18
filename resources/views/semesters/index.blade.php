@extends('/sisdeck/layouts/app')

@section('title', 'SisDeck | Semesters')

@section('content')
    <div class="row align-items-center px-3 pt-3">
        <div class="col-sm-6 dhs_col-header"><h3>Semesters</h3></div>
        <div class="col-sm-6 dhs_col-button">
            <a href="#" data-toggle="modal" data-target="#create-semester_modal" class="btn btn-primary-lte dhs_button" id="create-semester_button">
                <i class="fas fa-fw fa-plus-circle mr-2"></i>Add New Semester
            </a>
        </div>
    </div>
    <div class="content">
        <div class="clearfix"></div>
        @include('flash::message')
        @include('adminlte-templates::common.errors')
        <div class="clearfix"></div>
        <div class="box box-primary"><div class="box-body">@include('/sisdeck/semesters/table')</div></div>
        <div class="text-center"></div>
    </div>
@endsection