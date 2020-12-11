@extends('layouts.layout-admin')

@section('admin-content')
<div class="container-fluid">
    <a href="https://api.whatsapp.com/send?phone=59170239101">Mi numero</a>
    <div class="row">
        <div class="col-xl-12">
            <div class="breadcrumb-holder">
                <h1 class="main-title float-left mb-3">Dashboard</h1>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="card pt-2">
        <div class="row">
            <div class="col-md-4">
                <div class="card-body">
                    <div class="card bg-green text-white">
                        <div class="card-body">
                            <h5 class="card-title">Usuarios</h5>
                        <p class="card-text">{{ $usersCount }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-body">
                    <div class="card bg-primary text-white">
                        <div class="card-body">
                            <h5 class="card-title">Drivers</h5>
                            <p class="card-text">{{ $driversCount }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-body">
                    <div class="card bg-oscuro text-white">
                        <div class="card-body">
                            <h5 class="card-title">Ventas realizadas</h5>
                        <p class="card-text">{{ $invocesCount }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">Avance de empresa</h5>
                    {!! $chart->container() !!}

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">Progreso de drivers</h5>
                    <p class="card-text">Content</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

{!! $chart->script() !!}

    
<!-- Start of Async Callbell Code -->
<script>
  window.callbellSettings = {
    token: "w8wkgef1LppGoNipjQw9BtPF"
  };
</script>

<!-- Start of Async Callbell Code -->
<script>
    window.callbellSettings = {
      token: "w8wkgef1LppGoNipjQw9BtPF"
    };
  </script>
  <script>
    (function(){var w=window;var ic=w.callbell;if(typeof ic==="function"){ic('reattach_activator');ic('update',callbellSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Callbell=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://dash.callbell.eu/include/'+window.callbellSettings.token+'.js';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()
  </script>
  <!-- End of Async Callbell Code -->
@endsection