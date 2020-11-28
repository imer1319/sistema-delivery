@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Empresas</div>

                <div class="card-body">
                    {!! Form::open(['route' => 'companies.store']) !!}

                    @include('administracion.companies.partails.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
