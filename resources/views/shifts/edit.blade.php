@extends('/sisdeck/layouts/app')

@section('title', 'SisDeck | Update Shift')

@section('content')
    <section class="content-header text-center"><h3 class="mb-0">Update Shift</h3></section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                {!! Form::model($sisdeckShift, ['route' => ['sisdeck.shifts.update', $sisdeckShift->id], 'method' => 'patch']) !!}
                    @include('/sisdeck/shifts/fields')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection