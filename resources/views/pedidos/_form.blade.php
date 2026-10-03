@php
    $fmt = fn($v) => $v ? \Illuminate\Support\Carbon::parse($v)->format('Y-m-d') : '';
@endphp
<label for="Id_Cliente">Cliente</label>
<select name="Id_Cliente" id="Id_Cliente" required>
    <option value="">-- Seleccione --</option>
    @foreach ($clientes as $c)
        <option value="{{ $c->Id_Cliente }}" @selected(old('Id_Cliente', $pedido->Id_Cliente ?? '') == $c->Id_Cliente)>
            {{ $c->Nombre }} {{ $c->Apellido }}
        </option>
    @endforeach
</select>
@error('Id_Cliente')<div class="err">{{ $message }}</div>@enderror

<label for="FechaPedido">Fecha del pedido</label>
<input type="date" name="FechaPedido" id="FechaPedido" required
       value="{{ old('FechaPedido', $fmt($pedido->FechaPedido ?? null)) }}">
@error('FechaPedido')<div class="err">{{ $message }}</div>@enderror

<label for="FechaEntrega">Fecha de entrega</label>
<input type="date" name="FechaEntrega" id="FechaEntrega" required
       value="{{ old('FechaEntrega', $fmt($pedido->FechaEntrega ?? null)) }}">
@error('FechaEntrega')<div class="err">{{ $message }}</div>@enderror

<label for="Observaciones">Observaciones (máx. 150)</label>
<textarea name="Observaciones" id="Observaciones" rows="3" maxlength="150">{{ old('Observaciones', $pedido->Observaciones ?? '') }}</textarea>
@error('Observaciones')<div class="err">{{ $message }}</div>@enderror

<div class="acciones" style="margin-top:18px">
    <button class="btn verde" type="submit">Guardar</button>
    <a class="btn gris" href="{{ route('pedidos.index') }}">Cancelar</a>
</div>