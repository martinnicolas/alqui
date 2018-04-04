<table class="table table-responsive table-bordered table-hover" id="tipoInmuebles-table">
    <thead>
        <tr>
            <th>Descripcion</th>
            <th>Fecha de creacion</th>
            <th>Fecha de actualizacion</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tipoInmuebles as $tipoInmueble)
        <tr>
            <td>{!! $tipoInmueble->descripcion !!}</td>
            <td>{!! $tipoInmueble->created_at !!}</td>
            <td>{!! $tipoInmueble->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['tipoInmuebles.destroy', $tipoInmueble->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tipoInmuebles.show', [$tipoInmueble->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tipoInmuebles.edit', [$tipoInmueble->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estas seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>