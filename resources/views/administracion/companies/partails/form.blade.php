<div class="form-group">
	{{ Form::label('name', 'Nombre de la empresa') }}
	{{ Form::text('name', null, [
		'class' => 'form-control'.( $errors->has('name') ? ' is-invalid' : '' ),
		'placeholder' => 'Ingrese el nombre de la empresa'
		]) }}
	@error('name') <span class="text-danger error">{{ $message }}</span>@enderror
</div>
<div class="form-group">
	{{ Form::label('phone', 'Telefono') }}
	{{ Form::text('phone', null, [
		'class' => 'form-control'.( $errors->has('phone') ? ' is-invalid' : '' ),
		'placeholder' => 'Ingrese el telefono de la empresa'
		]) }}
	@error('phone') <span class="text-danger error">{{ $message }}</span>@enderror
</div>
<div class="form-group">
	{{ Form::label('porcentaje', 'Porcentaje') }}
	{{ Form::text('porcentaje', null, [
		'class' => 'form-control'.( $errors->has('porcentaje') ? ' is-invalid' : '' ),
		'placeholder' => 'Ingrese el porcentaje de ganancia de la empresa'
		]) }}
	@error('porcentaje') <span class="text-danger error">{{ $message }}</span>@enderror
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-primary btn-block']) }}
	<a href="{{ route('companies.index') }}" class="btn btn-secondary btn-block mt-0">Cancelar</a>
</div>