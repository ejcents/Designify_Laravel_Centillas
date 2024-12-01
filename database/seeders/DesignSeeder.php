<?php

namespace Database\Seeders;

use App\Models\Design;
use Illuminate\Database\Seeder;

class DesignSeeder extends Seeder
{
    public function run()
    {
        // Delete all existing records before seeding new data
        Design::truncate();

        // Manually inserting records without the factory
        Design::create([
            'name' => 'Custom Design 1',
            'description' => 'Description for the first custom design.',
            'image_url' => 'https://example.com/image1.jpg',
        ]);

        Design::create([
            'name' => 'Custom Design 2',
            'description' => 'Description for the second custom design.',
            'image_url' => 'https://example.com/image2.jpg',
        ]);
    }
}


