<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidoController;

// ===== Ejercicio 5: Inicio =====
Route::get('/', function () {
    return view('welcome'); 
});

// ===== Ejercicio 6: CRUD Pedido =====
Route::resource('pedidos', PedidoController::class);
