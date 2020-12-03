@extends('layouts.layout-admin')

@section('admin-content')
<div class="container-fluid">
	<div class="row">
		<div class="col-xl-12">
			<div class="breadcrumb-holder">
				<h1 class="main-title float-left mb-3">Cambiar contraseña</h1>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>

	<div class="card pt-2">
		<div class="card-body">
			<form method="post" action="{{ route('operators.updatepassword') }}">
				{{csrf_field()}}
				<div class="form-group">
					<label for="mypassword">Introduce tu actual contraseña:</label>
					<input type="password" name="mypassword" class="form-control">
					<div class="text-danger">{{$errors->first('mypassword')}}</div>
				</div>
				<div class="form-group">
					<label for="password">Introduce tu nuevo contraseña:</label>
					<input type="password" name="password" class="form-control">
					<div class="text-danger">{{$errors->first('password')}}</div>
				</div>
				<div class="form-group">
					<label for="mypassword">Confirma tu nuevo contraseña:</label>
					<input type="password" name="password_confirmation" class="form-control">
				</div>
				<button type="submit" class="btn btn-primary btn-block">Cambiar mi contraseña</button>
				<a href="{{ route('operators.index') }}" class="btn btn-secondary btn-block mt-0">Cancelar</a>
			</form>	
		</div>
	</div>
</div>
@stop
