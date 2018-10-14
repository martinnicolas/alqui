@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h4>
            Tipo Documento
        </h4>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('tipo_documentos.show_fields')
                    <a href="{!! route('tipoDocumentos.index') !!}" class="btn btn-default">Volver</a>
                </div>
            </div>
        </div>
    </div>
@endsection
