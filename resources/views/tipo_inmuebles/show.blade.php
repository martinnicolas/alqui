@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h4>
            Tipo de inmueble
        </h4>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('tipo_inmuebles.show_fields')
                    <a href="{!! route('tipoInmuebles.index') !!}" class="btn btn-default">Volver</a>
                </div>
            </div>
        </div>
    </div>
@endsection
