@extends('layouts.layout-admin')

@section('admin-content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="breadcrumb-holder">
                <h1 class="main-title float-left mb-3">Registrar nuevo driver</h1>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="card pt-2">
        <div class="card-body">
            {!! Form::open(['route' => 'drivers.store']) !!}

            @include('administracion.drivers.partails.form')

            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
