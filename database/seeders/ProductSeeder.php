<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $electronics = Category::where('name', 'Electronics')->first();
        $clothing = Category::where('name', 'Clothing')->first();
        $books = Category::where('name', 'Books')->first();

        Product::create([
            'name' => 'Smartphone',
            'description' => 'Latest model smartphone with great features',
            'price' => 499.99,
            'category_id' => $electronics->id
        ]);

        Product::create([
            'name' => 'Jeans',
            'description' => 'Comfortable denim jeans',
            'price' => 59.99,
            'category_id' => $clothing->id
        ]);

        Product::create([
            'name' => 'Novel',
            'description' => 'Fictional novel with an intriguing plot',
            'price' => 19.99,
            'category_id' => $books->id
        ]);

    }
}
