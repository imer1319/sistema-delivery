@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Restaurantes</div>

                <div class="card-body">
                    {!! Form::open(['route' => 'restaurants.store']) !!}

                    @include('administracion.restaurants.partails.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
