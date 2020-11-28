@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Cliente {{ $client->name }}</div>
                <div class="card-body">
                    <strong>Nombre: </strong> {{ $client->name }}<br>
                    <strong>Telefono: </strong> {{ $client->phone }}<br>
                    <strong>Empresa: </strong> {{ $client->company->name }}<br>
                    <a href="{{ route('clients.index') }}" class="btn btn-secondary btn-block">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
