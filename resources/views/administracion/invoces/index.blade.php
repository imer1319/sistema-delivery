@extends('layouts.layout-admin')

@section('admin-content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="breadcrumb-holder">
                <h1 class="main-title float-left mb-3">Carreras</h1>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="card pt-2">
        <div class="card-body">
            <a href="{{ route('invoces.create') }}" class="btn btn-success btn-sm float-right mt-0 mb-3">
                Agregar
            </a>
            @include('administracion.invoces.partials.table')
        </div>
    </div>
</div>
@endsection
