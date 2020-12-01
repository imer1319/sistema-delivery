@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-10">

			@if (Session::has('message'))
			<div class="text-danger">
				{{Session::get('message')}}
			</div>
			@endif
			<div class="card">
				<div class="card-header">
					Cambiar mi password
				</div>
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
	</div>
</div>
@stop
