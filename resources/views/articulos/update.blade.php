@extends('layouts.app')
@section('titulo', 'Editar Articulo')

@section('contenido')
<div class="card" style="padding: 24px; max-width: 800px;">
    <h2 style="margin-top: 0; margin-bottom: 24px;">Editar Articulo #{{ $articulo->Id_Articulo }}</h2>
    
    <form method="POST" action="{{ route('articulos.update', $articulo->Id_Articulo) }}">
        @csrf
        @method('PUT')
        <!-- Formulario reutilizable -->
        @include('articulos._form')
    </form>
</div>
@endsection