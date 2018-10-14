@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h4>
            Tipo Documento
        </h4>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipoDocumento, ['route' => ['tipoDocumentos.update', $tipoDocumento->id], 'method' => 'patch']) !!}

                        @include('tipo_documentos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection