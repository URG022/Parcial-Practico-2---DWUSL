@extends('layouts.app')
@section('titulo', 'Editar pedido')
@section('contenido')
<div class="card">
    <h2>Editar pedido #{{ $pedido->Id_Pedido }}</h2>
    <form method="POST" action="{{ route('pedidos.update', $pedido->Id_Pedido) }}">
        @csrf @method('PUT')
        @include('pedidos._form')
    </form>
</div>
@endsection