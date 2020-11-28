@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Cliente {{ $driver->name }}</div>
                <div class="card-body">
                    <strong>Nombre: </strong> {{ $driver->name }}<br>
                    <strong>Telefono: </strong> {{ $driver->phone }}<br>
                    <strong>Placa: </strong> {{ $driver->placa }}<br>
                    <strong>Empresa: </strong> {{ $driver->company->name }}<br>
                    <a href="{{ route('drivers.index') }}" class="btn btn-secondary btn-block">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
