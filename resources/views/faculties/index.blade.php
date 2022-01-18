@extends('/sisdeck/layouts/app')

@section('title', 'SisDeck | Faculties')

@section('content')
    <div class="row align-items-center px-3 pt-3">
        <div class="col-sm-6 dhs_col-header"><h3>Faculties</h3></div>
        <div class="col-sm-6 dhs_col-button">
            <a href="{{ route('sisdeck.faculties.create') }}" class="btn btn-primary-lte dhs_button" id="create-faculty_button">
                <i class="fas fa-fw fa-plus-circle mr-2"></i>Add New Faculty
            </a>
        </div>
    </div>
    <div class="content">
        <div class="clearfix"></div>
        @include('flash::message')
        <div class="clearfix"></div>
        <div class="box box-primary"><div class="box-body">@include('/sisdeck/faculties/table')</div></div>
        <div class="text-center"></div>
    </div>
@endsection

