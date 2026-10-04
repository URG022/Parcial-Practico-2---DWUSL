@extends('layouts.app')
@section('titulo', 'Detalle del Cliente')

@section('contenido')
<div class="card" style="padding: 30px; max-width: 800px;">
    <h2 style="margin-top: 0; margin-bottom: 24px; font-size: 1.8em; color: #1f2937;">
        Cliente #{{ $cliente->Id_Cliente }}
    </h2>
    
    <div style="margin-bottom: 24px; font-size: 1.1em; color: #374151;">
        <p style="margin: 12px 0;">
            <strong>Nombre:</strong> {{ $cliente->Nombre }}
        </p>
        <p style="margin: 12px 0;">
            <strong>Apellido:</strong> {{ $cliente->Apellido }}
        </p>
        <p style="margin: 12px 0;">
            <strong>Fecha de nacimiento:</strong> {{ date('d/m/Y', strtotime($cliente->Fecha_Nac)) }}
        </p>
    </div>

    <div style="display: flex; gap: 10px;">
        <a href="{{ route('clientes.index') }}" class="btn gris" style="text-decoration: none; display: inline-block;">
            Volver
        </a>
        <a href="{{ route('clientes.edit', $cliente->Id_Cliente) }}" class="btn" style="background-color: #2563eb; color: white; text-decoration: none; display: inline-block; border: none;">
            Editar
        </a>
    </div>
</div>
@endsection