@extends('layouts.app')
@section('titulo', 'Articulos')

@section('contenido')
    <div class="card">
        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:12px">
            <h2 style="margin:0">Articulos</h2>
            <a class="btn verde" href="{{ route('articulos.create') }}">+ Nuevo Articulo</a>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Cantidad Inventario</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($articulos as $c)
                <tr>
                    <td>{{ $c->Id_Articulo }}</td>
                    <td>{{ $c->Nombre }}</td>
                    <td>{{ $c->Descripcion }}</td>
                    <td>{{ $c->CantInventario }}</td>
                    <td>$ {{ $c->Precio }}</td>
                    <td>
                        <div class="acciones">
                            <a class="btn gris" href="{{ route('articulos.show', $c->Id_Articulo) }}">Ver</a>
                            <a class="btn" href="{{ route('articulos.edit', $c->Id_Articulo) }}">Editar</a>
                            <form method="POST" action="{{ route('articulos.destroy', $c->Id_Articulo) }}"
                                onsubmit="return confirm('¿Eliminar al articulo {{ $c->Nombre }} ?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn rojo">Eliminar</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No hay articulos registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <!-- Paginación -->
    @if (method_exists($articulos, 'hasPages') && $articulos->hasPages())
        <div style="margin-top:14px">
            @if (!$articulos->onFirstPage())
                <a href="{{ $articulos->previousPageUrl() }}">&laquo; Anterior</a>
            @endif
            Página {{ $articulos->currentPage() }} de {{ $articulos->lastPage() }}
            @if ($articulos->hasMorePages())
                <a href="{{ $articulos->nextPageUrl() }}">Siguiente &raquo;</a>
            @endif
        </div>
    @endif
@endsection
