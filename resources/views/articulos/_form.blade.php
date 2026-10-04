<label for="Nombre" style="display: block; margin-bottom: 8px; font-weight: 500;">Nombre</label>
<input type="text" name="Nombre" id="Nombre" maxlength="50" required
    style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 4px; box-sizing: border-box; margin-bottom: 8px;"
    value="{{ old('Nombre', $articulo->Nombre ?? '') }}">
@error('Nombre')
    <div class="err" style="color: red; margin-bottom: 8px; font-size: 0.9em;">{{ $message }}</div>
@enderror

<label for="Descripcion" style="display: block; margin-bottom: 8px; font-weight: 500;">Descripcion</label>
<input type="text" name="Descripcion" id="Descripcion" maxlength="150" required
    style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 4px; box-sizing: border-box; margin-bottom: 8px;"
    value="{{ old('Apellido', $articulo->Descripcion ?? '') }}">
@error('Apellido')
    <div class="err" style="color: red; margin-bottom: 8px; font-size: 0.9em;">{{ $message }}</div>
@enderror

<label for="CantInventario">Cantidad Inventario</label>
<input type="number" name="CantInventario" id="CantInventario" required
    style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 4px; box-sizing: border-box; margin-bottom: 8px;"
    value="{{ old('CantInventario', $articulo->CantInventario ?? '') }}">
@error('CantInventario')
    <div class="err" style="color: red; margin-bottom: 8px; font-size: 0.9em;">{{ $message }}</div>
@enderror

<label for="Precio">Precio</label>
<input type="number" name="Precio" id="Precio" required step="0.01" min="0"
    style="width: 100%; padding: 10px; border: 1px solid #ced4da; border-radius: 4px; box-sizing: border-box; margin-bottom: 8px;"
    value="{{ old('CantInventario', $articulo->Precio ?? '') }}">
@error('CantInventario')
    <div class="err" style="color: red; margin-bottom: 8px; font-size: 0.9em;">{{ $message }}</div>
@enderror

<div class="acciones" style="margin-top:18px; display: flex; gap: 8px;">
    <button class="btn verde" type="submit" style="border: none; cursor: pointer;">Guardar</button>
    <a class="btn gris" href="{{ route('articulos.index') }}" style="text-decoration: none;">Cancelar</a>
</div>
