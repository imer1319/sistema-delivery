@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Clientes</div>

                <div class="card-body">
                    {!! Form::open(['route' => 'clients.store']) !!}

                    @include('administracion.clients.partails.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
