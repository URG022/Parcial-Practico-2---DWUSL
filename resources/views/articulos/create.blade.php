@extends('layouts.app')
@section('titulo', 'Nuevo Articulo')

@section('contenido')
    <div class="card" style="padding: 24px; max-width: 800px;">
        <h2 style="margin-top: 0; margin-bottom: 24px;">Nuevo Articulo</h2>

        <form method="POST" action="{{ route('articulos.store') }}">
            @csrf
            <!-- Formulario reutilizable -->
            @include('articulos._form')
        </form>
    </div>
@endsection
