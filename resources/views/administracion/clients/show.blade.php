@extends('layouts.layout-admin')

@section('admin-content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="breadcrumb-holder">
                <h1 class="main-title float-left mb-3">Cliente : {{ $client->name }}</h1>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="card pt-2">
        <div class="card-body">
            <p class="lead">
                <strong>Nombre: </strong> {{ $client->name }}<br>
            </p>
            <p class="lead">
                <strong>Telefono: </strong> {{ $client->phone }}<br>
            </p>
            <p class="lead">
                <strong>Empresa: </strong> {{ $client->company->name }} 
            </p>
            <a href="{{ route('clients.index') }}" class="btn btn-secondary btn-block">Regresar</a>
        </div>
    </div>
</div>
@endsection
