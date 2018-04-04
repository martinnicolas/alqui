<li class="{{ Request::is('tipoInmuebles*') ? 'active' : '' }}">
    <a href="{!! route('tipoInmuebles.index') !!}"><i class="fa fa-edit"></i><span>Tipo Inmuebles</span></a>
</li>

<li class="{{ Request::is('tipoDocumentos*') ? 'active' : '' }}">
    <a href="{!! route('tipoDocumentos.index') !!}"><i class="fa fa-edit"></i><span>Tipo Documentos</span></a>
</li>

