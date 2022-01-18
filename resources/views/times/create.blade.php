@extends('/sisdeck/layouts/app')

@section('title', 'SisDeck | Create Time')

@section('content')
    <section class="content-header text-center"><h3 class="mb-0">Create Time</h3></section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                {!! Form::open(['route' => 'sisdeck.times.store']) !!}
                    @include('/sisdeck/times/fields')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
