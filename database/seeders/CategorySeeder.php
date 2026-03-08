<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Popular', 'slug' => 'popular'],
            ['name' => 'Fiction', 'slug' => 'fiction'],
            ['name' => 'Nonfiction', 'slug' => 'nonfiction'],
            ['name' => 'Adventure', 'slug' => 'adventure'],
            ['name' => 'Kids', 'slug' => 'kids'],
        ];

        foreach ($categories as $category) {
            \App\Models\Category::updateOrCreate(['slug' => $category['slug']], $category);
        }
    }
}
