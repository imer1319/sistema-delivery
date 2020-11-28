<div class="form-group">
	{{ Form::label('name', 'Nombre del cliente') }}
	{{ Form::text('name', null, ['class' => 'form-control'.( $errors->has('name') ? ' is-invalid' : '' ),
	'placeholder' => 'Ingrese el nombre de la empresa']) }}
	@error('name') <span class="text-danger error">{{ $message }}</span>@enderror
</div>
<div class="form-group">
	{{ Form::label('phone', 'Telefono') }}
	{{ Form::text('phone',null, ['class' => 'form-control'.( $errors->has('phone') ? ' is-invalid' : '' ),'placeholder' => 'Telefono del cliente']) }}
	@error('phone') <span class="text-danger error">{{ $message }}</span>@enderror
</div>
<div class="form-group">
	{{ Form::label('company_id', 'Empresa') }}
	{{ Form::select('company_id', $companies, null, ['class' => 'form-control'.( $errors->has('company_id') ? ' is-invalid' : '' ),]) }}
	@error('company_id') <span class="text-danger error">{{ $message }}</span>@enderror
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-primary btn-block']) }}
	<a href="{{ route('clients.index') }}" class="btn btn-secondary btn-block mt-0">Cancelar</a>
</div>