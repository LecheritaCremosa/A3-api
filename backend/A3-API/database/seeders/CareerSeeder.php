<?php

namespace Database\Seeders;

use App\Models\Career;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Career::insert([
            ['name' => 'PROGRAMACIÓN DE SOFTWARE', 'type' => 'TECNICO'],
            ['name' => 'ANALISIS Y DESARROLLO DE SOFTWARE', 'type' => 'TECNOLOGO'],
            ['name' => 'APOYO ADMINISTRATIVO EN SALUD', 'type' => 'TECNICO'],
            ['name' => 'GESTIÓN DOCUMENTAL', 'type' => 'TECNOLOGO']
        ]);
    }
}
