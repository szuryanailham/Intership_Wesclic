<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['name' => 'Electronics', 'description' => 'All kinds of electronic items']);
        Category::create(['name' => 'Clothing', 'description' => 'Fashionable clothing items']);
        Category::create(['name' => 'Books', 'description' => 'Variety of books and literature']);
    }
}
