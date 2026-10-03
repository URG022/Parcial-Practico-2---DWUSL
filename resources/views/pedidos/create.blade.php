@extends('layouts.app')
@section('titulo', 'Nuevo pedido')
@section('contenido')
<div class="card">
    <h2>Nuevo pedido</h2>
    <form method="POST" action="{{ route('pedidos.store') }}">
        @csrf
        @include('pedidos._form')
    </form>
</div>
@endsection