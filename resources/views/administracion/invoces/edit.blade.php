@extends('layouts.layout-admin')

@section('admin-content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="breadcrumb-holder">
                <h1 class="main-title float-left mb-3">Editar Carrera</h1>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="card pt-2">
        <div class="card-body">
            {!!Form::model($invoce, ['route' => ['invoces.update', $invoce->id],
            'method' => 'PUT']) !!}
            @include('administracion.invoces.partials.form')
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
