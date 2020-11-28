<table class="table table-bordered">
    <thead>
        <tr>
            <th>Costo Carrera</th>
            <th>Costo producto</th>
            <th>Empresa</th>
            <th>Operador</th>
            <th>Driver</th>
            <th>Cliente</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($invoces as $invoce)
        <tr>
            <td>{{ $invoce->c_carrera }}</td>
            <td>{{ $invoce->c_producto }}</td>
            <td>{{ $invoce->company->name }}</td>
            <td>{{ $invoce->user->name }}</td>
            <td>{{ $invoce->driver->name }}</td>
            <td>{{ $invoce->client->name }}</td>
            <td>
                <a href="{{ route('invoces.edit',$invoce->id) }}" class="btn btn-primary btn-sm">Editar</a>
                {!! Form::open(['route' => ['invoces.destroy', $invoce->id], 'method' => 'DELETE']) !!}
                <button class="btn btn-danger btn-sm">Eliminar</button>
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $invoces->render() }}