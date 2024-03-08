<?php

namespace Database\Seeders;

use App\Models\EnvironmentType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnvironmentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EnvironmentType::insert([
            ['description' => 'AULA'],
            ['description' => 'TALLER'],
            ['description' => 'LABORATORIO'],
            ['description' => 'AULA VIRTUAL'],
            ['description' => 'AUDITORIO'],
            ['description' => 'BIBLIOTECA'],
            ['description' => 'CAMPO DEPORTIVO']
        ]);
    }
}
