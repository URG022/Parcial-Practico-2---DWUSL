@extends('layouts.app')
@section('titulo', 'Detalle de pedido')
@section('contenido')
<div class="card">
    <h2 style="margin-top:0">Pedido #{{ $pedido->Id_Pedido }}</h2>
    <p><strong>Cliente:</strong> {{ $pedido->ClienteNombre }}</p>
    <p><strong>Fecha del pedido:</strong> {{ $pedido->FechaPedido->format('d/m/Y') }}</p>
    <p><strong>Fecha de entrega:</strong> {{ $pedido->FechaEntrega->format('d/m/Y') }}</p>
    <p><strong>Observaciones:</strong> {{ $pedido->Observaciones ?: '—' }}</p>
    <div class="acciones" style="margin-top:18px">
        <a class="btn gris" href="{{ route('pedidos.index') }}">Volver</a>
        <a class="btn" href="{{ route('pedidos.edit', $pedido->Id_Pedido) }}">Editar</a>
    </div>
</div>
@endsection