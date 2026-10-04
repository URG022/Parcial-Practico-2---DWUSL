@extends('layouts.app')
@section('titulo', 'Detalle del Articulo')

@section('contenido')
    <div class="card" style="padding: 30px; max-width: 800px;">
        <h2 style="margin-top: 0; margin-bottom: 24px; font-size: 1.8em; color: #1f2937;">
            Articulo #{{ $articulo->Id_Articulo }}
        </h2>

        <div style="margin-bottom: 24px; font-size: 1.1em; color: #374151;">
            <p style="margin: 12px 0;">
                <strong>Nombre:</strong> {{ $articulo->Nombre }}
            </p>
            <p style="margin: 12px 0;">
                <strong>Descripcion:</strong> {{ $articulo->Descripcion }}
            </p>
            <p style="margin: 12px 0;">
                <strong>Cantidad Inventario:</strong> {{ $articulo->CantInventario }}
            </p>
            <p style="margin: 12px 0;">
                <strong>Precio:</strong> $ {{ $articulo->Precio }}
            </p>
        </div>

        <div style="display: flex; gap: 10px;">
            <a href="{{ route('articulos.index') }}" class="btn gris" style="text-decoration: none; display: inline-block;">
                Volver
            </a>
            <a href="{{ route('articulos.edit', $articulo->Id_Articulo) }}" class="btn"
                style="background-color: #2563eb; color: white; text-decoration: none; display: inline-block; border: none;">
                Editar
            </a>
        </div>
    </div>
@endsection
