<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetallePedidoSeeder extends Seeder
{
    public function run(): void
    {
        $detalles = [];
        for ($i = 1; $i <= 12; $i++) {
            $detalles[] = [
                'Id_Articulo' => $i,
                'Id_Pedido' => $i,
                'Cantidad' => rand(1, 5),
                'Descuento' => rand(0, 15) / 100,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        DB::table('detalle_pedidos')->insert($detalles);
    }
}