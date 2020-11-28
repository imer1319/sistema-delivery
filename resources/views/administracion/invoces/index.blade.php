@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Ventas') }}</div>

                <div class="card-body">
                    <a href="{{ route('invoces.create') }}" class="btn btn-success btn-sm float-right mt-0 mb-3">
                        Agregar
                    </a>
                    @include('administracion.invoces.partials.table')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
