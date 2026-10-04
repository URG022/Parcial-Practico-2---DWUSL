@extends('layouts.app')
@section('titulo', 'Nuevo Cliente')

@section('contenido')
<div class="card" style="padding: 24px; max-width: 800px;">
    <h2 style="margin-top: 0; margin-bottom: 24px;">Nuevo cliente</h2>
    
    <form method="POST" action="{{ route('clientes.store') }}">
        @csrf
        <!-- Formulario reutilizable -->
        @include('clientes._form')
    </form>
</div>
@endsection