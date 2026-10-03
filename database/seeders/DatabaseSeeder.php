<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            ClienteSeeder::class,
            ArticuloSeeder::class,
            PedidoSeeder::class,
            DetallePedidoSeeder::class,
        ]);
    }
}