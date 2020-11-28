@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Operador {{ $operator->name }}</div>
                <div class="card-body">
                    <strong>Nombre: </strong> {{ $operator->name }}<br>
                    <strong>Contraseña: </strong> {{ $operator->password }}<br>
                    <strong>Empresa: </strong> {{ $operator->company->name }}<br>
                    <a href="{{ route('operators.index') }}" class="btn btn-secondary btn-block">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
