<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Telefono</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clients as $client)
        <tr>
            <td>{{ $client->name }}</td>
            <td>{{ $client->phone }}</td>
            <td>
                <div>
                    <a href="{{ route('clients.show',$client->id) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('clients.edit',$client->id) }}" class="btn btn-primary btn-sm">Editar</a>
                    {!! Form::open(['route' => ['clients.destroy', $client->id], 'method' => 'DELETE']) !!}
                    <button class="btn btn-danger btn-sm m-0">Eliminar</button>
                {!! Form::close() !!}</div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $clients->render() }}