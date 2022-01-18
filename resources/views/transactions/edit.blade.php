@extends('/sisdeck/layouts/app')

@section('title', 'SisDeck | Update Transaction')

@section('content')
    <section class="content-header text-center"><h3 class="mb-0">Update Transaction</h3></section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
                {!! Form::model($sisdeckTransaction, ['route' => ['sisdeck.transactions.update', $sisdeckTransaction->id], 'method' => 'patch']) !!}
                    @include('/sisdeck/transactions/fields')
                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection