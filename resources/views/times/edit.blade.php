@extends('/sisdeck/layouts/app')

@section('title', 'SisDeck | Update Time')

@section('content')
    <section class="content-header text-center"><h3 class="mb-0">Update Time</h3></section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                {!! Form::model($sisdeckTime, ['route' => ['sisdeck.times.update', $sisdeckTime->id], 'method' => 'patch']) !!}
                    @include('/sisdeck/times/fields')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection