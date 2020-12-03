@extends('layouts.layout-admin')

@section('admin-content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="breadcrumb-holder">
                <h1 class="main-title float-left mb-3">Editar datos de operador</h1>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <a href="{{ route('operators.password') }}" class="btn btn-sm btn btn-primary float-right mb-3">Cambiar mi contraseña</a>
            {!!Form::model($operator, ['route' => ['operators.update', $operator->id],
            'method' => 'PUT']) !!}
            @include('administracion.operators.partails.form')
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
