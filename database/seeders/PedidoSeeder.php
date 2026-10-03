<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PedidoSeeder extends Seeder
{
    public function run(): void
    {
        $pedidos = [];
        for ($i = 1; $i <= 12; $i++) {
            $pedidos[] = [
                'FechaPedido' => now()->subDays($i),
                'FechaEntrega' => now()->addDays($i),
                'Observaciones' => "Observación sobre el pedido {$i}",
                'Id_Cliente' => $i,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        DB::table('pedidos')->insert($pedidos);
    }
}