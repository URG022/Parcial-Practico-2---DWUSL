@extends('layouts.app')
@section('titulo', 'Editar Cliente')

@section('contenido')
<div class="card" style="padding: 24px; max-width: 800px;">
    <h2 style="margin-top: 0; margin-bottom: 24px;">Editar cliente #{{ $cliente->Id_Cliente }}</h2>
    
    <form method="POST" action="{{ route('clientes.update', $cliente->Id_Cliente) }}">
        @csrf
        @method('PUT')
        <!-- Formulario reutilizable -->
        @include('clientes._form')
    </form>
</div>
@endsection