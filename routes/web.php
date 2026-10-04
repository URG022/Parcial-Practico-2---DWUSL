<?php

use App\Http\Controllers\ArticuloController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ClienteController;


// ===== Ejercicio 5: Inicio =====
Route::get('/', function () {
    $grupo = "Grupo Número 4";
    $integrantes = [
        ['nombre' => 'Diego Enrique', 'apellido' => 'Carías Hernández'],
        ['nombre' => 'Ulises', 'apellido' => 'Rivera Guillén'],
        ['nombre' => 'Allison Andrea', 'apellido' => 'Servano Pacheco'],
        ['nombre' => 'Liliana Sarai', 'apellido' => 'Villalta Sosa'],

    ];

    return view('inicio', compact('grupo', 'integrantes'));
});


// ===== Ejercicio 6: CRUD Pedido =====
Route::resource('pedidos', PedidoController::class);

// ===== Ejercicio 7: CRUD Cliente =====
Route::resource('clientes', ClienteController::class);

// ===== Ejercicio 8: CRUD Arituclos =====
Route::resource('articulos', ArticuloController::class);
