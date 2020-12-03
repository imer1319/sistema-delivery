@extends('layouts.layout-admin')

@section('admin-content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="breadcrumb-holder">
                <h1 class="main-title float-left mb-3">Lista de restaurantes</h1>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div>
                <a href="{{ route('restaurants.create') }}" class="btn btn-success btn-sm float-right mb-3">Crear Nuevo</a>
            </div>
            @include('administracion.restaurants.partails.table')
        </div>
    </div>
</div>
@endsection
