<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticuloSeeder extends Seeder
{
    public function run(): void
    {
        $articulos = [];
        for ($i = 1; $i <= 12; $i++) {
            $articulos[] = [
                'Nombre' => "Artículo {$i}",
                'Descripcion' => "Descripción del artículo {$i}",
                'CantInventario' => rand(10, 100),
                'Precio' => rand(10, 500) + 0.99,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        DB::table('articulos')->insert($articulos);
    }
}