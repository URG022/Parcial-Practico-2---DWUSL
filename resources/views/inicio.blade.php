@extends('layouts.app')
@section('titulo', 'Inicio')

@section('contenido')
<div class="card">
    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:12px">
        <h2 style="margin:0">{{ $grupo }}</h2>
        <span class="btn verde" style="cursor:default">Examen Práctico II</span>
    </div>
    
    <div style="margin-bottom: 16px;">
        <p style="margin:0"><strong>Módulo:</strong> Desarrollo Web Usando Software Libre</p>
        <p style="margin:0">Integrantes del equipo de trabajo:</p>
    </div>

    <table>
        <thead>
            <tr>
                <th>Nombres</th>
                <th>Apellidos</th>
            </tr>
        </thead>
        <tbody>
        @forelse ($integrantes as $i)
            <tr>
                <td>{{ $i['nombre'] }}</td>
                <td>{{ $i['apellido'] }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="2">No hay integrantes registrados.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>
@endsection