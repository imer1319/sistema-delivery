@extends('layouts.layout-admin')

@section('admin-content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="breadcrumb-holder">
                <h1 class="main-title float-left mb-3">Editar datos del cliente</h1>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            {!!Form::model($client, ['route' => ['clients.update', $client->id],
            'method' => 'PUT']) !!}
            @include('administracion.clients.partails.form')
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
