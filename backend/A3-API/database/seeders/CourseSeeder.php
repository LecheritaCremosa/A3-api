<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::insert([
            ['code' => '2771230', 'shift' => 'DIURNA', 'career_id' => 1, 'initial_date' => '2023/08/15', 'final_date' => '2024/10/4', 'status' => 'LECTIVA'],
            ['code' => '2339817', 'shift' => 'MIXTA', 'career_id' => 2, 'initial_date' => '2022/01/15', 'final_date' => '2023/06/15', 'status' => 'PRODUCTIVA'],
            ['code' => '1838890', 'shift' => 'NOCTURNA', 'career_id' => 3, 'initial_date' => '2024/01/20', 'final_date' => '2025/06/20', 'status' => 'INDUCCIÓN']
        ]);
    }
}
