@extends('layouts.layout-admin')

@section('admin-content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="breadcrumb-holder">
                <h1 class="main-title float-left mb-3">Empresa : {{ $company->name }}</h1>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="card pt-2">
        <div class="card-body">
            <p class="lead">
                <strong>Nombre: </strong> {{ $company->name }}<br>
            </p>
            <p class="lead">
                <strong>Telefono: </strong> {{ $company->phone }}<br>
            </p>
            <p class="lead">
                <strong>Porcentaje: </strong> {{ $company->porcentaje }} %
            </p>
            <a href="{{ route('companies.index') }}" class="btn btn-secondary btn-block">Regresar</a>
        </div>
    </div>
</div>
@endsection
