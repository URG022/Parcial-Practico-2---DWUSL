@extends('layouts.app')
@section('titulo', 'Pedidos')
@section('contenido')
<div class="card">
    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:12px">
        <h2 style="margin:0">Pedidos</h2>
        <a class="btn verde" href="{{ route('pedidos.create') }}">+ Nuevo pedido</a>
    </div>
    <table>
        <thead><tr><th>#</th><th>Cliente</th><th>Fecha pedido</th><th>Fecha entrega</th><th>Observaciones</th><th>Acciones</th></tr></thead>
        <tbody>
        @forelse ($pedidos as $p)
            <tr>
                <td>{{ $p->Id_Pedido }}</td>
                <td>{{ $p->ClienteNombre }}</td>
                <td class="nowrap">{{ $p->FechaPedido->format('d/m/Y') }}</td>
                <td class="nowrap">{{ $p->FechaEntrega->format('d/m/Y') }}</td>
                <td>{{ $p->Observaciones }}</td>
                <td>
                    <div class="acciones">
                        <a class="btn gris" href="{{ route('pedidos.show', $p->Id_Pedido) }}">Ver</a>
                        <a class="btn" href="{{ route('pedidos.edit', $p->Id_Pedido) }}">Editar</a>
                        <form method="POST" action="{{ route('pedidos.destroy', $p->Id_Pedido) }}"
                              onsubmit="return confirm('¿Eliminar el pedido {{ $p->Id_Pedido }}?')">
                            @csrf @method('DELETE')
                            <button class="btn rojo">Eliminar</button>
                        </form>
                    </div>
                </td>
            </tr>
        @empty
            <tr><td colspan="6">No hay pedidos registrados.</td></tr>
        @endforelse
        </tbody>
    </table>
    <div style="margin-top:14px">
        @if (! $pedidos->onFirstPage())<a href="{{ $pedidos->previousPageUrl() }}">&laquo; Anterior</a>@endif
        Página {{ $pedidos->currentPage() }} de {{ $pedidos->lastPage() }}
        @if ($pedidos->hasMorePages())<a href="{{ $pedidos->nextPageUrl() }}">Siguiente &raquo;</a>@endif
    </div>
</div>
@endsection