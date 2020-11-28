<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Telefono</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($companies as $company)
        <tr>
            <td>{{ $company->name }}</td>
            <td>{{ $company->phone }}</td>
            <td>
                <div>
                    <a href="{{ route('companies.show',$company->id) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('companies.edit',$company->id) }}" class="btn btn-primary btn-sm">Editar</a>
                    {!! Form::open(['route' => ['companies.destroy', $company->id], 'method' => 'DELETE']) !!}
                    <button class="btn btn-danger btn-sm m-0">Eliminar</button>
                {!! Form::close() !!}</div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $companies->render() }}