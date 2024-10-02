<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        
        $this->call(class: CstateSeeder::class);
        $this->call(ProductosSeeder::class);
        
    }
}