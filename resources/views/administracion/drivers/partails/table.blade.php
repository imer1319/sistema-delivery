<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Placa</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($drivers as $driver)
        <tr>
            <td>{{ $driver->name }}</td>
            <td>{{ $driver->phone }}</td>
            <td>{{ $driver->placa }}</td>
            <td>
                <div>
                    <a href="{{ route('drivers.show',$driver->id) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('drivers.edit',$driver->id) }}" class="btn btn-primary btn-sm">Editar</a>
                    {!! Form::open(['route' => ['drivers.destroy', $driver->id], 'method' => 'DELETE']) !!}
                    <button class="btn btn-danger btn-sm m-0">Eliminar</button>
                    {!! Form::close() !!}
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $drivers->render() }}