@extends('layouts.layout-admin')

@section('admin-content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="breadcrumb-holder">
                <h1 class="main-title float-left mb-3">Operador : {{ $operator->name }}</h1>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="card pt-2">
        <div class="card-body">
            <p class="lead">
                <strong>Nombre: </strong> {{ $operator->name }}<br>
            </p>
            <p class="lead">
                <strong>Empresa: </strong> {{ $operator->company->name }}<br>
            </p>
            <a href="{{ route('operators.index') }}" class="btn btn-secondary btn-block">Regresar</a>
        </div>
    </div>
</div>
@endsection
