<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $name = [
            'Software Engineering',
            'Interactive Multimedia'
        ];

        for ($i=0; $i < 2 ; $i++) { 
            Category::create([
                'name' => $name[$i],
            ]);
        }
    }
}
