<?php

namespace Database\Seeders;

use App\Models\LearningEnvironment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LearningEnvironmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       LearningEnvironment::insert([
            ['name' => 'Aula 212', 'capacity' => 30, 'area_mt2' => 30, 'floor' => 2, 'inventory' => 'SIN INVENTARIO', 'type_id' => 1, 'location_id' => 1, 'status' => 'ACTIVO'],
            ['name' => 'Aula 103', 'capacity' => 20, 'area_mt2' => 22, 'floor' => 1, 'inventory' => '1 Televisor, 1 Computadora, 20 Sillas', 'type_id' => 1, 'location_id' => 1, 'status' => 'INACTIVO'],
            ['name' => 'Aula 210', 'capacity' => 15, 'area_mt2' => 20, 'floor' => 2, 'inventory' => '1 Tablero, 10 Mesas, 20 Sillas', 'type_id' => 1, 'location_id' => 1, 'status' => 'ACTIVO']
        ]);
    }
    
}

