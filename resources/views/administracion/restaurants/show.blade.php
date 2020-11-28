@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Restaurante {{ $restaurant->name }}</div>
                <div class="card-body">
                    <strong>Nombre: </strong> {{ $restaurant->name }}<br>
                    <strong>Telefono: </strong> {{ $restaurant->phone }}<br>
                    <strong>Direccion: </strong> {{ $restaurant->direccion }}
                    <a href="{{ route('restaurants.index') }}" class="btn btn-secondary btn-block">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
