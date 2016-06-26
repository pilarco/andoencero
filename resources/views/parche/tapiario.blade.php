<table class="table table-stryped">
    <tr>
        <th>#</th>
        <th>Nombre Apiario</th>
        <th># colmenas</th>
        <th>munisipio</th>
        <th>Edicion</th>
        <th>Eliminar</th>
    </tr>
    @foreach($apiarios as $apiario)
        <tr>
            <td>{{ $apiario->id }}</td>
            <td>{{ $apiario->nombre_apiario }}</td>
            <td>{{ $apiario->cantidad_colmenas }}</td>
            <td>{{ $apiario->municipio }}</td>
            <td>
                <a href="{!! route('apiario.apiarios.edit', $apiario) !!}" class="btn btn-primary"> editar usuario</a>
            </td>
            <td>@include('parche.boton2')</td>
        </tr>
    @endforeach

</table>