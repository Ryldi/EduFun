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

        foreach ($name as $name) {
            Writer::create([
                'name' => $name
            ]);
        }
    }
}
