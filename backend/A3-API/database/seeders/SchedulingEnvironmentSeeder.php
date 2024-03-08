<?php

namespace Database\Seeders;

use App\Models\SchedulingEnvironment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchedulingEnvironmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SchedulingEnvironment::insert([
            
        
        ['course_id' => 1, 'instructor_id' => 1, 'date_scheduling' => '2022-11-01', 'initial_hour' => '10:00:00', 'final_hour' => '6:00:00', 'environment_id' => 1],
        ['course_id' => 2, 'instructor_id' => 2, 'date_scheduling' => '2023-11-01', 'initial_hour' => '11:00:00', 'final_hour' => '7:00:00', 'environment_id' => 1],
        ['course_id' => 3, 'instructor_id' => 3, 'date_scheduling' => '2024-11-01', 'initial_hour' => '9:00:00', 'final_hour' => '5:00:00', 'environment_id' => 1]
        ]); 
    }
}
