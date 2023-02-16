<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\Typology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory()->count(50)->make()->each(function ($product) {
            // add typology to product
            // one to many
            $typology = Typology::inRandomOrder()->first();
            $product->typology()->associate($typology);

            $product->save();

            // add categories to product
            // many to many
            $categories = Category::inRandomOrder()->limit(rand(1, 5))->get();
            $product->categories()->attach($categories);
        });
    }
}
