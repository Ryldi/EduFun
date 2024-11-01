<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;
use Faker\Factory as Faker;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $name = [
            'Pattern Software Design',
            'Agile Software Development',
            'Code Reengineering',
            'Human and Computer Interaction',
            'User Experience',
            'User Experience for Digital Immersive Technology'
        ];

        for ($i=0; $i < 6; $i++) { 
            Course::create([
                'category_id' => $i < 3 ? 1 : 2,
                'writer_id' => $i < 3 ? 2 : 1,
                'name' => $name[$i],
                'description' => $faker->paragraph(rand(5, 7)) . "\n\n" . $faker->paragraph(rand(6, 8)),
                'image_link' => $i+1
            ]);
        }
    }
}
