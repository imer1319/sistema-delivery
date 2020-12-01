<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Empresa</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($operators as $operator)
        <tr>
            <td>{{ $operator->name }}</td>
            <td>{{ $operator->company->name }}</td>
            <td>
                <div>
                    <a href="{{ route('operators.show',$operator->id) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('operators.edit',$operator->id) }}" class="btn btn-primary btn-sm">Editar</a>
                    {!! Form::open(['route' => ['operators.destroy', $operator->id], 'method' => 'DELETE']) !!}
                    <button class="btn btn-danger btn-sm m-0">Eliminar</button>
                {!! Form::close() !!}</div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $operators->render() }}