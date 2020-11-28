@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Clientes</div>

                <div class="card-body">
                    <div>
                        <a href="{{ route('drivers.create') }}" class="btn btn-success btn-sm float-right mb-3">Crear Nuevo</a>
                    </div>
                    @include('administracion.drivers.partails.table')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
