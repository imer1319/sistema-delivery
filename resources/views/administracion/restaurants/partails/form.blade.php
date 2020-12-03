<div class="form-group">
	{{ Form::label('name', 'Nombre de la restaurant') }}
	{{ Form::text('name', null, [
		'class' => 'form-control'.( $errors->has('name') ? ' is-invalid' : '' ),
		'placeholder' => 'Ingrese el nombre del restaurant'
		]) }}
	@error('name') <span class="text-danger error">{{ $message }}</span>@enderror
</div>
<div class="form-group">
	{{ Form::label('phone', 'Telefono') }}
	{{ Form::text('phone', null, [
		'class' => 'form-control'.( $errors->has('phone') ? ' is-invalid' : '' ),
		'placeholder' => 'Ingrese el telefono del restaurant'
		]) }}
	@error('phone') <span class="text-danger error">{{ $message }}</span>@enderror
</div>
<div class="form-group">
	{{ Form::label('direccion', 'Direccion') }}
	{{ Form::text('direccion', null, [
		'class' => 'form-control'.( $errors->has('direccion') ? ' is-invalid' : '' ),
		'placeholder' => 'Ingrese la direccion del restaurant'
		]) }}
	@error('direccion') <span class="text-danger error">{{ $message }}</span>@enderror
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-primary btn-block']) }}
	<a href="{{ route('restaurants.index') }}" class="btn btn-secondary btn-block mt-0">Cancelar</a>
</div>