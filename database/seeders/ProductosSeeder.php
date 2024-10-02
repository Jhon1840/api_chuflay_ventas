<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductosSeeder extends Seeder
{
    public function run()
    {
        DB::table('productos')->insert([
            [
                'nombre' => 'Álbum "Rock en Fuego"',
                'codigo' => 'ALB001',
                'idState' => 1,
                'fecha' => Carbon::now(),
                'precio' => 15.99,
                'costo' => 10.00,
                'existencia' => 100,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Camiseta Oficial "Tour 2024"',
                'codigo' => 'CAM002',
                'idState' => 1,
                'fecha' => Carbon::now(),
                'precio' => 19.99,
                'costo' => 8.00,
                'existencia' => 50,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Póster Edición Limitada',
                'codigo' => 'POS003',
                'idState' => 1,
                'fecha' => Carbon::now(),
                'precio' => 9.99,
                'costo' => 3.50,
                'existencia' => 30,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Vinilo "Edición Coleccionista"',
                'codigo' => 'VIN004',
                'idState' => 1,
                'fecha' => Carbon::now(),
                'precio' => 25.00,
                'costo' => 15.00,
                'existencia' => 20,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Gorra Oficial',
                'codigo' => 'GOR005',
                'idState' => 1,
                'fecha' => Carbon::now(),
                'precio' => 12.99,
                'costo' => 5.00,
                'existencia' => 60,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}