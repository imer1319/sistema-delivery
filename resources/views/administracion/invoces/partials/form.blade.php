<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {{ Form::label('c_carrera', 'Costo de la carrera') }}
            {{ Form::text('c_carrera', null, [
                'class' => 'form-control'.( $errors->has('c_carrera') ? ' is-invalid' : '' ),
            ]) }}
            @error('c_carrera') <span class="text-danger error">{{ $message }}</span>@enderror
        </div>
        <div class="form-group">
            {{ Form::label('c_producto', 'Costo del producto') }}
            {{ Form::text('c_producto', null, [
                'class' => 'form-control'.( $errors->has('c_producto') ? ' is-invalid' : '' ),
            ]) }}
            @error('c_producto') <span class="text-danger error">{{ $message }}</span>@enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {{ Form::label('company_id', 'Empresa') }}
            {{ Form::select('company_id', $companies, null, [
                'class' => 'form-control'.( $errors->has('company_id') ? ' is-invalid' : '' ),
            ]) }}
            @error('company_id') <span class="text-danger error">{{ $message }}</span>@enderror
        </div>
        <div class="form-group">
            <label>Operador:</label>
            {{ Form::select('user_id', $users, null, [
                'class' => 'form-control'.( $errors->has('user_id') ? ' is-invalid' : '' ),
            ]) }}
            @error('user_id') <span class="text-danger error">{{ $message }}</span>@enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Driver:</label>
            {{ Form::select('driver_id', $drivers, null, [
                'class' => 'form-control'.( $errors->has('driver_id') ? ' is-invalid' : '' ),
            ]) }}
            @error('driver_id') <span class="text-danger error">{{ $message }}</span>@enderror
        </div>
        <div class="form-group">
            <label>Cliente:</label>
            {{ Form::select('client_id', $clients, null, [
                'class' => 'form-control'.( $errors->has('client_id') ? ' is-invalid' : '' ),
            ]) }}
            @error('client_id') <span class="text-danger error">{{ $message }}</span>@enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Restaurante:</label><br>
            <select id="select2-restaurant" class="js-states form-control" name="restaurants[]" multiple>
                @foreach ($restaurants as $restaurant)
                    @if(in_array($restaurant->id, $restaurant_ids))
                        <option value="{{ $restaurant->id }}" selected="true">{{ $restaurant->name }}</option>
                    @else
                    <option value="{{ $restaurant->id }}">{{ $restaurant->name }}</option>
                    @endif
                @endforeach
            </select>
            @error('restaurant') <span class="text-danger error">{{ $message }}</span>@enderror
        </div>
    </div>
    
    <div class="col-md-12">
        <div class="form-group">
            {{ Form::submit('Guardar', ['class' => 'btn btn-primary btn-block']) }}
            <a href="{{ route('invoces.index') }}" class="btn btn-secondary btn-block mt-0">Cancelar</a>
        </div>
    </div>
</div>
@section('scripts')
    <script>
        $(document).ready(function() {
            $('#select2-restaurant').select2();
        });
    </script>
@endsection