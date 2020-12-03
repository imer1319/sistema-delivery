@extends('layouts.layout-admin')

@section('admin-content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="breadcrumb-holder">
                <h1 class="main-title float-left mb-3">Registrar nuevo Operador</h1>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="card pt-2">
        <div class="card-body">
            {!! Form::open(['route' => 'operators.store']) !!}
            <div class="form-group">
                {{ Form::label('password', 'Contraseña') }}
                {{ Form::password('password', ['class' => 'form-control'.( $errors->has('password') ? ' is-invalid' : '' ),
                'placeholder' => 'Ingrese la contraseña del operador']) }}
                @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
            @include('administracion.operators.partails.form')

            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
