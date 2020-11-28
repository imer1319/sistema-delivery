@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Operadores</div>

                <div class="card-body">
                    {!! Form::open(['route' => 'operators.store']) !!}

                    @include('administracion.operators.partails.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
