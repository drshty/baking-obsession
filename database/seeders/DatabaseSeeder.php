<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Users;
use App\Models\Category;
use App\Models\Product;
use App\Models\City;
use App\Models\Province;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $categories = Category::factory()->count(5)->create();

        $categories->each(function ($category) {
            $products = Product::factory()->count(5)->create();

            $products->each(function ($product) use ($category) {
                $product->categories()->attach($category->id);
            });
        });

        $provinces = Province::factory()->count(10)->create();

        $provinces->each(function ($province) {
            $cities = City::factory()->count(2)->create();

            $cities->each(function ($city) use ($province) {
                $city->provinces()->attach($province->id);
            });
        });
        
        Users::factory()->count(10)->create();
    }
}
