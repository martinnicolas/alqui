@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h4>
            Tipo de inmueble
        </h4>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipoInmueble, ['route' => ['tipoInmuebles.update', $tipoInmueble->id], 'method' => 'patch']) !!}

                        @include('tipo_inmuebles.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection