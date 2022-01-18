@extends('/sisdeck/layouts/app')

@section('title', 'SisDeck | Update Level')

@section('content')
    <section class="content-header text-center"><h3 class="mb-0">Update Level</h3></section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                {!! Form::model($sisdeckLevel, ['route' => ['sisdeck.levels.update', $sisdeckLevel->id], 'method' => 'patch']) !!}
                    @include('/sisdeck/levels/fields')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection