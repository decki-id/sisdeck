@extends('/sisdeck/layouts/app')

@section('title', 'SisDeck | Update Faculty')

@section('content')
    <section class="content-header text-center"><h3 class="mb-0">Update Faculty</h3></section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                {!! Form::model($sisdeckFaculty, ['route' => ['sisdeck.faculties.update', $sisdeckFaculty->id], 'method' => 'patch']) !!}
                    @include('/sisdeck/faculties/fields')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection