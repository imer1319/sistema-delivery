@extends('layouts.layout-admin')

@section('admin-content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="breadcrumb-holder">
                <h1 class="main-title float-left mb-3">Lista de empresas</h1>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="card">

        <div class="card-body">
            <div>
                <a href="{{ route('companies.create') }}" class="btn btn-success btn-sm float-right mb-3">Crear Nuevo</a>
            </div>
            @include('administracion.companies.partails.table')
        </div>
    </div>
</div>
@endsection
