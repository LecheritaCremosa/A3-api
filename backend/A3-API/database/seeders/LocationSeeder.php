<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Location::insert([
            ['name' => 'SAGRADO CORAZÓN', 'address' => 'Cra 25 # 24-47', 'status' => 'ACTIVO'],
            ['name' => 'COLEGIO SALESIANOS', 'address' => 'Cl. 34 # Cra 26', 'status' => 'ACTIVO'],
            ['name' => 'CLEM', 'address' => 'Km 2 vía Tuluá - Buga', 'status' => 'INACTIVO']
        ]);
    }
}
