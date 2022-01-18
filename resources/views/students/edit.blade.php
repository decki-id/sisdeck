@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Sisdeck Student
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($sisdeckStudent, ['route' => ['sisdeckStudents.update', $sisdeckStudent->id], 'method' => 'patch']) !!}

                        @include('sisdeck_students.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection