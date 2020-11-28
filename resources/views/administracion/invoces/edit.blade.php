@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Editar formulario') }}</div>

                <div class="card-body">
                    {!!Form::model($invoce, ['route' => ['invoces.update', $invoce->id],
                    'method' => 'PUT']) !!}
                    @include('administracion.invoces.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
