<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(3)->create();
        Category::create([
            'name' => 'Front-End Website',
            'slug' => 'front-end-Website',
            'color' => 'red'
        ]);

        Category::create([
            'name' => 'Design Website',
            'slug' => 'design-website',
            'color' => 'blue'
        ]);

        Category::create([
            'name' => 'Data Analyst',
            'slug' => 'data-analyst',
            'color' => 'yellow'
        ]);
    }
}
