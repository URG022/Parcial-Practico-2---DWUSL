<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    public function run(): void
    {
        $clientes = [];
        for ($i = 1; $i <= 12; $i++) {
            $clientes[] = [
                'Nombre' => "Cliente{$i}",
                'Apellido' => "Apellido{$i}",
                'Fecha_Nac' => now()->subYears(20 + $i)->format('Y-m-d H:i:s'),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        DB::table('clientes')->insert($clientes);
    }
}