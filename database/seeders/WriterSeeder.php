<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Writer;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $name = [
            'Raka Putra Wicaksono',
            'Abi Firmansyah',
            'Bia Mecca Annisa'
        ];

        $specialist = [
            'Interactive Multimedia Specialist',
            'Software Engineering Specialist',
            'Data Science Specialist'	
        ];

        for ($i=0; $i < 3 ; $i++) { 
            Writer::create([
                'name' => $name[$i],
                'image_link' => $i+1,
                'specialist' => $specialist[$i]
            ]);
        }
    }
}
