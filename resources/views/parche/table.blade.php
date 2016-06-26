<table class="table table-stryped">
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Edicion</th>
        <th>Eliminar</th>
    </tr>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->nombre }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a href="{!!  route('admin.users.edit', $user) !!}" class="btn btn-primary"><span class="glyphicon glyphicon-fire"> editar usuario</a>
            </td>
            <td>@include('parche.boton')</td>
        </tr>
    @endforeach

</table>