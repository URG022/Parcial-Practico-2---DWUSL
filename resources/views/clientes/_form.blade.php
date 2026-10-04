@php
    $fmt = fn($v) => $v ? \Illuminate\Support\Carbon::parse($v)->format('Y-m-d') : '';
@endphp

<label for="Nombre" style="display: block; margin-bottom: 8px; font-weight: 500;">Nombre</label>
<input type="text" name="Nombre" id="Nombre" maxlength="50" required
       style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 4px; box-sizing: border-box; margin-bottom: 8px;"
       value="{{ old('Nombre', $cliente->Nombre ?? '') }}">
@error('Nombre')<div class="err" style="color: red; margin-bottom: 8px; font-size: 0.9em;">{{ $message }}</div>@enderror

<label for="Apellido" style="display: block; margin-bottom: 8px; font-weight: 500;">Apellido</label>
<input type="text" name="Apellido" id="Apellido" maxlength="50" required
       style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 4px; box-sizing: border-box; margin-bottom: 8px;"
       value="{{ old('Apellido', $cliente->Apellido ?? '') }}">
@error('Apellido')<div class="err" style="color: red; margin-bottom: 8px; font-size: 0.9em;">{{ $message }}</div>@enderror

<label for="Fecha_Nac" style="display: block; margin-bottom: 8px; font-weight: 500;">Fecha de nacimiento</label>
<input type="date" name="Fecha_Nac" id="Fecha_Nac" required
       style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 4px; box-sizing: border-box; margin-bottom: 8px;"
       value="{{ old('Fecha_Nac', $fmt($cliente->Fecha_Nac ?? null)) }}">
@error('Fecha_Nac')<div class="err" style="color: red; margin-bottom: 8px; font-size: 0.9em;">{{ $message }}</div>@enderror

<div class="acciones" style="margin-top:18px; display: flex; gap: 8px;">
    <button class="btn verde" type="submit" style="border: none; cursor: pointer;">Guardar</button>
    <a class="btn gris" href="{{ route('clientes.index') }}" style="text-decoration: none;">Cancelar</a>
</div>