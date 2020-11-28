@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Empresas {{ $company->name }}</div>
                <div class="card-body">
                    <strong>Nombre: </strong> {{ $company->name }}<br>
                    <strong>Telefono: </strong> {{ $company->phone }}<br>
                    <strong>Porcentaje: </strong> {{ $company->porcentaje }} %
                    <a href="{{ route('companies.index') }}" class="btn btn-secondary btn-block">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
