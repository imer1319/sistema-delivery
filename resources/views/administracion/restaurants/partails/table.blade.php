<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>direccion</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($restaurants as $restaurant)
        <tr>
            <td>{{ $restaurant->name }}</td>
            <td>{{ $restaurant->phone }}</td>
            <td>{{ $restaurant->direccion }}</td>
            <td>
                <div>
                    <a href="{{ route('restaurants.show',$restaurant->id) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('restaurants.edit',$restaurant->id) }}" class="btn btn-primary btn-sm">Editar</a>
                    {!! Form::open(['route' => ['restaurants.destroy', $restaurant->id], 'method' => 'DELETE']) !!}
                    <button class="btn btn-danger btn-sm m-0">Eliminar</button>
                {!! Form::close() !!}</div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $restaurants->render() }}