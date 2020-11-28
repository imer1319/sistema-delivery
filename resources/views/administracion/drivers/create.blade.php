@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Drivers</div>

                <div class="card-body">
                    {!! Form::open(['route' => 'drivers.store']) !!}

                    @include('administracion.drivers.partails.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
