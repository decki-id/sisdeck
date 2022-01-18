@extends('/sisdeck/layouts/app')

@section('title', 'SisDeck | Create Class Assigning')

@section('content')
    <section class="content-header text-center"><h3 class="mb-0">Create Class Assigning</h3></section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                {!! Form::open(['route' => 'sisdeck.class_assignings.store']) !!}
                    @include('/sisdeck/class_assignings/fields')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
