<div class="form-group">
	{{ Form::label('name', 'Nombre del operador') }}
	{{ Form::text('name', null, ['class' => 'form-control'.( $errors->has('name') ? ' is-invalid' : '' ),
	'placeholder' => 'Ingrese el nombre de la empresa']) }}
	@error('name') <span class="text-danger error">{{ $message }}</span>@enderror
</div>
<div class="form-group">
	{{ Form::label('password', 'Contraseña') }}
	{{ Form::password('password', ['class' => 'form-control'.( $errors->has('password') ? ' is-invalid' : '' ),'placeholder' => 'Contraseña del operador']) }}
	@error('password') <span class="text-danger error">{{ $message }}</span>@enderror
</div>
<div class="form-group">
	{{ Form::label('company_id', 'Empresa') }}
	{{ Form::select('company_id', $companies, null, ['class' => 'form-control'.( $errors->has('company_id') ? ' is-invalid' : '' ),]) }}
	@error('company_id') <span class="text-danger error">{{ $message }}</span>@enderror
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-primary btn-block']) }}
	<a href="{{ route('operators.index') }}" class="btn btn-secondary btn-block mt-0">Cancelar</a>
</div>