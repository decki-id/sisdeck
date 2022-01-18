@extends('/sisdeck/layouts/app')

@section('title', 'SisDeck | Update Class Assigning')

@section('content')
    <section class="content-header text-center"><h3 class="mb-0">Update Class Assigning</h3></section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
                {!! Form::model($sisdeckClassAssigning, ['route' => ['sisdeck.class_assignings.update', $sisdeckClassAssigning->id], 'method' => 'patch']) !!}
                    @include('/sisdeck/class_assignings/fields')
                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection