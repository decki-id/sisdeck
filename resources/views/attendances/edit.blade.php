@extends('/sisdeck/layouts/app')

@section('title', 'SisDeck | Update Attendance')

@section('content')
    <section class="content-header text-center"><h3 class="mb-0">Update Attendance</h3></section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                {!! Form::model($sisdeckAttendance, ['route' => ['sisdeck.attendances.update', $sisdeckAttendance->id], 'method' => 'patch']) !!}
                    @include('/sisdeck/attendances/fields')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection