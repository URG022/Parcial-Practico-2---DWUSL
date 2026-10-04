@extends('layouts.app')
@section('titulo', 'Clientes')

@section('contenido')
<div class="card">
    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:12px">
        <h2 style="margin:0">Clientes</h2>
        <a class="btn verde" href="{{ route('clientes.create') }}">+ Nuevo cliente</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha de Nacimiento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        @forelse ($clientes as $c)
            <tr>
                <td>{{ $c->Id_Cliente }}</td>
                <td>{{ $c->Nombre }}</td>
                <td>{{ $c->Apellido }}</td>
                <td class="nowrap">{{ date('d/m/Y', strtotime($c->Fecha_Nac)) }}</td>
                <td>
                    <div class="acciones">
                        <a class="btn gris" href="{{ route('clientes.show', $c->Id_Cliente) }}">Ver</a>
                        <a class="btn" href="{{ route('clientes.edit', $c->Id_Cliente) }}">Editar</a>
                        <form method="POST" action="{{ route('clientes.destroy', $c->Id_Cliente) }}"
                              onsubmit="return confirm('¿Eliminar al cliente {{ $c->Nombre }} {{ $c->Apellido }}?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn rojo">Eliminar</button>
                        </form>
                    </div>
                </td>
            </tr>
        @empty
            <tr><td colspan="5">No hay clientes registrados.</td></tr>
        @endforelse
        </tbody>
    </table>
    
    <!-- Paginación -->
    @if(method_exists($clientes, 'hasPages') && $clientes->hasPages())
    <div style="margin-top:14px">
        @if (! $clientes->onFirstPage())<a href="{{ $clientes->previousPageUrl() }}">&laquo; Anterior</a>@endif
        Página {{ $clientes->currentPage() }} de {{ $clientes->lastPage() }}
        @if ($clientes->hasMorePages())<a href="{{ $clientes->nextPageUrl() }}">Siguiente &raquo;</a>@endif
    </div>
    @endif
</div>
@endsection